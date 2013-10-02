<?php
/**
* Mangos Encryption Class
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Security;

class Encryption
{    
    /**
     * Reference to the token encryption
     * 
     * @var string 
     */
    private $token = '';
    
    /**
     * Constructor Encryption Class
     * 
     * @return void
     */
    public function __construct($token) 
    {
        $this->token = $token;
    }
        
    /**
     * Encrypt using Mcrypt
     * 
     * @param  string  $data
     * @return string 
     */
    public function encode($data) 
    {
        return mcrypt_encrypt(MCRYPT_BLOWFISH, $this->token, utf8_encode($data), MCRYPT_MODE_ECB, $this->getIv());
    }
    
    /**
     * Decrypt using Mcrypt
     * 
     * @param  string $data
     * @return string
     */
    public function decode($data) 
    {
        return  mcrypt_decrypt(MCRYPT_BLOWFISH, $this->token, $data, MCRYPT_MODE_ECB, $this->getIv());
    }
    
    /**
     * Creates an initialization vector (IV)
     * 
     * @return mixed initialization vector
     */
    private function getIv() 
    {
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        return mcrypt_create_iv($iv_size, MCRYPT_RAND);
    }
}

?>
