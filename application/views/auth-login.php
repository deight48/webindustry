<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Sistema Industry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="<?=base_url()?>login" class="mb-3 d-block auth-logo">
                                <img src="<?=base_url()?>assets/images/logo-industry.png" alt="" height="44" class="logo logo-dark">
                                <!--<img src="<?=base_url()?>assets/images/logo-light.png" alt="" height="22" class="logo logo-light">-->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                           
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Bienvenido</h5>
                                    <p class="text-muted">Inicia Sesi&oacute;n en el Sistema</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="post" action="<?=base_url()?>dologin">
        
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Usuario</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Clave</label>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password">
                                        </div>
										<div class="row">
										<div class="mt-3 col-md-6">
										<?php 
											$message = $this->session->flashdata('loginError');
											if($message){ ?>
											<p style="color:#dc8b89;margin:auto;text-align:center;"><?=$message;?></p>
										<?php } ?>
										</div>
                                        <div class="mt-3 text-end col-md-6">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Iniciar Sesi&oacute;n</button>
                                        </div>
										</div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                        <div class="text-center">
                            <p>© <script>document.write(new Date().getFullYear())</script> Certificados Industry Per&uacute;</p>
							<!--. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign-->
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="<?=base_url()?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=base_url()?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=base_url()?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?=base_url()?>assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?=base_url()?>assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/js/app.js"></script>
    </body>
</html>
