<?php
/**
* Mangos Int Class
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Primitive;

class Int 
{
    // Represents the largest possible value
    const maxValue = 2147483647;

    //  Represents the smallest possible value
    const minValue = -2147483648;
    
    private $value = 0;
    
    public function __construct($input)
    {
        if($input != null && is_int($input))
            $this->value = intval($input);
    }
    
    /*
     * 
     * ToString
     */
}

?>
