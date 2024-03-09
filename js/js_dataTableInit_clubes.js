$(document).ready(function(){
	$('#clubes').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_clubes.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "apelido"},
		{"mDataProp": "nome"},
		{"mDataProp": "torcida"}
		]
	});
});