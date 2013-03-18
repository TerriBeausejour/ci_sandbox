<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// This file name is home.php
// The class name for this file should be the same
//  filename, except it should be capitalized. 
 
class Home extends CI_Controller{
    
    var $today;
    function __construct(){
        // Note that there are (2) underscores (_)
        // To grab the class variable, (this) needs to be used
           parent::__construct();
        $this->today = date('d/m/Y');
		$this->load->model('Home_model');
    }
    
    function index(){
		

		 
        // Create an array with the information that we need to send.
        // First is the main content to display
        $data['main_content'] = 'home_view';
        // Next we send the date variable
        $data['today'] = $this->today;
		
        $pantry_id = 1;
        
        $data['pantry_name'] = $this->Home_model->getPantryName($pantry_id);
        $data['pantry_id'] = $pantry_id;
	        
        // Now that we have our information
        // We will load the template.
        // And send the array
        $this->load->view('includes/template', $data);
    }
}
?>