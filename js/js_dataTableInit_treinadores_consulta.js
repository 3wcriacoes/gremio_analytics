$(document).ready(function(){
	$('#atletas').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_treinadores.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"sPaginationType":"two_numbers",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "clube_atual"}
		]
		"aoColumnsDefs":[
		{ "bSortable": false, "aTargets": [0] }
		]
	});
	
	