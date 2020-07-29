<?php

/*
*/

?>
<!doctype html>
<html lang="es">
<head>
   

   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SIAVA :: <?php if($this->uri->segment(1) == "auditoria"): ?>Auditoría <?php elseif($this->uri->segment(1) == "presolicitud" || $this->uri->segment(1) == 'filtro_presolicitud'): ?>Presolicitudes<?php else: ?>Gestión de incentivos<?php endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="no">    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!--<link href="<?php echo base_url('public') ?>/main.css" rel="stylesheet">-->
    <link href="<?php echo base_url('public') ?>/main_dos.css" rel="stylesheet">   
     <?php if($this->uri->segment(1) == 'auditoria'): ?> 
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public') ?>/bower_components/datatables.net-bs/css/datatables.min.css" />
       <?php endif; ?>
    <?php if($this->uri->segment(1) == 'filtro_presolicitud'): ?>
    <!-- Bootstrap library -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="<?php echo base_url('public') ?>/datapicker/datepicker3.css" rel="stylesheet">
    <?php endif; ?>
    <link type="text/css" rel="stylesheet"  type="text/css" href="http://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.css" />
    <?php if($this->uri->segment(1) == 'dashboard_comercial'): ?>
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/plugins/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/vendor/inspinia2.7/css/plugins/c3/c3.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php endif; ?>
    <style type="text/css">
        
        .dataTables_filter{
            float: right !important;
        }
        td.details-control {
            background: url('<?php echo base_url('public') ?>/resources/details_open.png') no-repeat center center;
            cursor: pointer;
        }
        tr.details td.details-control {
            background: url('<?php echo base_url('public') ?>/resources/details_close.png') no-repeat center center;
        }
    </style>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src text-right">SIAVA</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div> 
            
            
            
            
            
            <div class="app-header__content">
                <div class="app-header-left">
                    <!-- BUSCAR-->
                    <?php //echo $_SESSION['login']['nombre'] ?>
                </div>
                <div class="app-header-right">
                    <?php if($_SESSION['login']['presolicitud'] != 'Nohay' || $_SESSION['login']['GDI'] != 'Nohay' || $_SESSION['login']['rol']== 5): ?>
                    <!-- NOTIFICACIONES-->
                    <div id="notifys" class="header-dots">
                         <div class="dropdown">
                        <button id="bell" type="button" onclick="CierraAlert()" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-danger"></span>
                                <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>                                
                                <span id="alert_noti" class="badge badge-dot badge-dot-sm badge-danger count" style="<?php if($this->data['notificacion_count']->Cantidad != 0): ?> display:block;<?php else: ?> display:none;<?php endif;?>">Notifications</span>                                
                            </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header mb-0">
                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                    <!--<div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>-->
                                    <div class="menu-header-content text-dark">
                                        <h5 class="menu-header-title">Notificaciones Redes Sociales</h5>
                                        <h6 class="menu-header-subtitle">Tienes <b id="contador_noti"><?php echo $this->data['notificacion_count']->Cantidad ?></b> notificaciones sin leer</h6>
                                    </div>
                                </div>
                            </div>
                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                <li class="nav-item">
                                    <!--<a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">-->
                                        <span>Notificaciones</span>
                                    <!--</a>-->
                                </li>                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">                                                
                                                <div class="notifications-box">                                                    
                                                    <div id="notificaciones_list" class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                        <?php 
                                                        if(!empty($this->data['notificacion_msj'])):
                                                            foreach ($this->data['notificacion_msj']  as $not):
                                                            ?>
                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">
                                                                        <small>Solicitud: <?php echo $not->solicitud ?></small><br>
                                                                        <?php
                                                                        echo $not->comment_text;
                                                                        ?>
                                                                        <?php if($not->status == 0): ?>
                                                                        <span class="badge badge-danger ml-2">Nuevo</span>
                                                                        <?php endif; ?>
                                                                        <br>
                                                                        <small><?php echo $not->fecha ?> <br>Sucursal: <?php echo $not->sucursal.' '.$not->NombreSuc ?></small>
                                                                    </h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                            <?php
                                                            endforeach;
                                                        endif;
                                                        ?>                                                
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                   
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- FIN NOTIFICACION -->
                    <?php endif; ?>
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php echo base_url('public') ?>/assets/images/avatars/user_d.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style=""> </div>                                              
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="<?php echo base_url('public') ?>/assets/images/avatars/user_d.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"><?php echo $_SESSION['login']['nombre'] ?></div>
                                                                    <div class="widget-subheading opacity-8">
                                                                        <!--Comercial Ejecutivo-->
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <!--<button class="btn-pill btn-shadow btn-shine btn btn-focus">Salir</button>-->
                                                                    <a href="<?php echo base_url('salir') ?>" tabindex="0" class="btn-pill btn-shadow btn-shine btn btn-focus">Salir</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">            
                                    <div class="widget-heading">
                                        <?php echo $_SESSION['login']['nombre'] ?>                                        
                                    </div>
                                    <div class="widget-subheading">
                                        <!--Ejecutivo Comercial-->
                                    </div>
                                </div>
                                <!--
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
                           
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                 <?php if($_SESSION['login']['auditor'] == 'Nohay' && $_SESSION['login']['presolicitud'] == 'Nohay' && $_SESSION['login']['DRE'] == 'Nohay' && $_SESSION['login']['GDI'] == 'Nohay' ): ?>
                                <li>
                                    <a href="<?php echo base_url('') ?>" class="<?php if($this->uri->segment(1) == "" ||$this->uri->segment(1) == "inicio" ): ?>mm-active<?php endif;?>">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                       Incentivos
                                    </a>
                                </li>
                                <?php if( $_SESSION['login']['rol'] == 5): ?>
                               <!--  <li>
                                    <a href="<?php //echo base_url('filtro_presolicitud') ?>" class="<?php //if($this->uri->segment(1) == "filtro_presolicitud"): ?>mm-active<?php //endif;?>">
                                        <i class="metismenu-icon lnr-file-empty"></i>
                                       Presolicitudes Redes Soc
                                    </a>
                                </li> -->
                                
                                <?php endif; ?>
                                <?php elseif( $_SESSION['login']['auditor'] != 'Nohay'): ?>
                                 <!-- <li>
                                    <a href="<?php //echo base_url('auditoria') ?>" class="<?php //if($this->uri->segment(1) == "auditoria"): ?>mm-active<?php //endif;?>">
                                        <i class="metismenu-icon fa fa-calculator"></i>
                                       Auditoría
                                    </a>
                                </li> -->
                                 <?php elseif( $_SESSION['login']['presolicitud'] != 'Nohay'): ?>
                                <li>
                                    <!-- <a href="<?php //echo base_url('presolicitud') ?>" class="<?php //if($this->uri->segment(1) == "presolicitud"): ?>mm-active<?php //endif;?>">
                                        <i class="metismenu-icon lnr-cloud-upload"></i>
                                        Importar Presolicitudes
                                    </a> -->
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('filtro_presolicitud') ?>" class="<?php if($this->uri->segment(1) == "filtro_presolicitud"): ?>mm-active<?php endif;?>">
                                        <i class="metismenu-icon lnr-file-empty"></i>
                                       Gestion Presolicitudes Redes S
                                    </a>
                                </li>
                                 <?php elseif( $_SESSION['login']['DRE'] != 'Nohay'): ?>
                                <li>
                                    <a href="<?php echo base_url('filtro_presolicitud') ?>" class="<?php if($this->uri->segment(1) == "filtro_presolicitud"): ?>mm-active<?php endif;?>">
                                        <i class="metismenu-icon lnr-file-empty"></i>
                                       Gestion Presolicitudes Redes S
                                    </a>
                                </li>
                                 <?php elseif( $_SESSION['login']['GDI'] != 'Nohay'): ?>
                                <li>
                                    <a href="<?php echo base_url('filtro_presolicitud') ?>" class="<?php if($this->uri->segment(1) == "filtro_presolicitud"): ?>mm-active<?php endif;?>">
                                        <i class="metismenu-icon lnr-file-empty"></i>
                                       Gestion Presolicitudes Redes S
                                    </a>
                                </li>
                                <?php endif; ?>
                                <!-- <li>
                                    <a data-toggle="dropdown" class="dropdown-toggle <?php //if($this->uri->segment(1) == "dashboard_comercial"): ?>mm-active<?php //endif;?>">
                                        <i class="metismenu-icon lnr-pie-chart"></i>
                                        Dashboard Comercial
                                    </a class>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php //echo base_url('dashboard_comercial/diario') ?>">Diario</a>
                                        <a class="dropdown-item" href="<?php //echo base_url('dashboard_comercial/semanal') ?>">Semanal</a>
                                        <a class="dropdown-item" href="<?php //echo base_url('dashboard_comercial/mensual') ?>">Mensual</a>
                                    </div>
                                </li> -->
