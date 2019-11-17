<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 19/10/2017
 * Time: 08:41
 */

class Entreprise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
     
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici Une presentation de l\'entreprise ou je travail La FischerProduction';
        $data['title']= 'Entreprise FischerProduction';

        $this->load->view('include/header', $data);
        $this->load->view('entreprise');
        $this->load->view('include/footer');
    }

}