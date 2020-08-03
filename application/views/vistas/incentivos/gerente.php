<?php

$fecha_mes_anterior = date('2020-06-01', strtotime('-1 month'));
$lastDayOfMOnth = date('Y-m-d', mktime(0,0,0, date('m', strtotime($fecha_mes_anterior))+1, 0, date('Y', strtotime($fecha_mes_anterior))));


$gerente_monto = 0;$gerente_bono = 0;$gerente_cantidad=0;
if(!empty($this->data['bono_gerente'])):    
    foreach($this->data['bono_gerente'] as $g):
     $gerente_monto = $g->monto_otorgado;
     $gerente_bono = $g->bono;
     $gerente_cantidad = $g->cantidad;
    endforeach;
endif;

$nb_gerente_mo=0;$nb_gerente_bono=0;$nb_cantidad =0;
if(!empty( $this->data['gerente_nb'] )):
    
     foreach($this->data['gerente_nb'] as $gnb):
       $nb_gerente_mo =    $gnb->monto_otorgado;
       $nb_gerente_bono = $gnb->bono;
       $nb_cantidad = $gnb->cantidad;
       
    endforeach; 
endif;

if($nb_gerente_mo != 0 && $gerente_monto !=0 ):
$porcentaje_nb = number_format((($nb_gerente_mo *100) /$gerente_monto), 2, '.', ',');
else:
    $porcentaje_nb = 0;
endif;

$pb_gerente_mo=0;$pb_gerente_bono=0;$pb_cantidad =0;
if(!empty( $this->data['gerente_pb'] )):
    
     foreach($this->data['gerente_pb'] as $gpb):
       $pb_gerente_mo =    $gpb->monto_otorgado;
       $pb_gerente_bono = $gpb->bono;
       $pb_cantidad = $gpb->cantidad;
    endforeach; 
endif;
if($pb_gerente_mo != 0 && $gerente_monto != 0 ):
$porcentaje_pb = number_format((($pb_gerente_mo *100) /$gerente_monto), 2, '.', ',');
else:
    $porcentaje_pb = 0;
endif;

echo $porcentaje_nb."por";
$penalizacion = 0;
$incentivo_nb='';
if($porcentaje_nb < 30){
    $cantidad = ($gerente_bono * 0.20);
    $penalizacion = $gerente_bono - $cantidad;
    $incentivo_nb = '-20%';
}
if($porcentaje_nb >= 30  && $porcentaje_nb < 40){
    $penalizacion = $gerente_bono + 800;
     $incentivo_nb = '800.00';
}
if($porcentaje_nb >= 40 && $porcentaje_nb < 50){
    $penalizacion = $gerente_bono + 2000;
     $incentivo_nb = '2000.00';
}
if($porcentaje_nb >= 50){
    $penalizacion = $gerente_bono + 3000;
     $incentivo_nb = '3000.00';
}


$penalizacion_pb=0;
 $incentivo_pb = '';
if($porcentaje_pb < 30){
    $penalizacion_pb = $penalizacion - 1000;
    $incentivo_pb = '-1,000.00';
    echo "1";
}
if($porcentaje_pb >= 30  && $porcentaje_pb < 40){
    $penalizacion_pb = $penalizacion + 600;
    $incentivo_pb = '600.00';
    echo "2";
}
if($porcentaje_pb >= 40  && $porcentaje_pb < 50){
    $penalizacion_pb = $penalizacion + 1000;
    $incentivo_pb = '1000.00';
    echo "3";
}
if($porcentaje_pb >= 50){
     $penalizacion_pb = $penalizacion + 2000;    
     $incentivo_pb = '2000.00';
}


//echo $_SESSION['login']['user_id'];
//echo $_SESSION['login']['sucursal'];
$cobranza_porcentaje = 0;
$cobranza_monto = 0;
$cobranza_bono =0;
$cobranza_semana = 0;
$cobranza_anio = '';
$year = date('Y');
$next_year = date("Y",strtotime($year."+ 1 year"));
$semana_actual = date("W");
$semanas_anuales =  idate('W', mktime(0, 0, 0, 12, 28, $year));

$CI =& get_instance();
$CI->load->model('process_model');

