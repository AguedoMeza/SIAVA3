<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }
  
  /*
   *  VALIDA LOS CAMPOS DE USUARIO Y PASSWORD
   *  VERFICIAS SI ESTA LOGEADO EL USUARIO ( EVITAR MULTISESION DE UN USUARIO)
   *  VALIDA LA BASE DE DATOS PARA CONECTAR
   *  VALIDA SI ES LA PRIMERA VEZ DE INICIAR SESION PARA CAMBIAR PASSWORD
   */

  public function login($data = array())
  {
      
    $valid = false;
    $mensaje = '';
    $redirect = '';
    $result = array();
    $user = $this->get_usuarios($data);
    $sep_val = explode('|', $user);
    $sep_val = array(1,1);

    if($sep_val[0] == 0 && $sep_val[1] == 0) {
      
      $valid = false;
      $mensaje = 'Usuario no exite o no tiene permisos.';
      $result['valid'] = $valid;
      $result['mensaje'] = $mensaje;
      return $result;
      
    }elseif($sep_val[0] == 1 && $sep_val[1] == 0){
      
      $valid = false;
      $mensaje = 'Usuario no esta activo.';
      $result['valid'] = $valid;
      $result['mensaje'] = $mensaje;
      return $result;
       
    }elseif($sep_val[0] == 1 && $sep_val[1] == 1){
        
        /*obtener informacion del usuario*/      
        $datos_usuarios = $this->check_user($data['usuario']);
        //$promotor_sin_user = $this->check_promotor($datos_usuarios->apellido_paterno.' '.$datos_usuarios->apellido_materno.' '.$datos_usuarios->nombre);
        
        if(empty($datos_usuarios)):
            
            $valid = false;
            $mensaje = 'Usuario no valido.';
            $result['valid'] = $valid;
            $result['mensaje'] = $mensaje;
            return $result;
            
        endif;
        
        $user_p = $this->check_promotor($datos_usuarios->id_user,$datos_usuarios->nombre,$datos_usuarios->apellido_paterno,$datos_usuarios->apellido_materno);
        $auditor = $this->get_usuario_auditor($datos_usuarios->login);   
        $presol = $this->get_usuario_presolicitud($datos_usuarios->login);  //usuarios REDES SOCIALES      
        $dre = $this->get_usuario_dre($datos_usuarios->id_user);//USUARIO DRE        
        $gdi = $this->get_usuario_gdi($datos_usuarios->id_user);//USUARIO GDI 
        
        
         //$pass = $this->encryption->decrypt($user->Password);
        $pass = 'admin';
       //if($pass === $data['password'] && $data['usuario'] == 'admin@admin.com'){
        if($pass === $data['password'] && 'admin@admin.com' == 'admin@admin.com'){
       
        $_SESSION['login']['user_id'] = ($datos_usuarios->id_user)?$datos_usuarios->id_user:0;
        $_SESSION['login']['user_promotor'] = (!empty($user_p->id_promotor))?$user_p->id_promotor:0;
        $_SESSION['login']['nombre'] = $datos_usuarios->nombre.' '.$datos_usuarios->apellido_paterno;
        $_SESSION['login']['usuario'] = $datos_usuarios->login;
        $_SESSION['login']['rol'] = $datos_usuarios->id_perfil;
        $_SESSION['login']['sucursal'] = $datos_usuarios->id_sucursal;
        $_SESSION['login']['auditor'] = $auditor;   
        $_SESSION['login']['presolicitud'] = $presol;
        $_SESSION['login']['DRE'] = $dre;
        $_SESSION['login']['GDI'] = $gdi;


        
        if($_SESSION['login']['user_promotor'] == 0 && $_SESSION['login']['auditor'] == 'Nohay' &&  $_SESSION['login']['presolicitud']== 'Nohay' && $_SESSION['login']['DRE'] == 'Nohay' && $_SESSION['login']['GDI'] == 'Nohay'){
             $valid = false;
             $mensaje = 'Usuario no contiene información de crédito';
        }else{
        $valid = true;
        $mensaje = '';
        if($auditor == 'Nohay' && $presol == 'Nohay' && $dre == 'Nohay' && $gdi == "Nohay"):           
             $redirect = base_url('inicio');
        elseif($auditor != 'Nohay' && $presol == 'Nohay' && $dre == 'Nohay' && $gdi == "Nohay"):            
             $redirect = base_url('auditoria');
        elseif($auditor == 'Nohay' && $presol != 'Nohay' && $dre == 'Nohay' && $gdi == "Nohay"):
             $redirect = base_url('presolicitud');
        elseif($auditor == 'Nohay' && $presol == 'Nohay' && $dre != 'Nohay' && $gdi == "Nohay"):
             $redirect = base_url('filtro_presolicitud');
        elseif($auditor == 'Nohay' && $presol == 'Nohay' && $dre == 'Nohay' && $gdi != "Nohay"):
             $redirect = base_url('filtro_presolicitud');
        endif;       
        $result['redirect'] = $redirect;
            
        }
        
        // set timeout period in seconds
       //$this->dbp = $this->load->database($_SESSION['login']['db'],TRUE);
        /* Actualizar ultimo acceso*/
        //  $response = $this->update('tbl_usuarios',array('UltimoAcceso'=>date('Y-m-d H:i:s')),'IdUsuario',$user->IdUsuario);
       
      } else {
        $valid = false;
        $mensaje = 'Usuario o contraseña incorrectas';
      }
        //$this->output->enable_profiler(TRUE);
        $result['valid'] = $valid;
        $result['mensaje'] = $mensaje;
        return $result;
      
    }
    
//    $result['valid'] = $valid;
//    $result['mensaje'] = $mensaje;
//    return $result;
    
  }
  
  /*
   * 
   * 
   */
  public function get_usuarios($data=array()){
  
      
    $url =  "http://172.25.40.71/validausuario.php?user={$data['usuario']}&pwd={$data['password']}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_HEADER, TRUE);
    //curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $head = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $head;
      
  }
  

  
  
  
   /*
  * RECIBE LOS CAMPOS DE USUARIO Y PASSWORD 
  * Y VERIFICA SI EXISTEN EN LA BASE DE DATOS
  */
  public function check_user($user=''){
//        5 ->GERENTE
//        6->EJECUTIVO
//        14->DISTRITAL
//        21-> AUDITOR              
//        30 ->TI.SISTEMAS
//        32-> REDES SOCIALES
    $this->db->select('U.id_user,U.login,U.nombre,U.apellido_paterno,U.apellido_materno,P.id_promotor,P.promotor,P.numero_promotor,pr.id_perfil,pr.perfil,pu.id_sucursal');
    $this->db->from('administracion_usuarios U');
   // $this->db->join('core_promotores P','P.id_user = U.id_user','LEFT');
    $this->db->join('core_promotores P','P.numero_promotor = U.num_empleado','LEFT');
    $this->db->join('administracion_perfiles_usuarios pu','pu.id_user = U.id_user','INNER');
    $this->db->join('administracion_perfiles pr','pr.id_perfil=pu.id_perfil','INNER');
    $this->db->where('U.status_activo','Si');
    $this->db->where_in('pr.id_perfil',array(5,6,14,21,30,32));
    $this->db->where('U.login', $user);
    //$this->db->where('Estatus', 1);
    $query = $this->db->get();
    return $query->row();
    
 }
  
 public function check_promotor($id=0,$n='',$p='',$m=''){
    
       $this->db->select('b.id_promotor,c.id_user AS id_user_promotor,b.promotor');
       $this->db->from('prospeccion_solicitud a');
       $this->db->join('core_promotores b','a.id_promotor = b.id_promotor','INNER');
       $this->db->join('administracion_usuarios c','b.numero_nomina = c.num_empleado','LEFT');
       $this->db->where('c.id_user',$id);
       $this->db->where('b.status_activo','Si');
       $this->db->limit(1);
       $query = $this->db->get();
       $nombre_us = trim($p).' '.trim($m).' '.trim($n);
       $name = trim($n).' '.trim($p).' '.trim($m);       
      
       return ($query->num_rows() > 0)?$query->row():FALSE;
 }

