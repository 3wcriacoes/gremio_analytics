$(document).ready(function(){
	$('#estadios').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_estadios.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "clube"}
		]
	});
});