<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home_model extends CI_Model
{
	
	function __construct()
    {
        parent::__construct();
    }
	
    public function getPantryName($pantry_id)
    {
       $query = $this->db->query("CALL getPantryName($pantry_id)",FALSE);
       
       if ($query->num_rows() > 0)
       {
            $row = $query->row(); 
            return $row->name;
            
       }else{
            return 'noname';
       }
    } 
}