<!--                                <li>
                                    <a href="#" class="">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                       Simulador
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>            
                <div class="app-main__outer">
                    <div class="app-main__inner">
                         <?php
                         if ($this->data['vista'] !== ''):
                             echo $this->load->view($this->data['vista'], array(), TRUE);
                         endif;
                         ?>
                    </div>                
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    
                                </div>
                                <div class="app-footer-right">
                                  
                                </div>
                            </div>
                        </div>
                    </div>    
            
            </div>
                <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        </div>
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title">Comentarios</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
     <script type="text/javascript" src="<?php echo base_url('public'); ?>/assets/scripts/main_dos.js"></script>     
     <?php if($this->uri->segment(1) == 'auditoria'): ?> 
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>
     <script type="text/javascript" src="<?php echo base_url('public') ?>/dataTables/dataTables.bootstrap4.min.js"></script>
    <!--<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>-->
    <?php endif; ?>
    <?php if($this->uri->segment(1) == 'filtro_presolicitud'): ?>
      <!-- Data picker -->
   <script src="<?php echo base_url('public') ?>/datapicker/bootstrap-datepicker.js"></script>
 
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
   <?php endif;?>
    <?php if($this->uri->segment(1) == 'dashboard_comercial'): ?>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/inspinia.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/rickshaw/vendor/d3.v3.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/chartist/chartist.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/chartJs/Chart.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/d3/d3.min.js"></script>
        <script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/plugins/c3/c3.min.js"></script>
    <?php endif;?>
