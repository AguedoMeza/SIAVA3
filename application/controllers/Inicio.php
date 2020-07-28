<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {
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

   //$this->load->view('vistas/rh/bootgrid');

   //$data['student_data'] = $this->export_csv_model->fetch_data();
  //$this->load->view('vistas/rh/export_csv', $data);
   $this->data['gerente_info'] = $this->process_model->fetch_data();
    
    $fecha_hoy = date('Y-m-01');
    $fecha_fin = date('Y-m-t');
    $mes = date('m');
    $anio = date('Y');
    
    /** fecha mes anterior **/
    $fecha_mes_anterior = date('Y-m-01', strtotime('-1 month'));
    $mesAnterior = date('m', strtotime('-1 month'));
    $lastDayOfMOnth = date('Y-m-d', mktime(0,0,0, date('m', strtotime($fecha_mes_anterior))+1, 0, date('Y', strtotime($fecha_mes_anterior))));
    
    /**/
    $id= $_SESSION['login']['user_id'];
    $id_p = $_SESSION['login']['user_promotor'];
    $idu =  $_SESSION['login']['usuario'];
    $rol = $_SESSION['login']['rol'];
    $suc = $_SESSION['login']['sucursal'];    
    $pb=array(2,3,5,8,9);
    //$pb=array(2,3,5,7,9);
    $fb= array(4,6);

  
    if($rol == 6):
           
       /*EJECUTIVO DE VENTA*/
       $hoy = date("Y-m-d");
       $days = $this->getAllDaysInAMonth($anio,$mes);      
       $week_ec = array();
       foreach ($days as $day) {
           $week_ec[] = $this->inicio_fin_semana($day->format('Y-m-d'));           
       }
       //var_dump($week_ec);
       $lastdays = $this->getAllDaysInAMonth(date('Y',strtotime($fecha_mes_anterior)),date('m',strtotime($fecha_mes_anterior)));
       $last_month_week = array();       
       //var_dump($lastdays);
      foreach ($lastdays as $day) {
           $last_month_week[] = $this->inicio_fin_semana($day->format('Y-m-d'));           
       }
       
       
       $count_week_ec= count($week_ec);
       $count_week_ec_last = count($last_month_week);
       
       
       $this->data['rango_semana'] =  $week_ec;
       $this->data['rango_semana_ma'] =  $last_month_week;
       $this->data['porcentaje_reactivacion_campania'] = $this->process_model->parametro(1);
        
         //# MES ACTUAL
        for($i=0;$i<$count_week_ec;$i++){
            
            //$this->data['creditos_nuevos'][$i] = $this->process_model->muestra_incentivos('NB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],$fecha_fin,1);
            $this->data['creditos_nuevos'][$i] = $this->process_model->muestra_incentivos('NB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],1);
            $this->data['creditos_renovacion'][$i] = $this->process_model->muestra_incentivos('PB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],$pb);
            $this->data['creditos_reactivacion'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],$fb);
            $this->data['credito_reactivacion_tradicional'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],4);
            $this->data['credito_reactivacion_campania'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$week_ec[$i]['fi'],$week_ec[$i]['ff'],6);
        }
        //MES ANTERIOR
        for($i=0;$i<$count_week_ec_last;$i++){
             $this->data['creditos_nuevos_ma'][$i] = $this->process_model->muestra_incentivos('NB',$id,$id_p,$last_month_week[$i]['fi'],$last_month_week[$i]['ff'],1);        
             $this->data['creditos_renovacion_ma'][$i] = $this->process_model->muestra_incentivos('PB',$id,$id_p,$last_month_week[$i]['fi'],$last_month_week[$i]['ff'],$pb);        
             $this->data['creditos_reactivacion_ma'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$last_month_week[$i]['fi'],$last_month_week[$i]['ff'],$fb);
             $this->data['credito_reactivacion_tradicional_ma'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$last_month_week[$i]['fi'],$last_month_week[$i]['ff'],4);       
             $this->data['credito_reactivacion_campania_ma'][$i] = $this->process_model->muestra_incentivos('FB',$id,$id_p,$last_month_week[$i]['fi'],$last_month_week[$i]['ff'],6);
        }
          
          /**
             * 
             *  COBRANZA EJECUTIVO
             */
            //$semana_actual = date("W");
            $hoy = date("Y-m-d");
            $rango =  $this->inicio_fin_semana($hoy);
            $week = date( 'W', strtotime( $hoy ));
            $year = date('Y');
            $month = date('m');
            $no_week = $week;
            
            list($primeraSemana,$ultimaSemana) = $this->semanasMes($year,$month);  
            $semana ='';
            $first_week_month = intval($primeraSemana);
            $actual_week_month =  intval($no_week);
            //echo $first_week_month.' '.$actual_week_month;
            $x=0;
            $semanas = array();
            for($i=$first_week_month;$i<$actual_week_month;$i++){
                
                 $rango_semanal = $this->getStartAndEndDate($i,$year);
                 array_push($semanas, $rango_semanal);
                 $fi = $rango_semanal['week_start'];
                 $ff = $rango_semanal['week_end'];
                 $this->data['ejecutivo_cobranza_bucket_siete'][$x] = $this->process_model->cobranza_ejecutivo($id,$suc,$fi,$ff);                 
                 $x++;
            }
            
           // var_dump($semanas);
              /**
             * 
             *  COBRANZA EJECUTIVO MA
             */
             $mes_an = date('Y-m-d', strtotime('-1 month'));
             $Lweek = date( 'W', strtotime($mes_an));
             $anio_anterior = date('Y', strtotime($mes_an)) ;
             $mes_anterior =  date('m', strtotime($mes_an)) ;
             $Lno_week = $Lweek;
            
            list($primeraLSemana,$ultimaLSemana) = $this->semanasMes($anio_anterior,$mes_anterior); 
            //var_dump($this->semanasMes($anio_anterior,$mes_anterior));
            $semana ='';
            $first_week_last_month = intval($primeraLSemana);
            $actual_week_last_month =  intval($ultimaLSemana);
          //  echo $first_week_last_month.' '.$actual_week_last_month;
             $x=0;
            $semanas_ma = array();
            for($i=$first_week_last_month;$i<=$actual_week_last_month;$i++){
                
                 $rango_last_semanal = $this->getStartAndEndDate($i,$year);
                 array_push($semanas_ma, $rango_last_semanal);
                 $lfi = $rango_last_semanal['week_start'];
                 $lff = $rango_last_semanal['week_end'];
                 $this->data['ejecutivo_cobranza_bucket_siete_ma'][$x] = $this->process_model->cobranza_ejecutivo($id,$suc,$lfi,$lff);                 
                 $x++;
            }
            
            //var_dump($semanas_ma);
           
       elseif($rol == 5):
           
            $this->data['notificacion_count'] = $this->process_model->get_num_notify();
      $this->data['notificacion_msj'] = $this->process_model->get_notificacion();
      if(!$this->data['notificacion_msj']):
          $this->data['notificacion_msj'] = $this->process_model->get_notificacion_old();
      endif;
             //GERENTE
            $semana_actual = date("W");
            $hoy = date("Y-m-d");
            $rango =  $this->inicio_fin_semana($hoy);
            /* SEMANAS*/
            $week = date( 'W', strtotime( $hoy ));
            $year = date('Y');
            $month = date('m');
            $no_week = $week;
            $semana_anterior = date( 'W', strtotime( 'last week' ) );
            
            /** MES**/
            $f_inicio = $rango['fi'];
            $f_fin = $rango['ff'];
            
//            echo $f_inicio;
            
            $this->data['bono_gerente'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,0);
            $this->data['gerente_nb'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,1);
            $this->data['gerente_pb'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,$pb);
            $this->data['gerente_cobranza_bucket_siete'] = $this->process_model->muestra_cobranza_gerente($suc,$fecha_hoy,$fecha_fin);
            //$this->data['gerente_cobranza_bucket_siete'] = $this->process_model->muestra_cobranza_gerente($suc,$f_inicio,$f_fin);
            /** FIN MES**/
            /*MES ANTERIOR*/
            //$this->data['gerente_nb_ma'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,1);            
            $this->data['bono_gerente_ma'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,0);
            $this->data['gerente_nb_ma'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,1);
            $this->data['gerente_pb_ma'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,$pb);
            $this->data['gerente_cobranza_bucket_siete_ma'] = $this->process_model->muestra_cobranza_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth);
            
            list($primeraSemana,$ultimaSemana) = $this->semanasMes($year,$month);
            
            $this->data['bono_gerente_t']= $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,0);
            $this->data['gerente_nb_t'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,1);
            $this->data['gerente_pb_t'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_hoy,$fecha_fin,$pb);            
            
            $this->data['bono_gerente_ma_t']= $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,0);            
            $this->data['gerente_nb_ma_t'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,1);
            $this->data['gerente_pb_ma_t'] = $this->process_model->muestra_incentivos_gerente($suc,$fecha_mes_anterior,$lastDayOfMOnth,$pb);
            
            
             //SEMANAS COMPLETAS
            $last_month_week = $this->SemanasEnElMesAnterior();
            $week = $this->SemanasEnElMes();
            $count_week = count($week);
            $fecha_actual = date('Y-m-d');
           
             /**
             * 
             *  COBRANZA
             */
            
            $semana ='';
            $first_week_month = intval($primeraSemana);
            $actual_week_month =  intval($no_week);
            $x=0;
            /**SEMANAL **/
          /*  for($i=$first_week_month;$i<$actual_week_month;$i++){
                
                 $rango_semanal = $this->getStartAndEndDate($i,$year);
                 $fi = $rango_semanal['week_start'];
                 $ff = $rango_semanal['week_end'];
                 $this->data['gerente_cobranza_bucket_siete'][$x] = $this->process_model->muestra_cobranza_gerente($suc,$fi,$ff);                 
                 $x++;
            }*/
            /****/
            //MES ANTERIO COBRANZA
             $mes_an = date('Y-m-d', strtotime('-1 month'));
             $Lweek = date( 'W', strtotime($mes_an));
             $anio_anterior = date('Y', strtotime($mes_an)) ;
             $Lno_week = $Lweek;
                      
            
             /*
             * 
             * NORMALIDAD
             * 
             */
             $yestarday = date('Y-m-d', strtotime('-1 days'));
              $this->data['gerente_normalidad'] = $this->process_model->normalidad($suc,$fecha_hoy,$yestarday);
              //$this->data['bono_normalidad'] =  $this->process_model->bono_normalidad($this->data['gerente_normalidad'][0]->Normalidad);
              
              //test
              $this->data['bono_normalidad'] =  $this->process_model->bono_normalidad(73.5);
              
              $this->data['bono_normalidad_fijo'] = $this->process_model->parametro(2);
              $this->data['mejora_normalidad_porcentaje'] = $this->process_model->parametro(5);
              /*
               * 
               * NORMALIDAD MES ANTERIOR
               * 
               */
              $this->data['gerente_normalidad_ma'] = $this->process_model->normalidad($suc,$fecha_mes_anterior,$lastDayOfMOnth);
              $this->data['bono_normalidad_ma'] =  $this->process_model->bono_normalidad($this->data['gerente_normalidad_ma'][0]->Normalidad);
              
              /*
               *  normalidad anterior anterior
               */
               $fecha_ma_ma = date('Y-m-01', strtotime('-2 month'));               
               $lastDayOf_ma_ma = date('Y-m-d', mktime(0,0,0, date('m', strtotime($fecha_ma_ma))+1, 0, date('Y', strtotime($fecha_ma_ma))));
               
               $this->data['gerente_normalidad_ma_ma'] = $this->process_model->normalidad($suc,$fecha_ma_ma,$lastDayOf_ma_ma);
               $this->data['bono_normalidad_ma_ma'] =  $this->process_model->bono_normalidad($this->data['gerente_normalidad_ma_ma'][0]->Normalidad);

              
              
       endif;
    
        if($rol != 21 && $rol != 5):
