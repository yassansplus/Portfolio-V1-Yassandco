<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 18/10/2017
 * Time: 17:17
 */

class Welcome extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getLastRea(){
     return
         $this->db->select('*')
            ->from('realisation')
            ->limit(3, 0)
            ->order_by('date', 'desc')
            ->get()
            ->result();
    }

}