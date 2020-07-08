<?php
require(APPPATH.'/views/vistas/incentivos/ejecutivo.php');
//require(APPPATH.'/views/vistas/gerente.php');
 
//echo $_SESSION['login']['rol'];
//echo $_SESSION['login']['sucursal'];
//echo $_SESSION['login']['user_id'];
    

//echo     $id_p = $_SESSION['login']['user_promotor'];


if($_SESSION['login']['rol'] == 6):
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
    <div class="row">
        <div class="col-md-12">
            <h3>Mes actual</h3>
        </div>
    </div>
    
    <?php
    
    $hoy = date('d');
    //echo $hoy;
    ?>
    
    
    <!-- SEMANAS -->
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        
         <?php if($hoy >= 22): ?>
        <li class="nav-item">
            <a role="tab" class="nav-link <?php if($hoy >= 22): ?>active<?php endif; ?>" id="tab-3" data-toggle="tab" href="#tab-content-3">
                <span>Días del  22-<?php echo date('t'); ?></span>
            </a>
        </li> 
        <?php endif; ?>
         <?php if($hoy >= 15): ?>
        <li class="nav-item">
            <a role="tab" class="nav-link <?php if($hoy >= 15): ?>active<?php endif; ?>" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Días del 15-21</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($hoy >= 8): ?>
        <li class="nav-item">
            <a role="tab" class="nav-link <?php if($hoy >= 8): ?>active<?php endif; ?>" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Días del 8-14</span>
            </a>
        </li>
        <?php endif; ?>        
        <li class="nav-item">
            <a role="tab" class="nav-link <?php if($hoy < 7): ?>active<?php endif; ?>" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Días del 1-7</span>
            </a>
        </li>
        
       
       
    </ul>
    
    <div class="tab-content">
        <!-- SEMANA 1 -->
        <div class="tab-pane tabs-animation fade <?php if($hoy < 7): ?> show active<?php endif; ?>" id="tab-content-0" role="tabpanel">
            <!-- NUEVOS -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Nuevos
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
                                    <div class="widget-numbers"><?php echo $nb_c1 ?></div>
                                </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo1, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                          <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                        <div class="widget-subheading">Bono</div>
                        <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b1, 2, '.', ',') ?></span></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                </div>                    
            </div>
            <!-- RENOVACION -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Renovación
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c1 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo1, 2, '.', ',') ?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b1, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>                    
            </div>
            
           <!-- REACTIVACION TRADICIONAL -->
           <div class="mb-3 card">
               <div class="card-header-tab card-header">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Créditos Reactivación Tradicional
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad</div>
                               <div class="widget-numbers"><?php echo $fbt_c1 ?></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                               <i class="pe-7s-cash text-white"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Monto Dispersado</div>
                               <div class="widget-numbers">$<span><?php echo number_format($fbt_mo1, 2, '.', ',') ?></span></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b1, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                   </div>
               </div>
               <div class="text-center d-block p-3 card-footer">
                   
               </div>                   
           </div>
            <!-- REACTIVACION CAMPAÑA -->
             <div class="mb-3 card">
               <div class="card-header-tab card-header">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Créditos Reactivación Campaña
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad</div>
                               <div class="widget-numbers"><?php echo $fbc_c1 ?></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                               <i class="pe-7s-cash text-white"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Monto Dispersado</div>
                               <div class="widget-numbers">$<span><?php echo number_format($fbc_mo1, 2, '.', ',') ?></span></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b1, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                   </div>
               </div>
               <div class="text-center d-block p-3 card-footer">
                   
               </div>                   
           </div>            
            <!-- FIN REACTIVACION CAMPAÑA -->

           
           <!-- TOTAL SEMANA 1-->
           <div class="mb-3 card" style="background: #e0f3ff">
               <div class="card-header-tab card-header" style="background: #e0f3ff">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total semana 1
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad total</div>
                               <div class="widget-numbers"><?php echo $total_c_s1 ?></div>
                           </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                   
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s1, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                   
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s1, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>
                </div>
               </div>
               <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
               </div>
           </div>
           <!-- FIN TOTAL SEMANA 1 -->
        </div>
        
        <!-- SEMANA 2 -->
        <div class="tab-pane tabs-animation fade <?php if($hoy >= 8): ?>show active<?php endif; ?>" id="tab-content-1" role="tabpanel">
            <!-- NUEVOS -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Nuevos
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c2 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                    
                </div>                    
            </div>
            <!-- RENOVACION -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Renovación
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c2 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                    
                </div>                   
            </div>
            <!-- REACTIVACION TRADICIONAL -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Reactivación Tradicional
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
                                <div class="widget-numbers"><?php echo $fbt_c2 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo2, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
            
            <!-- REACTIVACION CAMPAÑA -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Reactivación Campaña
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
                                <div class="widget-numbers"><?php echo $fbc_c2 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo2, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>         
            
            <!-- FIN REACTIVACION CAMPAÑA -->
            
           <!-- TOTAL SEMANA 2-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total semana 2
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s2 ?></div>                                
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
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s2, 2, '.', ',') ?></span></div>                                        
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
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s2, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 2 -->
           
           
       </div>
       
       <!-- SEMANA 3 -->
       <div class="tab-pane tabs-animation fade <?php if($hoy >= 15): ?>show active<?php endif; ?>" id="tab-content-2" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c3 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo3, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                                <div class="widget-numbers"><?php echo $pb_c3 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo3, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                                <div class="widget-numbers"><?php echo $fbt_c3 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo3, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
              <!-- REACTIVACION CAMPAÑA -->
              <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                                <div class="widget-numbers"><?php echo $fbc_c3 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo3, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>              
              <!-- FIN REACTIVACION CAMPAÑA -->
           
           
           <!-- TOTAL SEMANA 3-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total semana 3
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s3 ?></div>                                
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
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s3, 2, '.', ',') ?></span></div>                                        
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
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s3, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 3 -->
       </div>
       
       <!-- SEMANA 4 -->
       <div class="tab-pane tabs-animation fade <?php if($hoy >= 22): ?>show active<?php endif; ?>" id="tab-content-3" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c4 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo4, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                                <div class="widget-numbers"><?php echo $pb_c4 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo4, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                                <div class="widget-numbers"><?php echo $fbt_c4 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo4, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!--REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                                <div class="widget-numbers"><?php echo $fbc_c4 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo4, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
           <!-- FIN REACTIVACION CAMPAÑA -->
           <!-- TOTAL SEMANA 4-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total samana 4
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s4 ?></div>                                
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
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s4, 2, '.', ',') ?></span></div>                                        
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
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s4, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 4 -->
           
           
       </div>
       
   </div>
    <!--
  *
  *
  *
  *
  *COBRANZA 
  *
  *
  *
  *-->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
                if($ec_w1 != ""){
                ?>
                 <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 1</div>
                            <div class="widget-numbers"><?php echo ($ec_w1)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono1, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
                <?php 
                }
                if($ec_w2 != ""){
                
                ?>
                
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <?php  if($ec_w1 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 2</div>
                            <div class="widget-numbers"><?php echo ($ec_w2)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono_dos, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($ec_w3 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <?php    if($ec_w1 == "" && $ec_w2 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 3</div>
                            <div class="widget-numbers"><?php echo ($ec_w3)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono3, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($ec_w4 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                          <?php    if($ec_w1 == "" && $ec_w2 == "" && $ec_w3 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 4</div>
                            <div class="widget-numbers"><?php echo ($ec_w4)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono4, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($ec_w5 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                              <?php    if($ec_w1 == "" && $ec_w2 == "" && $ec_w3 == "" && $ec_w4 ==""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 5</div>
                            <div class="widget-numbers"><?php echo ($ec_w5)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono5, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                
                ?>
                <?php  if($ec_w1 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($ec_w2 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($ec_w3 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($ec_w4 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($ec_w5 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php }  ?>
                
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;
                            
                           if($ec_w1 != ""){
                               
                               $ec_cobranza_total = $ec_cobranza_bono1;                               
                           }
                           if($ec_w2 != ""){
                               
                               $ec_cobranza_total = $ec_cobranza_bono_dos;                                 
                           }
                           if($ec_w3 != ""){
                               
                                $ec_cobranza_total =$ec_cobranza_bono3;                                
                            }
                            if($ec_w4 != ""){
                                
                                $ec_cobranza_total= $ec_cobranza_bono4;                                
                            }
                            if($ec_w5 != ""){
                                
                               $ec_cobranza_total = $ec_cobranza_bono5;                               
                            }
                            
                            //$ec_cobranza_total = $ec_cobranza_bono1+$ec_cobranza_bono_dos+$ec_cobranza_bono3+$ec_cobranza_bono4+$ec_cobranza_bono5;
                            echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
  
                
<!-- TOTAL --
<div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Totales
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c ?></div>                                
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
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo, 2, '.', ',') ?></span></div>                                        
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
                            <div class="widget-subheading">Total de Incentivo</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b, 2, '.', ',')  ?></span></div>                                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
          -->
          <!--FIN TOTALES -->
     <!--</div>-->
     
     
     <!--
     *
     *
     *
     *
     *
     *  MESES ANTERIORES 
     *
     *
     *
     *
     *
     -->
     
     <div class="row">
         <div class="col-md-12">
             <h3>Mes anterior</h3>
         </div>
     </div>
     
     <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
   
    
   
    <li class="nav-item">
        <a role="tab_ma" class="nav-link active" id="tab-8" data-toggle="tab" href="#tab-content-8">
            <span>Días del 22-<?php echo date("t", strtotime('-1 month')) ?></span>
        </a>
    </li>
     <li class="nav-item">
        <a role="tab_ma" class="nav-link" id="tab-7" data-toggle="tab" href="#tab-content-7">
            <span>Días del 15-21</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab_ma" class="nav-link" id="tab-6" data-toggle="tab" href="#tab-content-6">
            <span>Días del 8-14</span>
        </a>
    </li>
     <li class="nav-item">
        <a role="tab_ma" class="nav-link " id="tab-5" data-toggle="tab" href="#tab-content-5">
            <span>Días del 1-7</span>
        </a>
    </li>
    <!-- <li class="nav-item">
        <a role="tab_ma" class="nav-link" id="tab-9" data-toggle="tab" href="#tab-content-9">
            <span>Semana 5</span>
        </a>
    </li>-->
    
</ul>
  
   <div class="tab-content">
       <!-- SEMANA 1 -->
       <div class="tab-pane tabs-animation fade" id="tab-content-5" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c_ma1 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma1, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma1, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                            <div class="widget-numbers"><?php echo $pb_c_ma1 ?></div>                                        
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
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma1, 2, '.', ',') ?></span></div>
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
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma1, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                       <div class="widget-numbers"><?php echo $fbt_c_ma1 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma1, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b_ma1, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
           <!-- REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                       <div class="widget-numbers"><?php echo $fbc_c_ma1 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma1, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma1, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>           
           <!-- FIN REACTIVACION CAMPAÑA -->
           
           <!-- TOTAL SEMANA ANTERIOR 1-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 1
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
                           <div class="widget-numbers"><?php echo $total_c_ma_s1 ?></div>                                
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
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s1, 2, '.', ',') ?></span></div>                                        
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
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s1, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 1-->
           
           
           
       </div>
       <!-- SEMANA 2 -->
       <div class="tab-pane tabs-animation fade" id="tab-content-6" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c_ma2 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma2, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                            <div class="widget-numbers"><?php echo $pb_c_ma2 ?></div>                                        
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
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma2, 2, '.', ',') ?></span></div>
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
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma2, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                       <div class="widget-numbers"><?php echo $fbt_c_ma2 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma2, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b_ma2, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA-->
                <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                       <div class="widget-numbers"><?php echo $fbc_c_ma2 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma2, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma2, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA -->
           <!-- TOTAL SEMANA ANTERIOR 2-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 2
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
                           <div class="widget-numbers"><?php echo $total_c_ma_s2 ?></div>                                
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
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s2, 2, '.', ',') ?></span></div>                                        
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
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s2, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 2-->
           
           
       </div>
       
       <!-- SEMANA 3 -->
         <div class="tab-pane tabs-animation fade" id="tab-content-7" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c_ma3 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma3, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                            <div class="widget-numbers"><?php echo $pb_c_ma3 ?></div>                                        
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
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma3, 2, '.', ',') ?></span></div>
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
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma3, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                       <div class="widget-numbers"><?php echo $fbt_c_ma3 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma3, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b_ma3, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                       <div class="widget-numbers"><?php echo $fbc_c_ma3 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma3, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma3, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA-->
           
           <!-- TOTAL SEMANA ANTERIOR 3-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 3
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
                           <div class="widget-numbers"><?php echo $total_c_ma_s3 ?></div>                                
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
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s3, 2, '.', ',') ?></span></div>                                        
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
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s3, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 3-->
           
           
       </div>
       
       <!-- SEMANA 4 -->
         <div class="tab-pane tabs-animation fade  show active" id="tab-content-8" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
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
                                <div class="widget-numbers"><?php echo $nb_c_ma4 ?></div>                                         
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
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma4, 2, '.', ',')  //?></span></div>
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
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
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
                            <div class="widget-numbers"><?php echo $pb_c_ma4 ?></div>                                        
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
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma4, 2, '.', ',') ?></span></div>
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
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma4, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
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
                       <div class="widget-numbers"><?php echo $fbt_c_ma4 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma4, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b_ma4, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
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
                       <div class="widget-numbers"><?php echo $fbc_c_ma4 ?></div>                                            
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
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma4, 2, '.', ',') ?></span></div>                                       
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
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma4, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA-->
           
           <!-- TOTAL SEMANA ANTERIOR 4-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 4
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
                           <div class="widget-numbers"><?php echo $total_c_ma_s4 ?></div>                                
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
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s4, 2, '.', ',') ?></span></div>                                        
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
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s4, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 4-->
           
           
       </div>
    </div>
     
    <!-- TOTAL --
    <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Totales
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
                           <div class="widget-numbers"><?php echo $total_c_ma ?></div>                                
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
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma, 2, '.', ',') ?></span></div>                                        
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
                           <div class="widget-subheading">Incentivo</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
