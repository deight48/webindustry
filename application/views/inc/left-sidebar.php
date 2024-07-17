			<?
				$data = json_decode($this->session->userdata('datausuario'));
				$modulos = $data->modulos;
				$menu = $data->menu;
			?>
			
			<div class="vertical-menu">
                <div class="navbar-brand-box">
                    <a href="<?=base_url()?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?=base_url()?>assets/images/logo-2.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=base_url()?>assets/images/logo-industry.png" alt="" height="30">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href="<?=base_url()?>"><i class="uil-store"></i><span>Inicio</span></a>
                            </li>
					<?		if($this->uri->segment(1) == ''){
								foreach($modulos as $row): ?>
							<li>
                                <a href="<?=base_url().$row->url?>" class="waves-effect"><i class="<?=$row->mini?>"></i><span><?=$row->menu?></span></a>
                            </li>
					<?			endforeach;
							}else{
								$idmod = 0;
								/*Recorrer los modulos para obtener el idmodulo del modulo actual*/
								foreach($modulos as $row){ if($row->url === $this->uri->segment(1)) $idmod = $row->idmodulo; }
								
								/*Recorrer los menus del modulo para mostrarlos en el sistema*/
								foreach($menu as $row):
									if($row->idmodulo === $idmod){
					?>
							<li>
                                <a href="<?=base_url().$this->uri->segment(1).'/'.$row->url?>" class="waves-effect 
									<?=$row->url===$this->uri->segment(2)? 'mm-active': '';?>">
									<i class="<?=$row->icono?>"></i><span style="font-size:0.9em"><?=$row->descripcion?></span>
								</a>
                            </li>
					<?		
									}
								endforeach;
							}	?>
                        </ul>
                    </div>
                    <!-- Fin de Sidemenu -->
                </div>
            </div>