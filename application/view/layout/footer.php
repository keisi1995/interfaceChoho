			<footer class="main-footer">
				<strong>Copyright &copy; <?php echo date('Y')?> <a href="#">Keisi Edward Flores Medina</a>.</strong>All rights reserved.
			</footer>
		</div>
		<?php echo modalLoading($th)?>
			  
		<!-- jquery -->
		<script type="text/javascript" src="<?php echo base_url('public/libs/jquery/jquery-1.9.1.min.js'); ?>"></script>
		<!-- fin -->

		<!-- jquery ui -->
		<script type="text/javascript" src="<?php echo base_url('public/libs/jquery-ui-1.12.1.custom/jquery-ui.js'); ?>"></script>
		<!--fin-->

		<!-- bootstrap -->
		<script type="text/javascript" src="<?php echo base_url('public/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js'); ?>"></script>
		<!-- fin -->

		<!-- plantilla -->
		<script type="text/javascript" src="<?php echo base_url('public/libs/dist/js/adminlte.min.js'); ?>"></script>
		<!-- fin -->

		<!--jqGrid-->
		<script type="text/javascript" src="<?php echo base_url('public/libs/Guriddo_jqGrid_JS_5.4.0-Trial/js/i18n/grid.locale-en.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/libs/Guriddo_jqGrid_JS_5.4.0-Trial/js/jquery.jqGrid.min.js'); ?>"></script>
						   
		<!-- ssi-modal -->
		<script type="text/javascript" src="<?php echo base_url('public/libs/ssi-modal-master/dist/ssi-modal/js/ssi-modal.js'); ?>"></script>
		<!-- fin -->

		<?php
			include 'public/js/contenedor.js.php';
			switch ($data['abrev']) {
				case 'reporteasesor'  : include 'public/js/reporteasesor.js.php'; break;
			}
		?>

	</body>
</html>