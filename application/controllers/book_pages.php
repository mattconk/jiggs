<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pages Controller
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version 07/2013
 * @package Jiggs App
 */

/**
 * Pages Class
 */
class Book_Pages extends CI_Controller {
    
    /**
     * Index
     * 
     * Display Index Page - A list of all of the Pages of the Booklet
     */
    public function index()
    {
        $data = array(
            'view'          => 'book_pages',
            'title'         => 'Pages',
            'breadcrumb'    => TRUE,
        );
        
        $this->load->model('updatedb_model');
        $data['photos'] = $this->updatedb_model->get_all();
        $this->load->view('template', $data);
    }
    
    /**
     * high_rez_view
     * 
     * @param int [$id] number of photo to view
     */
    public function high_rez_view($id)
    {
        $data = array(
            'view'          => 'high_rez_view',
            'title'         => 'Page '.$id,
            'image'         => 'img/book_pages/scan'.$id.'.jpg',
            'id'            => $id,
            'breadcrumb'    => TRUE,
        );
        
        $this->load->model('updatedb_model');
        $data['photos'] = $this->updatedb_model->get_one($id);
        $this->load->view('template', $data);
    }
    
}
