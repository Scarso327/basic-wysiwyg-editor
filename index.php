<!DOCTYPE html>
<html>
    <head>
        <title>Basic WYSIWYG Editor</title>

        <meta name='Viewport' content='width=device-width, initial-scale=1'>

        <link rel='stylesheet' href='css/style.css' type='text/css' />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>
        
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
    </head>
    <body>
        <div style="margin: auto;">
            <h4>Input:</h4>
            <div class="WYSIWYG-Editor">
                <div class="Editor-Buttons">
                    <a class="Editor-Button" data-action="bold" href="javascript:">
                        <span class="fas fa-bold"></span>
                    </a>
                    <a class="Editor-Button" data-action="italic" href="javascript:">
                        <span class="fas fa-italic"></span>
                    </a>
                    <a class="Editor-Button" data-action="underline" href="javascript:">
                        <span class="fas fa-underline"></span>
                    </a>
                    <a class="Editor-Button" data-action="strikethrough" href="javascript:">
                        <span class="fas fa-strikethrough"></span>
                    </a>
                    <span class="seperator"></span>
                    <a class="Editor-Button" data-action="insertOrderedList" href="javascript:">
                        <span class="fas fa-list-ol"></span>
                    </a>
                    <a class="Editor-Button" data-action="insertUnorderedList" href="javascript:">
                        <span class="fas fa-list"></span>
                    </a>
                    <a class="Editor-Button" data-action="justifyLeft" href="javascript:">
                        <span class="fas fa-align-left"></span>
                    </a>
                    <a class="Editor-Button" data-action="justifyCenter" href="javascript:">
                        <span class="fas fa-align-center"></span>
                    </a>
                    <a class="Editor-Button" data-action="justifyRight" href="javascript:">
                        <span class="fas fa-align-right"></span>
                    </a>
                    <a class="Editor-Button" data-action="justifyFull" href="javascript:">
                        <span class="fas fa-align-justify"></span>
                    </a>
                </div>
                <div class="Editor-Input" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true">
                    <p><br></p>
                </div>
            </div>
            <h4>Output:</h4>
            <p id="output"></p>
        </div>
    </body>
    <script src="js/wysiwyg-editor.js"></script>
</html>