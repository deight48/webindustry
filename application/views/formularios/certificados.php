					<!--Pagina principal-->
					<?
						$cls = ''; $i = 1; $title = '';
						if($this->uri->segment(1) === 'formularios'){ $cls = 'bg-gradient-danger'; $title = 'modificar'; }
						elseif($this->uri->segment(1) === 'verificacion'){ $cls = 'bg-gradient-warning'; $title = 'verificar'; }
						elseif($this->uri->segment(1) === 'aprobacion'){ $cls = 'bg-gradient-primary'; $title = 'aprobar'; }
						
						if($msg = $this->session->flashdata('msg')){
					?>
					<script>
						document.addEventListener("DOMContentLoaded", () => {
							Swal.fire({position:"center",icon:"<?=$msg['icono']?>",title:"<?=$msg['msg']?>",showConfirmButton:!1,timer:1500});
						});
					</script>
					<?
						}
					?>
					<div class="container-fluid">
						<div class="row mx-1"><h5 class="card-title mb-3">Lista de Certificados Pendientes por <?=ucfirst($title)?></h5></div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-centered table-nowrap mb-0" id="certificados">
												<thead class="table-primary">
													<tr class="thead">
														<th class="bg-industry text-white">Acciones</th>
														<th>Nro. Certificado</th>
														<th>Gr&uacute;a</th>
														<th>Raz&oacute;n Social</th>
														<th>RUC</th>
														<th>Nro. Informe</th>
														<th>Fecha Inspecci&oacute;n</th>
														<th>Inspector</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
											<?
											    if(!empty($certificados)){
											        foreach($certificados as $row):
														$clase = ($i % 2) == 0? 'even_row':'odd_row';
											?>
												    <tr class="<?=$clase?>">
														<td style="padding:0 0 5px 0">
															<form method="post" action="<?=base_url()?>formularios" class="d-flex">
																<input type="hidden" name="idcertificado" id="idcertificado" value="<?=$row->idcertificado?>" />
														<?
															if($this->uri->segment(1) === 'formularios')
																echo '<div class="mx-auto my-1">
																		<a class="btn-table bg-warning mx-auto" title="Editar"
																			href="'.base_url().'formularios/editar?i='.$row->idcertificado.'">
																			<i class="uil-edit" aria-hidden="true"></i>
																		</a>
																	</div>';
															elseif($this->uri->segment(1) === 'verificacion')
																echo '<div class="mx-auto my-1">
																		<a class="btn-table bg-primary" title="Imprimir" target="_blank" style="margin-right:7px"
																			href="'.base_url().'verificacion/imprimir?i='.$row->idcertificado.'">
																			<i class="uil-print" aria-hidden="true"></i>
																		</a>
																		<a class="btn-table bg-success check" title="Verificar" style="margin-right:7px"
																			href="verificacion">
																			<i class="uil-file-check-alt" aria-hidden="true"></i>
																		</a>
																		<a class="btn-table bg-danger uncheck" title="Modificacion"
																			href="'.base_url().'verificacion/modificar?i='.$row->idcertificado.'">
																			<i class="uil-file-times-alt" aria-hidden="true"></i>
																		</a>
																	</div>';
															elseif($this->uri->segment(1) === 'aprobacion')
																echo '<div class="mx-auto my-1">
																		<a class="btn-table bg-danger" title="Anular"
																			href="'.base_url().'aprobacion/modificacion?i='.$row->idcertificado.'">
																				<i class="uil-trash-alt" aria-hidden="true"></i>
																		</a>
																	</div>';
														?>
															</form>														
														</td>
														<td><?=sprintf("%07s",$row->idcertificado)?></td>
														<td><?=$row->idgrua==='1'?'Brazo Articulado':'';?></td>
														<td><?=$row->razon_social;?></td>
														<td><?=$row->ruc;?></td>
														<td><?=sprintf("%07s",$row->nro_informe)?></td>
														<td><?=$row->fecha?></td>
														<td><?=$row->auditor?></td>
														<td class="text-center <?=$cls?>" style="font-weight:800"><?=$row->descripcion?></td>
													</tr>
											<?
														$i++;
											        endforeach;
											    }else{
											?>
											        <tr>
														<td colspan="9" align="center">No se encontraron Registros</td>
													</tr>
											<?
											    }
											?>
												</tbody>
											</table>
										</div>
										<!-- end table-responsive -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal Correlativo -->
					<div id="modalCorrelativo" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Asignar Correlativo</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
								<form method="post" action="<?=base_url().$this->uri->segment(1).'/'.$title?>" class="custom-validation">
									<div class="modal-body">
										<input type="hidden" id="idmodal" name="idmodal" />
										<div class="mt-2 row form-group">
											<label for="correlativo" class="col-md-4 col-form-label py-1">Correlativo Inicial</label>
											<div class="col-md-6">
												<input type="text" class="form-control form-control-sm num keyup" id="correlativo" name="correlativo" required />
											</div>
										</div>
										<div class="mt-2 row form-group">
											<label for="sgdocorrelativo" class="col-md-4 col-form-label py-1">Segundo Correlativo</label>
											<div class="col-md-6">
												<input type="text" class="form-control form-control-sm num" id="sgdocorrelativo" name="sgdocorrelativo" />
											</div>
										</div>
										<div class="mt-2 row form-group">
											<label for="tercercorrelativo" class="col-md-4 col-form-label py-1">Tercer Correlativo</label>
											<div class="col-md-6">
												<input type="text" class="form-control form-control-sm num" id="tercercorrelativo" name="tercercorrelativo" />
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
										<button type="submit" class="btn bg-industry waves-effect waves-light text-white">Guardar</button>
									</div>
								</form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>