if(!empty($this->data['gerente_cobranza_bucket_siete'])):
    foreach($this->data['gerente_cobranza_bucket_siete'] as $cobranza):
    $cobranza_porcentaje = $cobranza->Porcentaje_Recuperacion;
    $count_week = count($this->data['gerente_cobranza_bucket_siete']);
    
    if($cobranza_porcentaje   <= 59.99){
       
        $result = $CI->process_model->bono_cobranza_gerente(1);
                    foreach($result as $row){ 
                          $cobranza_bono = $row->bono;                    
                      }
    }elseif($cobranza_porcentaje >= 60.00 && $cobranza_porcentaje  <= 65.00 ){
        $result = $CI->process_model->bono_cobranza_gerente(2);
                    foreach($result as $row){ 
                          $cobranza_bono = $row->bono;                    
                      }
      //  $cobranza_bono = 500;
    }elseif($cobranza_porcentaje > 65.00 && $cobranza_porcentaje  <= 70.00){
         $result = $CI->process_model->bono_cobranza_gerente(3);
                    foreach($result as $row){ 
                          $cobranza_bono = $row->bono;                    
                      }
       //  $cobranza_bono = 750;
    }elseif($cobranza_porcentaje > 70.00 && $cobranza_porcentaje <= 75.00){
         $result = $CI->process_model->bono_cobranza_gerente(4);
                    foreach($result as $row){ 
                          $cobranza_bono = $row->bono;                    
                      }
       //  $cobranza_bono = 1000;
    }elseif($cobranza_porcentaje > 75.00){
         $result = $CI->process_model->bono_cobranza_gerente(5);
                    foreach($result as $row){ 
                          $cobranza_bono = $row->bono;                    
                      }
        // $cobranza_bono = 1250;
    }
    
    endforeach;         
    
endif;


//var_dump($this->data['gerente_cobranza_bucket_siete']);
/*
    if($cobranza_porcentaje >= 0.60 && $cobranza_porcentaje  <= 0.65 ){
        $cobranza_bono = 500;
    }elseif($cobranza_porcentaje > 0.65 && $cobranza_porcentaje  <= 0.70){
         $cobranza_bono = 750;
    }elseif($cobranza_porcentaje > 0.70 && $cobranza_porcentaje <= 0.75){
         $cobranza_bono = 1000;
    }elseif($cobranza_porcentaje > 0.75){
         $cobranza_bono = 1250;
    }
    */

//echo $next_year;
//var_dump($this->data['gerente_cobranza_bucket_siete']);

    
    
    
//    var_dump($this->data['gerente_normalidad'] );
  //  var_dump($this->data['bono_normalidad']);
//    echo $_SESSION['login']['sucursal'].'<br>';  
//    var_dump($this->data['gerente_normalidad_ma'] );
//    var_dump($this->data['bono_normalidad_ma'] );
    
/*
 * 
 *  NORMALIDAD
 * 
 * 
 */    
     if($this->data['gerente_normalidad'][0]->Normalidad < 65.0){   
 //if($this->data['gerente_normalidad'][0]->Normalidad > 65.0){
     
     $total_bono_normalidad =0;
     $normalidad = $this->data['gerente_normalidad'][0]->Normalidad;
     $normalidad_ma = $this->data['gerente_normalidad_ma'][0]->Normalidad;
     $bono_cn = (!empty($this->data['bono_normalidad']))?$this->data['bono_normalidad'][0]->bono : '0.00';
     
     $bono_fijo = $this->data['bono_normalidad_fijo'][0]->valor;
     $porcentaje_mejora = $this->data['mejora_normalidad_porcentaje'][0]->valor;
     
     //$normalidad = 55.5;
     //$normalidad_ma = 4.55;
     $diferencia =  $normalidad - $normalidad_ma;
     $dif_cantidad = ($diferencia/$porcentaje_mejora);
     $total_bono = $bono_fijo * $dif_cantidad;
     
     if($normalidad == $normalidad_ma){         
         //$total_bono_normalidad = ''
         
     }elseif($normalidad < $normalidad_ma){
         //menor
        $total_bono_normalidad   =  $bono_cn + $total_bono;     
                  
     }elseif($normalidad > $normalidad_ma){
         //mayor
         $total_bono_normalidad   =  $bono_cn + $total_bono;
         
         
     }
     
     
 }else{
     // es mayor a 65
     $total_bono_normalidad =0;
     $normalidad = $this->data['gerente_normalidad'][0]->Normalidad;
     $normalidad_ma = $this->data['gerente_normalidad_ma'][0]->Normalidad; 
     $bono_cn = (!empty($this->data['bono_normalidad']))?$this->data['bono_normalidad'][0]->bono : '0.00';
     
     $bono_fijo = $this->data['bono_normalidad_fijo'][0]->valor;
     $porcentaje_mejora = $this->data['mejora_normalidad_porcentaje'][0]->valor;
     
     //$normalidad = 85.5;
     //$normalidad_ma = 72.0;
     $diferencia =  $normalidad - $normalidad_ma;
     
     
     $dif_cantidad = ($diferencia/$porcentaje_mejora);
     $total_bono = $bono_fijo * $dif_cantidad;
     // echo $total_bono;
     if($normalidad == $normalidad_ma){         
         //$total_bono_normalidad = ''
         
     }elseif($normalidad < $normalidad_ma){
         //menor
        $total_bono_normalidad   =  $bono_cn + $total_bono;
        
                  
     }elseif($normalidad > $normalidad_ma){
         //mayor
         $total_bono_normalidad   =  $bono_cn;
         
         
     }
     
     
     
 }   
    
 //echo $total_bono_normalidad;
    
    
    
    
