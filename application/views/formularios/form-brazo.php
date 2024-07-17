					<!--Pagina principal-->
					<? $i = 1;?>
					<div class="container-fluid">
						<div class="row mx-1"><h5 class="card-title mb-3">Registro de Certificado (Equipo Brazo Articulado)</h5></div>
						<div class="row">
							<div class="col-lg-12">
								<div class="row mb-2"><span id="msg" class="text-center text-danger" style="font-size:1.1em"></span></div>
								<input type="hidden" name="idgrua" id="idgrua" value="1" />
								<input type="hidden" name="idcertificado" id="idcertificado" />
								<div id="segmentos-certificados" class="custom-accordion">
									<div class="card mb-1">
										<a href="#datosgenerales" class="text-dark collapsed" data-bs-toggle="collapse" aria-expanded="false" 
												aria-controls="datosgenerales">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Datos Generales / Informaci&oacute;n de la M&aacute;quina</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="datosgenerales" class="collapse" data-bs-parent="#segmentos-certificados">
											<div class="p-4 pt-2 border-top mx-3">
												<form id="frmgeneral">													
													<div class="mb-1 row">
														<label for="nroos" class="col-md-2 col-form-label">O/S Nro.:</label>
														<div class="col-md-2">
															<input class="form-control form-control-sm num" type="text" id="nroos"
																name="nroos" maxlength="8" required >
														</div>
														<label for="nroinforme" class="col-md-2 col-form-label">Informe Nro.:</label>
														<div class="col-md-2">
															<input class="form-control form-control-sm num" type="text" id="nroinforme" 
																name="nroinforme" maxlength="8" required >
														</div>
														<label for="nrocert" class="col-md-2 col-form-label">Certif. Nro.:</label>
														<div class="col-md-2">
															<input class="form-control form-control-sm num" type="text" id="nrocert" 
																name="nrocert" maxlength="8" required >
														</div>
													</div>
													<div class="mt-1 row">
														<div class="col-md-3 title"><h6>Datos Generales</h6></div>
													</div>
													<div class="mb-1 row">
														<label for="empresa" class="col-md-2 col-form-label py-1">Solicitado por</label>
														<label for="ruc" class="col-md-1 col-form-label py-1">RUC:</label>
														<div class="col-md-2">
															<input class="form-control form-control-sm num" type="text" id="ruc" name="ruc"
																maxlength="11" minlength="11">
														</div>
														<label for="empresa" class="col-md-2 col-form-label py-1">Empresa:</label>
														<div class="col-md-3">
															<input class="form-control form-control-sm" type="text" id="empresa" name="empresa">
														</div>
														
													</div>
													<div class="mb-1 row">
														<label for="fechaemision" class="col-md-3 col-form-label py-1">Fecha de Emisi&oacute;n:</label>
														<div class="col-md-3">
															<input class="form-control form-control-sm" type="date" value="<?=date('Y-m-d')?>" 
																name="fechaemision" id="fechaemision">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="lugarinsp" class="col-md-3 col-form-label py-1">Lugar de Inspecci&oacute;n:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="lugarinsp" name="lugarinsp">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="fechainsp" class="col-md-3 col-form-label py-1">Fecha de Inspecci&oacute;n:</label>
														<div class="col-md-3">
															<input class="form-control form-control-sm" type="date" value="<?=date('Y-m-d')?>" 
																name="fechainsp" id="fechainsp">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="inspecpor" class="col-md-3 col-form-label py-1">Inspeccionado por:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="inspecpor" name="inspecpor">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="normaespecif" class="col-md-3 col-form-label py-1">Norma / Especificaci&oacute;n:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="normaespecif" name="normaespecif"
																value="ASME B30.22 Ed. 2023 (ver Certificado: Parte 2. alcance)">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="procinterno" class="col-md-3 col-form-label py-1">Procedimiento Interno:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="procinterno" name="procinterno"
																value="GO-P-006 Ver. 13">
														</div>
													</div>
													<div class="mt-2 row">
														<div class="col-md-5 title"><h6>Datos del equipo/Maquinaria:</h6></div>
													</div>
													<div class="mb-1 row">
														<label for="tipoequipo" class="col-md-3 col-form-label py-1">Tipo de Equipo:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="tipoequipo" name="tipoequipo">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="marca" class="col-md-3 col-form-label py-1">Marca:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="marca" name="marca">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="modelomaquina" class="col-md-3 col-form-label py-1">Modelo:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="modelomaquina" name="modelomaquina">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="nroident" class="col-md-3 col-form-label py-1">
															Nro. de Identificación del Producto (PIN)/ Serie o Placa:
														</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="nroident" name="nroident">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="combustible" class="col-md-3 col-form-label py-1">Combustible:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="combustible" name="combustible">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="marcamaquina" class="col-md-3 col-form-label py-1">Marca del Brazo Articulado:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="marcamaquina" name="marcamaquina">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="tpmodbrazo" class="col-md-3 col-form-label py-1">Tipo/Modelo del Brazo Articulado:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="tpmodbrazo" name="tpmodbrazo">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="seriebrazo" class="col-md-3 col-form-label py-1">Serie del Brazo Articulado:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="seriebrazo" name="seriebrazo">
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="anio" class="col-md-3 col-form-label py-1">A&ntilde;o de Fabricaci&oacute;n:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="anio" name="anio">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="capamaquina" class="col-md-3 col-form-label py-1">Capacidad M&aacute;xima:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="capamaquina" name="capamaquina">
														</div>
													</div>
													<div class="mb-1 row">
														<label for="ejes" class="col-md-3 col-form-label py-1">Nro. de Ejes:</label>
														<div class="col-md-5">
															<input class="form-control form-control-sm" type="text" id="ejes" name="ejes">
														</div>
													</div>
													<div class="row form-group">
														<label class="col-md-3 form-label text-primary">Dimensiones del Equipo</label>
														<div class="col-md-2">
															<label for="largo" class="form-label py-1">Longitud:</label>
															<input class="form-control form-control-sm" type="text" id="largo" name="largo">
														</div>
														<div class="col-md-2">
															<label for="ancho" class="form-label py-1">Ancho:</label>
															<input class="form-control form-control-sm" type="text" id="ancho" name="ancho">
														</div>
														<div class="col-md-2">
															<label for="alto" class="form-label py-1">Alto:</label>
															<input class="form-control form-control-sm" type="text" id="alto" name="alto">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#historia" class="text-dark collapsed disabled" data-bs-toggle="collapse" 
											aria-haspopup="true" aria-expanded="false" aria-controls="historia">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Documentaci&oacute;n Hist&oacute;rica</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="historia" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmhistoria">
													<div class="mb-1 row form-group">
														<label for="historia1" class="col-md-7 col-form-label py-1">
															1. Presenta manual del fabricante (Operaci&oacute;n y/o Mantenimiento). (Sec.22-1.9)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="historia1" name="historia1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obshistoria1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="historia2" class="col-md-7 col-form-label py-1">
															2. Se evidencia registros de mantenimiento en cabina u oficina (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="historia2" name="historia2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obshistoria2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="historia3" class="col-md-7 col-form-label py-1">
															3. Se evidencia certificados anteriores en cabina u oficina (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="historia3" name="historia3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obshistoria3"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#cabina" class="text-dark collapsed disabled" data-bs-toggle="collapse" 
											aria-haspopup="true" aria-expanded="false" aria-controls="cabina">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Cabina del Equipo</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="cabina" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmcabina">
													<div class="mb-1 row form-group">
														<label for="cabina1" class="col-md-7 col-form-label py-1">
															1. Controles de movimiento y frenado operativos (Sec. 22-2.1.3 (a))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina1" name="cabina1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina2" class="col-md-7 col-form-label py-1">
															2. Luces internas y externas (circulina) operativas (Sec. 22-2.1.3 (g))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina2" name="cabina2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina3" class="col-md-7 col-form-label py-1">
															3. Dispositivo de advertencia audible operativo (Sec. 22-2.1.5 (a)(b))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina3" name="cabina3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina3"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina4" class="col-md-7 col-form-label py-1">
															4. Alarma audible de retroceso operativo (Sec. 22-2.1.5 (a)(b))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina4" name="cabina4">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina4"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina5" class="col-md-7 col-form-label py-1">
															5. Cuenta con ventanas, parabrisas, limpiaparabrisas y espejos retrovisores en buen estado (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina5" name="cabina5">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina5"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina6" class="col-md-7 col-form-label py-1">
															6. Cintur&oacute;n de seguridad operativo y cuenta con extintor, botiqu&iacute;n y  kit anti derrame (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina6" name="cabina6">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina6"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina7" class="col-md-7 col-form-label py-1">
															7. Limpieza, revisi&oacute;n de niveles hidr&aacute;ulicos abastecidos y sin fugas (Sec. 22-2.1.3 (h))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina7" name="cabina7">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina7"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="cabina8" class="col-md-7 col-form-label py-1">
															8. Señales de informaci&oacute;n y/o señales de mano legibles (Sec. 22-2.1.4 (q))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="cabina8" name="cabina8">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obscabina8"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#chasis" class="text-dark collapsed disabled" data-bs-toggle="collapse" 
											aria-haspopup="true" aria-expanded="false" aria-controls="chasis">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Chasis/Cargador</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="chasis" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmchasis">
													<div class="mb-1 row form-group">
														<label for="chasis1" class="col-md-7 col-form-label py-1">
															1. Sistema de Rodamiento y cuñas sin miembros desgastados, agrietados o deformados (Sec. 22-2.1.4 (j)) 
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="chasis1" name="chasis1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obschasis1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="chasis2" class="col-md-7 col-form-label py-1">
															2. Estructura sin miembros deformados, agrietados, flojos o corro&iacute;dos (Sec. 22-2.1.4 (a)(b))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="chasis2" name="chasis2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obschasis2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="chasis3" class="col-md-7 col-form-label py-1">
															3. Luces delanteras y traseras operativas (Sec. 22-2.1.3 (g))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="chasis3" name="chasis3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obschasis3"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="chasis4" class="col-md-7 col-form-label py-1">
															4. Cuenta con señales de informaci&oacute;n (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="chasis4" name="chasis4">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obschasis4"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#estab" class="text-dark collapsed disabled" data-bs-toggle="collapse" 
											aria-haspopup="true" aria-expanded="false" aria-controls="estab">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Estabilizadores</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="estab" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmestab">
													<div class="mb-1 row form-group">
														<label for="estab1" class="col-md-7 col-form-label py-1">
															1. Mecanismos de control operativos (Sec. 22-2.1.3 (a))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab1" name="estab1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab2" class="col-md-7 col-form-label py-1">
															2. Vigas (estructura y lubricaci&oacute;n) en buen estado (Sec. 22-2.1.3 (a))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab2" name="estab2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab3" class="col-md-7 col-form-label py-1">
															3. Cilindros hidr&aacute;ulicos libres de fugas, deformaci&oacute;n, abolladuras (Sec. 22-2.1.4 (o))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab3" name="estab3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab3"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab4" class="col-md-7 col-form-label py-1">
															4. Mangueras, tubos, niples hidr&aacute;ulicos sin fugas, abrasi&oacute;n, deformaciones o grietas (Sec. 22-2.1.4 (l))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab4" name="estab4">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab4"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab5" class="col-md-7 col-form-label py-1">
															5. V&aacute;lvulas simult&aacute;neas sin grietas ni fugas (Sec. 22-2.1.4 (n)(m))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab5" name="estab5">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab5"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab6" class="col-md-7 col-form-label py-1">
															6. Señales de advertencia y/o cintas reflectantes legibles (Sec. 22 2.1.4 (q))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab6" name="estab6">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab6"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="estab7" class="col-md-7 col-form-label py-1">
															7. Cuenta con tacos (*)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="estab7" name="estab7">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsestab7"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#brazo" class="text-dark collapsed disabled" data-bs-toggle="collapse" aria-haspopup="true" 
											aria-expanded="false" aria-controls="brazo">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Brazo Articulado</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="brazo" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmbrazo">
													<div class="mb-1 row form-group">
														<label for="brazo1" class="col-md-7 col-form-label py-1">
															1. Mecanismos de control operativos (Sec. 22-2.2.1 (a)(b)(c))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo1" name="brazo1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo2" class="col-md-7 col-form-label py-1">
															2. Indicador de nivel de gr&uacute;a operativo y aceite hidr&aacute;ulico sin presencia de fugas
															(Sec. 22-2.1.3 (h) / (Sec. 22-2.1.4 (g))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo2" name="brazo2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo3" class="col-md-7 col-form-label py-1">
															3. Dispositivos de seguridad operativos (Sec. 22-2.1.4 (f))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo3" name="brazo3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo3"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo4" class="col-md-7 col-form-label py-1">
															4. Tabla de carga / diagrama de alcance legibles (Sec. 22-1.9)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo4" name="brazo4">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo4"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo5" class="col-md-7 col-form-label py-1">
															5. Placa de identificaci&oacute;n legible (Sec. 22-1.9)
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo5" name="brazo5">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo5"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo6" class="col-md-7 col-form-label py-1">
															6. Estructura y piezas m&oacute;viles libres de grietas, corrosi&oacute;n o deformaci&oacute;n y tornamesa 
															gira controladamente (Sec. 22-2.1.4 (a)(b)(d))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo6" name="brazo6">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo6"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo7" class="col-md-7 col-form-label py-1">
															7. Cilindros de elevaci&oacute;n y extensi&oacute;n libres de fugas, deformaci&oacute;n, abolladuras (Sec. 22-2.1.4 (o))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo7" name="brazo7">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo7"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo8" class="col-md-7 col-form-label py-1">
															8. Mangueras/tubos/niples hidr&aacute;ulicos sin fugas, grietas y v&aacute;lvulas correctamente ajustadas (Sec. 22-2.1.4 (l))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo8" name="brazo8">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo8"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo9" class="col-md-7 col-form-label py-1">
															9. V&aacute;lvulas de retenci&oacute;n sin grietas ni fugas (Sec. 22-2.1.4 (n)(m))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo9" name="brazo9">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo9"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo10" class="col-md-7 col-form-label py-1">
															10. Señales de informaci&oacute;n y advertencia legibles (Sec. 22-2.1.4 (q))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo10" name="brazo10">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo10"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="brazo11" class="col-md-7 col-form-label py-1">
															11. Cable de acero (sin corrosi&oacute;n, doblez, alambres cortados, cocas 
															reducci&oacute;n del di&aacute;metro nominal de m&aacute;s de 5%) y malacate en buen estado
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="brazo11" name="brazo11">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsbrazo11"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#gancho" class="text-dark collapsed disabled" data-bs-toggle="collapse" aria-haspopup="true" 
											aria-expanded="false" aria-controls="gancho">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Gancho de Carga</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="gancho" class="collapse" data-bs-parent="#segmentos-certificados">
											<!-- Titulos de cada una de las opciones -->
											<div class="border-top mx-3">
												<div class="d-grid">
													<div class="row bg-light border mt-2">
														<label class="col-form-label col-md-2 ms-4">INSPECCI&Oacute;N:</label>
														<label class="col-form-label col-md-9">
															S: <i style="font-weight:400">Satisfactorio</i>&nbsp;&nbsp;&nbsp;NS: 
															<i style="font-weight:400">No Satisfactorio</i>
															&nbsp;&nbsp;NA: <i style="font-weight:400">No Aplica</i>&nbsp;&nbsp;&nbsp;
															(*)&nbsp;&nbsp;&nbsp;<i style="font-weight:400">Requerimiento Ingreso a Proyecto y/o Minera</i>
														</label>
													</div>
												</div>
											</div>
											<!-- Fin del tirulo de cada una de las opciones -->
											<div class="p-4 mx-3">
												<form id="frmgancho">
													<div class="mb-1 row form-group">
														<label for="gancho1" class="col-md-7 col-form-label py-1">
															1. Marca de fabricante y capacidad nominal legibles (Sec. 10-1.10.5 (a)(b))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho1" name="gancho1">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho1"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho2" class="col-md-7 col-form-label py-1">
															2. No se evidencia picaduras excesivas, grietas o corrosi&oacute;n (Sec. 10 1.10.5 (c)(d))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho2" name="gancho2">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho2"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho3" class="col-md-7 col-form-label py-1">
															3. Degaste que no exceda m&aacute;s del 10 % de la medida nominal de la base (Sec. 10-1.10.5 (e))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho3" name="gancho3">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho3"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho4" class="col-md-7 col-form-label py-1">
															4. Sin evidencia de deformaci&oacute;n y alteraciones (Sec. 10-1.10.5 (f)(m))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho4" name="gancho4">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho4"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho5" class="col-md-7 col-form-label py-1">
															5. Abertura de garganta que no exceda m&aacute;s del 5% de la medida 
															nominal, ni exceder m&aacute;s de ¼'' (Sec.10-1.10.5 (g))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho5" name="gancho5">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho5"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho6" class="col-md-7 col-form-label py-1">
															6. Pestillo operativo y con capacidad de bloqueo (Sec.10-1.10.5 (h)(i)(j))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho6" name="gancho6">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho6"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho7" class="col-md-7 col-form-label py-1">
															7. Rosca sin desgaste, daños o corrosi&oacute;n (Sec. 10-1.10.5 (k))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho7" name="gancho7">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho7"/>
														</div>
													</div>
													<div class="mb-1 row form-group">
														<label for="gancho8" class="col-md-7 col-form-label py-1">
															8. No se evidencia soldadura (Sec. 10-1.10.5 (l))
														</label>
														<div class="col-md-1">
															<select class="form-control form-control-sm form-select" id="gancho8" name="gancho8">
														<?	foreach($inspeccion as $row): ?>
																<option value="<?=$row->idinspeccion?>"><?=$row->codigo?></option>
														<?	endforeach; ?>
															</select>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control form-control-sm" placeholder="Observaciones" name="obsgancho8"/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="card mb-1">
										<a href="#carga" class="text-dark collapsed disabled" data-bs-toggle="collapse" aria-haspopup="true" 
											aria-expanded="false" aria-controls="carga">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-3">
													<div class="avatar-xs">
														<div class="avatar-title rounded-circle bg-soft-info text-info">
															<?=sprintf("%'02s",($i++));?></div>
													</div>
												</div>
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="font-size-16 mb-1">Prueba de Carga (Sec. 22-2.2.2 (a,b))</h5>
												</div>
												<div class="flex-shrink-0">
													<i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
												</div>
											</div>
										</a>
										<div id="carga" class="collapse" data-bs-parent="#segmentos-certificados">
											<div class="p-4 border-top mx-3">
												<form id="frmcarga">
													<div class="mt-1 row">
														<div class="col-md-3 title"><h6>Est&aacute;tica</h6></div>
													</div>
													<div class="row form-group">
														<label for="carga1" class="col-md-2 col-form-label py-1">Capacidad Nominal</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga1" name="carga1" />
														</div>
														<label for="carga2" class="col-md-2 col-form-label py-1">Radio de Carga</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga2" name="carga2" />
														</div>
														<label for="carga3" class="col-md-1 col-form-label py-1">Carga</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga3" name="carga3" />
														</div>
													</div>
													<div class="mt-2 row form-group">
														<label for="carga4" class="col-md-2 col-form-label py-1">Tiempo de Prueba</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga4" name="carga4" />
														</div>
														<label for="carga5" class="col-md-3 col-form-label py-1">Porcentaje de Trabajo</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga5" name="carga5" />
														</div>
													</div>
													<div class="mt-2 row form-group">
														<label for="carga6" class="col-md-2 col-form-label py-1">Distancia al Suelo Inicial</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga6" name="carga6" />
														</div>
														<label for="carga7" class="col-md-3 col-form-label py-1">Distancia al Suelo Final</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="carga7" name="carga7" />
														</div>
													</div>
													<div class="mt-2 row form-group">
														<label for="cargaresult" class="col-md-2 col-form-label py-1">Resultado</label>
														<div class="col-md-8">
															<input type="text" class="form-control form-control-sm" id="cargaresult" name="cargaresult" />
														</div>
													</div>
													<div class="mt-3 row">
														<div class="col-md-3 title"><h6>Din&aacute;mica</h6></div>
													</div>
													<div class="row form-group">
														<label for="dinamica1" class="col-md-2 col-form-label py-1">Tiempo de Prueba</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="dinamica1" name="dinamica1" />
														</div>
														<label for="dinamica2" class="col-md-1 col-form-label py-1">Carga</label>
														<div class="col-md-2">
															<input type="text" class="form-control form-control-sm" id="dinamica2" name="dinamica2" />
														</div>
														<label for="dinamicaresult" class="col-md-2 col-form-label py-1">Resultado</label>
														<div class="col-md-3">
															<input type="text" class="form-control form-control-sm" id="dinamicaresult" name="dinamicaresult" />
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-2 mb-4">
                            <div class="col ms-auto">
                                <div class="d-flex flex-reverse flex-wrap gap-2">
                                    <!--<button class="btn btn-danger btn-cancelar"><i class="uil uil-times"></i>&nbsp;&nbsp;Cancelar</button>-->
                                    <button class="btn btn-success"><i class="uil uil-file-alt"></i>&nbsp;&nbsp;Guardar</button>
									<button class="btn btn-primary btn-cancelar"><i class="uil-sign-out-alt"></i>&nbsp;&nbsp;Cerrar Certificado</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
					</div>