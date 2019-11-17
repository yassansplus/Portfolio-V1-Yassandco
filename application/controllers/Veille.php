<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 19/10/2017
 * Time: 09:06
 */

class Veille extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('VeilleModel');
    }

    public function Juridique(){
        $data['juridiques'] = $this->VeilleModel->getVeilleJuridique();
        $data['metadescription'] = 'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici toutes les articles en lien avec la veille juridique';
        $data['title']= 'Veille Juridique';

        $this->load->view('include/header', $data);
        $this->load->view('juridique', $data);
        $this->load->view('include/footer');



    }

    public function Technologique(){
        $data['technologiques']= $this->VeilleModel->getVeilleTechnologique();
        $data['metadescription'] = 
      'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici toutes les articles en lien avec la veille technologique';

        $data['title']= 'Veille Technologique';

        $this->load->view('include/header', $data);
        $this->load->view('technologique', $data);
        $this->load->view('include/footer');

    }

    public function Electronique(){
        $data['electroniques']= $this->VeilleModel->getVeilleElectronique();
        $data['metadescription'] = 
      'Ici on retrouvera toutes les recherches que j\'ai effectué en éléctronique et notamment en systeme de communication';

        $data['title']= 'Veille electronique';

        $this->load->view('include/header', $data);
        $this->load->view('electronique', $data);
        $this->load->view('include/footer');

    }
    public function idtech($id= null){

        $id =$this->uri->segment(3);



        $data['technologie']= $this->VeilleModel->getVeilleTechnoById($id);

           $data['metadescription'] = 
      'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici toutes un article en lien avec la veille technologique';

        $data['title']= 'Veille Technologique';
        $this->load->view('include/header',$data);
        $this->load->view('veille', $data);
        $this->load->view('include/footer');

    }

    public function idjury($id= null){

        $id= $this->uri->segment(3);




        $data['technologie']= $this->VeilleModel->getVeilleJuriById($id);
     $data['metadescription'] = 
      'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici toutes un article en lien avec la veille juridique';

        $data['title']= 'Veille Juridique';
        $this->load->view('include/header',$data);
        $this->load->view('veille', $data);
        $this->load->view('include/footer');

    }

    public function idelectronique($id= null){

        $id= $this->uri->segment(3);




        $data['technologie']= $this->VeilleModel->getVeilleelectroniqueById($id);
     $data['metadescription'] =
      'Ce site est mon portfolio  depuis mon BTS SIO jusqu\à la fin de mes etudes sur cette page Vous retrouverez ici toutes un article en lien avec la veille juridique';

        $data['title']= 'Veille Juridique';
        $this->load->view('include/header',$data);
        $this->load->view('veille', $data);
        $this->load->view('include/footer');

    }

    public function TestIt(){
       $message= "Si vous voyez ce texte veuilliez ouvrir cette page avec SAFARI/ Chrome/ Internet";
            $ipAdress = $_SERVER['REMOTE_ADDR'];
            $this->load->model('user');
            $retour = $this->user->getIP($ipAdress);
           
           //add the header here
        header('Content-Type: application/json');
        echo json_encode( $message );

    }
}