/*
 * 
 *  MESEs ANTERIOR GERENTE
 * 
 * 
 */

 $gerente_monto_ma = 0;$gerente_bono_ma = 0;$gerente_cantidad_ma=0;
if(!empty($this->data['bono_gerente_ma'])):    
    foreach($this->data['bono_gerente_ma'] as $g):
     $gerente_monto_ma = $g->monto_otorgado;
     $gerente_bono_ma = $g->bono;
     $gerente_cantidad_ma = $g->cantidad;
    endforeach;
endif;

$nb_gerente_mo_ma=0;$nb_gerente_bono_ma=0;$nb_cantidad_ma =0;
if(!empty( $this->data['gerente_nb_ma'] )):
    
     foreach($this->data['gerente_nb_ma'] as $gnb):
       $nb_gerente_mo_ma =    $gnb->monto_otorgado;
       $nb_gerente_bono_ma = $gnb->bono;
       $nb_cantidad_ma = $gnb->cantidad;
       
    endforeach; 
endif;

if($nb_gerente_mo_ma != 0 && $gerente_monto_ma !=0 ):
$porcentaje_nb_ma = number_format((($nb_gerente_mo_ma *100) /$gerente_monto_ma), 2, '.', ',');
else:
    $porcentaje_nb_ma = 0;
endif;

$pb_gerente_mo_ma=0;$pb_gerente_bono_ma=0;$pb_cantidad_ma =0;
if(!empty( $this->data['gerente_pb_ma'] )):
    
     foreach($this->data['gerente_pb_ma'] as $gpb):
       $pb_gerente_mo_ma =    $gpb->monto_otorgado;
       $pb_gerente_bono_ma = $gpb->bono;
       $pb_cantidad_ma = $gpb->cantidad;
    endforeach; 
endif;
if($pb_gerente_mo_ma != 0 && $gerente_monto_ma != 0 ):
$porcentaje_pb_ma = number_format((($pb_gerente_mo_ma *100) /$gerente_monto_ma), 2, '.', ',');
else:
    $porcentaje_pb_ma = 0;
endif;

 /*
  * 
  * incentivos ma
  * 
  */
$penalizacion_ma = 0;
$incentivo_nb_ma='';
if($porcentaje_nb_ma <= 29.9){
    $cantidad_ma = ($gerente_bono_ma * 0.20);
    $penalizacion_ma = $gerente_bono_ma - $cantidad_ma;
    $incentivo_nb_ma = '-20%';
    echo "sientra";
}
if($porcentaje_nb_ma >= 30  && $porcentaje_nb_ma < 40){
    $penalizacion_ma = $gerente_bono_ma + 800;
     $incentivo_nb_ma = '800.00';
}
if($porcentaje_nb_ma >= 40 && $porcentaje_nb_ma < 50){
    $penalizacion_ma = $gerente_bono_ma + 2000;
     $incentivo_nb_ma = '2000.00';
}
if($porcentaje_nb_ma >= 50){
    $penalizacion_ma = $gerente_bono_ma + 3000;
     $incentivo_nb_ma = '3000.00';
}


