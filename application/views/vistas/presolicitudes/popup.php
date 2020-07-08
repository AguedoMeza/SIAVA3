<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "pop";
//var_dump($this->data['comentarios_presolicitude'] );

//echo $_SESSION['login']['user_id'];
?>
  <div class="col-sm-12 col-lg-12">
                                <div class="card-hover-shadow-2x mb-3 card">
                                   <!-- <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box</div>
                                       
                                    </div>-->
                                    <div class="scroll-area-lg">
                                        <div class="scrollbar-container">
                                            <div class="p-2">
                                                <div id="list_comment" class="chat-wrapper p-1">
                                                    <?php 
                                                    if(!empty($this->data['comentarios_presolicitude'])):
                                                        foreach ($this->data['comentarios_presolicitude'] as $pre):                                                        
                                                        
                                                    ?>
                                                    
                                                    <?php if($_SESSION['login']['user_id'] == $pre->usuario_id): ?>
                                                    <div class="float-right">
                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                            <div>
                                                                <span class="opacity-6"><?php echo $pre->nombre.' '.$pre->apellido_paterno ?>:</span><br>
                                                                <div class="chat-box">                                                                    
                                                                    <?php echo $pre->comment_text; ?>
                                                                </div>
                                                                <small class="opacity-6">
                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                    <?php echo $pre->fecha ?>
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-icon-wrapper ml-1">
                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                        <!--<img src="assets/images/avatars/3.jpg" alt="">-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                     <?php else: ?>
                                                    <div class="chat-box-wrapper">
                                                        <div>
                                                            <div class="avatar-icon-wrapper mr-1">
                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                    <!--<img src="assets/images/avatars/2.jpg" alt="">-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-6"><?php echo $pre->nombre.' '.$pre->apellido_paterno ?>:</span><br>
                                                            <div class="chat-box">
                                                               <?php echo $pre->comment_text; ?>
                                                            </div>
                                                            <small class="opacity-6">
                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                                <?php echo $pre->fecha ?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                     <?php endif; ?>
                                                    <?php endforeach; endif;?>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                       <?php // echo form_open_multipart('', array('id'=>'frm_comments','class' => 'generic_form','style'=>'width:100%;')); ?>
                                        <form id="frm_comments" method="post" style="width:100%;">
                                        <input type="hidden" name="id_pre" id="id_pre" value="<?php echo $this->data['id_presolicitud']["id"] ?>" />
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['login']['user_id']; ?>" />      
                                        <input type="text" name="comentario" id="comentario" placeholder="Escribe un comentario"  class=" form-control">
                                        <br>
                                        <?php  if($_SESSION['login']['presolicitud'] != 'Nohay' || $_SESSION['login']['GDI'] != 'Nohay'): ?>
                                        <select id="estatus" name="estatus" class="form-control" >
                                            <option value="">Selecciona un estatus</option>
                                            <?php if(!empty($this->data['estatus'])):
                                                foreach($this->data['estatus'] as $est):
                                                if($_SESSION['login']['GDI'] != 'Nohay'):
                                                    if($est->id_estatus == 5):
                                                ?>
                                            <option value="<?php echo $est->id_estatus ?>"><?php echo $est->descripcion ?></option>
                                            <?php endif;
                                            endif;
                                            endforeach;
                                            endif;
                                             
                                             if($_SESSION['login']['presolicitud'] != 'Nohay'):
                                                 foreach($this->data['estatus'] as $est):                                                
                                                ?>
                                             <option value="<?php echo $est->id_estatus ?>"><?php echo $est->descripcion ?></option>
                                            <?php
                                                 endforeach;
                                            endif;
                                                ?>
                                           
                                        </select>
                                        <br>
                                        <?php endif; ?>
                                        <input type="button" name="add_comment" onclick="guarda_comentario()" id="add_comment" class="btn btn-w-m btn-primary" value="Enviar" />
                                        <!--<button id="add_comment" type="button" class="btn btn-w-m btn-primary">Enviar</button>-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        