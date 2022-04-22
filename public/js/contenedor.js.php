<script type="text/javascript">
$(document).ready(function (){
	$('input[type=text]').attr('autocomplete','off');    
	$.jgrid.defaults.responsive = true;
	$.jgrid.defaults.styleUI = 'Bootstrap';
});

/**
 * @param  {[String]} id del elemento divGrid table html 
 * @param  {[String]} id del elemento jqGrid table html
 * @param  {Boolean} define el alto de la columna del table
 */
function fnEstiloGrid(wdivgrid, wjqgrid, walto=false) {    
	$('#'+wdivgrid+' table thead').addClass('tbl_titulo');
	if (walto == true) {$('#'+wdivgrid+' table thead tr th div').css('height', '35px');}
	$('#'+wdivgrid+' tbody tr').addClass('tbl_body');
	$('#'+wjqgrid).jqGrid('setFrozenColumns');
}

/**
 * @param  {[String]} id del elemento html
 * @param  {[Integer]} id tip de listado para ejecutar el store combobox
 * @param  {String} valor por defecto del combobox
 */
function fnCbxGeneral(element, tip, valDefault='SELECCIONE') {
	var objGeneral = fnDataGeneral();
	$.ajax({
		type : 'GET',
		dataType : 'json',
		data : {             
		},
		url : objGeneral._urlApi+ 'combobox/listar/'+tip,
		success : function (respt) {
			if (valDefault!='') {
				$('#'+element).append('<option value="">'+valDefault+'</option>');
			}

			if (respt.result.total>0) {
				for (var i =0; i<respt.result.total; i++) {
					$('#'+element).append('<option value="'+respt.result.items[i].ID+'">'+respt.result.items[i].LABEL+'</option>');
				}
			}
		}
	}).done(function(respt) {
	}).fail(function(jqXHR, textStatus, errorThrown) {
		console.log(jqXHR.responseText);
	}).always(function() {
	});
}

</script>