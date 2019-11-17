<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct(){


        //obligatoire
        parent::__construct();




    }

	public function index()
	{
		        
			// Ma clé privée
		
	    
        $message = $this->input->post('message');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');

        $this->form_validation->set_rules('nom', '', 'required');
        $this->form_validation->set_rules('prenom', '', 'required');
        $this->form_validation->set_rules('email', '', 'required');
        $this->form_validation->set_rules('message', '', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Contacter moi grace au formulaire sur cette page';
        $data['title']= 'Contact';

	    $this->load->view('include/header', $data);
	    $this->load->view('include/header');
		$this->load->view('Contact');
		$this->load->view('include/footer');
        } else {
	$secret = "6Lfyt2MUAAAAANnk0LJmEhTd45vPJHbd1m3ON8Gt";
			// Paramètre renvoyé par le recaptcha
			$response = $_POST['g-recaptcha-response'];
			// On récupère l'IP de l'utilisateur
			$remoteip = $_SERVER['REMOTE_ADDR'];

			$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret. "&response=" . $response. "&remoteip=" . $remoteip ;


	$decode = json_decode(file_get_contents($api_url), true);
	if ($decode['success'] == true) {

		// C'est un humain
				$this->email->from('contact@yassandco.fr', 'CONTACT yassandco');
				$this->email->to('contact@yassandco.fr');

				$this->email->subject($nom." ".$prenom);
				$this->email->message("".$nom." <br>".$prenom."<br> ".$email."<br> ".$message);	
                $this->email->set_mailtype("html");
				$this->email->send();
				 $data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Contacter moi grace au formulaire sur cette page';
	        $data['title']= 'Contact';
			$data['success'] = 'Et voilà ! Votre message a été envoyé!';
	        $this->session->set_flashdata('msg', $data['success']);
	        redirect('Contact');
	 	   $this->load->view('include/header', $data);
			$this->load->view('Contact', $data);
			$this->load->view('include/footer');
	}
	
	else {
		      redirect('http://www.google.com'); 	}
		

           
        }

	}


}


