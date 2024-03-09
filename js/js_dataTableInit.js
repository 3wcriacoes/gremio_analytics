$(document).ready(function(){
	$('#atletas').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_atletas.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "posicao"}
		]
	});
});