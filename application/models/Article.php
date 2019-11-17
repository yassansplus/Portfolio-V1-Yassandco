<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 17/10/2017
 * Time: 23:55
 */

class Article extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('assets');
    }

    public function addRea($titre, $content, $images){

        $data = array(
            'titre' => $titre,
            'texte' => $content,
            'image' => $images
        );

        $this->db->insert('realisation', $data);

    }
    public function addVeille($titre, $content, $images, $veille){
        $data = array(
            'titre' => $titre,
            'texte' => $content,
            'image' => $images

        );

        $this->db->insert($veille, $data);

    }

    public function allRea(){
        $query = $this->db->get('realisation');
        return $query->result();
    }


    public function getarticleDetail($parameter){
        return
            $this->db->select('*')
                ->from('realisation')
                ->where('id', $parameter)
                ->get()
                ->result();
    }

    public function addEpreuve($titre, $content, $images, $epreuve, $link)
    {
        $data = array(
            'titre' => $titre,
            'texte' => $content,
            'image' => $images,
            'liendoc'=> $link



        );
        $this->db->insert($epreuve, $data);
        }

    public function getAllEpreuve($epreuve)
    {

        return
            $this->db->select('*')
                ->from($epreuve)
                ->get()
                ->result();

    }

    public function getEpreuve($epreuve , $id)
    {
        return
            $this->db->select('*')
                ->from($epreuve)
                ->where('id', $id)
                ->get()
                ->result();
    }
}