<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function __construct(){


        //obligatoire
        parent::__construct();




    }

	public function index()
	{
	    $this->load->model('welcome');
        $data['realisations'] = $this->welcome->getLastRea();
        $data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page on peut voir mes derniers projet et une breve presentation du BTS SIO et de moi';
        $data['title']= 'Acceuil';

	    $this->load->view('include/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('include/footer');
	}
	public function ml(){
		$this->load->view('mentionlegale');
	}


}