<!--<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>    
    <script type="text/javascript">
        
        function tipo_filtro(id){
        
            if(id == 1){

                $("#titulo_tipo").text('Domicilio');
                $("#id_filtro").val(1);
                $("#busqueda_campos").css('display','block');
                $("#sucursal").prop("selectedIndex", 0); 

            }
            else if(id== 2){
                $("#titulo_tipo").text('Razón Social');
                $("#id_filtro").val(2);
                $("#busqueda_campos").css('display','block');
                $("#sucursal").prop("selectedIndex", 0); 

            }
            else if(id== 3){
                $("#titulo_tipo").text('Teléfono');
                $("#id_filtro").val(3);
                $("#busqueda_campos").css('display','block');
                $("#sucursal").prop("selectedIndex", 0); 

            }
            else if(id== 4){
                $("#titulo_tipo").text('Ocupación');
                $("#id_filtro").val(4);
                $("#busqueda_campos").css('display','block');
                $("#sucursal").prop("selectedIndex", 0); 

            }
            else if(id== ""){
                $("#titulo_tipo").text('');
                $("#id_filtro").val("");
                $("#busqueda_campos").css('display','none');
                $("#sucursal").prop("selectedIndex", 0); 

            }
    }
    
    function show_table(){
        
        var tipo = $("#bfiltro").val();
        var id = $("#id_filtro").val();
        var suc = $("#sucursal").val();
        var count = tipo.length;
        //alert(count);
        if(count< 4){
            
              swal('','Para iniciar la búsqueda requieres un mínimo de 4 caracteres.','error');
            
        }else{
        
         if(suc != ""){
           $("#lista_busqueda_tipo").css('display','block');
             var table = $('#filtro_busqueda_tbl').DataTable();
                table.destroy();
         $(document).ready(function() {
          $('#filtro_busqueda_tbl').DataTable({
          "ajax": '<?php echo base_url('ajax/busqueda_auditoria/') ?>'+id+'/'+tipo+'/'+suc,
          'paging'      : true,
       //   'pageLength':5,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'responsive': true,
          'autoWidth'   : false,
              "oLanguage": {
                 "sSearch": "Buscar:",
                    "oPaginate": {
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
               }
                }
        })
        })
        
        }else{
        swal('','Seleccione una sucursal para iniciar la búsqueda.','error');
        }
        }
    }
    
    function show_table2(){
        
        var tipo = $("#bfiltro").val();
        var id = $("#id_filtro").val();
        var suc = $("#sucursal").val();
      //  var count = tipo.length;
        //alert(count);
        
        
         if(suc != ""){
           $("#lista_busqueda_tipo").css('display','block');
             var table = $('#filtro_busqueda_tbl').DataTable();
                table.destroy();
         $(document).ready(function() {
          $('#filtro_busqueda_tbl').DataTable({
          "ajax": '<?php echo base_url('ajax/busqueda_ejecutivos/') ?>'+id+'/'+tipo+'/'+suc,
          'paging'      : true,
       //   'pageLength':5,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'responsive': true,
          'autoWidth'   : false,
              "oLanguage": {
                 "sSearch": "Buscar:",
                    "oPaginate": {
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
               }
                }
        })
        })
        
        }else{
        swal('','Seleccione una sucursal para iniciar la búsqueda.','error');
        
        }
    }
    
    
    
    
    
    
    
         function GuardaPresolicitud(){
         
         
            var form =new FormData($("#frm_presolicitud")[0]);
            var url = $("#frm_presolicitud").attr('action');
        
      $.ajax({
          url: url,
          type: 'POST',
          dataType: 'json',
          data: form,
          contentType: false,
          processData: false
      })
      .done(function(response) {
          console.log(response);
           
        if (response.valid) {            
            swal({title:'',text:response.response,type:'success'}).then(function() {
               // $("#frm_depa input[type=file]").val("");
               location.reload();
              });
            }else{
            /*MENSAJE DE ERRORES*/
            swal('',response.response,'error');
            }  
        
        
      })
      .fail(function(response) {
        console.log("error");
         console.log(response);
      })
      .always(function() {
        // console.log("complete");
      });

    
    
}   
/* responsive: {
              details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function ( row ) {
                        var data = row.data();
                        return 'Detalle para '+data[3]+' con Solicitud '+data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        },*/
