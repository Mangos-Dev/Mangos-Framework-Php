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
     */
    
    public static function create($filename)
    {
        return fopen($filename, 'w+');
    }
    
    public static function readAllText($filename)
    {
        return file_get_contents($filename);
    }
    
    public static function append($filename, $content)
    {
        if(!self::exist($filename))
            self::create($filename);
        
        file_put_contents($filename, $content . PHP_EOL, FILE_APPEND);
    }
    
    /**
     * Exit
     * 
     * @param type $filename
     * 
     * @return boolean
     */
    public static function exist($filename)
    {
        return file_exists($filename);
    }
    
    public static function delete($filename)
    {
        unlink($filename);
    }
}

?>
