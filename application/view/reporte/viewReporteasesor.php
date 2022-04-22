<div class="content-wrapper">       
	<section class="content container-fluid">  
		<section class="content">      
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title "><?php echo $data["titulo"]?></h3>                                                 
					<div class="box-tools pull-right">                      
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
						<i class="fa fa-minus"></i>
						</button>                  
					</div>
				</div>              
				<div class="box-body">
					<div class="form-group">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<label class="control-label col-md-4 col-sm-12 col-xs-12" for="first-name" style="text-align:left !important;">Asesor:</label>
							<div class="col-md-8 col-sm-12 col-xs-12 form-group has-feedback">
								<select class="select2_single form-control" tabindex="-1" id="cbxAsesor_filtro" name="cbxAsesor_filtro">
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="form-group">
						<div class="col-md-10 col-sm-0 col-xs-0"></div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<button class="btn btn-info form-control" type="button" id="btnBuscar">
								<i class="glyphicon glyphicon-search"></i>&nbsp;&nbsp;Buscar
							</button>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="form-group">
						<section class="content">
							<div class="box">
								<div class="box-header with-border">
									<h3 class="box-title">Listado</h3>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
											<i class="fa fa-minus"></i>
										</button>
									</div>
								</div>
								<div class="box-body">
									<div class="form-group">
										<center>
											<div id="div_grilla_<?php echo $data["abrev"]; ?>">
												<table id="jqGrid_<?php echo $data["abrev"]; ?>" class="table table-sm"></table>
											</div>
										</center>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>

				<div class="box-footer">
				</div>
			</div>
		</section>
	</section>
</div>