$penalizacion_pb_ma=0;
 $incentivo_pb_ma = '';
if($porcentaje_pb_ma <= 20){
    $penalizacion_pb_ma = $penalizacion_ma - 1000;
    $incentivo_pb_ma = '-1,000.00';
}
if($porcentaje_pb_ma >= 30  && $porcentaje_pb_ma < 40){
    $penalizacion_pb_ma = $penalizacion_ma + 600;
    $incentivo_pb_ma = '600.00';
}
if($porcentaje_pb_ma >= 40  && $porcentaje_pb_ma < 50){
    $penalizacion_pb_ma = $penalizacion_ma + 1000;
    $incentivo_pb_ma = '1000.00';
}
if($porcentaje_pb_ma >= 50){
     $penalizacion_pb_ma = $penalizacion_ma + 2000;    
     $incentivo_pb_ma = '2000.00';
}   
    
    
/*
 * 
 * cobranza ma
 * 
 */    
$cobranza_porcentaje_ma = 0;
$cobranza_monto_ma = 0;
$cobranza_bono_ma = 0;
$cobranza_semana_ma = 0;
$cobranza_anio_ma = '';
$year = date('Y');
$next_year = date("Y",strtotime($year."+ 1 year"));
$semana_actual = date("W");
$semanas_anuales =  idate('W', mktime(0, 0, 0, 12, 28, $year));

if(!empty($this->data['gerente_cobranza_bucket_siete_ma'])):
    foreach($this->data['gerente_cobranza_bucket_siete_ma'] as $cobranza):
    $cobranza_porcentaje_ma = $cobranza->Porcentaje_Recuperacion;
    $count_week = count($this->data['gerente_cobranza_bucket_siete']);
    
    if($cobranza_porcentaje_ma   <= 59.99){
       
        $result = $CI->process_model->bono_cobranza_gerente(1);
                    foreach($result as $row){ 
                          $cobranza_bono_ma = $row->bono;                    
                      }
    }elseif($cobranza_porcentaje_ma >= 60.00 && $cobranza_porcentaje_ma  <= 65.00 ){
        $result = $CI->process_model->bono_cobranza_gerente(2);
                    foreach($result as $row){ 
                          $cobranza_bono_ma = $row->bono;                    
                      }
      //  $cobranza_bono = 500;
    }elseif($cobranza_porcentaje_ma > 65.00 && $cobranza_porcentaje_ma  <= 70.00){
         $result = $CI->process_model->bono_cobranza_gerente(3);
                    foreach($result as $row){ 
                          $cobranza_bono_ma = $row->bono;                    
                      }
       //  $cobranza_bono = 750;
    }elseif($cobranza_porcentaje_ma > 70.00 && $cobranza_porcentaje_ma <= 75.00){
         $result = $CI->process_model->bono_cobranza_gerente(4);
                    foreach($result as $row){ 
                          $cobranza_bono_ma = $row->bono;                    
                      }
       //  $cobranza_bono = 1000;
    }elseif($cobranza_porcentaje_ma > 75.00){
         $result = $CI->process_model->bono_cobranza_gerente(5);
                    foreach($result as $row){ 
                          $cobranza_bono_ma = $row->bono;                    
                      }
        // $cobranza_bono = 1250;
    }
    
    endforeach;    
endif;    
    
