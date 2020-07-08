<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {

    public function __construct() {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('process_model'));
    }

    function index() {
        
    }
    
    public function busqueda_auditoria($id=0,$filtro='',$suc=0){
        
        $start = $this->input->get('start');
        $length = $this->input->get('length');
        $columns = array(
            0 => "cred.id_credito",
            1 => "cred.fecha_apertura",
            2 => "cdp.nombre_razon_social",
            3 => "cred.monto_otorgado",
            4 => "saldo_vencido",
            5 => "cred.producto",
            6 => "Telefono",
        );

        $search = $this->input->get('search');

        //ORDER
        $order = $this->input->get('order');
        $column_order = (isset($order[0]) && isset($order[0]['column']) ? $columns[$order[0]['column']] : $columns[0]);
        $column_direction = (isset($order[0]) && isset($order[0]['dir']) ? $order[0]['dir'] : 'desc');

        // Create search
        $records = $this->process_model->get_records_filtro($start, $length, $column_order, $column_direction, $search,$id,$filtro,$suc);
        $records_all = $this->process_model->get_records_filtro(0, 1000, $column_order, $column_direction, $search,$id,$filtro,$suc);
        
        
      //  var_dump($records_all);
        //  $this->output->enable_profiler(TRUE);
        
        
        $total = count($records);

        $arrayOut = array(
            "draw" => intval($this->input->get('draw')),
            "recordsTotal" => count($records_all),
            "recordsFiltered" => count($records_all),
            "data" => array()
        );

        $infoArrayx = array();

        foreach ($records as $row) {
            $infoArray = array();
            
            if($id == 1):
                 $infoArray[0] = $row->calle;
                elseif($id == 2):
                 $infoArray[0] = $row->empresa;
                 elseif($id == 3):
                 $infoArray[0] = $row->telefono;    
            endif;
            
            $infoArray[1] = $row->id_credito;
            $infoArray[2] = $row->fecha_apertura;
            $infoArray[3] = $row->nombre_razon_social . ' ' . $row->apellido_paterno.' '.$row->apellido_materno;
            $infoArray[4] = $row->monto_otorgado;
            $infoArray[5] = $row->saldo_vencido;          
            $infoArray[6] = $row->producto; 
            $infoArray[7] = $row->Telefono; 
            $infoArrayx[] = $infoArray;
        }

        $arrayOut['data'] = $infoArrayx;
        echo json_encode($arrayOut);
        
        
        
    }   
    
    public function pre_solicitudes(){
        
        $start = $this->input->get('start');
        $length = $this->input->get('length');
        $columns = array(
            0 => "id_presolicitud",
            1 => "mes",
            2 => "solicitud",
            3 => "fecha",
            4 => "nombre_completo",
            5 => "celular",
            6 => "telefono_casa",
            7 => "correo",
            8 => "telefono_trabajo",
            9 => "trabajo_actual",
            10 => "calle_y_no_exterior",
            11 => "numero_interior",
            12=>"colonia",
            13=>"codigo_postal",
            14=>"municipio",
            15=>"estado",
            16=>"sucursal",
            17=>"distrito",
            18=>"region",
            19=>"enviado_sucursal",
            20=>"estatus",
            21=>"fecha_resolucion",
            22=>"motivo_rechazo",
            23=>"id_presolicitud"
        );        
        $search = $this->input->get('search');
        //ORDER
        $order = $this->input->get('order');
        $column_order = (isset($order[0]) && isset($order[0]['column']) ? $columns[$order[0]['column']] : $columns[0]);
        $column_direction = (isset($order[0]) && isset($order[0]['dir']) ? $order[0]['dir'] : 'desc');

        // Create search
        $records = $this->process_model->get_records_presolicitud($start, $length, $column_order, $column_direction, $search);
        $records_all = $this->process_model->get_records_presolicitud(0, 1000, $column_order, $column_direction, $search);
        $total = count($records);
        
 //      $this->output->enable_profiler(TRUE);
        $arrayOut = array(
            "draw" => intval($this->input->get('draw')),
            "recordsTotal" => count($records_all),
            "recordsFiltered" => count($records_all),
            "data" => array()
        );

        $infoArrayx = array();
         foreach ($records as $row) {
            switch ($row->estatus) {
                case 1:
                    $rol = '<span>SIN RESPUESTA</span>';
                    break;
                case 2:
                    $rol = '<span>EN PROCESO</span>';
                    break;
                case 3:
                    $rol = '<span>APROBADA</span>';
                    break;
                case 4:
                    $rol = '<span>CANCELADO</span>';
                    break;
                case 5:
                    $rol = '<span>CITADO</span>';
                    break;
                case 6:
                    $rol = '<span>RECHAZADA</span>';
                    break;
                default:
                    # code...
                    break;
            }

            $infoArray = array();
            $infoArray[0] = '';
            $infoArray[1] = $row->mes;
            $infoArray[2] = $row->solicitud;
            $infoArray[3] = $row->fecha;
            $infoArray[4] = $row->nombre_completo;
            $infoArray[5] = $row->celular;
            $infoArray[6] = $row->telefono_casa;
            $infoArray[7] = $row->correo;
            $infoArray[8] = $row->telefono_trabajo;
            $infoArray[9] = $row->trabajo_actual;
            $infoArray[10] = $row->calle_y_no_exterior;
            $infoArray[11] = $row->numero_interior;
            $infoArray[12] = $row->colonia;
            $infoArray[13] = $row->codigo_postal;
            $infoArray[14] = $row->municipio;
            $infoArray[15] = $row->estado;
            $infoArray[16] = $row->sucursal;
            $infoArray[17] = $row->distrito;
            $infoArray[18] = $row->region;
            $infoArray[19] = $row->enviado_sucursal;
            $infoArray[20] = $row->descripcion;
            $infoArray[21] = $row->fecha_resolucion;
            $infoArray[22] = $row->motivo_rechazo;
   
            if($_SESSION['login']['DRE'] == 'Nohay'):
            $bufferButtons = '';
            $bufferButtons .= '<div class="btn-group">         
                            <a href="javascript:AbreComentarios('.$row->id_presolicitud.')" class="btn btn-w-m btn-primary" >Ver o agregar Comentarios</a>
                    </div>';
            $infoArray[23] = '<div class="text-center" style="margin: 0 auto; width: 200px;">' . $bufferButtons . '</div>';
           endif;
            $infoArrayx[] = $infoArray;
        }

        $arrayOut['data'] = $infoArrayx;
        echo json_encode($arrayOut);
    }


