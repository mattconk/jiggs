<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Contact Controller
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version 07/2013
 * @package Jiggs App
 */

/**
 * Contact Class
 * 
 * Controls the Contact Page
 */
class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {   
        $data = array(
            'view'          => 'contact_form',
            'title'         => 'Contact',
            'breadcrumb'    => TRUE,
        );
        
        $this->load->view('template', $data);
    }
    
    
}