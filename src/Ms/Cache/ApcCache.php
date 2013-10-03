<?php
/**
* Mangos Encryption Class
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Cache;

/**
 * Class Cache with Apc
 */
class ApcCache implements CacheInterface
{
    /**
     * Save Item Cache
     * 
     * @param  string  $id
     * @param  mixed   $data
     * @return bool    true on success / false on failure
     */
    public static function add($id, $data) 
    {
        return apc_store($id, $data, 0);
    }
        
    /**
     * Clear the cache
     * 
     * @return bool true on success / false on failure
     */
    public static function clear() 
    {
        return apc_clear_cache('user');
    }
     
    /**
     * Get Item Cache
     * 
     * @param   string $id
     * @return  mixed  data
     */
    public static function get($id) 
    {
        $success = false;
        $data = apc_fetch($id, $success);

        return ($success === true) ? $data : false;
    }
    
    /**
     * Delete Item Cache
     * 
     * @param   string  $id
     * @return  bool    true on success / false on failure
     */
    public static function remove($id) 
    {
        return apc_delete($id);
    }    
}

?>