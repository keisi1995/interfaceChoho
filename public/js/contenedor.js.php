<script type="text/javascript">
$(document).ready(function (){
	$('input[type=text]').attr('autocomplete','off');    
	$.jgrid.defaults.responsive = true;
	$.jgrid.defaults.styleUI = 'Bootstrap';
});

function fnEstiloGrid(wdivgrid, wjqgrid, walto=false) {    
	$('#'+wdivgrid+' table thead').addClass('tbl_titulo');
	if (walto == true) {$('#'+wdivgrid+' table thead tr th div').css('height', '35px');}
	$('#'+wdivgrid+' tbody tr').addClass('tbl_body');
	$('#'+wjqgrid).jqGrid('setFrozenColumns');
}


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