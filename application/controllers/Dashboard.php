<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
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


    public function diario(){

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
        $this->data['vista'] = 'vistas/dashboard/dashboard_comercial_diario';
        $this->load->view('layouts/dashboard');

    }

    public function semanal(){

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
        $this->data['vista'] = 'vistas/dashboard/dashboard_comercial_semanal';
        $this->load->view('layouts/dashboard');

    }

    public function mensual(){

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
        $this->data['vista'] = 'vistas/dashboard/dashboard_comercial_mensual';
        $this->load->view('layouts/dashboard');

    }

  
  
 

/*
 * 
 *  RANGO DE FECHA SEMANA LUNES A DOMINGO
 *  MEDIANTE NUMERO SEMANA
 *  COBRANZA
 */






/*
 *
 *  FUNCION SEMANA POR MES
 *  
 *
 */






}