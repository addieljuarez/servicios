<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios');
        
    }

    public function index(){
        $this->load->view('Inicio');
        

        // $this->load->helper('file');


        $usuarios = $this->usuarios->todosUsuarios();
        echo json_encode($usuarios);


    }
}