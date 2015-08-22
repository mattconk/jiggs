<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * index Controller
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */

/**
 * Main Home Page
 */
class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
      
    }
    
    /**
     * index
     */
    public function index()
    {   
        $data = array(
            'view'          => 'home',
            'breadcrumb'    => FALSE,
        );
        
        $this->load->view('index', $data);
    }

}

