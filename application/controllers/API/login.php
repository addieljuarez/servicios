<?php
class Login extends CI_Controller{
    public function index(){
       $user = $this->input->post("user");
       $password = $this->input->post("Password");
       echo $user;
       echo $password;
       if ($user != NULL&& $password != NULL) 
       {
           $array_datos = array('email'=>$user,
           'password'=>$password);

           $query= $this->db-> get_where("alumnos", $array_datos);
           
           if ($query==TRUE){
               $num_rows= $query->num_rows();

               if($num_rows>0){
                    echo "Existe, Bienvenido";
               }else{
                    echo "No existe";    
               }
           }
       }
       else {
           $arrayerror = array('ERROR' => "Capturar Datos", );
           echo json_encode($arrayerror);
       }

    }
}






