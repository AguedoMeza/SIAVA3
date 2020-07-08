<?php

?>
  <!--- TITULO DE LA PAGINA -->
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Búsqueda de Campañas
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                           <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Cliente</h5>
                                         <!--<form class="">-->
                                             <?php echo form_open_multipart(base_url('busqueda/muestra_informacion'), array('id'=>'frm_cliente','class' => 'generic_form')); ?>
                                       <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                        <label for="cliente" class=""></label>
                                                        <input id="idc" name="idc" type="hidden"/>
                                                        <input name="client" id="cliente" placeholder="busqueda de cliente" type="text" class="typeahead  form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                                                   
                                                </div>
                                            </div>
                                            <button id="btn_info" type="button" class="mt-2 btn btn-primary" onclick="muestra_info()">Ver información</button>
                                        </form>
                                    </div>
                               
                                </div>
  
  
  <div id="informacion_cliente_campana" class="main-card mb-3 card" style="display:none;">
      <div class="card-body">
          <h5 class="card-title">Información</h5>
      
      
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Nombre Campaña</label>
          <div class="col-sm-10">
              <input name="campana" id="campana" placeholder="" type="text" class="form-control">
          </div>
      </div>
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Sucursal</label>
          <div class="col-sm-10">
              <input name="sucursal" id="sucursal" placeholder="" type="text" class="form-control">
          </div>
      </div>      
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Nombre del Cliente</label>
          <div class="col-sm-10">
              <input name="nombre_cliente" id="nombre_cliente" placeholder="" type="text" class="form-control">
          </div>
      </div>      
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Monto Disponible</label>
          <div class="col-sm-10">
              <input name="monto_disponible" id="monto_disponible" placeholder="" type="text" class="form-control">
          </div>
      </div>
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Capital inicial</label>
          <div class="col-sm-10">
              <input name="capital_inicial" id="capital_inicial" placeholder="" type="text" class="form-control">
          </div>
      </div>          
      
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Código Renovación / Reactivación</label>
          <div class="col-sm-10">
              <input name="codigo" id="codigo" placeholder="" type="text" class="form-control">
          </div>
      </div>          
 
 <button type="button" class="mt-2 btn btn-primary right" onclick="reset_info()">Nueva Busqueda</button>
</div>
   </div>
  
  