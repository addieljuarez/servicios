<?php
class Create extends CI_Controller{
    public function index(){
        $this->load->view('Create_view');

        $username= "jesus95santiago@gmail.com";
        $password="123456";
        $name="Jesus Santiago";
        $phone="8115899028";
        $address="Captain Lucas G 816, al lado de bodeguita";
        $matricula="10457";
        $databusqueda = array ("email" => $username);
        $busquedacorreo = $this -> db-> get_where ("alumnos",$databusqueda);
        

        //$this->load->database();
        $data = array('email' =>$username,
        'password'=>$password,
        'name'=>$name,
        'phone'=>$phone,
        'address'=>$address,
        'matricula'=>$matricula);
        //echo json_encode($data);
        $this->db->insert('alumnos',$data);
        
    }
}