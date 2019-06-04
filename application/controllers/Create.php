

                                                                
<?php


/*
________  ________  _______   ________  _________  _______      
|\   ____\|\   __  \|\  ___ \ |\   __  \|\___   ___\\  ___ \     
\ \  \___|\ \  \|\  \ \   __/|\ \  \|\  \|___ \  \_\ \   __/|    
 \ \  \    \ \   _  _\ \  \_|/_\ \   __  \   \ \  \ \ \  \_|/__  
  \ \  \____\ \  \\  \\ \  \_|\ \ \  \ \  \   \ \  \ \ \  \_|\ \ 
   \ \_______\ \__\\ _\\ \_______\ \__\ \__\   \ \__\ \ \_______\
    \|_______|\|__|\|__|\|_______|\|__|\|__|    \|__|  \|_______|

    */


class Create extends CI_Controller{
    public function index(){
        $this->load->view('Create_view');

        // $username= "95santiag@gmail.com";
        // $password="123456";
        // $name="Jesus Santiago";
        // $phone="8115899028";
        // $address="Captain Lucas G 816, al lado de_bodeguita";
        // $matricula="10457";
        // $databusqueda = array ("email" => $username);
        // $busquedacorreo = $this -> db-> get_where ("alumnos",$databusqueda);
        
        // if ($busquedacorreo == TRUE){
        //     echo "si";
        //     $conteofilas = $busquedacorreo -> num_rows();
        //     echo $conteofilas;
        //     if($conteofilas > 0){
        //         echo "Este registro ya existe";
        //     }else{
        //         //$this->load->database();
        //         $data = array('email' =>$username,
        //         'password'=>$password,
        //         'name'=>$name,
        //         'phone'=>$phone,
        //         'address'=>$address,
        //         'matricula'=>$matricula);
        //         //echo json_encode($data);
        //         $this->db->insert('alumnos',$data);
        //         echo "Registro insertado correctamente";
        //     }
        // }
        // else{
        //     echo "NO";
        // }
        
    }

    public function registroVista (){
        // echo "Pagina del registro";
        $email_vista= $this ->input->post("correo");
        $password_vista = $this->input->post('password');
        $confirmarPassword_vista = $this->input->post('confirmarPassword');
        $nombre_vista = $this->input->post('nombre');

        $datosPantalla = array(
            'correo' =>  $email_vista,
            'password' => $password_vista,
            'confirmarPassword' => $confirmarPassword_vista,
            'nombre' => $nombre_vista
        );
        echo json_encode($datosPantalla);


        if($password_vista == $confirmarPassword_vista ){

            $databusqueda = array ("email" => $email_vista);
            $busquedacorreo = $this->db->get_where("alumnos",$databusqueda);

            if($busquedacorreo == TRUE){
                $conteofilas = $busquedacorreo->num_rows();
                if($conteofilas > 0){
                    echo "Este correo ya existe";
                }else{
                    $data = array(
                        'email' => $email_vista,
                        'password' => $password_vista,
                        'name' => $nombre_vista
                    );
                   
                    $this->db->insert('alumnos', $data);
                    echo "Registro insertado correctamente";
                }
            }

        }else{
            echo "Las contraseñas deben ser iguales";
        }



    }
}
