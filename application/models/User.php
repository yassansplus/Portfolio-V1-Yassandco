<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *	News_model
 *
 *		ajouter_news($auteur, $titre, $contenu)
 *		editer_news($id, $titre = null, $contenu = null)
 *		supprimer_news($id)
 *		count($where = array())
 *		liste_news($nb = 10, $debut = 0)
 */

class User extends CI_Model
{
    protected $table = 'user';

    public function __construct()
    {
        parent::__construct();

    }






    public function log($username, $mdp){


        return count($this->db->get_where('admin', array('user' =>$username, 'mdp' => $mdp))->result());

    }

    public function loguser($username, $mdp, $ipAdress){

$data = array(
        'ipAdress' => ''.$ipAdress.''
);

$this->db->insert('connect', $data);
        return count($this->db->get_where('user', array('user' =>$username, 'mdp' => $mdp))->result());

    }

    public function getIP($ipAdress){
        $data = array(
        'ipAdress' => ''.$ipAdress.''
);

$this->db->insert('connect', $data);
    }
}


/* End of file news_model.php */
/* Location: ./application/models/news_model.php */