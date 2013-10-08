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
    
    public function create($filename)
    {
        return fopen($filename, 'w+');
    }
    
    public function append($filename, $content)
    {
        file_put_contents($filename, $content, FILE_APPEND);
    }
    
    public function delete($filename)
    {
        unlink($filename);
    }
}

?>
