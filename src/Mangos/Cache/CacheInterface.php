<?php
/**
* Mangos CacheInterface Interface
*
* @package	      Mangos Core
* @author             Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://mangos.fr/)
*
*/

namespace Mangos\Cache;

interface CacheInterface 
{
    public static function add($id, $data);
    public static function clear();
    public static function get($id);
    public static function remove($id);
}

?>
