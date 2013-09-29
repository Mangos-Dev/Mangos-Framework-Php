<?php
/**
* Mangos Encryption Class
*
* @package	      Mangos Core
* @author             Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://mangos.fr/)
*/

namespace Mangos\CoreBundle\Security;

//use Mangos\CoreBundle\Config\Config as Conf;

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
        $this->token = $token;  //Conf::$configSymfony['parameters']['secret'];
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
