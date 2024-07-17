<!doctype html>
<html lang="es">
<head>
	<?$this->load->view('inc/header')?>
</head>
    <body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?$this->load->view('inc/page-topbar')?>
            <!-- ========== Left Sidebar Start ========== -->
            <?$this->load->view('inc/left-sidebar')?>
            <!-- Left Sidebar End -->
			
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
					<div class="container-fluid">
                <!-- end page title -->
				<?
					if($this->uri->segment(1) == '') $this->load->view('modulos');
					elseif(($this->uri->segment(1) === 'formularios' || $this->uri->segment(1) === 'verificacion'
						|| $this->uri->segment(1) === 'aprobacion') && $this->uri->segment(2) == '') $this->load->view('formularios/certificados');
					elseif($this->uri->segment(2) === 'brazoarticulado') $this->load->view('formularios/form-brazo');
					else $this->load->view('mantenimiento');
				?>
					</div>
                </div>
                <!-- End Page-content -->
				
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Industry
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
		
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <?$this->load->view('inc/footer')?>

    </body>
</html>