<<<<<<< Updated upstream
             $this->data['vista'] = 'vistas/incentivos/ejecutivo';
=======
            // $this->data['vista'] = 'vistas/incentivos/ejecutivo';
            // $this->data['vista'] = 'vistas/rh/bootgrid';
          $this->data['vista'] = 'vistas/rh/incentivos';
>>>>>>> Stashed changes
        elseif($rol==5):
            $this->data['vista'] = 'vistas/incentivos/gerente';
           else:
           $this->data['vista'] = 'vistas/auditoria/filtro_auditoria';
       endif;
       
       $this->load->view('layouts/dashboard');
}

/*
 * 
 * 
 * 
 */
function getAllDaysInAMonth($year, $month, $day = 'Monday', $daysError = 3) {
    
    $dateString = 'first '.$day.' of '.$year.'-'.$month;
    if (!strtotime($dateString)) {
        throw new \Exception('"'.$dateString.'" is not a valid strtotime');
    }
    $startDay = new \DateTime($dateString);
    if ($startDay->format('j') > $daysError) {
        $startDay->modify('- 7 days');
    }
    $days = array();

    while ($startDay->format('Y-m') <= $year.'-'.str_pad($month, 2, 0, STR_PAD_LEFT)) {
        $days[] = clone($startDay);
        $startDay->modify('+ 7 days');      
    }
  
    return $days;
}