/*
 * 
 * FILTRO PRESOLICITUDES 
 * DINAMICAS
 * 
 */     
public function filtro_pre_solicitudes($tipo=0,$param=0){
        
        $start = $this->input->get('start');
        $length = $this->input->get('length');
        $columns = array(
            0 => "id_presolicitud",
            1 => "mes",
            2 => "solicitud",
            3 => "fecha",
            4 => "nombre_completo",
            5 => "celular",
            6 => "telefono_casa",
            7 => "correo",
            8 => "telefono_trabajo",
            9 => "trabajo_actual",
            10 => "calle_y_no_exterior",
            11 => "numero_interior",
            12=>"colonia",
            13=>"codigo_postal",
            14=>"municipio",
            15=>"estado",
            16=>"sucursal",
            17=>"distrito",
            18=>"region",
            19=>"enviado_sucursal",
            20=>"estatus",
            21=>"fecha_resolucion",
            22=>"motivo_rechazo",
            23=>"id_presolicitud"
        );        
        $search = $this->input->get('search');
        //$param = urlencode($param);
        
        //ORDER
        $order = $this->input->get('order');
        $column_order = (isset($order[0]) && isset($order[0]['column']) ? $columns[$order[0]['column']] : $columns[0]);
        $column_direction = (isset($order[0]) && isset($order[0]['dir']) ? $order[0]['dir'] : 'desc');

        // Create search
        $records = $this->process_model->get_records_busqueda_presolicitud($start, $length, $column_order, $column_direction, $search,$tipo,$param);
        $records_all = $this->process_model->get_records_busqueda_presolicitud(0, 1000, $column_order, $column_direction, $search,$tipo,$param);
        $total = count($records);
        
       //$this->output->enable_profiler(TRUE);
        $arrayOut = array(
            "draw" => intval($this->input->get('draw')),
            "recordsTotal" => count($records_all),
            "recordsFiltered" => count($records_all),
            "data" => array()
        );

        $infoArrayx = array();
         foreach ($records as $row) {
            switch ($row->estatus) {
                case 1:
                    $rol = '<span>SIN RESPUESTA</span>';
                    break;
                case 2:
                    $rol = '<span>EN PROCESO</span>';
                    break;
                case 3:
                    $rol = '<span>APROBADA</span>';
                    break;
                case 4:
                    $rol = '<span>CANCELADO</span>';
                    break;
                case 5:
                    $rol = '<span>CITADO</span>';
                    break;
                case 6:
                    $rol = '<span>RECHAZADA</span>';
                    break;
                default:
                    # code...
                    break;
            }

            $infoArray = array();
            $infoArray[0] = '';
            $infoArray[1] = $row->mes;
            $infoArray[2] = $row->solicitud;
            $infoArray[3] = $row->fecha;
            $infoArray[4] = $row->nombre_completo;
            $infoArray[5] = $row->celular;
            $infoArray[6] = $row->telefono_casa;
            $infoArray[7] = $row->correo;
            $infoArray[8] = $row->telefono_trabajo;
            $infoArray[9] = $row->trabajo_actual;
            $infoArray[10] = $row->calle_y_no_exterior;
            $infoArray[11] = $row->numero_interior;
            $infoArray[12] = $row->colonia;
            $infoArray[13] = $row->codigo_postal;
            $infoArray[14] = $row->municipio;
            $infoArray[15] = $row->estado;
            $infoArray[16] = $row->sucursal;
            $infoArray[17] = $row->distrito;
            $infoArray[18] = $row->region;
            $infoArray[19] = $row->enviado_sucursal;
            $infoArray[20] = $row->descripcion;
            $infoArray[21] = $row->fecha_resolucion;
            $infoArray[22] = $row->motivo_rechazo;
        
            $bufferButtons = '';
            $bufferButtons .= '<div class="btn-group">             
                            <a href="javascript:AbreComentarios('.$row->id_presolicitud.')" class="btn btn-w-m btn-primary" >Ver o agregar Comentarios</a>
                    </div>';
            $infoArray[23] = '<div class="text-center" style="margin: 0 auto; width: 200px;">' . $bufferButtons . '</div>';
           
            $infoArrayx[] = $infoArray;
        }

        $arrayOut['data'] = $infoArrayx;
        echo json_encode($arrayOut);
    }


}

