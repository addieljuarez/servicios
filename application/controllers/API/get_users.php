<?php

class Get_Users extends CI_Controller{

    public function index(){
        //echo "clase Get_Users";

        $usuarios = $this->db->get("alumnos");
        $reslutUsuarios = $usuarios->result_array();

        echo json_encode($reslutUsuarios);
    }
}
