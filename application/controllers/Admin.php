<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {


        //obligatoire
        parent::__construct();

        $this->load->helper('assets');
        $this->load->helper('url');
        $this->load->helper('email');
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->library('user_agent');
        $this->load->database();


    }

    public function index()
    {



        $this->form_validation->set_rules('identifiant', '', 'required');
        $this->form_validation->set_rules('mdp', '', 'required');
        $valid =  $this->form_validation->run() ;



        if ($valid == FALSE  )
        {




            $this->session->sess_destroy();

            $this->load->view('admin');
        }
        else
        {
            $username= $this->input->post('identifiant');
            $mdp= $this->input->post('mdp');
            $this->load->model('user');
            $retour = $this->user->log($username, $mdp);

            if ($retour != 1){
                $valid = false;
                $this->load->view('admin');
            }else {
                $this->session->set_userdata('username', $username);

                redirect('/gestion/accueil');
            }
        }



    }



    public function isprof(){

         $this->form_validation->set_rules('identifiant', '', 'required');
        $this->form_validation->set_rules('mdp', '', 'required');
        $valid =  $this->form_validation->run() ;



        if ($valid == FALSE  )
        {




            $this->session->sess_destroy();

            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            $username= $this->input->post('identifiant');
            $mdp= $this->input->post('mdp');
            $ipAdress = $_SERVER['REMOTE_ADDR'];
            $this->load->model('user');
            $retour = $this->user->loguser($username, $mdp, $ipAdress);
           
            if ($retour != 1){
                $valid = false;
               redirect($_SERVER['HTTP_REFERER']);
            }else {
                $this->session->set_userdata('prof', $username);

                redirect($_SERVER['HTTP_REFERER']);
            }
        }




    }



}