/*     if($cobranza_porcentaje_ma >= 0.60 && $cobranza_porcentaje_ma  <= 0.65 ){
        $cobranza_bono_ma = 500;
    }elseif($cobranza_porcentaje_ma > 0.65 && $cobranza_porcentaje_ma  <= 0.70){
         $cobranza_bono_ma = 750;
    }elseif($cobranza_porcentaje_ma > 0.70 && $cobranza_porcentaje_ma <= 0.75){
         $cobranza_bono_ma = 1000;
    }elseif($cobranza_porcentaje_ma > 0.75){
         $cobranza_bono_ma = 1250;
    }*/
    
    
 /*
 * 
 *  NORMALIDAD MA
 * 
 * 
 */    
    
 if($this->data['gerente_normalidad_ma'][0]->Normalidad < 70.0){
     
     $total_bono_normalidad_ma =0;
     $normalidad_ma_2 = $this->data['gerente_normalidad_ma'][0]->Normalidad;
     $normalidad_ma_ma = $this->data['gerente_normalidad_ma_ma'][0]->Normalidad;
     //echo $normalidad_ma_ma;
     $bono_cn_ma = (!empty($this->data['bono_normalidad_ma_ma']))?$this->data['bono_normalidad_ma_ma'][0]->bono : '0.00';
     
     $bono_fijo_ma = $this->data['bono_normalidad_fijo'][0]->valor;
     $porcentaje_mejora_ma = $this->data['mejora_normalidad_porcentaje'][0]->valor;
     
     //$normalidad = 55.5;
     //$normalidad_ma = 4.55;
     $diferencia_ma =  $normalidad_ma_2 - $normalidad_ma_ma;
     $dif_cantidad_ma = ($diferencia_ma/$porcentaje_mejora_ma);
     $total_bono_ma = $bono_fijo_ma * $dif_cantidad_ma;
     
     //echo $dif_cantidad;     
     //echo $porcentaje_mejora;
     
     if($normalidad_ma_2 == $normalidad_ma_ma){
         
         
         
     }elseif($normalidad_ma_2 < $normalidad_ma_ma){
         //menor
        $total_bono_normalidad_ma   =  $bono_cn_ma - $total_bono_ma;     
                  
     }elseif($normalidad_ma_2 > $normalidad_ma_ma){
         //mayor
         $total_bono_normalidad_ma   =  $bono_cn_ma + $total_bono_ma;
         
         
     }
     
     
 }else{
     
     
     
     
     
 }    
    
    
?>
<!--- TITULO DE LA PAGINA -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Tablero de Incentivos
                <div class="page-title-subheading">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -->
  <!-- CREDITO NUEVOS -->
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
    <li class="nav-item">
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span>Mes actual</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
            <span>Mes anterior</span>
        </a>
    </li>
