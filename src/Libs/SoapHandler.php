<?php

namespace ACore;

class SoapHandler {

    private static $instance=null;
    
    private $soap;
    
    /**
     * Singleton
     * @return Opts
     */
    public static function I() {
        if (!self::$instance) {
            self::$instance=new self();
        }
        
        return self::$instance;
    }
    
    public function __construct() {
        if (!sOpts()->acore_soap_host) {
            throw new Exception("Soap service is not configured, please use configure() function before!");
        }
        
        $this->soap = new \SoapClient(NULL, Array(
            'location' =>  'http://' . sOpts()->acore_soap_host . '/',
            'uri' => 'urn:TC',
            'style' => SOAP_RPC,
            'login' => sOpts()->acore_soap_user,
            'password' => sOpts()->acore_soap_pass,
            'trace' => 1,
            'keep_alive' => false //php 5.4 only
        ));
    }

    public function executeCommand($command) {
        try {
            $result = $this->soap->executeCommand(new \SoapParam($command, 'command'));
            return $result;
        } catch (\Exception $e) {
            return $e;
        }
    }
}