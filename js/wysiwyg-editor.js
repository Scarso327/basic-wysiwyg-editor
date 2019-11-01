$(document).ready(function() {
    $(".Editor-Button").click(function () { action($(this).data("action")); });
    $(".Editor-Input").keyup(updateOutput);

    // Fix deleting of the firstline <p>
    $('.Editor-Input').on("change paste keyup keydown", function(e) {
        if ($(".Editor-Input").html() == "" || (e.keyCode === 8 && $(".Editor-Input").html() == "<p><br></p>")) {
            $(".Editor-Input").html("<p><br></p>");
            event.preventDefault();
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