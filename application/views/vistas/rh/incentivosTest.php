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
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>INCENTIVOS - EJECUTIVOS
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

     <div class="main-card mb-3 card">
         <div class="card-body">
             <h5 class="card-title">Tipo de búsqueda</h5>
                 <?php echo form_open_multipart(base_url('busqueda/muestra_informacion'), array('id'=>'frm_cliente','class' => 'generic_form')); ?>
             <div class="form-row">
                 <div class="col-md-6">
                     <div class="position-relative form-group">
                         <select id="filtro" name="filtro" class="form-control" onchange="tipo_filtro(this.value)">
                             <option value=""></option>
                            <option value="1">Ejecutivo</option>
                            <option value="2">Gerente</option>
                            
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
          <label for="exampleEmail" class="col-sm-2 col-form-label">Semana</label>
          <div class="col-sm-4">
              <!-- Inicia select semanas -->
        <select id="sucursal" name="sucursal" class="form-control" onchange="show_table2()">
        <?php 
          
          

         $hoy = date('d');
         $mes = date('m');
        $i=4;
        $semana = array();
        foreach ($this->data['rango_semana'] as $wk):
          $semana[] = date('Y-m-d',strtotime($wk['fi']));
        endforeach; 
        $count = count($semana)-1;    
       
       for($a=0;$a<=$count;$a++){
           
            $sep_fi = explode(' - ', $semana[($count-$a)]);
            $m = date('m',strtotime($wk['ff']));

        //numero de semana en el anio
          $ddate = $semana[($count-$a)];
          $date = new DateTime($ddate);
          $week = $date->format("W");
          
          $anio = DateTime::createFromFormat("Y-m-d",$ddate);
          $anioSemana = $anio->format("Y").$week;
          //fin obtencion
            //$sep_fi[0]-$a
        if($hoy >= $sep_fi[0]):
        ?>  
        <?php //echo $semana[($count-$a)]; ?>    
        <option value="1">Días <?php echo $anioSemana; ?></option>
           
        
        <?php       
        endif; 
        $i--;
       }
              
       
        ?>
        </select>  
        <!-- Finaliza select semanas -->
          </div>
      </div>      
          
      </div>
      </div>
    
      <div id="lista_busqueda_tipo" class="main-card mb-3 card" style="width:100%;display:none;">
        <div class="table-responsive">
            <table id="filtro_busqueda_tbl" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#Empleado</th>
                        <th>Nombre</th>
                        <th>Sucursal</th>
                        <th>NB BONO</th>
                        <th>PB BONO</th>
                        <th>FBT BONO</th>
                        <th>FBC BONO</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>