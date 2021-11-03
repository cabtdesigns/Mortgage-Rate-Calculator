$(document).ready(function(){
    $('#data_table').Tabledit({
    deleteButton: false,
    editButton: false,
    columns: {
    identifier: [0, 'id'],
    editable: [[1, 'rate'], [2, 'fifteenday']]
    },
    hideIdentifier: false,
    url: '../calculator/live_edit_ltv.php'
    });
    });