</ul>
  
  
  <div class="tab-content">
     <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
       
         <!-- CREDITOS NUEVOS -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         Capital Dispersado
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                 <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Cantidad</div>
                                     <div class="widget-numbers"><?php echo $gerente_cantidad; ?></div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                    
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto, 2, '.', ',')  ?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo base</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
          <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB2 (<b><?php echo $nb_cantidad ?></b>)
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart  text-white opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $porcentaje_nb   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo, 2, '.', ',')  ?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>">$<span><?php if($incentivo_nb != '-20%'){ echo number_format($incentivo_nb, 2, '.', ','); }else{ echo '0.00'; }  ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                 <!--PB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         PB (<b><?php echo $pb_cantidad ?></b>)
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $porcentaje_pb   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo, 2, '.', ',')  ?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>">$<span><?php if($incentivo_pb != '-1,000.00'){ echo number_format($incentivo_pb, 2, '.', ',');}else{ echo "0.00"; }  ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
         
                    <!--COBRANZA -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje</div>
                            <div class="widget-numbers"><?php echo $cobranza_porcentaje   ?>%</div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <!-- <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading"> </div>
                            <div class="widget-numbers"><span><?php //echo number_format($pb_gerente_mo, 2, '.', ',')  //?></span></div>
                        </div>-->
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                       
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Incentivo total</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($cobranza_bono, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!-- NORMALIDAD -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Normalidad
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                 <i class="pe-7s-graph text-dark opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php if(!empty($this->data['gerente_normalidad'])): echo $this->data['gerente_normalidad'][0]->Normalidad; else: echo "0"; endif;   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <!--<div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php //echo number_format($pb_gerente_mo, 2, '.', ',')  //?></span></div>
                                 </div>-->
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo total</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($total_bono_normalidad, 2, '.', ','); ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
             <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Colocaciones + Cobranza + Normalidad
                     </div>
                 </div> 
                     <?php
                     
if($incentivo_nb == '-20%'):
  $incentivo_nb = 0.00;
else:
    $incentivo_nb = intval($incentivo_nb);
endif;

if($incentivo_pb == '-1,000.00'):
$incentivo_pb = 0.00;
else:
    $incentivo_pb = intval($incentivo_pb);
    
endif;

$total_colocacion =($gerente_bono+$incentivo_nb+$incentivo_pb);

                     ?>
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Colocación </div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_colocacion, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format($cobranza_bono, 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Normailidad</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_bono_normalidad, 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
                 <div class="col-sm-6 col-md-3 col-xl-3">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_colocacion+$cobranza_bono +$total_bono_normalidad), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
     </div>
      
     <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
         <!-- CREDITOS NUEVOS -->
         <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Capital Dispersado
               </div>
            </div>
             
             <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                 <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                         <div class="icon-wrapper rounded-circle">
                             <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                             <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                             <div class="widget-chart-content">
                                 <div class="widget-subheading">Cantidad</div>
                                 <div class="widget-numbers"><?php echo $gerente_cantidad_ma ?></div>
                             </div>                                
                     </div>
                     <div class="divider m-0 d-md-none d-sm-block"></div>                    
                 </div>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                     <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                         <div class="icon-wrapper rounded-circle">
                             <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                             <i class="pe-7s-cash text-white"></i></div>
                             <div class="widget-chart-content">
                                 <div class="widget-subheading">Monto Dispersado</div>
                                 <div class="widget-numbers">$<span><?php echo number_format($gerente_monto_ma, 2, '.', ','); ?></span></div>
                             </div>
                     </div>
                     <div class="divider m-0 d-md-none d-sm-block"></div>                         
                 </div>
                 <div class="col-sm-12 col-md-4 col-xl-4">
                     <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                         <div class="icon-wrapper rounded-circle">
                             <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                             <i class="pe-7s-piggy text-white"></i></div>
                             <div class="widget-chart-content">
                                 <div class="widget-subheading">Bono</div>
                                 <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono_ma, 2, '.', ','); ?></span></div>
                             </div>
                     </div>
                 </div>
             </div>
             <div class="text-center d-block p-3 card-footer">
                 
             </div>                 
         </div>
         
          <!-- CREDITOS NUEVOS NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad_ma ?></b>)
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart  text-white opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $porcentaje_nb_ma.' '.$nb_gerente_mo_ma.' '.$gerente_monto_ma.' '.$lastDayOfMOnth?></div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo_ma, 2, '.', ',')  ?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb_ma != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php if($incentivo_nb_ma != '-20%'){ echo number_format($incentivo_nb_ma, 2, '.', ',');}else{ echo "0.00";} ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                 <!--PB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         PB (<b><?php echo $pb_cantidad_ma ?></b>)
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $porcentaje_pb_ma   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo_ma, 2, '.', ',')  ?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb_ma != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo number_format($incentivo_pb_ma, 2, '.', ','); ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
         
                    <!--COBRANZA -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje</div>
                            <div class="widget-numbers"><?php echo $cobranza_porcentaje_ma   ?>%</div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <!-- <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading"> </div>
                            <div class="widget-numbers"><span><?php //echo number_format($pb_gerente_mo, 2, '.', ',')  //?></span></div>
                        </div>-->
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                       
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Incentivo total</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($cobranza_bono_ma, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!-- NORMALIDAD -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Normalidad
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                 <i class="pe-7s-graph text-dark opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $normalidad_ma_2   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <!-- <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php //echo number_format($pb_gerente_mo, 2, '.', ',')  //?></span></div>
                                 </div>-->
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo total</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($total_bono_normalidad_ma, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Colocaciones + Cobranza + Normalidad
                     </div>
                 </div> 
                     <?php
                     
if($incentivo_nb_ma == '-20%'):
  $incentivo_nb_ma = 0.00;
else:
    $incentivo_nb_ma = intval($incentivo_nb_ma);
endif;

if($incentivo_pb_ma == '-1,000.00'):
$incentivo_pb_ma = 0.00;
else:
    $incentivo_pb_ma = intval($incentivo_pb_ma);
    
endif;

$total_colocacion_ma =($gerente_bono_ma+$incentivo_nb_ma+$incentivo_pb_ma);

                     ?>
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Colocación </div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_colocacion_ma, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format($cobranza_bono_ma, 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Normailidad</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_bono_normalidad_ma, 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
                 <div class="col-sm-6 col-md-3 col-xl-3">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_colocacion_ma+$cobranza_bono_ma +$total_bono_normalidad_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
         
         
         
         
        
     </div>
 </div>