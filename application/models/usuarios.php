
<?php

class Usuarios extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function acceso(){

    }

    public function registro(){

    }

    public function busquedaUsuario(){

    }

    public function todosUsuarios(){
        $query = $this->db->get('alumnos');
        $arrayQuery = $query->result_array();
        
        return $arrayQuery;
    }

}





