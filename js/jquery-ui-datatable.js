var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#atletas",
        fields: [ {
                label: "Atletas:",
                name: "atletas"
            }, {
                label: "Nome:",
                name: "nome"
            }, {
                label: "Posição:",
                name: "posicao"
            }
        ]
    } );
 
    var tableTools = new $.fn.dataTable.TableTools( table, {
        sRowSelect: "os",
        aButtons: [
            { sExtends: "editor_edit",   editor: editor },
            { sExtends: "editor_remove", editor: editor }
        ]
    } );
    $( tableTools.fnContainer() ).insertBefore( '#atletas_filter' );
} );