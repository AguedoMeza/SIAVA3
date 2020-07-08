<?php

?>
  <!--- TITULO DE LA PAGINA -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class=" lnr-cloud-upload icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Importar Presolicitudes
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    
    <div class="row">
        <div class="col-md-12">
             <div class="mb-3 card">
                 <div class="card-body">
                      <?php
                      echo form_open_multipart(base_url('sube_excel'), array('id'=>'frm_presolicitud','class' => 'generic_form_form')); 
                      ?>
                      <div class="card-header-tab card-header">
                          <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                              <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                          </div>
                      </div>
                     <div class="no-gutters row">
                         <div class="position-relative form-group">
                             <label for="exampleFile" class="">File</label>
                             <input name="file_presolicitud" id="file_presolicitud" type="file" class="form-control-file">
                             <small class="form-text text-muted">Solo archivos con extensión .xlsx</small>
                         </div>
                     </div>
                     <button type="button" class="mt-1 btn btn-primary" onclick="GuardaPresolicitud()">Importar Archivo</button>
                 </form>
                 </div>
             </div>
        </div>
    </div>