/* 'responsive':true,
             columnDefs: [
                 { targets: [0, 1,2,3,4,5,19,22], visible: true},
                 { targets: '_all', visible: false }
             ],*/

// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
    //alert(view);
 $.ajax({
  url:"<?php echo base_url("inicio/notifica") ?>",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
     // alert(data.unseen_notification);
     $('#notificaciones_list').html(data.comment_text);    
   if(data.unseen_notification > 0)
   {
    if(view == ''){$('.count').css("display","block");}
    $('#contador_noti').html(data.unseen_notification);    
   }
   if(data.unseen_notification == 0){
       $('.count').css("display","none");
       $('#contador_noti').html(data.unseen_notification); 
   }

//      $('#notifys').empty();
//      $('#notifys').append(data);
   
  /* $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }*/
  }
 });
}

$(document).ready(function(){
        load_unseen_notification();
// submit form and get new records
// load new notifications
    //$(document).on('click', '#bell', function(){
  
    //});
    setInterval(function(){
     load_unseen_notification();   
    }, 9000);
    
});
    
      function CierraAlert(){
    $('.count').css("display","none");    
    load_unseen_notification('yes');
    }
     
     
<?php if($this->uri->segment(1) == 'filtro_presolicitud'): ?>

   $(document).ready(function(){
       
        $('#presolicitudes_tbl').DataTable({
             "ajax": '<?php echo base_url('ajax/pre_solicitudes') ?>',
             'paging' : true,
               responsive: {
                    details: {
                        type: 'column'
                       // target: 'tr'
                    }
              },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: 0
                }],
                    <?php if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 32): ?> 
                    dom: 'Bfrtip',
                buttons: [
           {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel',
                exportOptions: {
                    columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
            }
        ],
        <?php endif; ?>
             'lengthChange' : false,
             'searching' : true,
             'ordering'   : true,
             'info'         : true,                
             "oLanguage": {
                "sSearch": "Buscar: ",
              "oPaginate": {
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
        
      },
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros"
  }
  
        });
        
      });
      

