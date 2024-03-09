$(document).ready(function(){
	$('#confrontos').dataTable({
		"bProcessing": true,
		"sAjaxSource": "lista_confrontos.php",
		"bJQueryUI": true,
		"sAjaxDataProp": "",
		"aoColumns":[
		{"mDataProp": "data"},
		{"mDataProp": "competicao"},
		{"mDataProp": "equipe1"},
		{"mDataProp": "score1"},
		{"mDataProp": "score2"},
		{"mDataProp": "equipe2"},
		]
	});
});