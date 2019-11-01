$(document).ready(function() {
    $(".Editor-Button").click(function () { action($(this).data("action")); });
    $(".Editor-Input").keyup(updateOutput);

    // Fix deleting of the firstline <p>
    $('.Editor-Input').keydown(function(e) {
        if (e.keyCode === 8) {
            if ($(".Editor-Input").html() == "" || $(".Editor-Input").html() == "<p><br></p>") {
                $(".Editor-Input").html("<p><br></p>");
                return false;
            }
        }
    });
});

function action (action) {
    document.execCommand(action);
    updateOutput();
}

function updateOutput() {
    var content = $(".Editor-Input").children();
    $("#output").html(content.clone());
}