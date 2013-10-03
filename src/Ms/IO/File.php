<?php

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
     * 
     */
    
    public function create($filename)
    {
        return fopen($filename, 'w+');
    }
}

?>
