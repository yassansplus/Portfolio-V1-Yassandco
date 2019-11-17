<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 18/10/2017
 * Time: 22:17
 */

class Realisation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        $this->acceuil();
    }
    public function acceuil()
    {
        $this->load->model('article');
        $data['articles'] = $this->article->allRea();
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici tout les projet réalisé en solo';
        $data['title']= 'Réalisation';

        $this->load->view('include/header', $data);
        $this->load->view('realisation', $data);
        $this->load->view('include/footer');

    }

    public function id($parameter = null )
    {
        $parameter =$this->uri->segment(3);
        $this->load->model('article');
        $data['article'] = $this->article->getarticleDetail($parameter);

$data['articles'] = $this->article->allRea();
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici un des projet que j\'ai réalisé';
        $data['title']= 'Projet réalisé';

        $this->load->view('include/header', $data);
        $this->load->view('article', $data);
        $this->load->view('include/footer');
    }

}