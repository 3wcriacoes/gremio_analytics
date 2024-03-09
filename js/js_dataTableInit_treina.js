$(document).ready(function(){
	$('#treinadores').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_treinadores.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "clube_atual"}
		]
	});
});