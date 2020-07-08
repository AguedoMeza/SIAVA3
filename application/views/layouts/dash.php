<?php

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Búsqueda de campañas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="<?php echo base_url('public') ?>/main.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/main_dos.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.css" />
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
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
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <!-- BUSCAR-->
               
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                
                                </div>
                                
                                <div class="widget-content-left  ml-3 header-user-info">
                              
                                </div>
                             
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
                                <li class="app-sidebar__heading">Dashboards</li>
                                 <li>
                                    <a href="<?php echo base_url(''); ?>">
                                        <i class="metismenu-icon pe-7s-key"></i>
                                       Salir
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="mm-active">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                       Campañas
                                    </a>
                                </li>
                                   
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
                                    Prestamos Avance v1.0
                                  
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public'); ?>/assets/scripts/main.js"></script>
    <!--<script src="<?php echo base_url('public/assets/scripts') ?>/jquery-3.1.1.min.js"></script>-->    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
  $('#frm_cliente').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) {
    e.preventDefault();
   muestra_info();
 //   return false;
  }
});
    $( document ).ready(function() {    
    
     $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get('<?php echo base_url('busqueda_cliente') ?>', { query: query }, function (data) {
               // console.log(data);
                data = $.parseJSON(data);
                return process(data);
            });
        },
        minLength: 3,
        autoSelect: false
      }
          
    );
/*
$('input[name=client]').on('typeahead:selected', function (e, datum) {
    console.log(datum);
       var current = $('input[name=client]').typeahead("getActive");
            $('#idc').val(current.id);
});
$('input[name=client]').on('typeahead:cursorchanged', function (e, datum) {
    console.log(datum);
       var current = $('input[name=client]').typeahead("getActive");
            $('#idc').val(current.id);
});*/

      $('input[name=client]').change(function(){
            var current = $('input[name=client]').typeahead("getActive");
              if (current) {
                  var name = $('input[name=client]').val();
                  if (current.name ==  name) {
                   $('#idc').val(current.id);
             } 
         }
           
        });
        


/*
var $text = $("#client");
$('input.typeahead').on('change', function (e) {
    var $target = $(e.target);
    if (typeahead.mousedover) {
        $text.html($text.html() + "mousedover [ignored selection]<br />");
    }
    else if ($.inArray($target.val(), contacts) < 0) {
        $text.html($text.html() + "show add<br/>");
    }
}).on('selected', function () {
    $text.html($text.html() + "selected<br />");
     $('#idc').val(current.id);
});*/


    
});
    
    function muestra_info(){
        //
        var form = $("#frm_cliente");
        var url = $("#frm_cliente").attr('action');         
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: form.serialize()
        }).done(function(response) {
               
         //    alert(response.valores);
             if(response.valid){
                  

                       var parsedObj = JSON.stringify(response.valores);
                       var stringify = JSON.parse(parsedObj);
                       //console.log(stringify); 
                      $("#campana").val(stringify[0].Campana);
                      $("#sucursal").val(stringify[0].Sucursal);
                      $("#nombre_cliente").val(stringify[0].Nombre_del_Cliente);
                      $("#monto_disponible").val(stringify[0].Monto_Disponible); 
                      $("#capital_inicial").val(stringify[0].Capital_Inicial);
                      $("#codigo").val(stringify[0].Codigo);
                      $("#informacion_cliente_campana").css("display", "block");
                      $('#btn_info').prop('disabled', true);
                      $('#cliente').prop('readonly', true);
        
              
            }else{
            /*MENSAJE DE ERRORES*/
            swal('',response.response,'error');
            }  
        
        
      })
      .fail(function(response) {
        
         console.log(response);
      })
      .always(function() {
        // console.log("complete");
      });
        
    }
    
    
    function reset_info(){
        
        $("#campana").val('');
        $("#sucursal").val('');
        $("#nombre_cliente").val('');
        $("#monto_disponible").val('');
        $("#capital_inicial").val('');
        $("#codigo").val('');
        $('#btn_info').prop('disabled', false);
        $('#cliente').prop('readonly', false);
        $("#idc").val('');
        $("#cliente").val('');
        
         $("#informacion_cliente_campana").css("display", "none");
    }
    
    
    
    
    
    </script>
    
    
    
</body>
</html>


