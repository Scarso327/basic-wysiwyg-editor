$(document).ready(function() {
    $(".Editor-Button").click(function () { action($(this).data("action")); });
    $(".Editor-Input").keyup(updateOutput);
});

function action (action) {
    document.execCommand(action);
    updateOutput();
}

function updateOutput() {
    var content = $(".Editor-Input").children();
    $("#output").html(content.clone());
}