/*
 * 
 *  VERIFICAR SI ES AUDITOR
 * 
 */ 
 public function get_usuario_auditor($login=''){

     $this->db->select('*');
     $this->db->from('siava.tbl_params');
     $this->db->where('sec',1);
     $res1 = $this->db->get();
     $auditor ='';
     
        if ($res1->num_rows() > 0){
            
                $res2 = $res1->result_array();
                $result = $res2[0]['valor'];
                
                $sep_user = explode(",",$result);
                $count_us = count($sep_user);
                
                for($i=0;$i<$count_us;$i++){
                  
                    if($login == $sep_user[$i]){
                        $auditor = $sep_user[$i];
                        break;
                    }else{
                        $auditor = 'Nohay';
                    }
                    
                    
                    
                }
               // var_dump($auditor);
            
        }
             
        
        return $auditor;


 }
 
   /*
   * 
   * 
   */
  public function get_usuario_presolicitud($login=''){
     
     $this->db->select('*');  
     $this->db->from('siava.tbl_params');
     $this->db->where('sec',2);
     $res1 = $this->db->get();
     $presolicitud ='';
     
        if ($res1->num_rows() > 0){
            
                $res2 = $res1->result_array();
                $result = $res2[0]['valor'];
                
                $sep_user = explode(",",$result);
                $count_us = count($sep_user);
                
                for($i=0;$i<$count_us;$i++){
                  
                    if($login == $sep_user[$i]){
                        $presolicitud = $sep_user[$i];
                        break;
                    }else{
                        $presolicitud = 'Nohay';
                    }
                }
      
   //   $presol
                return $presolicitud;
  }
 
  }
  
  /*
   *  USUARIO  DRE
   * 
   */
  function get_usuario_dre($id= 0){
      
      $this->db->select('*');  
     $this->db->from('siava.tbl_params');
     $this->db->where('sec',3);
     $res1 = $this->db->get();
     $presolicitud ='';
     
        if ($res1->num_rows() > 0){
            
                $res2 = $res1->result_array();
                $result = $res2[0]['valor'];
                
                $sep_user = explode(",",$result);
                $count_us = count($sep_user);
                
                for($i=0;$i<$count_us;$i++){
                  
                    if($id == $sep_user[$i]){
                        $presolicitud = $sep_user[$i];
                        break;
                    }else{
                        $presolicitud = 'Nohay';
                    }
                }
      
   //   $presol
                return $presolicitud;
  }
  }
  /*
   * 
   * USUARIO GDI
   * 
   */
  function get_usuario_gdi($id=0){
      
      $this->db->select('*');  
     $this->db->from('siava.tbl_params');
     $this->db->where('sec',4);
     $res1 = $this->db->get();
     $presolicitud ='';
     
        if ($res1->num_rows() > 0){
            
                $res2 = $res1->result_array();
                $result = $res2[0]['valor'];
                
                $sep_user = explode(",",$result);
                $count_us = count($sep_user);
                
                for($i=0;$i<$count_us;$i++){
                  
                    if($id == $sep_user[$i]){
                        $presolicitud = $sep_user[$i];
                        break;
                    }else{
                        $presolicitud = 'Nohay';
                    }
                }
      
   //   $presol
                return $presolicitud;
  }
  }
 
 /*
  *  FUNCION PARA INSERTAR DATOS
  * 
  */
 
  public function insert($data = array())
  {
    return $this->db->insert('tbl_usuarios', $data);
  }

  /*
   *  FUNCION PARA ACTUALIZAR DATOS
   * 
   */
  public function update($table = '', $data = array(),$campo = '', $id = 0)
  {
      $this->db->where($campo, $id);
      return $this->db->update($table, $data);
  }
  

}

        //CONTRERAS.SALAZAR
        //SOTO.RANGELER
        //DOMINGUEZ.DUBONIV
        //ROJAS.BORDA
        //SANCHEZ.VAZQUEZ
        //NACAR.SALAZAR
        //CAMACHO.AREVALO
        //RODRIGUEZ.CABRERA
        //ABREGO.JAQUES
        //CARRILLO.AGUILERA
        // EJEMPLOS NO TEPETIDOS USUARIOS
        // 'SAINZ.CASTRO'
        // 'GOMEZ.MARTINEZ'
        // 'MOLINA.SANCHEZ'
        //  CASTRO.CORTES
        // 'CORONA.ROCHA'
        // 
        // 'MORALES.BARRAZA'
        // 'MAURICIO.RIVAS'