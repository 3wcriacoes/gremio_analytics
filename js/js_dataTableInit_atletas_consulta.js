$(document).ready(function(){
	$('#atletas').dataTable({
		"bProcessing": true,
		"sAjaxSource": "atletas_listar.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"sPaginationType":"full_numbers",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "posicao"}
		]
	});
});
