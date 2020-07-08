<?php
//echo $_SESSION['login']['presolicitud']

?>

<div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-file-empty icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Búsqueda Presolicitudes
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  if($_SESSION['login']['DRE'] == 'Nohay'): ?>
     <div class="main-card mb-3 card">
         <div class="card-body">
             <h5 class="card-title">Tipo de búsqueda</h5>
                 <?php echo form_open_multipart(base_url('busqueda/muestra_informacion'), array('id'=>'frm_cliente','class' => 'generic_form')); ?>
              <div class="form-row">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="filtro" name="filtro" class="form-control" onchange="tipo_filtro_pre(this.value)">
                             <option value="">Selcciona el tipo de búsqueda</option>
                             <?php  if(isset($_SESSION['login']['rol']) && $_SESSION['login']['rol'] == 5):  ?>
                             <option value="1">Estatus</option>
                           <?php  else: ?>
                             
                             
                            <option value="1">Estatus</option>
                            <option value="2">Sucursal</option>
                            <option value="3">Región</option>
                            <option value="4">Distrito</option>
                             <?php  endif;
                                        ?>
                            <!--<option value="3">Fecha</option>-->
                            <!--<option value="3"></option>-->                           
                         </select>
                         
                        </div>
                 </div>
                  <div class="col-md-6">
                      
                  </div>
             </div>
              <!-- ESTATUS -->
             <div  id="tipo_estatus"  class="form-row" style="display:none;">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="status" name="status" class="form-control" >
                             <option value="">Selecciona el estatus</option>
                            <?php if(!empty($this->data['estatus'])):
                                        foreach ($this->data['estatus'] as $statu):
                                        ?>
                             <option value="<?php echo $statu->id_estatus ?>"><?php echo $statu->descripcion ?></option>
                             <?php  endforeach;
                            endif; ?>
                         </select>
                         
                        </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                                     <label> &nbsp;</label>
                                     <div class="input-group right">
                                        <button class="btn btn-sm btn-primary" type="button" onclick="TablaFiltro(1)"><strong>Buscar presolicitudes</strong></button>
                                     </div>
                                    </div>
                 </div>
             </div>
              <!-- SUCURSAL -->
             <div  id="sucs"  class="form-row" style="display:none;">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="sucursales" name="sucursales" class="form-control" >
                             <option value="">Selecciona la sucursal</option>
                            <?php if(!empty($this->data['sucursales_filtro'])):
                                        foreach ($this->data['sucursales_filtro']as $sucs):
                                        ?>
                             <option value="<?php echo $sucs->id_sucursal ?>"><?php echo $sucs->id_sucursal.' '.$sucs->sucursal ?></option>
                             <?php  endforeach;
                            endif; ?>
                         </select>
                         
                        </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                                     <label> &nbsp;</label>
                                     <div class="input-group right">
                                        <button class="btn btn-sm btn-primary" type="button" onclick="TablaFiltro(2)"><strong>Buscar presolicitudes</strong></button>
                                     </div>
                                    </div>
                 </div>
             </div>
             <!-- REGION -->
             <div  id="region"  class="form-row" style="display:none;">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="regiones" name="regiones" class="form-control" >
                             <option value="">Selecciona la región</option>
                            <?php if(!empty($this->data['region'])):
                                        foreach ($this->data['region']as $region):
                                        ?>
                             <option value="<?php echo $region->regiones ?>"><?php echo $region->regiones ?></option>
                             <?php  endforeach;
                            endif; ?>
                         </select>
                         
                        </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                                     <label> &nbsp;</label>
                                     <div class="input-group right">
                                        <button class="btn btn-sm btn-primary" type="button" onclick="TablaFiltro(3)"><strong>Buscar presolicitudes</strong></button>
                                     </div>
                                    </div>
                 </div>
             </div>
              <!-- DISTRITO -->
             <div  id="distrito"  class="form-row" style="display:none;">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="distritos" name="distritos" class="form-control" >
                             <option value="">Selecciona el distrito</option>
                            <?php if(!empty($this->data['distritos'])):
                                        foreach ($this->data['distritos']as $d):
                              ?>
                             <option value="<?php echo $d->distritos ?>"><?php echo $d->distritos ?></option>
                             <?php  endforeach;
                            endif; ?>
                         </select>
                         
                        </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                                     <label> &nbsp;</label>
                                     <div class="input-group right">
                                        <button class="btn btn-sm btn-primary" type="button" onclick="TablaFiltro(4)"><strong>Buscar presolicitudes</strong></button>
                                     </div>
                                    </div>
                 </div>
             </div>
             
             <div  id="fechas"  class="form-row" style="display:none;">
                 <div class="col-md-12">                  
                     <div class="row">
                         <div class="col-sm-3">
                             <div class="" id="data_1">
                                        <label class="font-normal">Fecha inicio*:</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text"  id="fi" name="fi" class="form-control" value="">
                                        </div>
                                   </div>  
                         </div>
                         <div class="col-sm-3">
                             <div class="" id="data_2">
                                        <label class="font-normal">Fecha fin*:</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text"  id="ff" name="ff" class="form-control" value="">
                                        </div>
                                   </div>        
                         </div>
                     
                              
                                 <div class="col-sm-12">
                                 <div class="form-group">
                                     <label> &nbsp;</label>
                                     <div class="input-group">
                                        <button class="btn btn-sm btn-primary" type="button" onclick="TablaFiltro(3)"><strong>Buscar presolicitudes</strong></button>
                                     </div>
                                        <!--<label> <input type="checkbox" class="i-checks"> Remember me </label>-->
                                    </div>
                               </div>
                     </div>
                 </div>
                
             </div>
            
             <!--<button id="btn_info" type="button" class="mt-2 btn btn-primary" onclick="muestra_info()">Ver información</button>-->
         </form>
         </div>
     </div>
    
      <?php endif; ?>
    
           <div id="lista_presolicitud" class="main-card mb-3 card">
                        <div class="card-body">
        <div class="table-responsive" >
            <table id="presolicitudes_tbl" class="display responsive" width="100%">
                <thead>
                <th class="all"></th>
                <th class="all">mes</th>
                <th class="all">solicitud</th>
                <th class="all">fecha</th>
                <th class="all">nombre_completo</th>
                <th class="none">celular</th>
                <th class="none">telefono_casa</th>
                <th class="none">correo</th>
                <th class="none">telefono_trabajo</th>
                <th class="none">trabajo_actual</th>
                <th class="none">calle_y_no_exterior</th>
                <th class="none">numero_interior</th>
                <th class="none">colonia</th>
                <th class="none">codigo_postal</th>
                <th class="none">municipio</th>
                <th class="none">estado</th>
                <th class="none">sucursal</th>
                <th class="none">distrito</th>
                <th class="none">region</th>
                <th class="none">enviado_sucursal</th>
                <th class="all">estatus</th>
                <th class="none">fecha_resolucion</th>
                <th class="none">motivo_rechazo</th>
                <?php if($_SESSION['login']['DRE'] == 'Nohay'): ?>
                <th class="all"> Comentarios</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
                
            </tbody>
            </table>
        </div>
    </div>
           </div>

