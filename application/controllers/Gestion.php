<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 17/10/2017
 * Time: 22:26
 */

class Gestion extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();


        $this->load->database();
        $this->load->model('article');
        if (!isset($_SESSION['username'])) {
            redirect('/admin/index');
        }

    }

    public function index()
    {
        $this->accueil();
    }


    public function accueil()
    {


        $data['realisations'] = $this->article->allRea();
        $data['username'] = $_SESSION['username'];

        $this->load->view('gestion', $data);

    }


    public function ajouterRea()


    {


        $titre = $this->input->post('titre');

        $images= $_FILES['cover']['name'];
        $imgpath = $_FILES['cover']['tmp_name'];



        $content = $this->input->post('content');
        $this->form_validation->set_rules('titre', '', 'required');
        $this->form_validation->set_rules('content', '', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('/gestion/');
        } else {


            $resultat = move_uploaded_file($imgpath,'assets/images/realisation/'.$images);

            $retour = $this->article->addRea($titre, $content, $images);
            redirect('/gestion/');
        }
    }



    public function ajouterVeille(){
        $titre = $this->input->post('titreveille');
        $veille = $this->input->post('veille');
        $content = $this->input->post('contentveille');
        $images= $_FILES['coverveille']['name'];
        $imgpath = $_FILES['coverveille']['tmp_name'];



        $this->form_validation->set_rules('titreveille', '', 'required');
        $this->form_validation->set_rules('contentveille', '', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('/gestion/');
        } else {


            $resultat = move_uploaded_file($imgpath,'assets/images/veille/'.$images);
            $retour = $this->article->addVeille($titre, $content, $images, $veille);
            redirect('/gestion/');
        }


    }

    public function AjouterEpreuve()
    {

        $titre = $this->input->post('titreepreuve');
        $epreuve = $this->input->post('epreuve');
        $content = $this->input->post('contentepreuve');
        $link = $this->input->post('link');
        $images = $_FILES['coverepreuve']['name'];
        $imgpath = $_FILES['coverepreuve']['tmp_name'];


        $this->form_validation->set_rules('titreepreuve', '', 'required');
        $this->form_validation->set_rules('contentepreuve', '', 'required');


        if ($this->form_validation->run() == FALSE) {
            redirect('/gestion/');
        } else
        {


            $resultat = move_uploaded_file($imgpath, 'assets/images/epreuve/' . $images);

            $retour = $this->article->addEpreuve($titre, $content, $images, $epreuve,$link);
            redirect('/gestion/');


        }


    }
}








