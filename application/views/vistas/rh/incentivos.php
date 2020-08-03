<html>
<head>
    <title></title>
   <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

 
    
</head>
<body>
 <div class="">
  
  
  <form method="post" action="<?php echo base_url(); ?>inicio/export">
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-12">
       <h3 class="panel-title">Ejecutivos-Incentivos</h3>
        <!-- Inicia select semanas -->
        <select class="browser-default custom-select">
        <?php 
         $hoy = date('d');
         $mes = date('m');
        $i=4;
        $semana = array();
        foreach ($this->data['rango_semana'] as $wk):
          $semana[] = date('d',strtotime($wk['fi'])).' - '.date('d',strtotime($wk['ff']));
        endforeach; 
        $count = count($semana)-1;    
       
       for($a=0;$a<=$count;$a++){
           
            $sep_fi = explode(' - ', $semana[($count-$a)]);
            $m = date('m',strtotime($wk['ff']));
            
        if($hoy >= $sep_fi[0]):
        ?>  
        
            <option value="1">Días <?php echo $semana[($count-$a)]; ?></option>
           
        
        <?php       
        endif; 
        $i--;
       }
              
       
        ?>
        </select>  
        <!-- Finaliza select semanas -->

      </div>
      <div class="col-md-6" align="right">
       <input type="submit" name="export" class="btn btn-success btn-xs" value="Export to CSV" />
      </div>
     </div>
    </div>
    <div class="panel-body" id="users">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>#Empleado</th>
        <th>Nombre</th>
        <th>Sucursal</th>
        <th>NB BONO</th>
        <th>PB BONO</th>
        <th>FBT BONO</th>
        
       </tr>
      
      </table>
     </div>
    </div>
   </div>
  </form>
 </div>


 
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

 <!-- Codigo Prueba -->
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
        
       
        
    } 
    </script>
 <!-- Finaliza codigo Prueba -->

 <!--<script type="text/javascript">
    $(document).ready(function() {
      $('#users').dataTable({
        serverSide: true,
        ajax: '<?php //echo base_url('../../inicio/rhTable'); ?>'
      });
    });-->


  </script>


</body>
</html>
