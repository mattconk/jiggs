<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * updatedb Controller
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */

/**
 * Updates the DB - But only while ENVIRONMENT is set to Development 
 * 
 */
class UpdateDB extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

        if (defined('ENVIRONMENT'))
        {
            switch (ENVIRONMENT)
            {
                case 'development':
                    break;
                case 'production':
                    echo index_page();                    
                    break;
                default:
                    echo index_page();
            }
        }
        
        $this->load->model('updatedb_model');
        
    }
    
    /**
     * Index for updating the DB.  Displays a list of all entries
     */
    public function index() 
    {
        $data = array(
            'view'  => 'updatedb',
            'title' => 'Update DB',
            'breadcrumb'    => TRUE,
        );
        
        $data['photos'] = $this->updatedb_model->get_all();
        $this->load->view('template', $data);
    }
    
    
    /**
     * edit
     * 
     * @param int $id Page number to be edited
     */
    public function edit($id = FALSE)
    {

    	if (!isset($id) or !is_numeric($id))
    	{
    		$this->index();	
    	}
    	
        $data = array(
            'view'          => 'edit',
            'title'         => 'Edit Page '.$id,
            'breadcrumb'    => TRUE,            
        );
        
        $this->load->helper('form');
        $data['photos'] = $this->updatedb_model->get_one($id);
        
        $this->load->view('template', $data);
    }

    /**
     * update
     */
    public function update()
    {
        $this->updatedb_model->update_page();
		$this->index();
    }
    
    
}

