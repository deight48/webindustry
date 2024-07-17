					<?
						$data = json_decode($this->session->userdata('datausuario'));
						$modulos = $data->modulos;
					?>
					<!--Pagina principal-->
					<div class="card pt-2">
					<h3 style="font-size:20px" class="text-center">
						<b>Sistema de Registro y Emisi&oacute;n de Certificados</b>
					</h3>
					</div>
					<div class="row mt-3">
					<?
						foreach($modulos as $row):
					?>
						<div class="col-sm-6 col-md-3 mb-2">
							<a href="<?=base_url().$row->url?>">
								<div class="card bg-industry pt-3" style="height:100%;border-radius:25px">
									<div class="d-flex mx-auto mt-4">
										<img class="img-fluid mx-auto" src="<?=base_url()?>assets/images/principal/<?=$row->icono?>"
											alt="<?=$row->menu?>" style="width:30%" />
									</div>
									<div class="card-body text-center">
										<h6 class="text-white" style="font-weight:400;font-size:0.9em"><?=$row->descripcion?></h6>
									</div>
								</div>
							</a>
						</div>
					<?
						endforeach;
					?>
					</div>