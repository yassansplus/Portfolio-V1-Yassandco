<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 19/10/2017
 * Time: 23:58
 */

class Epreuve extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function E6()
    {
        $this->load->model('article');
        $data['realisations']  = $this->article->getAllEpreuve('epreuvee6');

$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici les projet réalisé en Entreprise ainsi que les fiches E6';
        $data['title']= 'Epreuve E6';

        $this->load->view('include/header', $data);
        $this->load->view('epreuveE6', $data);
        $this->load->view('include/modal');
        $this->load->view('include/tabE6');
        $this->load->view('include/footer');


    }

    public function E4()
    {
        $this->load->model('article');
        $data['realisations']  = $this->article->getAllEpreuve('epreuvee4');
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici les projet réalisé en Formation ainsi que les fiches E4';
        $data['title']= 'Epreuve E4';

        $this->load->view('include/header', $data);
        $this->load->view('epreuveE4', $data);
        $this->load->view('include/modal');
        $this->load->view('include/footer');


    }


    public function idE4($id)
    {
        $id = $this->uri->segment(3);

        $this->load->model('article');
        $data['realisation']  = $this->article->getEpreuve('epreuvee4', $id);
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici un des projets réalisé en Formation ainsi que les fiches E4';
        $data['title']= 'Entreprise FischerProduction';

        $this->load->view('include/header', $data);  
        $this->load->view('idepreuve', $data);
        $this->load->view('include/footer');
    }

    public function idE6($id)
    {
        $id = $this->uri->segment(3);

        $this->load->model('article');
        $data['realisation']  = $this->article->getEpreuve('epreuvee6', $id);
$data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici un des  projets réalisé en Entreprise ainsi que les fiches E6';
        $data['title']= 'Projet E6';

        $this->load->view('include/header', $data);        $this->load->view('idepreuve', $data);
        $this->load->view('include/footer');
    }

}