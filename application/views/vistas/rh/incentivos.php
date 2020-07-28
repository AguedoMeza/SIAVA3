<html>
<head>
    <title></title>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
 
    
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


 
 
 <script type="text/javascript">
    $(document).ready(function() {
      $('#users').dataTable({
        serverSide: true,
        ajax: '<?php echo base_url('../../inicio/rhTable'); ?>'
      });
    });
  </script>

</body>
</html>
