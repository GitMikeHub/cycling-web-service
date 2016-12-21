<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MichaelsAPI
 *
 * @author Michael Coleman
 * @date 2016/03/01
 */

require_once 'cAPI.php';

class MichaelsAPI extends cAPI  {
    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

        /*
        // Abstracted out for example
        $APIKey = new Models\APIKey();
        $User = new Models\User();

        if (!array_key_exists('apiKey', $this->request)) {
            throw new Exception('No API Key provided');
        } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
            throw new Exception('Invalid API Key');
        } else if (array_key_exists('token', $this->request) &&
             !$User->get('token', $this->request['token'])) {

            throw new Exception('Invalid User Token');
        }
        */
        $this->User = array('name'=>'Michael');
    }

    /**
     * strrev Endpoint
     */          
     protected function strrev(){
         if ($this->method == 'GET') {
            return ['original' => $this->verb, 'reversed' => strrev($this->verb)];
        } else {
            return "Only accepts GET requests";
        }
     }
}
