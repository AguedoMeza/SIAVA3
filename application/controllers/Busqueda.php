<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('process_model'));
    //session_destroy();
}

/*
 *  MUESTRA EL DASHBOARD DE INICIO
 *  
 */   
public function index(){
    
        $this->data['vista'] = 'vistas/busqueda/busqueda';
       $this->load->view('layouts/dash');  
}

 public function busqueda_cliente(){
      
        $q = $this->input->get('query');
        $fecha_hoy = date('Y-m-d');
        /*$this->db->select('*');
        $this->db->from('clientes_datos_personales');
        $this->db->like('id_cliente',$q,'both');
        $this->db->or_like('nombre_completo',$q,'both');
        $this->db->or_like('nombre_razon_social',$q,'both');
        $this->db->or_like('nombre_adicional',$q,'both');
        $this->db->or_like('apellido_paterno',$q,'both');
        $this->db->or_like('apellido_materno',$q,'both');*/
        
        
        $this->db->select('Campana,id_cliente,Nombre_del_Cliente,Fecha_Actualizacion');
        $this->db->from('wac_bi.Campana_Reactivaciones');
        $this->db->where('Fecha_Actualizacion',$fecha_hoy);
        $this->db->like('id_cliente',$q,'both');
        $this->db->or_like('Nombre_del_Cliente',$q,'both');
        $this->db->limit(50);
        $q1 = $this->db->get();       
       
            
        $this->db->select('Campana,id_cliente,Nombre_del_Cliente,Fecha_Actualizacion');
        $this->db->from('wac_bi.Campana_Renovaciones');
        $this->db->where('Fecha_Actualizacion',$fecha_hoy);
        $this->db->like('id_cliente',$q,'both');
        $this->db->or_like('Nombre_del_Cliente',$q,'both');
        $this->db->limit(50);
        $q2 = $this->db->get();   
        
        //wac_bi.Campana_Reactivaciones
        //wac_bi.Campana_Renovaciones
        
        $data = array();
        if($q1->num_rows() > 0):
            
        foreach ($q1->result() as $info):
             $data[] = array (
                 'id' => $info->id_cliente,
                 'name' => $info->id_cliente.' - '.$info->Nombre_del_Cliente
                 );
        endforeach;
       endif;
        if($q2->num_rows() > 0):
            
        foreach ($q2->result() as $info2):
             $data[] = array (
                 'id' => $info2->id_cliente,
                 'name' => $info2->id_cliente.' - '.$info2->Nombre_del_Cliente
                 );
        endforeach;
       endif;
        //$this->db->like('name', $query);
        echo json_encode($data);
        exit(0);
      
      
  }
  
  public function muestra_informacion(){
      
    $id_client = $this->input->post('idc');
   // $id_client = 134170;
    if($id_client == ""):
           
             $valid = false;
             $mensaje = "Selecciona un cliente del listado mostrado.";
             $result['valid'] = $valid;
             $result['response'] = $mensaje;
             echo json_encode($result);
             exit(0);        
                
    endif;
    
    
    $info = $this->process_model->info($id_client);
        
      if(!empty($info)):
         $valid = true;
         $mensaje = "";
         $result['valid'] = $valid;
         $result['response'] = $mensaje;
         $result['valores'] =  $info;
         echo json_encode($result);
         exit(0); 
         else:
             
         $valid = false;
         $mensaje = "No hay Campaña disponible.";
         $result['valid'] = $valid;
         $result['response'] = $mensaje;
         echo json_encode($result);
         exit(0); 
        endif;
   
      
  }
  
}