function export()
 {
  $file_name = 'ejecutivos_incentivos'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
   
     // get data 
     $student_data = $this->export_csv_model->fetch_data();

     // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("#Empleado","Nombre","Sucursal","NB BONO","PB BONO","FBT BONO"); 
     fputcsv($file, $header);
     foreach ($student_data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }

 //parte del DataTable
 function rhTable()
 {
   echo $this->process_model->fetch_data();
 }

 //fin DataTable

 


/*
 * 
 * 
 * 
 * 
 */
 function inicio_fin_semana($fecha){

    $diaInicio="Monday";
    $diaFin="Sunday";
    
//      $diaInicio="Sunday";
//    $diaFin="Saturday";
    
    $strFecha = strtotime($fecha);
    $fechaInicio = date('Y-m-d',strtotime('last '.$diaInicio,$strFecha));
    $fechaFin = date('Y-m-d',strtotime('next '.$diaFin,$strFecha));

    if(date("l",$strFecha)==$diaInicio){
        $fechaInicio= date("Y-m-d",$strFecha);
    }
    if(date("l",$strFecha)==$diaFin){
        $fechaFin= date("Y-m-d",$strFecha);
    }
    
    return Array("fi"=>$fechaInicio,"ff"=>$fechaFin);
}

/*
 * 
 * SEMANAS POR MES
 * 
 */
  function semanasMes($year,$month){
    
    # Obtenemos el ultimo dia del mes
    $ultimoDiaMes=date("t",mktime(0,0,0,$month,1,$year)); 
    # Obtenemos la semana del primer dia del mes
    $primeraSemana=date("W",mktime(0,0,0,$month,1,$year)); 
    # Obtenemos la semana del ultimo dia del mes
    $ultimaSemana=date("W",mktime(0,0,0,$month,$ultimoDiaMes,$year)); 
    # Devolvemos en un array los dos valores
    return array($primeraSemana,$ultimaSemana);
    
}
 /*
   * 
   * RANGO DE FECHA POR NÚMERO DE SEMANA
   * 
   */  
 function getStartAndEndDate($week, $year){
     
  $dto = new DateTime();
  $dto->setISODate($year, $week);
  $ret['week_start'] = $dto->format('Y-m-d');
  $dto->modify('+5 days');
  $ret['week_end'] = $dto->format('Y-m-d');
  return $ret;  
  
}

/*
 * 
 *  SECCION AUDITORIA
 * 
 */
public function auditoria(){
      
     $this->data['sucursales'] = $this->process_model->sucursales();     
     $this->data['vista'] = 'vistas/auditoria/filtro_auditoria';
     $this->load->view('layouts/dashboard');
     
  }
  
  /*
   * 
   *  SECCION PRE SOLICITUDES 
   * 
   */
  
  
  public function presolicitud(){
      
      $this->data['notificacion_count'] = $this->process_model->get_num_notify();
      $this->data['notificacion_msj'] = $this->process_model->get_notificacion();
//      if(!$this->data['notificacion_msj']):
//          $this->data['notificacion_msj'] = $this->process_model->get_notificacion_old();
//      endif;
      $this->data['vista'] = 'vistas/presolicitudes/importar';
      $this->load->view('layouts/dashboard');
      
  }
  
  public function sube_excel(){
      
        require getcwd().'/application/libraries/PHPExcel/Classes/PHPExcel.php';
        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']       = 'xls|xlsx|csv';
        $config['max_size']              = 10000;
        $config['max_width']            = 4000;
        $config['max_height']           = 4000;
        
        $this->load->library('upload', $config);
       // $presolicitud  = $this->input->post('presolicitudes');
        
        if (!$this->upload->do_upload('file_presolicitud')){
             $valid = false;
             $mensaje = "El archivo no es un formato valido.";
             $result['valid'] = $valid;
             $result['response'] = $mensaje;
             echo json_encode($result);
             exit(0);               

        } else {
          $data = $this->upload->data();
        }

        $objPHPExcel = PHPExcel_IOFactory::load($data['full_path']);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $repeticiones = 0;
        $titulos = $sheetData[1];    
//    unset($titulos['A']);
//    unset($titulos['B']);
      unset($sheetData[1]);
      $estatus=0;
      $i=0;
    foreach ($sheetData as $key => $row) {
        
        $this->data['solicitud_id'] = $this->process_model->get_solicitud($row['B']);
        $id_s = (!empty($this->data['solicitud_id']))?$this->data['solicitud_id']->solicitud:'';
        
        
        if($id_s == ''):
        //$row['V'] -> anterior
        if($row['T'] == 'SIN RESPUESTA'):
            $estatus = 1;
        elseif($row['T'] == 'EN PROCESO'):
            $estatus = 2;
        elseif($row['T'] == 'APROBADA'):
            $estatus = 3;
        elseif($row['T'] == 'CITADO'):
            $estatus = 4;        
        elseif($row['T'] == 'RECHAZADA'):
            $estatus = 5;
        endif;
        //if($i == 0):
        $data = array(
            'mes' => $row['A'], 
            'solicitud' => $row['B'],
            'fecha'=> $row['C'],
            'nombre_completo' => $row['D'],
            'celular'=> $row['E'], 
            'telefono_casa'=> $row['F'],
            'correo'=> $row['G'],
            'telefono_trabajo'=> $row['H'],
            'trabajo_actual'=> $row['I'],
            'calle_y_no_exterior'=> $row['J'], 
            'numero_interior'=> $row['K'], 
            'colonia'=> $row['L'],
            'codigo_postal'=> $row['M'],
            'municipio'=> $row['N'],
            'estado'=> $row['O'],
            'sucursal'=> $row['P'],
            'distrito'=> $row['Q'], 
            'region'=> $row['R'],
            'enviado_sucursal'=> $row['S'],
            'estatus'=> $estatus, 
            'fecha_resolucion'=> $row['U'], 
            'motivo_rechazo'=> $row['V']
                );
         //  'fecha_resolucion'=> $row['W'], 
         //   'motivo_rechazo'=> $row['X'] 
        $insert = $this->process_model->insert('presolicitudes',$data);
        
        endif;
        //endif;
      //  $i++;
        
        
    }
    
       $excel_file = array('upload_data' => $this->upload->data());
       $excel_file = './uploads/'.$excel_file['upload_data']['file_name'];
         //unlink($excel_file);
        $valid = true;
        $mensaje = "Se ha subido las sucursales correctamente";
        $result['valid'] = $valid;
        $result['response'] = $mensaje;
        echo json_encode($result);
        exit(0);
        
  }
  
  
  public function popup($id=0){
      
   //   $this->load->view('vistas/presolicitudes/popup');
     $id=$this->input->post('id');
     $this->data['id_presolicitud'] = array('id'=>$id);
     $this->data['estatus'] = $this->process_model->get_estatus_pre();
     $this->data['comentarios_presolicitude'] = $this->process_model->comentarios_pre($id);
      
      
      
       $vista = $this->load->view('vistas/presolicitudes/popup',array(),true);
     echo $vista;
  }
  
  public function guarda_comentario(){
      
   $data = array(); 
  $presolicitud = $this->input->post("id_pre");
  $user_id = $this->input->post('userid');
  $coment =$this->input->post('comentario');
  $estatus = $this->input->post('estatus');
  
   
   $data["comment_subject"] = substr($coment, 0, 10); 
   $data["comment_text"] = $coment;
   $data["comment_status"] = 0;
   $data["presolicitud_id"] = $presolicitud;
   $data["usuario_id"] = $user_id;
   $data["fecha"] = date('Y-m-d H:i:s');
   
   if($estatus != ""):       
       $est = array();
   $est['estatus'] = $estatus;
   $resp = $this->process_model->update('presolicitudes', $est,'id_presolicitud',$presolicitud);
       
   endif;
      
   $response = $this->process_model->insert('comments', $data);
   
   //buscamos sucursal
   $this->data['sucursal_pre'] = $this->process_model->get_all_w('presolicitudes','id_presolicitud',$presolicitud);
   $sucursal_pre=0;
   $sucursal_pre = (!empty($this->data['sucursal_pre']))?$this->data['sucursal_pre']->sucursal : '';   
   
   //obtenemos los usuarios de la sucursal   
   //DRE
//   $this->data['u_dre'] = $this->process_model->get_dre($sucursal_pre);   
   //GDI
   $this->data['u_gdi'] = $this->process_model->get_gdi($sucursal_pre);   
   //GERENTE
   $this->data['gerente'] = $this->process_model->get_gerente($sucursal_pre);
   //REDES SOCIALES
   $this->data['redes_sociales'] = $this->process_model->get_RS();
   
   
   //$dre = (!empty($this->data['u_dre']))?$this->data['u_dre']->usuario_dre : '';
   $gdi = (!empty($this->data['u_gdi']))?$this->data['u_gdi']->usuario_gdi : '';
   $gte = (!empty($this->data['gerente']))?$this->data['gerente']->id_user : '';
   $rs =  (!empty($this->data['redes_sociales']))?$this->data['redes_sociales']:'';
   //echo json_encode($dre.' '.$gdi.' '.$gte.' Comentario id'.$response);
   
   //INSERTAR LA NOTIFICACION
 /*  if($user_id != $dre):       
       $rs1 = $this->process_model->insert_notification('notificaciones',array("from_user"=>$user_id,
"to_user"=>$dre,
"sucursal_id"=>$sucursal_pre,
"presolicitud_id"=>$presolicitud,          
"comment_id"=>$response,
"status"=>0));       
   endif;*/
   
   if($user_id != $gdi):
     $rs1 = $this->process_model->insert_notification('notificaciones',array("from_user"=>$user_id,
"to_user"=>$gdi,
"sucursal_id"=>$sucursal_pre,
"presolicitud_id"=>$presolicitud,         
"comment_id"=>$response,
"status"=>0));
   endif;
   
   if($user_id != $gte):
        $rs1 = $this->process_model->insert_notification('notificaciones',array("from_user"=>$user_id,
"to_user"=>$gte,
"sucursal_id"=>$sucursal_pre,
"presolicitud_id"=>$presolicitud,            
"comment_id"=>$response,
"status"=>0));
   endif;
   
   $coun_rs = count($rs); 
   for($i=0;$i<$coun_rs;$i++){
       //enviamos usuario a sacar id
       $this->data['user_rs'] = $this->process_model->get_user_rs($rs[$i]);
       
       if(!empty($this->data['user_rs'])):
           $idurs = $this->data['user_rs']->id_user;
       
            if($user_id != $idurs):       
                    $rs1 = $this->process_model->insert_notification('notificaciones',array("from_user"=>$user_id,
                        "to_user"=>$idurs,
                        "sucursal_id"=>$sucursal_pre,
                        "presolicitud_id"=>$presolicitud,            
                        "comment_id"=>$response,
                        "status"=>0));
               endif;
       endif;
       
       
   }
   
  




  }
  
  
  public function popup_fetch(){
      
      $view = ($this->input->post('view'))?$this->input->post('view'):'';
      $id = $this->input->post('id');
      $this->data['comentarios_presolicitude'] = $this->process_model->comentarios_pre($id);
      $vista = $this->load->view('vistas/presolicitudes/comentarios_dinamicos',array(),true);
      echo $vista;     
  }
  
  
  
  public function filtro_presolicitud(){
      
      
       $redes_sociales = $_SESSION['login']['presolicitud'];
       $user_dre =  $_SESSION['login']['DRE'];
       $user_gdi = $_SESSION['login']['GDI'];
       
       //echo $redes_sociales.' '.$user_dre.' '.$user_gdi;
       
      $this->data['estatus'] = $this->process_model->get_estatus_pre();
      $this->data['sucursales_filtro'] = $this->process_model->get_sucursales();
      $this->data['region'] = $this->process_model->get_region();
      $this->data['distritos'] = $this->process_model->get_distritos();
      
      //verificamos notificaciones nuevas
      $this->data['notificacion_count'] = $this->process_model->get_num_notify();
      $this->data['notificacion_msj'] = $this->process_model->get_notificacion();
      if(!$this->data['notificacion_msj']):
          $this->data['notificacion_msj'] = $this->process_model->get_notificacion_old();
      endif;
      
      
      
     //var_dump($this->data['sucursales_filtro']);
      $this->data['vista'] = 'vistas/presolicitudes/filtro';
      $this->load->view('layouts/dashboard');
      
  }

public function dashboard_comercial(){

    $redes_sociales = $_SESSION['login']['presolicitud'];
    $user_dre =  $_SESSION['login']['DRE'];
    $user_gdi = $_SESSION['login']['GDI'];

    $this->data['estatus'] = $this->process_model->get_estatus_pre();
    $this->data['sucursales_filtro'] = $this->process_model->get_sucursales();
    $this->data['region'] = $this->process_model->get_region();
    $this->data['distritos'] = $this->process_model->get_distritos();

    //verificamos notificaciones nuevas
    $this->data['notificacion_count'] = $this->process_model->get_num_notify();
    $this->data['notificacion_msj'] = $this->process_model->get_notificacion();
    if(!$this->data['notificacion_msj']):
        $this->data['notificacion_msj'] = $this->process_model->get_notificacion_old();
    endif;

    //var_dump($this->data['sucursales_filtro']);
    $this->data['vista'] = 'vistas/dashboard/dashboard_comercial';
    $this->load->view('layouts/dashboard');

}

    public function dashboard_comercial_diario(){

        $redes_sociales = $_SESSION['login']['presolicitud'];
        $user_dre =  $_SESSION['login']['DRE'];
        $user_gdi = $_SESSION['login']['GDI'];

        $this->data['estatus'] = $this->process_model->get_estatus_pre();
        $this->data['sucursales_filtro'] = $this->process_model->get_sucursales();
        $this->data['region'] = $this->process_model->get_region();
        $this->data['distritos'] = $this->process_model->get_distritos();

        //verificamos notificaciones nuevas
        $this->data['notificacion_count'] = $this->process_model->get_num_notify();
        $this->data['notificacion_msj'] = $this->process_model->get_notificacion();
        if(!$this->data['notificacion_msj']):
            $this->data['notificacion_msj'] = $this->process_model->get_notificacion_old();
        endif;

        //var_dump($this->data['sucursales_filtro']);
        $this->data['vista'] = 'vistas/dashboard/dashboard_comercial';
        $this->load->view('layouts/dashboard');

    }


  public function notifica(){
      
      $view = ($this->input->post('view'))?$this->input->post('view'):'';      
      $this->data['notificacion_count'] = $this->process_model->get_num_notify();
      $this->data['notificacion_msj'] = $this->process_model->get_notificacion($view);
      
      $html = "";
      
       if(!empty($this->data['notificacion_msj'])):
            foreach ($this->data['notificacion_msj']  as $not):
              $html .='<div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">
                                        <small>Solicitud:'.$not->solicitud.'</small><br>
                                        '.$not->comment_text;
                                            if($not->status == 0):
                                        $html .='<span class="badge badge-danger ml-2">Nuevo</span>';
                                       endif;
                                    $html .='
                                         <br>
                                        <small>Fecha: '.$not->fecha.' <br>Sucursal: '.$not->sucursal.' '.$not->NombreSuc.'</small>
                                        </h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>';
            endforeach;
            endif;
 
      $data = array(
            'comment_text' => $html,              
            'unseen_notification'  => $this->data['notificacion_count']->Cantidad
        );
        echo json_encode($data);

  }
  
  
  public function list_pre(){
      
      $this->data['solicitudes'] = $this->process_model->presolicitud();
      
      var_dump($this->data['solicitudes']);
  }
  
  
  
  
  
 

/*
 * 
 *  RANGO DE FECHA SEMANA LUNES A DOMINGO
 *  MEDIANTE NUMERO SEMANA
 *  COBRANZA
 */

 function getEndDateWeek($week, $year) {
     
  $dto = new DateTime();
  $dto->setISODate($year, $week);
  $ret['week_start'] = $dto->format('Y-m-d');
  $dto->modify('+6 days');
  $ret['week_end'] = $dto->format('Y-m-d');
  
  $ultimo_dia_semana = $dto->format('Y-m-d');
  return $ultimo_dia_semana;
  
}
//echo $week;
//$week_array = getStartAndEndDate2(5,2020);
//print_r($week_array);
 


/*
 * 
 * SEMANA POR MES DE LUNES A DOMINGO
 * 
 */
function dateRange($begin, $end, $interval = null){
    $begin = new DateTime($begin);
    $end = new DateTime($end);
    // Because DatePeriod does not include the last date specified.
    $end = $end->modify('+1 day');
    $interval = new DateInterval($interval ? $interval : 'P1D');

    return iterator_to_array(new DatePeriod($begin, $interval, $end));
}


/*
 *
 *  FUNCION SEMANA POR MES
 *  
 *
 */

function SemanasEnElMes(){
    
    $fecha_hoy = date('Y-m-01');
    $fecha_fin = date('Y-m-t');
    $dia_fin = date('t');
    $j=1;
    $diaf = '';
    //dia finales
    for($i=1;$i <= $dia_fin;$i++){        
        if(($i%7) == 0){
             $diaf .= $i.',';
             $j++;         
        }        
    }
    
    $diaf = substr($diaf, 0, -1);
    $sep_fd = explode(",", $diaf);
    $count_d = count($sep_fd);    
    $ini_semana = array();
    $inicios = array();
    //dias iniciales
    for($i=0;$i< $count_d;$i++){     
        
       
        $fecha_actual = date("Y-m-$sep_fd[$i]");        
        $ini_semana = date("Y-m-d",strtotime($fecha_actual."- 6 days")); 
        array_push($inicios,$ini_semana);        
    }
    
    //semanas del mes
    $semanas_mes = array();
    $semana_dia_final = array();
    for($i=0;$i< $count_d;$i++){
                if(($count_d-1) == $i){
                    $semanas_mes[$i] = array('fi'=>$inicios[$i],'ff'=>date("Y-m-t"));  
                }  else{  
                $semanas_mes[$i] = array('fi'=>$inicios[$i],'ff'=>date("Y-m-$sep_fd[$i]"));  
                }
    }
    
    //var_dump($semanas_mes);
    return $semanas_mes;

    
}

function SemanasEnElMesAnterior(){
    
    $fecha_hoy = date('Y-m-01');
    $fecha_fin = date('Y-m-t');
    //$dia_fin = date('t');
    
    $fecha_mes_anterior = date('Y-m-01', strtotime('-1 month'));
    $mesAnterior = date('m', strtotime('-1 month')) ;
    $lastDayOfMOnth = date('Y-m-d', mktime(0,0,0, date('m', strtotime($fecha_mes_anterior))+1, 0, date('Y', strtotime($fecha_mes_anterior))));
    $dia_fin = date('t',mktime(0,0,0, date('m', strtotime($fecha_mes_anterior))+1, 0, date('Y', strtotime($fecha_mes_anterior))));
   // echo $dia_fin;    exit();
    
    $j=1;
    $diaf = '';
    //dia finales
    for($i=1;$i <= $dia_fin;$i++){        
        if(($i%7) == 0){
             $diaf .= $i.',';
             $j++;         
        }        
    }
    
    
    $diaf = substr($diaf, 0, -1);
    
    //echo $diaf;    exit();
    
    $sep_fd = explode(",", $diaf);
    $count_d = count($sep_fd);
    
    $ini_semana = array();
    $inicios = array();
    //dias iniciales
    for($i=0;$i< $count_d;$i++){         
        $fecha_actual = date("Y-m-$sep_fd[$i]", strtotime('-1 month'));        
        $ini_semana = date("Y-m-d",strtotime($fecha_actual."- 6 days")); 
        array_push($inicios,$ini_semana);        
    }
    
    //semanas del mes
    $semanas_mes = array();
    $semana_dia_final = array();
    for($i=0;$i< $count_d;$i++){
        if(($count_d-1) == $i){
             $semanas_mes[$i] = array('lfi'=>$inicios[$i],'lff'=>date("Y-m-t", strtotime('-1 month')));
        }else{
                $semanas_mes[$i] = array('lfi'=>$inicios[$i],'lff'=>date("Y-m-$sep_fd[$i]", strtotime('-1 month')));     
        }
    }
     //var_dump($semanas_mes);
    return $semanas_mes;     
    
}
  

   
  
  /*
   * 
   *  RANGO DE LA SEMANA QUE ESTA
   *  CORRIENDO
   */
public function dias_del_mes(){
    
    $fecha= date('Y-m-d');
    return; date('t',strtotime($fecha));
    
}

	




}