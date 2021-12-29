$("#dropdownlist").change(function () {
    var numInputs = $(this).val();
    $("#fields").html('');
    $("#inputArea").html('');
    $("#title").html('');
    for (var i = 0; i < numInputs; i++) {
        $("#inputArea").append(+i + 1, ':-', '<input name="inputs[]" class="form-control" placeholder ="enter field value"/>');
    }
});