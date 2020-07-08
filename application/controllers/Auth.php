<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('auth_model'));      
  // $this->auth_model->insert(array('Nombre'=>'Benjamin','Apellidos'=>'Robles Maldonado','Usuario'=>'admin@admin.com','Password'=> $this->encryption->encrypt('admin'),'UltimoAcceso'=> date('Y-m-d H:i:s') ,'TipoUsuario'=>'admin','Estatus'=>1));
// session_destroy();
//  $this->session->sess_destroy();
  }

public function index(){

  $this->load->view('layouts/login');    
}

public function login(){
      
      $usuario = ($this->input->post('usuario'))? $this->input->post('usuario'):'';
      $pwd = ($this->input->post('password'))?$this->input->post('password'):'';
      
//      $usuario = 'PIÑON.ANDREA';
//      $pwd ='admin';
      
       if($usuario == '' && $pwd == '' ):
            $valid = false;
            $mensaje = 'Introduzca usuario y contraseña';
            $result['valid'] = $valid;
            $result['mensaje'] = $mensaje;
            echo json_encode($result);
          exit(0);           
       endif;
       
      if($usuario == ''):
            $valid = false;
            $mensaje = 'Introduzca el nombre de usuario.';
            $result['valid'] = $valid;
            $result['mensaje'] = $mensaje;
            echo json_encode($result);
          exit(0);
      endif;
      
      if($pwd == ''):
           $valid = false;
            $mensaje = 'Introduzca la contraseña.';
            $result['valid'] = $valid;
            $result['mensaje'] = $mensaje;
            echo json_encode($result);
          exit(0);          
      endif;
      
    $data = array(
      'usuario' => $usuario,
      'password' =>$pwd
    );
    
    /* $data = array(
      'usuario' => 'JUAN.PEREZ',
      'password' => '1122334455'
    );    
    /*$url = "http://192.168.151.1/validausuario.php?user={$data['usuario']}&pwd={$data['password']}";  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content  = curl_exec($ch);
    curl_close($ch);
    echo $content;
     exit(0);*/
     
    $auth = $this->auth_model->login($data);
    echo json_encode($auth);

  }

  
  /*
   *  CIERRA SESIÓN
   *   
   */  
   public function log_out(){
      session_destroy();
      redirect(base_url('login'), 'refresh');
  }

  
  public function auditor($login){
      
      $auth = $this->auth_model->get_usuario_auditor($login);
       echo json_encode($auth);
  }

 public function presolicitud($login){
      
      $auth = $this->auth_model->get_usuario_presolicitud($login);
       echo json_encode($auth);
  }

}