//$("#presolicitudes_tbl tbody").on("click", ".btn .btn-w-m .btn-primary .openBtn", function () {
 /* $(document).ready(function(){
 $('.btn .btn-w-m .btn-primary .openBtn').on('click',function(){
   // $('.modal-body').load('<?php echo base_url('inicio/popup') ?>',function(){
        $('#myModal').modal({show:true});
   // });
    
   
});
});*/
 
     
     function AbreComentarios(id){
         
         
         $.ajax({
        type: "POST",
        url: "<?php echo base_url('inicio/popup') ?>",
        data:{id:id},
        dataType: 'html'
         })
        .done(function(response) {      
                      $('.modal-body').empty();
                      $('.modal-body').append(response);
                        // show modal
                     
                      $('#myModal').modal('show');
                      $('#myModal').addClass('show');
                      $('.modal-backdrop').addClass('show');
                      
            })
        .fail(function(response) {
                console.log(response);
             })
            .always(function() {
               // console.log("complete");
               });
   
         
     }
     
       function guarda_comentario(){
  
  
   if($('#comentario').val() != '')
 {
  var form_data = $("#frm_comments").serialize();
  //alert(form_data);
  $.ajax({
   url:"<?php echo base_url('guarda_comentario') ?>",
   method:"post",
   data:form_data,
   success:function(data)
   {
      // alert(data);
    $('#frm_comments')[0].reset();
     load_unseen_comment();
     load_unseen_notification(); 
   }
  });
 }
 else
 {
 
  //alert("Both Fields are Required");
  swal('','Es necesario escribir un comentario.','error');
 }
  
  } 
    
    // mostrar comentario al instante
