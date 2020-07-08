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