<?php
// EJEMPLO VALIDACION DE SECCION AUDITORIA
/*if($_SESSION['login']['usuario'] != 'MARQUEZ.ARREOLA'):
    
    redirect(base_url('inicio'));
    
endif;*/


if(!empty( $this->data['sucursales'])):
    
  //  var_dump( $this->data['sucursales']);
    
endif;

?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Búsqueda Auditoría
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--  <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        
                    </div>
                </div>
          <div class="no-gutters row">
              
          </div>
          <div class="text-center d-block p-3 card-footer">
                </div>     
      </div>-->

     <div class="main-card mb-3 card">
         <div class="card-body">
             <h5 class="card-title">Tipo de búsqueda</h5>
                 <?php echo form_open_multipart(base_url('busqueda/muestra_informacion'), array('id'=>'frm_cliente','class' => 'generic_form')); ?>
             <div class="form-row">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="filtro" name="filtro" class="form-control" onchange="tipo_filtro(this.value)">
                             <option value=""></option>
                            <option value="1">Domicilio</option>
                            <option value="2">Razón Social</option>
                            <option value="3">Teléfono</option>
                            <!--<option value="4">Ocupación</option>-->
                         </select>
                         
                         <!--<label for="cliente" class=""></label>-->
<!--                         <input id="idc" name="idc" type="hidden"/>
                         <input name="client" id="cliente" placeholder="busqueda de cliente" type="text" class="typeahead  form-control" autocomplete="off">-->
                     </div>
                 </div>
                 <div class="col-md-6"></div>
             </div>
             <!--<button id="btn_info" type="button" class="mt-2 btn btn-primary" onclick="muestra_info()">Ver información</button>-->
         </form>
         </div>
     </div>
    
      <div id="busqueda_campos" class="main-card mb-3 card" style="display:none">
      <div class="card-body">
          <h5 class="card-title"></h5>
      
      
      <div class="position-relative row form-group">
          <label id="titulo_tipo" for="exampleEmail" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-4">
              <input name="bfiltro" id="bfiltro" placeholder="" type="text" class="form-control">
              <input type="hidden" name="id_filtro" id="id_filtro">
          </div>
      </div>
      <div class="position-relative row form-group">
          <label for="exampleEmail" class="col-sm-2 col-form-label">Sucursal</label>
          <div class="col-sm-4">
              <select id="sucursal" name="sucursal" class="form-control">
                   <option value="">Selecciona sucursal</option>
-                  <?php if(!empty( $this->data['sucursales'])): foreach ( $this->data['sucursales'] as $suc): ?>
-                  <option value="<?php echo  $suc->id_sucursal ?>"><?php echo $suc->id_sucursal.' '.$suc->sucursal ?></option>
-                  <?php endforeach;                  endif;?>
+                   <option value="1">1</option>
+                    <option value="1">2</option>
+                                 
               </select>
          </div>
      </div>      
          <div class="row">
              <div class="col-md-6 text-right">
              <button id="btn_info" type="button" class="mt-2 btn btn-primary" onclick="show_table()">Buscar información</button>
              </div>
          </div>
      </div>
      </div>
    
      <div id="lista_busqueda_tipo" class="main-card mb-3 card" style="width:100%;display:none;">
        <div class="table-responsive">
            <table id="filtro_busqueda_tbl" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Búsqueda</th>
                        <th> Id crédito</th>
                        <th>Fecha crédito</th>                                            
                        <th>Nombre Cliente</th>
                        <th>Capital Dispersado</th>                            
                        <th>Saldo vencido</th>
                        <th>Tipo de producto</th>
                        <th>Telefonos</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>