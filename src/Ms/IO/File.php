<?php
/**
 * Mangos File Class
 * 
 * @package	      Mangos Framework
 * @author            Mangos Team Dev
 * @copyright         Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
 */

namespace Ms\IO;

class File 
{
    /*
     * append
     * copy
     * create
     * delete
     * exists
     * getCreationTime
     * move
     * read
     * write
     * rename
     * 
     * 
     * 
     * 
     * 
     */
    
    public static function create($filename)
    {
        return fopen($filename, 'w+');
    }
    
    public static function readAllText($filename)
    {
        file_put_contents($filename);
    }
    
    public static function append($filename, $content)
    {
        file_put_contents($filename, $content . '\r\n', FILE_APPEND);
    }
    
    public static function exist($filename)
    {
        file_exists($filename);
    }
    
    public static function delete($filename)
    {
        unlink($filename);
    }
}

?>
