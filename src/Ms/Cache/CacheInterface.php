<?php
/**
* Mangos CacheInterface Interface
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Cache;

interface CacheInterface 
{
    public static function add($id, $data);
    public static function clear();
    public static function get($id);
    public static function remove($id);
}

?>
