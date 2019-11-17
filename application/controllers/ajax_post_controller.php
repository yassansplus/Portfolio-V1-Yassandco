<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax_post_controller extends CI_Controller {

    public function __construct(){


        //obligatoire
        parent::__construct();




    }

	public function deleterea()
	{
        $id_rea = $this->input->post('id');
       $test = []
        return json_encode($test);
	   }


}


