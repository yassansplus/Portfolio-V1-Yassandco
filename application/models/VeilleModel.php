<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 19/10/2017
 * Time: 09:23
 */

class VeilleModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getVeilleJuridique(){

        return $this->db->get('juridique')->result();
    }


    public function getVeilleTechnologique(){

        return $this->db->get('technologique')->result();
    }

    public function getVeilleElectronique(){

        return $this->db->get('electronique')->result();
    }



    public function  getVeilleTechnoById($id)
    {
        return   $this->db->select('*')
            ->from('technologique')
            ->where('id', $id)
            ->get()
            ->result();
    }

    public function  getVeilleelectroniqueById($id)
    {
        return   $this->db->select('*')
            ->from('electronique')
            ->where('id', $id)
            ->get()
            ->result();
    }


    public function  getVeilleJuriById($id)
    {
        return   $this->db->select('*')
            ->from('juridique')
            ->where('id', $id)
            ->get()
            ->result();
    }

}
