<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
     
  }
  
/*
 * 
 * 
 */  
  public function muestra_incentivos($tipo='',$idu=0,$id_p=0,$fi='',$ff='',$perfil=array()){
                
      $this->db->select("count(*) cantidad ,ifnull(sum(monto_otorgado),0) monto_otorgado,"
      ."ifnull(round(sum(monto_otorgado) * (select factor from avance_incentivos.bono_comerciales where meta <=sum(monto_otorgado) and tipo_credito='".$tipo."' order by meta desc limit 1) ,2),0) as bono, "
      . "ifnull((select factor from avance_incentivos.bono_comerciales where meta <=sum(monto_otorgado) and tipo_credito='".$tipo."' order by meta desc limit 1),0) as factor");
      $this->db->from("credito cred,  prospeccion_solicitud sol");
      $this->db->where("sol.id_autorizacion = cred.id_autorizacion");
      $this->db->where("sol.id_autorizacion = cred.id_autorizacion");
      $this->db->where("cred.fecha_inicio >=",$fi);
      $this->db->where("cred.fecha_inicio <=",$ff);
      $this->db->where("cred.status_activo <>", 'Cancelado');
      $this->db->where("sol.id_promotor",$id_p);
      $this->db->where_in("sol.id_perfil_captura",$perfil); 
      $query = $this->db->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
     
  }
  
  /*
   * 
   * 
   */
  public function muestra_incentivos_gerente($suc='',$fi='',$ff='',$perfil= array()){
      
          
      $this->db->select("count(*) cantidad, ifnull(sum(cred.monto_otorgado),0) monto_otorgado,"
      ."ifnull(round(sum(cred.monto_otorgado) * (select factor from avance_incentivos.bono_gerentes where capital_dispersado <= sum(cred.monto_otorgado) order by capital_dispersado desc limit 1) ,2),0) as bono");
      $this->db->from("credito cred,  prospeccion_solicitud sol");
      $this->db->where("sol.id_autorizacion = cred.id_autorizacion");
      $this->db->where(" cred.id_sucursal",$suc);
      $this->db->where("cred.fecha_inicio >=",$fi);
      $this->db->where("cred.fecha_inicio <=",$ff);
      $this->db->where("cred.status_activo <>", 'Cancelado');
      if(!empty($perfil)):
       $this->db->where_in("sol.id_perfil_captura",$perfil);
       endif;
       $query = $this->db->get();
       return ($query->num_rows() > 0)?$query->result():FALSE;
            
  }
  
  
  /*
   * 
   */
  public function muestra_cobranza_gerente($suc='',$fi='',$ff=''){

        
        $this->db->select('ifnull(round(((Sum(Balance_Regularizado)+Sum(Balance_Mejorado))/Sum(Balance_Asignado)*100),2),0) As Porcentaje_Recuperacion,'
                . 'ifnull(round(((Sum(Balance_Regularizado)+Sum(Balance_Mejorado))/Sum(Balance_Asignado)*100),2),0) As Porcentaje');
        $this->db->from("wac_bi.estadisticos_incentivos");
        $this->db->where("Bucket_Asignacion","001-007");
        $this->db->where("Sucursal",$suc);        
        $this->db->where("Fecha_Cierre >=",$fi);
        $this->db->where("Fecha_Cierre <=",$ff);
        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  /*
   * 
   * 
   */
  public function cobranza_ejecutivo($ec=0,$suc='',$fi='',$ff=''){
      
          $this->db->select('ifnull(round((Sum(Balance_Regularizado)+Sum(Balance_Mejorado))/Sum(Balance_Asignado),2)*100,0) As Porcentaje_Recuperacion,'
                . 'ifnull(round((Sum(Balance_Regularizado)+Sum(Balance_Mejorado))/Sum(Balance_Asignado),2)*100,0) As Porcentaje');
        $this->db->from("wac_bi.estadisticos_incentivos");
        $this->db->where("Bucket_Asignacion","001-007");
        $this->db->where("Sucursal",$suc);
        $this->db->where("id_user",$ec);        
        $this->db->where("Fecha_Cierre >=",$fi);
        $this->db->where("Fecha_Cierre <=",$ff);
        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result():FALSE;
  }
  
   /*
   * 
   * BONO COBRANZA 1-7
   * GERENTE
   */
  public function bono_cobranza_gerente($id=0){
      
      
      $this->db->select("bono");
      $this->db->from("avance_incentivos.bono_gerentes_1a7");
      $this->db->where("sec",$id);
      $query = $this->db->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
      
      
  }
  
  /*
   * 
   * BONO COBRANZA 1-7
   * EJECUTIVO
   */
  public function bono_cobranza_ejecutivo($id=0){
      
      
      $this->db->select("bono");
      $this->db->from("avance_incentivos.bono_comercial_1a7");
      $this->db->where("sec",$id);
      $query = $this->db->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
      
      
  }
  
  
  
  /*
   * 
   * 
   */
  public function normalidad($suc='',$fi='',$ff=''){
         
        $this->db->select('ifnull(round(((select sum(saldo_vencido_capital+saldo_vigente_capital) from credito_cierre_saldos ' 
        .'WHERE id_sucursal = '.$suc 
        .' AND dias_mora <= 7 '
        .'AND id_cierre = (select id_cierre from credito_cierre where fecha_cierre = "'.$ff.'") '
        .'AND id_credito not in (select distinct id_credito from credito_castigos)) '
        .'/ '
        .'(select sum(saldo_vencido_capital+saldo_vigente_capital) from credito_cierre_saldos '
        .'WHERE id_sucursal = '.$suc 
        .' AND id_cierre = (select id_cierre from credito_cierre where fecha_cierre = "'.$ff.'") '
        .'AND id_credito not in (select distinct id_credito from credito_castigos))) *100,2),0) As Normalidad' );
//        $this->db->from("wac_bi.estadisticos_normalidad");
//        $this->db->where("Sucursal",$suc);
//        $this->db->where("Tipo","Activo");
//        $this->db->where("Fecha >=",$fi);
//        $this->db->where("Fecha <=",$ff);
        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result():FALSE;  
             
  }
  
  public function bono_normalidad($porcentaje=0){
      
        $this->db->select('bono');
        $this->db->from("avance_incentivos.bono_gerentes_normalidad");
        $this->db->where("p_inicial <=",$porcentaje);  //menor
        $this->db->where("p_final >=",$porcentaje);
        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result():FALSE;
      
      
  }
  
  
 /*
  * 
  * 
  */  
   public function bono($tipo='',$cantidad=0){
      
     $this->dbp = $this->load->database('incentivos',TRUE);    
    //SELECT * FROM avance_incentivos.bono_comerciales WHERE tipo_credito= 'NB' AND meta <= 68000 order by sec desc LIMIT 1;
    $this->dbp->select('*');
    $this->dbp->from('bono_comerciales');
    $this->dbp->where('tipo_credito',$tipo);
    $this->dbp->where('meta <=',$cantidad);
    $this->dbp->order_by('sec','DESC');
    $this->dbp->limit(1);
    $query = $this->dbp->get();   
    return ($query->num_rows() > 0)?$query->result():FALSE;
    
  }
    

  /*
   * 
   *  parametros
   */
 public function parametro($id=0) { 
      
      $this->dbp = $this->load->database('incentivos',TRUE);
      $this->dbp->select('*');
      $this->dbp->from('tbl_params');
      $this->dbp->where('id',$id);
      $query = $this->dbp->get();
      
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  
 /*
  *  VERIFICA SI EXISTE EL 
  *  USUARIO EN LA BASE DE DATOS
  */  
 public function valida_email($email) {
      
    $this->db->select('*');
    $this->db->from('tbl_usuarios');
    $this->db->where('Usuario', $email,'both');
    $query = $this->db->get();   
    return ($query->num_rows() > 0)?$query->result():FALSE;
    
  }
   
  
/*
 * 
 * 
 * BUSQUEDA DE CAMPAÑIAS
 * 
 * 
 */  
 public function info($id=0){
    
    $fecha_hoy = date('Y-m-d');
    $ayer = date("Y-m-d",strtotime($fecha_hoy."- 1 days"));
    
    $this->db->select('Campana,Sucursal,Nombre_del_Cliente,Monto_Disponible,Capital_Inicial,Codigo_Reactivacion as Codigo,Fecha_Actualizacion,id_cliente');
    $this->db->from('wac_bi.Campana_Reactivaciones');
    $this->db->where('id_cliente', $id);
    $this->db->where('Fecha_Actualizacion',$fecha_hoy);
    $query = $this->db->get();
    if($query->num_rows() == 0):
        
        $this->db->select('Campana,Sucursal,Nombre_del_Cliente,Monto_Disponible,capital_inicial as Capital_Inicial ,Codigo_Renovacion as Codigo,Fecha_Actualizacion,id_cliente');
        $this->db->from('wac_bi.Campana_Renovaciones');
        $this->db->where('Fecha_Actualizacion', $fecha_hoy);
        $this->db->where('id_cliente', $id);
        $query = $this->db->get();   
        
    endif;           
   return ($query->num_rows() > 0)?$query->result():FALSE;
   
}
  
/*
 * 
 *  AUDITORIAS
 * 
 * 
 */  
 public function sucursales(){
      
    $this->db->select('id_sucursal,sucursal');
    $this->db->from('administracion_sucursales');
    $this->db->where('status_activo', 'Si');
    $this->db->where('id_sucursal !=', 1);
    $this->db->order_by('id_sucursal','ASC');
    $query = $this->db->get();   
    return ($query->num_rows() > 0)?$query->result():FALSE;
    
  }
  
 public function get_records_filtro($start = 1, $length = 1, $column_order, $column_direction, $search = false,$id=0,$filtro='',$suc=0) {
   
    $start = ((($start > 0 ? $start : 1) - 1) * $length);
    $query = $this->db
            ->distinct()
            ->select("cred.id_credito,cred.id_producto,cred.id_sucursal,cred.id_cliente,cred.producto,cred.capital,cred.monto_otorgado,cred.fecha_apertura,"
                    . "(select ccs.saldo_total_vencido from credito_cierre_saldos ccs 
where ccs.id_credito = cred.id_credito and ccs.id_cierre = (select max(id_cierre) from credito_cierre)
) As saldo_vencido, "
                    . "cdd.id_cliente,cdd.calle,cdd.num_exterior,cdd.num_interior,cdd.cp,"
                    . "cdp.id_cliente,cdp.nombre_razon_social,cdp.nombre_adicional,cdp.apellido_paterno,cdp.apellido_materno,cdp.rfc,"
                    . "cdl.id_cliente,cdl.empresa,cdl.puesto,"
                    . "(SELECT GROUP_CONCAT(telefono SEPARATOR ', ') FROM avance_v55.clientes_directorio_telefonico WHERE id_cliente = cred.id_cliente GROUP BY id_cliente) AS Telefono,cdt.telefono")
            ->from('credito cred')
            ->join('clientes_datos_domicilio cdd', 'cdd.id_cliente = cred.id_cliente', 'inner')
            ->join('clientes_datos_personales cdp', 'cdp.id_cliente = cdd.id_cliente','inner')
            ->join('clientes_datos_laborales cdl', 'cdl.id_cliente = cdp.id_cliente','inner')
            ->join('clientes_directorio_telefonico cdt', 'cdt.id_cliente = cdp.id_cliente','left')
            ->where('cred.id_sucursal', $suc);
            if($id == 1):
                $query->like('cdd.calle',$filtro,'after',false);
            elseif($id == 2):
              $query->like('cdl.empresa',$filtro,'after',false);
            elseif($id == 3):
                $query->like('cdt.telefono',$filtro,'after',false);
                
                endif;
              $query->limit($length, $start)           
                    ->order_by($column_order, $column_direction);
                  
    if (!empty($search)) {
        
        $search_terms = explode(" ", $search['value']);
        foreach ($search_terms as $term) {
            if (!empty($term)) {
                
                $query = $query->or_like('cred.id_credito', $term, 'both')
                        ->or_like('cred.id_producto', $term, 'both')
                        ->or_like('cred.id_sucursal', $term, 'both')
                        ->or_like('cdd.calle', $term, 'both')
                        ->or_like('cdp.nombre_razon_social', $term, 'both')
                        ->or_like('cdl.empresa', $term, 'both');
            }            
         }
    }
    $query = $query->get();
    return $query->result();
  }  
  
  public function get_records_filtro_ejecutivos($start = 1, $length = 1, $column_order, $column_direction, $search = false,$id=0,$filtro='',$suc=0) {
   
    $start = ((($start > 0 ? $start : 1) - 1) * $length);
    $query = $this->db
            ->distinct()
            ->select("anio_semana,num_empleado,nombre,id_sucursal,nb_bono, pb_bono, fb_bono, fbc_bono")
            ->from('avance_incentivos.pago_ejecom')
            ->where('anio_semana',$suc);
           
              $query->limit($length, $start)           
                    ->order_by($column_order, $column_direction);
                  
    if (!empty($search)) {
        
        $search_terms = explode(" ", $search['value']);
        foreach ($search_terms as $term) {
            if (!empty($term)) {
                
                $query = $query->or_like('cred.id_credito', $term, 'both')
                        ->or_like('cred.id_producto', $term, 'both')
                        ->or_like('cred.id_sucursal', $term, 'both')
                        ->or_like('cdd.calle', $term, 'both')
                        ->or_like('cdp.nombre_razon_social', $term, 'both')
                        ->or_like('cdl.empresa', $term, 'both');
            }            
         }
    }
    $query = $query->get();
    return $query->result();
  }  
 /*
  * 
  * PRE SOLICITUDES
  * 
  * 
  */ 
  
  public function get_estatus_pre(){
      
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->select("id_estatus,descripcion");
      $this->dbp->from("estatus");
      $query = $this->dbp->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
      
  }
  
  public function get_sucursales(){
      
      
      
       if($_SESSION['login']['GDI'] != 'Nohay'):
        
          $this->dbp = $this->load->database('presolicitud',TRUE);
          $this->dbp->select('sucursal_id');
          $this->dbp->from("sucursales");
          $this->dbp->where("usuario_gdi",$_SESSION['login']['GDI']);
          $q = $this->dbp->get();
          $q_suc= array();
          $i=0;
          if($q->num_rows() > 0){             
            foreach( $q->result() as $suc):                
                $q_suc[$i] = $suc->sucursal_id;  
            $i++;
            endforeach;
           }        
       endif;
       
        $this->db->select('S.id_sucursal,S.sucursal');
        $this->db->from('administracion_sucursales S');
       //} $this->db->join("administracion_perfiles_usuarios P","P.id_sucursal = S.id_sucursal","INNER");
        $this->db->where('S.status_activo', 'Si');
        $this->db->where('S.id_sucursal !=', 1);
        if(!empty($q_suc)){
        $this->db->where_in('S.id_sucursal', $q_suc);
        }
        
        $this->db->order_by('S.id_sucursal','ASC');
        $query = $this->db->get();   
        return ($query->num_rows() > 0)?$query->result():FALSE;
        
    /*  SELECT S.id_sucursal,S.sucursal,P.id_user FROM administracion_sucursales S
INNER JOIN administracion_perfiles_usuarios P ON (P.id_sucursal = S.id_sucursal)
INNER JOIN administracion_usuarios U ON (U.id_user = P.id_user);*/
  }
  
  /*
   *  REGIONES
   * 
   */
  public function get_region(){
      
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->select("id_region,regiones");
      $this->dbp->from("regiones");
      $query = $this->dbp->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
  }
  /*
   *  DISTRITOS
   * 
   */
  public function get_distritos(){
      
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->select("id_distrito,distritos");
      $this->dbp->from("distritos");
      $query = $this->dbp->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  /*
   * 
   *  buscar solicitudes para no
   * repetir 
   * 
   */
  public function get_solicitud($id=''){
      
     $this->dbp = $this->load->database('presolicitud',TRUE);
     $query = $this->dbp
            ->select("solicitud")
            ->from('solic_web.presolicitudes')
            ->where('solicitud',$id);
     
    $query = $this->dbp->get();   
    return ($query->num_rows() > 0)?$query->row():FALSE;
      
  }
  
  
  public function get_records_presolicitud($start = 1, $length = 1, $column_order, $column_direction, $search = false) {
      
      $this->dbp = $this->load->database('presolicitud',TRUE);
      
      if($_SESSION['login']['DRE'] != 'Nohay'):
          
          $this->dbp->select('sucursal_id');
          $this->dbp->from("sucursales");
          $this->dbp->where("usuario_dre",$_SESSION['login']['DRE']);
          $q = $this->dbp->get();
          $q_suc= array();
          $i=0;
          if($q->num_rows() > 0){             
            foreach( $q->result() as $suc):                
                $q_suc[$i] = $suc->sucursal_id;  
            $i++;
            endforeach;
            //$q_suc = substr($q_suc, 0, -1);
          }      
          
      endif;
       if($_SESSION['login']['GDI'] != 'Nohay'):
           
          $this->dbp->select('sucursal_id');
          $this->dbp->from("sucursales");
          $this->dbp->where("usuario_gdi",$_SESSION['login']['GDI']);
          $q = $this->dbp->get();
          $q_suc= array();
          $i=0;
          if($q->num_rows() > 0){             
            foreach( $q->result() as $suc):                
                $q_suc[$i] = $suc->sucursal_id;  
            $i++;
            endforeach;
            //$q_suc = substr($q_suc, 0, -1);
          }        
       endif;
       $suc=0;
       if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 5):
           
           $suc = $_SESSION['login']['sucursal'];
       endif;
       
      
      $start = ((($start > 0 ? $start : 1) - 1) * $length);
      $query = $this->dbp
            ->select("id_presolicitud,mes,solicitud,fecha,nombre_completo,celular,telefono_casa,correo,telefono_trabajo,trabajo_actual,
                calle_y_no_exterior,numero_interior,colonia,codigo_postal,municipio,estado,sucursal,distrito,region,enviado_sucursal,
                estatus,descripcion,fecha_resolucion,motivo_rechazo")
            ->from('presolicitudes')
            ->join('estatus','id_estatus = estatus', 'inner');
      if(!empty($q_suc)){          
          $query = $query->where_in("sucursal",$q_suc);
      }
      if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 5){
          $query = $query->where("sucursal",$suc);
      }
         $query =  $query->limit($length, $start)
            ->order_by($column_order, $column_direction);
          
      
      
                 
    if (!empty($search)) {
        $search_terms = explode(" ", $search['value']);
        foreach ($search_terms as $term) {
            if (!empty($term)) {
                
                $query = $query->or_like('id_presolicitud', $term, 'both')
                        ->or_like('mes', $term, 'both')
                        ->or_like('solicitud', $term, 'both')
                        ->or_like('fecha', $term, 'both')
                        ->or_like('nombre_completo', $term, 'both')
                        ->or_like('celular', $term, 'both')
                        ->or_like('telefono_casa', $term, 'both')
                        ->or_like('correo', $term, 'both')
                        ->or_like('telefono_trabajo', $term, 'both')
                        ->or_like('trabajo_actual', $term, 'both')
                        ->or_like('calle_y_no_exterior', $term, 'both')
                        ->or_like('numero_interior', $term, 'both')
                        ->or_like('codigo_postal', $term, 'both')
                        ->or_like('municipio', $term, 'both')
                        ->or_like('estado', $term, 'both')
                        ->or_like('sucursal', $term, 'both')
                        ->or_like('distrito', $term, 'both')
                        ->or_like('enviado_sucursal', $term, 'both')
                        ->or_like('estatus', $term, 'both')
                        ->or_like('descripcion', $term, 'both')
                        ->or_like('fecha_resolucion', $term, 'both')
                        ->or_like('motivo_rechazo', $term, 'both');
                
                
            }            
         }
    }
    
    $query = $query->get();
    return $query->result();
      
      
  }
  
  
  public function comentarios_pre($id=0){
      
       $this->dbp = $this->load->database('presolicitud',TRUE);
       //$this->dba = $this->load->database('avance_v55',TRUE);
       //
       $this->dbp->select("comment_id,comment_subject,comment_text,comment_status,presolicitud_id,usuario_id,fecha,nombre,apellido_paterno,apellido_materno");
       $this->dbp->from("comments");
       $this->dbp->join("avance_v55.administracion_usuarios","id_user = usuario_id","inner");
       $this->dbp->where("presolicitud_id",$id);
   
       $query = $this->dbp->get();   
       return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  
   public function presolicitud(){
       
       $this->dbp = $this->load->database('presolicitud',TRUE);
       $this->dbp->select("*");
       $this->dbp->from("presolicitudes");
       $query = $this->dbp->get();   
       return ($query->num_rows() > 0)?$query->result():FALSE;
   }
   
   /*
    * 
    *  busqueda de presolicitudes
    * 
    */
   
    public function get_records_busqueda_presolicitud($start = 1, $length = 1, $column_order, $column_direction, $search = false,$tipo=0,$param='') {
      
      $this->dbp = $this->load->database('presolicitud',TRUE);
      if($_SESSION['login']['GDI'] != 'Nohay'):
           
          $this->dbp->select('sucursal_id');
          $this->dbp->from("sucursales");
          $this->dbp->where("usuario_gdi",$_SESSION['login']['GDI']);
          $q = $this->dbp->get();
          $q_suc= array();
          $i=0;
          if($q->num_rows() > 0){             
            foreach( $q->result() as $suc):                
                $q_suc[$i] = $suc->sucursal_id;  
            $i++;
            endforeach;
            //$q_suc = substr($q_suc, 0, -1);
          }        
       endif;
      $param = urldecode($param);
      $suc=0;
       if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 5):
           
           $suc = $_SESSION['login']['sucursal'];
       endif;
      $start = ((($start > 0 ? $start : 1) - 1) * $length);
      $query = $this->dbp
            ->select("id_presolicitud,mes,solicitud,fecha,nombre_completo,celular,telefono_casa,correo,telefono_trabajo,trabajo_actual,
                calle_y_no_exterior,numero_interior,colonia,codigo_postal,municipio,estado,sucursal,distrito,region,enviado_sucursal,
                estatus,descripcion,fecha_resolucion,motivo_rechazo")
            ->from('solic_web.presolicitudes')
            ->join('solic_web.estatus','id_estatus = estatus', 'inner');
            if($tipo == 1):
                $query = $query->where('estatus',$param);
                
                elseif($tipo == 2):                
                $query = $query->where('sucursal',$param);
                  elseif($tipo == 3):                
                $query = $query->where('region',$param);
                    elseif($tipo == 4):                
                $query = $query->where('distrito',$param);
                
            endif;      
             if(!empty($q_suc)){
                 $query = $query->where_in("sucursal",$q_suc);
                 }
             if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 5){
          $query = $query->where("sucursal",$suc);
      }    
                 
           $query =  $query->limit($length, $start)
            ->order_by($column_order, $column_direction);
      
      
                 
    if (!empty($search)) {
        $search_terms = explode(" ", $search['value']);
        foreach ($search_terms as $term) {
            if (!empty($term)) {
                
                $query = $query->or_like('id_presolicitud', $term, 'both')
                        ->or_like('mes', $term, 'both')
                        ->or_like('solicitud', $term, 'both')
                        ->or_like('fecha', $term, 'both')
                        ->or_like('nombre_completo', $term, 'both')
                        ->or_like('celular', $term, 'both')
                        ->or_like('telefono_casa', $term, 'both')
                        ->or_like('correo', $term, 'both')
                        ->or_like('telefono_trabajo', $term, 'both')
                        ->or_like('trabajo_actual', $term, 'both')
                        ->or_like('calle_y_no_exterior', $term, 'both')
                        ->or_like('numero_interior', $term, 'both')
                        ->or_like('codigo_postal', $term, 'both')
                        ->or_like('municipio', $term, 'both')
                        ->or_like('estado', $term, 'both')
                        ->or_like('sucursal', $term, 'both')
                        ->or_like('distrito', $term, 'both')
                        ->or_like('enviado_sucursal', $term, 'both')
                        ->or_like('estatus', $term, 'both')
                        ->or_like('descripcion', $term, 'both')
                        ->or_like('fecha_resolucion', $term, 'both')
                        ->or_like('motivo_rechazo', $term, 'both');
                
                
            }            
         }
    }
    
    $query = $query->get();
    return $query->result();
      
      
  }
  
  public function get_dre($id){
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->select('usuario_dre');
      $this->dbp->from('sucursales');
      $this->dbp->where('sucursal_id',$id);
      $query = $this->dbp->get();
      return $query->row();
  }
  
  /*
   * 
   * 
   */
  public function get_gdi($id){
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->select('usuario_gdi');
      $this->dbp->from('sucursales');
      $this->dbp->where('sucursal_id',$id);
      $query = $this->dbp->get();
      return $query->row();
  }  
  
  /*
   * 
   * 
   */
  public function get_gerente($id){
      
      
      $this->db->select("U.id_user,U.login,U.nombre,U.apellido_paterno,U.apellido_materno,P.id_promotor,P.id_sucursal,P.promotor,P.numero_promotor,pr.id_perfil,pr.perfil,pu.id_sucursal ");
      $this->db->from("administracion_usuarios U");
      $this->db->join("core_promotores P","P.id_user = U.id_user","LEFT");
      $this->db->join("administracion_perfiles_usuarios pu","pu.id_user = U.id_user","INNER");
      $this->db->join("administracion_perfiles pr","pr.id_perfil=pu.id_perfil","INNER");
      $this->db->where("P.status_activo",'Si');
      $this->db->where("P.id_sucursal",$id);
      $this->db->where("pr.id_perfil",5);
      $query = $this->db->get();
      return $query->row();
      
  }
  
  public function get_RS(){
      
     $this->db->select('*');  
     $this->db->from('siava.tbl_params');
     $this->db->where('sec',2);
     $res1 = $this->db->get();
     $i=0;
     //$res2=array();
     $user_rs =array();
      if ($res1->num_rows() > 0){
            
                $res2 = $res1->result();
                $result = $res2[0]->valor;
                
                $sep_user = explode(",",$result);
                $count_us = count($sep_user);
                
                for($i=0;$i<$count_us;$i++){
                      $user_rs[$i] = $sep_user[$i];
                 }
      }
  
      return $user_rs;
      
  }
  
  public function get_user_rs($login=''){      
      
    $this->db->select('U.id_user');
    $this->db->from('administracion_usuarios U');
    $this->db->join('administracion_perfiles_usuarios pu','pu.id_user = U.id_user','INNER');
    $this->db->join('administracion_perfiles pr','pr.id_perfil=pu.id_perfil','INNER');
    $this->db->where('U.status_activo','Si');
    $this->db->where('U.login', $login);
    $query = $this->db->get();
    return $query->row();
      
      
  }
  /*
   * 
   * NOTIFICACIONES
   * 
   */
  public function get_num_notify(){
       $this->dbp = $this->load->database('presolicitud',TRUE);
       
       $this->dbp->select("COUNT(*) as Cantidad");
       $this->dbp->from("notificaciones");
       $this->dbp->where("status",0);
       $this->dbp->where("to_user",$_SESSION['login']['user_id']);
       $query = $this->dbp->get();
        return ($query->num_rows() > 0)?$query->row():0;
       //
      
  }
  
  public function get_notificacion($view=''){
     
      if($view != ''):
          //actualiza
            $this->dbp = $this->load->database('presolicitud',TRUE);
            $this->dbp->where("status", 0);
            $this->dbp->where("to_user",$_SESSION['login']['user_id']);
            $this->dbp->update("notificaciones", array("status"=>1));          
      endif;
      
      $this->dbp->select("N.comment_id,N.status,N.presolicitud_id,N.to_user,C.comment_id,C.comment_subject,
          C.comment_text,C.presolicitud_id,C.usuario_id,C.fecha,P.id_presolicitud,P.solicitud,P.sucursal,S.sucursal as NombreSuc");
      $this->dbp->from("notificaciones N");
      $this->dbp->join("comments C","C.comment_id=N.comment_id","INNER");
      $this->dbp->join("presolicitudes P","P.id_presolicitud=N.presolicitud_id","INNER");
      $this->dbp->join("avance_v55.administracion_sucursales S","S.id_sucursal=N.sucursal_id","INNER");
      //$this->dbp->where("N.status",0);
      $this->dbp->where("N.to_user",$_SESSION['login']['user_id']);
      $this->dbp->order_by("N.comment_id","DESC");
      $this->dbp->limit(5);
      $query = $this->dbp->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  public function get_notificacion_old(){
      
       $this->dbp->select("N.comment_id,N.status,N.presolicitud_id,N.to_user,C.comment_id,C.comment_subject,
          C.comment_text,C.presolicitud_id,C.usuario_id,C.fecha,P.id_presolicitud,P.solicitud");
      $this->dbp->from("notificaciones N");
      $this->dbp->join("comments C","C.comment_id=N.comment_id","INNER");
      $this->dbp->join("presolicitudes P","P.id_presolicitud=N.presolicitud_id","INNER");
      $this->dbp->where("N.to_user",$_SESSION['login']['user_id']);
      $this->dbp->order_by("N.comment_id","DESC");
      $this->dbp->limit(5);
      $query = $this->dbp->get();
      return ($query->num_rows() > 0)?$query->result():FALSE;
      
  }
  
  
  
 /*
  *  funcion  para insertar
  * 
  */
  public function insert($table = '', $data = array()){
     
      $this->dbp = $this->load->database('presolicitud',TRUE);
    //  $this->dbp = $this->load->database('local',TRUE);
    //  return $this->dbp->insert($table, $data);    
       $this->dbp->insert($table, $data);
        $insert_id = $this->dbp->insert_id();
        return  $insert_id;
  }
  
  public function insert_notification($table = '', $data = array()){
       $this->dbp = $this->load->database('presolicitud',TRUE);
      return $this->dbp->insert($table, $data); 
  }

/*
 *  funcion para actualizar
 * 
 */
  public function update($table = '', $data = array(),$campo = '', $id = 0){
      $this->dbp = $this->load->database('presolicitud',TRUE);
      $this->dbp->where($campo, $id);
      return $this->dbp->update($table, $data);
  }  

  /*
   * 
   * 
   */
  public function update_no_w($table = '', $data = array()){
     return $this->db->update($table, $data);
  }

  /*
   * 
   * 
   */
  public function get_all($table = ''){
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query->row();
  }
  public function get_all_w($table = '',$campo='',$val=0){
      
    $this->dbp = $this->load->database('presolicitud',TRUE);
    $this->dbp->select('sucursal');
    $this->dbp->from($table);
    $this->dbp->where($campo,$val);
    $query = $this->dbp->get();
    return $query->row();
    
  }

  /*
   * 
   * 
   */
  public function get_all_all($table = ''){
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query->result();
  }
  
  public function getUserDetails($anio_semana=''){
    $response = array();
    $this->db->select("num_empleado,nombre,id_sucursal,nb_bono, pb_bono, fb_bono, fbc_bono");
    $this->db->from('avance_incentivos.pago_ejecom');
    $this->db->where("anio_semana",$anio_semana);
    $q = $this->db->get();
    $response = $q->result_array();
    return $response;
  }

  


 


}
