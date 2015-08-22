<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * updatedb Model
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */

/**
 * Description of updatedb
 */
class Updatedb_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * get_all
     * 
     * Gets All of the data from the pages table
     * 
     * @return array
     */
    public function get_all()
    {
        $this->db->select();
        $this->db->from('pages');
        $this->db->order_by('page', 'ASC');
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    /**
     * get_on
     * 
     * Gets the data on one photo
     * 
     * @param int [$id] the number of the photo information to return
     * @return array
     */
    public function get_one($id)
    {
        $this->db->select();
        $this->db->from('pages');
        $this->db->where('auto', $id);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    /**
     * insert_all
     * 
     * Used to insert all of th pages to the DB.  Probably won't use this again.
     * 
     * @param int $page Page number to be inserted
     * @param varchar $page_title Title of page to be inserted
     * @param int $chapter Chapter of page to be inserted
     * @param varchar $filename_adjusted File name of page to be inserted
     */
    public function insert_all($page, $page_title, $chapter, $filename_adjusted)
    {
        $data = array(
            'page'              => $page,
            'page_title'        => $page_title,
            'chapter'           => $chapter,
            'filename_adjusted' => $filename_adjusted,
        );
        
        $this->db->insert('pages', $data);
    }
    
    /**
     * update_pages
     * 
     * Updated the DB with new information.  Gets data from Post
     */
    public function update_page()
    {
        $data = array(
            'page'              => $_POST['page'],
            'page_title'        => $_POST['page_title'],
            'chapter'           => $_POST['chapter'],
            'filename_adjusted' => $_POST['filename_adjusted'],
        );
        
        $this->db->where('page', $_POST['page']);
        $this->db->update('pages', $data);
    }

};

