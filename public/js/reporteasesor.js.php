<script type='text/javascript'>
$(document).ready(function() {
	$('#btnBuscar').click(function() {fnListar();});
	fnCbxGeneral('cbxAsesor_filtro', 1);
	fnListar();
});

/**
 * Lista la información de los asesores
 */
function fnListar() {
	var objGeneral = fnDataGeneral();
	var codAsesor = $('#cbxAsesor_filtro').val();
	var accion = '/listar' + ((codAsesor!='' && codAsesor!=null) ? '/' + codAsesor : '');

	$.ajax({
		type : 'GET',
		dataType : 'json',
		data : {},
		url : objGeneral._urlApi + 'asesor' +accion,
		beforeSend : function() {
			$('#'+objGeneral._modalLoading).modal('show');
		},
		complete : function () {
			$('#'+objGeneral._modalLoading).modal('hide');
		},
		success : function (obj) {

			/*MUESTRA LA INFORMACION DE LOS ASESORES*/
			$('#div_grilla_'+objGeneral._abrev).html('<table id="'+'jqGrid_'+objGeneral._abrev+'" class="table table-sm" ></table>');
			$('#jqGrid_'+objGeneral._abrev).jqGrid({
				data : obj,
				datatype : 'local',
				colModel : [
					{ label: 'CODIGO ASESOR', name: 'cod_assesor', align: 'center', width: 120, sortable: false},
					{ label: 'NOMBRE DEL ASESOR', name: 'nombre_asesor', align: 'left', width: 500 , sortable: false},
					{ label: 'CLIENTES ASIGNADOS', name: 'clientes_asignados', align: 'center', width: 150, sorttype: 'number', sortable: false},
					{ label: 'TOTAL PEDIDOS', name: 'total_pedidos', align: 'center', width: 150, sorttype: 'number', sortable: false},					
				],
				rowNum : obj.length,
				shrinkToFit : false,
				height : 400,
				width : parseInt($('.content').width()-100),
				rownumbers : true,
				subGrid : true,
				subGridRowExpanded : function(div_grilla, row) {
					var rowAsesor = parseInt(row)-1;
					var objCliente = obj[rowAsesor].clientes;
					var jqGridDet = div_grilla + '_cli';

					/*MUESTRA LA INFORMACION DE LOS CLIENTES*/
					$('#'+div_grilla).html('<table id="'+jqGridDet+'" class="scroll"></table>');
					$('#'+jqGridDet).jqGrid({
						data : objCliente,
						datatype : 'local',
						colModel : [
							{ label: 'ID CLIENTE', name: 'id_cliente', align: 'center', width: 90, sortable: false},
							{ label: 'RAZÓN SOCIAL', name: 'razon_social', align: 'left', width: 450 , sortable: false},
							{ label: 'N° DOCUMENTO', name: 'nro_documento', align: 'center', width: 150 , sortable: false},
							{ label: 'TOTAL PEDIDOS', name: 'total_pedidos', align: 'center', width: 150, sorttype: 'number', sortable: false},
						],
						rowNum : objCliente.length,
						shrinkToFit : false,
						width : 'auto',
						height : 200,
						rownumbers : true,                        
						subGrid : true,
						subGridRowExpanded : function(div_grilla, row) {
							var rowCliente = parseInt(row)-1;
							var objPedido =  objCliente[rowCliente].detalle_pedidos;
							var jqGridDet = div_grilla + '_cli_ped';

							/*MUESTRA LA INFORMACION DE LOS PEDIDOS*/
							$('#'+div_grilla).html('<table id="'+jqGridDet+'" class="scroll"></table>');
							$('#'+jqGridDet).jqGrid({
								data : objPedido,
								datatype : 'local',
								colModel : [
									{ label: 'ID PEDIDO', name: 'id_pedido', align: 'center', width: 80, sortable: false},
									{ label: 'FECHA PAGO', name: 'fecha', align: 'center', width: 150, sortable: false},
									{ label: 'ESTADO', name: 'estado', align: 'center', width: 150, sortable: false},
									{ label: 'TOTAL PRODUCTOS', name: 'total_productos', align: 'center', width: 150, sorttype: 'number', sortable: false},
									{ label: 'TOTAL PEDIDO', name: 'total_pedido', align: 'right', width: 120, sorttype: 'number', formatter: 'number', formatoptions: {decimalSeparator: '.', thousandsSeparator: ',', decimalPlaces: objGeneral._cantDecimal, defaultValue: '0.00'}, sortable: false},
								],
								rowNum : objPedido.length,
								shrinkToFit : false,
								width : 'auto',
								height : 150,
								rownumbers : true,
								subGrid : true,
								subGridRowExpanded : function(div_grilla, row) {
									var rowPedido = parseInt(row)-1;
									var objProducto = objPedido[rowPedido].productos;
									var jqGridDet = div_grilla + '_cli_ped_prod';

									/*MUESTRA LA INFORMACION DE LOS PRODUCTOS POR PEDIDO*/
									$('#'+div_grilla).html('<table id="'+jqGridDet+'" class="scroll"></table>');
									$('#'+jqGridDet).jqGrid({
										data : objProducto,
										datatype : 'local',
										colModel : [
											{ label: 'ID PRODUCTO', name: 'id_producto', align: 'center', width: 100, sortable: false},
											{ label: 'TIPO', name: 'tipo', align: 'left', width: 150 , sortable: false},
											{ label: 'CANTIDAD', name: 'cantidad', align: 'center', width: 100, sorttype: 'number', formatter: 'number', sortable: false},
											{ label: 'VALOR UNITARIO', name: 'valor_unitario', align: 'right', width: 120, sorttype: 'number', formatter: 'number', formatoptions: {decimalSeparator: '.', thousandsSeparator: ',', decimalPlaces: objGeneral._cantDecimal, defaultValue: '0.00'}, sortable: false},
											{ label: 'TOTAL', name: 'total', align: 'right', width: 100, sorttype: 'number', formatter: 'number', formatoptions: {decimalSeparator: '.', thousandsSeparator: ',', decimalPlaces: objGeneral._cantDecimal, defaultValue: '0.00'}, sortable: false},
										],
										rowNum : objProducto.length,
										shrinkToFit : false,
										width : 'auto',
										height : 100,
										rownumbers : true,
									})
									fnEstiloGrid(div_grilla, jqGridDet, true);
								}
							})
							fnEstiloGrid(div_grilla, jqGridDet, true);
						},						
					})
					fnEstiloGrid(div_grilla, jqGridDet, true);
				},
				footerrow    : true,
                loadComplete : function(){
                    var totalPedidos = $('#jqGrid_'+objGeneral._abrev).jqGrid('getCol','total_pedidos', false, 'sum');
                    $('#jqGrid_'+objGeneral._abrev).jqGrid('footerData', 'set', {total_pedidos: totalPedidos});
                }
			});
			fnEstiloGrid('div_grilla_'+objGeneral._abrev, 'jqGrid_'+objGeneral._abrev, true);
		}
	});
}

/**
 * Datos Generales
 * @return {[array]}
 */
function fnDataGeneral() {
	var abrev = '<?php echo $data['abrev']; ?>' ;
	var mydata = {
		_urlApi : '<?php echo URL_API; ?>',
		_modalLoading : 'modalLoading',
		_cantDecimal : <?php echo DECIMAL_PLACES; ?>,
		_abrev : abrev,
	}
	return mydata;
}

</script>