-->


<?php elseif($_SESSION['login']['rol'] == 5): ?>
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
   <div class="row">
         <div class="col-md-12">
             <h3>Mes actual</h3>
         </div>
     </div>
  <!-- CREDITO NUEVOS -->
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
    <li class="nav-item">
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span>Semana 1</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
            <span>Semana 2</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
            <span>Semana 3</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
            <span>Semana 4</span>
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad1; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo base</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono1, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
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
                         NB (<b><?php echo $nb_cantidad1 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb1   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                      <!--   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!-- FIN NB-->
                 <!--PB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         PB (<b><?php echo $pb_cantidad1 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb1   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                      <!--   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                 <!-- FIN PB-->
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad2; ?></div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                    
                     </div>
                     <div class="col-sm-6 col-md-4 col-xl-4">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i>
                             </div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Monto Dispersado</div>
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo base</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono2, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad2 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb2   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
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
                         PB (<b><?php echo $pb_cantidad2 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb2   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                       <!--  <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           
           
           
       </div>
        
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
           
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad3; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                      <!--   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo base</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono3, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad3 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb3   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
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
                         PB (<b><?php echo $pb_cantidad3 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb3   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                         <!--<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            
            
            
       </div>
        
        <!-- SEMANA 4-->
        <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
            
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad4; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo base</div>
                                     <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono4, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad4 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb4   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        <!-- <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo NB</div>
                                     <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
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
                         PB (<b><?php echo $pb_cantidad4 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb4   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                     <!--    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo PB</div>
                                     <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>-->
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            
            
            
       </div>

        
        
    </div>

   <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg font-weight-normal" style="text-transform:none;">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total de Incentivos
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                           <i class="pe-7s-piggy text-white opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total dispersado</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono , 2, '.', ',') ?></span></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total NB</div>
                           <!--<div class="widget-numbers text-success">$<span><?php echo number_format($nb_gerente_bono, 2, '.', ',') ?></span></div>-->
                           
                           <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                           
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total PB</div>
                           <!--<div class="widget-numbers text-success">$<span><?php echo number_format($pb_gerente_bono, 2, '.', ',') ?></span></div>-->
                           <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-12 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Acumulado</div>
                           <!--<div class="widget-numbers text-success">$<span><?php echo number_format($pb_gerente_bono, 2, '.', ',') ?></span></div>-->
                           <div class="widget-numbers <?php  if($incentivo_pb != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>">$<span><?php echo number_format($acumulado_uno, 2, '.', ',')   ?></span></div>
                       </div>
                   </div>
               </div>
               
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
  
  <!--
  *
  *
  *
  *
  *COBRANZA 
  *
  *
  *
  *-->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
                if($w1 != ""){
                ?>
                 <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 1</div>
                            <div class="widget-numbers"><?php echo ($w1 *100)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Incentivo</span>
                                                </div>
                                               <?php echo number_format($cobranza_bono1, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
                <?php 
                }
                if($w2 != ""){
                
                ?>
                
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <?php  if($w1 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 2</div>
                            <div class="widget-numbers"><?php echo ($w2*100)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Incentivo</span>
                                                </div>
                                               <?php echo number_format($cobranza_bono_dos, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($w3 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <?php    if($w1 == "" && $w2 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 3</div>
                            <div class="widget-numbers"><?php echo ($w3*100)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Incentivo</span>
                                                </div>
                                               <?php echo number_format($cobranza_bono3, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($w4 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                          <?php    if($w1 == "" && $w2 == "" && $w3 == ""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 4</div>
                            <div class="widget-numbers"><?php echo ($w4*100)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Incentivo</span>
                                                </div>
                                               <?php echo number_format($cobranza_bono4, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                if($w5 != ""){
                ?>
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                              <?php    if($w1 == "" && $w2 == "" && $w3 == "" && $w4 ==""){ ?>  
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>
                           <?php } ?>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 5</div>
                            <div class="widget-numbers"><?php echo ($w5 *100)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Incentivo</span>
                                                </div>
                                               <?php echo number_format($cobranza_bono5, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <?php 
                }
                
                ?>
                <?php  if($w1 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($w2 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($w3 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($w4 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php } if($w5 == ""){ ?>
                <div class="col-sm-6 col-md-2 col-xl-2"></div>
                <?php }  ?>
                
                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $cobranza_total = $cobranza_bono1+$cobranza_bono_dos+$cobranza_bono3+$cobranza_bono4+$cobranza_bono5;
                            echo number_format(($cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!--NORMALIDAD -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Normalidad
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-3 col-xl-3">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                 <i class="pe-7s-graph text-dark opacity-8"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Porcentaje</div>
                                     <div class="widget-numbers"><?php echo $this->data['gerente_normalidad'][0]->Normalidad   ?>%</div>                                         
                                 </div>                                     
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                      
                     </div>
                     <div class="col-sm-6 col-md-3 col-xl-3">
                         <!--<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                 <i class="pe-7s-cash text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading"> </div>
                                     <div class="widget-numbers">$<span><?php //echo number_format($pb_gerente_mo, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div> -->                            
                     </div>
                       <div class="col-sm-6 col-md-3 col-xl-3">
                       </div>
                     <div class="col-sm-12 col-md-3 col-xl-3">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i></div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo total</div>
                                     <div class="widget-numbers <?php if($this->data['gerente_normalidad'][0]->Normalidad > 65.0): ?>text-success<?php else: ?>text-danger<?php endif; ?>">$<span><?php echo number_format( $this->data['bono_normalidad'][0]->bono, 2, '.', ',') ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!--Total BONO -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         Bono
                     </div>
                 </div>
                 
                 <div class="no-gutters row">
                    <div class="col-sm-6 col-md-3 col-xl-3">
                                          
                     </div>
                     <div class="col-sm-6 col-md-3 col-xl-3">
                                            
                     </div>
                     <div class="col-sm-6 col-md-3 col-xl-3">
                                            
                     </div>
                     <div class="col-sm-12 col-md-3 col-xl-3">
                         <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                             <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                 <i class="pe-7s-piggy text-white"></i>
                             </div>
                                 <div class="widget-chart-content">
                                     <div class="widget-subheading">Incentivo acumulado total</div>
                                     <div class="widget-numbers text-success">$<span><?php 
                                     $normalidad = (int)$this->data['bono_normalidad'][0]->bono;
                                     $total_bono = $normalidad+$acumulado_uno+$cobranza_total;
                                     echo number_format(($total_bono), 2, '.', ',') ?></span></div>
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
         
     <!--</div>-->
      
     <!--<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">-->
         <!-- CREDITOS NUEVOS --
         <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    BONO 
               </div>
            </div>
             
             <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                   <!--  <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                         <div class="icon-wrapper rounded-circle">
                             <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                             <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                             <div class="widget-chart-content">
                                 <div class="widget-subheading">Cantidad</div>
                                 <div class="widget-numbers"><?php ?></div>                                     
                             </div>                                
                     </div>
                     <div class="divider m-0 d-md-none d-sm-block"></div>     --                    
                 </div>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                     <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                         <div class="icon-wrapper rounded-circle">
                             <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                             <i class="pe-7s-cash text-white"></i></div>
                             <div class="widget-chart-content">
                                 <div class="widget-subheading">Monto Dispersado</div>
                                 <div class="widget-numbers">$<span><?php echo number_format(0, 2, '.', ','); ?></span></div>
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
                                 <div class="widget-numbers text-success">$<span><?php echo number_format(0, 2, '.', ','); ?></span></div>
                             </div>
                     </div>
                 </div>
             </div>
             <div class="text-center d-block p-3 card-footer">
                 
             </div>                 
         </div>
        
     </div>
 <!--</div>-->
    <div class="row">
        <div class="col-md-12">
            <h3>Mes Anterior</h3>
        </div>
    </div>
    <!-- CREDITO NUEVOS -->
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-4" data-toggle="tab" href="#tab-content-4">
                <span>Semana 1</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-5" data-toggle="tab" href="#tab-content-5">
                <span>Semana 2</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-6" data-toggle="tab" href="#tab-content-6">
                <span>Semana 3</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-7" data-toggle="tab" href="#tab-content-7">
                <span>Semana 4</span>
            </a>
        </li>       
    </ul> 
    
    <div class="tab-content">
       <div class="tab-pane tabs-animation fade show active" id="tab-content-4" role="tabpanel">
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad_ma1; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto_ma1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                       
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
                         NB (<b><?php echo $nb_cantidad_ma1 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb_ma1   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo_ma1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                    
                     </div>
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            <!-- FIN NB-->
                 <!--PB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         PB (<b><?php echo $pb_cantidad_ma1 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb_ma1   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo_ma1, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                     
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                 <!-- FIN PB-->
       </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-5" role="tabpanel">
            
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad_ma2; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto_ma2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                   
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad_ma2 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb_ma2   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo_ma2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                       
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
                         PB (<b><?php echo $pb_cantidad_ma2 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb_ma2   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo_ma2, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">                      
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            
            
       </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-6" role="tabpanel">
            
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad_ma3; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto_ma3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                     
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad_ma3 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb_ma3   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo_ma3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        
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
                         PB (<b><?php echo $pb_cantidad_ma3 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb_ma3   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo_ma3, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                       
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            
            
            
       </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-7" role="tabpanel">
            
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
                                     <div class="widget-numbers"><?php echo $gerente_cantidad_ma4; ?></div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($gerente_monto_ma4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                        
                     </div>
                     
                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
                      <!-- FIN DISPERSADOS -->
             <!--NB -->
             <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                         NB (<b><?php echo $nb_cantidad_ma4 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_nb_ma4   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($nb_gerente_mo_ma4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
               
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
                         PB (<b><?php echo $pb_cantidad_ma4 ?></b>)
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
                                     <div class="widget-numbers"><?php echo $porcentaje_pb_ma4   ?>%</div>                                         
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
                                     <div class="widget-numbers">$<span><?php echo number_format($pb_gerente_mo_ma4, 2, '.', ',')  //?></span></div>
                                 </div>
                         </div>
                         <div class="divider m-0 d-md-none d-sm-block"></div>                             
                     </div>
                     
                     <div class="col-sm-12 col-md-4 col-xl-4">
                     
                     </div>                     
                     
                 </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
            
       </div>
    </div>
  
   <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg font-weight-normal" style="text-transform:none;">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total de Incentivos
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                           <i class="pe-7s-piggy text-white opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total dispersado</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($gerente_bono_ma , 2, '.', ',') ?></span></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total NB</div>
                           <!--<div class="widget-numbers text-success">$<span><?php echo number_format($nb_gerente_bono_ma, 2, '.', ',') ?></span></div>-->
                           
                           <div class="widget-numbers <?php if($incentivo_nb != '-20%'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_nb; //echo number_format($penalizacion, 2, '.', ',') ?></span></div>
                           
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total PB</div>
                           <!--<div class="widget-numbers text-success">$<span><?php echo number_format($pb_gerente_bono_ma, 2, '.', ',') ?></span></div>-->
                           <div class="widget-numbers <?php  if($incentivo_pb_ma != '-1,000.00'): ?>text-success<?php else: ?>text-danger<?php endif; ?>"><span><?php echo $incentivo_pb_ma; //echo number_format($penalizacion_pb, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-12 col-md-3 col-xl-3">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Acumulado</div>                           
                           <div class="widget-numbers <?php  //if($incentivo_pb_ma != '-1,000.00'): ?>text-success<?php //else: text-danger ?><?php //endif; ?>">$<span><?php echo number_format($acumulado_uno_ma, 2, '.', ',')   ?></span></div>
                       </div>
                   </div>
               </div>
               
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
 
 
 
<?php endif; ?>
  
