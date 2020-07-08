<?php

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Siava Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link  rel="stylesheet" href="<?php echo base_url('public') ?>/main_dos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.css" />
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100 bg-plum-plate bg-animation">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="mx-auto app-login-box col-md-8">
                            <!--<div class="app-logo-inverse mx-auto mb-3"></div>-->
                            <div class="modal-dialog w-100 mx-auto">
                                <div class="modal-content">
                                    <form class="form-user" action="<?php echo base_url('log_in') ?>">
                                        <div class="modal-body">
                                            <div class="h5 modal-title text-center">
                                                <h4 class="mt-2">
                                                    <div>Bienvenido</div>
                                                    <span>Ingresa con tus datos S2Credit</span>
                                                </h4>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="usuario" id="usuario" placeholder="Usuario" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="password" id="password" placeholder="Contraseña" type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-check">
                                                    <!--  <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                                    <label for="exampleCheck" class="form-check-label">Keep me logged in</label>-->
                                            </div>
                                            <div class="divider"></div>
                                            <!--<h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6>-->
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-left">
                                                <!--<a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>-->
                                            </div>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-white opacity-8 mt-3">
                                <div  class="row">
                                    <div class="col-md-3">
                                        
                                    </div>
                                    <div class="col-md-3 text-left">Copyright © Préstamos Avance</div>                                    
                                    <div class="col-md-3 text-right">
                                        <a href="<?php echo base_url('busqueda_campanias') ?>" style="color:#fff;text-decoration: underline;">Búsqueda de Campañas</a>
                                    </div>
                                    <div class="col-md-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--.87c0748b313a1dda75f5-->
        <script src="<?php echo base_url('public/assets/scripts') ?>/jquery-3.1.1.min.js"></script>    
<!--<script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main_dos.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.js"></script>
        <script src="<?php echo base_url('public/assets/scripts/generic.js') ?>"></script>
    </body>
</html>
