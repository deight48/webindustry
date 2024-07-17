<script src="<?=base_url()?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?=base_url()?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?=base_url()?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?=base_url()?>assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?=base_url()?>assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
<!-- Sweet alert init js-->
<script src="assets/js/pages/sweet-alerts.init.js"></script>


<script src="<?=base_url()?>assets/js/btab.js"></script>
<script src="<?=base_url()?>assets/js/general.js"></script>
<!-- apexcharts -->
<!--<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>-->
<!-- App js -->
<script src="<?=base_url()?>assets/js/app.js"></script>
<script>
	let sgmto = '<?=$this->uri->segment(1)?>', sgmto2 = '<?=$this->uri->segment(2)?>', sgmto3 = '<?=$this->uri->segment(3)?>';
	let base_url = '<?=base_url()?>';
	btab('search',$('table').prop('id'),true);
</script>