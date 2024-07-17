
$('.btn-cancelar').bind('click', function(){
	let path = '';
	if(sgmto3) path = base_url+sgmto+'/'+sgmto2;
	else if(sgmto2) path = base_url+sgmto;
	$(location).attr('href',path);
});
$('.num').bind('input',function(e){
	jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
});
$('.btn-success').bind('click',function(){
	let div = $('.show'); $('#msg').html(''); $('#msg').attr('class', 'text-center text-danger');
	if($('.show').length){
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		let f = div.find('form'), frm = document.getElementById(f.attr('id')), formData = new FormData(frm);
		formData.set('idgrua',$('#idgrua').val()); formData.set('idcertificado',$('#idcertificado').val());
		formData.set('idform',f.attr('id'));
		let data = new URLSearchParams(formData).toString(), valida = true;
		
		if(f.attr('id') === 'frmgeneral'){
			let inputs = document.querySelectorAll('form#'+f.attr('id')+' input[type="text"]');
			inputs.forEach(function(el){
				if(el.id ==='nroinforme' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='nroos' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='ruc' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='empresa' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='lugarinsp' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='inspecpor' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='normaespecif' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='procinterno' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='tipoequipo' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='marca' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='modelomaquina' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='nroident' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='combustible' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='marcamaquina' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='tpmodbrazo' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='seriebrazo' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='anio' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='capamaquina' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='ejes' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='largo' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='ancho' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
				if(el.id ==='alto' && el.value === ''){ $('#msg').html('Debe completar todos los campos'); valida = false; return false; }
			});
		}
		if(valida){
			$.ajax({
				data: data,
				url: base_url + 'formularios/regbrazo',
				method: 'POST',
				dataType: 'JSON',
				beforeSend: function(){},
				success: function(data){
					if(parseInt(data.status) === 200){
						$('#idcertificado').val(data.id);
						$('.text-dark').removeClass('disabled');
					}
					$('#msg').attr('class','text-center '+data.clase);
					$('#msg').html(data.msg);
					$('#msg').show();
					setTimeout(function () { $('#msg').hide('slow'); }, 2500);
				}
			});
		}
	}
});
$('.btn-table').bind('click',function(){
	let input = $(this).closest('form').find('input'), tr = $(this).closest('tr');
	let tabla = $(this).closest('table');
	
	if($(this).hasClass('check')){
		event.preventDefault();
		$('#idmodal').val(input.val());
		$('#modalCorrelativo').modal('show');
	}else if($(this).hasClass('uncheck')){
		if(!confirm('Desea Enviar a Modificación?')){
			event.preventDefault();
		}
	}
});
$('.keyup').bind('keyup',function(){
	if($('#correlativo').val()){
		$('#sgdocorrelativo').val(parseInt($('#correlativo').val())+1);
		$('#tercercorrelativo').val(parseInt($('#sgdocorrelativo').val())+1);
	}
});


$(document).ready(function(){
	
});