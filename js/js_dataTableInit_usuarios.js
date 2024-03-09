$(document).ready(function(){
	$('#usuarios').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_usuarios.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "nome"},
		{"mDataProp": "email"},
		{"mDataProp": "senha"},
		]
	});
});