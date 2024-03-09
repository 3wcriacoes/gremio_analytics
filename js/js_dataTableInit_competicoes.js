$(document).ready(function(){
	$('#competicoes').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_competicoes.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		]
	});
});