function load_unseen_comment(view = ''){

    var id = $("#id_pre").val();
    var estatus = $("#estatus").val();
    
$.ajax({
  url:"<?php echo base_url('inicio/popup_fetch') ?>",
  method:"POST",
  data:{view:view,id:id},
  dataType:"html",
  success:function(data)
  {
      //alert(data);
      $('#list_comment').empty();
      $('#list_comment').append(data);
      if(estatus != ""){
      CargaTabla();
  }
      /*  if(data.unseen_notification > 0) 
        { 
            $('.count').html(data.unseen_notification);
  
        }*/
  }
 });

}

  function CargaTabla(){
  
   $(document).ready(function(){
        var table = $('#presolicitudes_tbl').DataTable();
            table.destroy();
        $('#presolicitudes_tbl').DataTable({
             "ajax": '<?php echo base_url('ajax/pre_solicitudes') ?>',
             'paging' : true,
               responsive: {
                    details: {
                        type: 'column'
                       // target: 'tr'
                    }
              },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: 0
                }],
                   <?php if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 32): ?> 
                    dom: 'Bfrtip',
                buttons: [
           {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel',
                exportOptions: {
                    columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
            }
        ],
        <?php endif; ?>
             'lengthChange' : false,
             'searching' : true,
             'ordering'   : true,
             'info'         : true,                
             "oLanguage": {
                "sSearch": "Buscar: ",
              "oPaginate": {
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
        
      },
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros"
  }
  
        })
        
      });
  
  }   
  
   $(document).ready(function(){
          var mem = $('#data_1 .date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "dd-mm-yyyy"
    
          })
          
          var mem = $('#data_2 .date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "dd-mm-yyyy"
    
          })
          })
          
   function tipo_filtro_pre(id){
   
        if(id == 1){
         
         $("#tipo_estatus").css("display","block");
         $("#sucs").css("display","none");
         $("#region").css("display","none");
         $("#distrito").css("display","none");
         $("select#sucursales option:eq(0)").prop('selected', true);
         $("select#regiones option:eq(0)").prop('selected', true);
         $("select#distritos option:eq(0)").prop('selected', true);
         
         //$("#fi").val("");
         //$("#ff").val("");
         
        }else if(id == 2){
             $("#sucs").css("display","block");
             $("#tipo_estatus").css("display","none");
             $("#region").css("display","none");
             $("#distrito").css("display","none");
             $("select#status option:eq(0)").prop('selected', true);
             $("select#regiones option:eq(0)").prop('selected', true);
             $("select#distritos option:eq(0)").prop('selected', true);
             
        }else if(id == 3){
            
             $("#region").css("display","block");
             
             $("#tipo_estatus").css("display","none");
             $("#sucs").css("display","none");
             $("#distrito").css("display","none");             
             $("select#status option:eq(0)").prop('selected', true);
             $("select#sucursales option:eq(0)").prop('selected', true);
             $("select#distritos option:eq(0)").prop('selected', true);
             
        }else if(id == 4){
             $("#distrito").css("display","block");  
             
             $("#tipo_estatus").css("display","none");
             $("#sucs").css("display","none");
             $("#region").css("display","none");             
             $("select#status option:eq(0)").prop('selected', true);
             $("select#sucursales option:eq(0)").prop('selected', true);
             $("select#regiones option:eq(0)").prop('selected', true);
             
        }else if(id == ""){
            $("#tipo_estatus").css("display","none");
            $("#sucs").css("display","none");
            $("#region").css("display","none");
            $("#distrito").css("display","none");
            $("select#status option:eq(0)").prop('selected', true);
            $("select#sucursales option:eq(0)").prop('selected', true);
            $("select#regiones option:eq(0)").prop('selected', true);
            $("select#distritos option:eq(0)").prop('selected', true);
            //$("#fi").val("");
            //$("#ff").val("");
            
        }
            
   
   
   }
 
 function TablaFiltro(id){
     
     var param;
     if(id == 1){
         param = $("#status").val();
     }else if(id == 2){
         param = $("#sucursales").val();
     }else if(id == 3){
         param = $("#regiones").val();
     }else if(id == 4){
         param = $("#distritos").val();
     }
     
    // alert(id+' '+param);
      $(document).ready(function(){
        var table = $('#presolicitudes_tbl').DataTable();
            table.destroy();
        $('#presolicitudes_tbl').DataTable({
             "ajax": '<?php echo base_url('ajax/filtro_pre_solicitudes') ?>/'+id+'/'+param,
             'paging' : true,
               responsive: {
                    details: {
                        type: 'column'
                    }
              },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: 0
                }],
                  <?php if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 32): ?> 
                    dom: 'Bfrtip',
                buttons: [
           {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel',
                exportOptions: {
                    columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
            }
        ],
        <?php endif; ?>
             'lengthChange' : false,
             'searching' : true,
             'ordering'   : true,
             'info'         : true,                
             "oLanguage": {
                "sSearch": "Buscar: ",
              "oPaginate": {
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
        
      },
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros"
  }
  
        })
        
      });
     
 }
     
       <?php endif; ?>
   
    </script>
     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</body>
</html>


