$("document").ready(function() {
    alert("Web page is loaded!!!");

    $("<style>.field{border: 1px solid black; margin: 5px 0;} .message{margin-left: 200px;}</style>").appendTo("head");

    $("label:first, input:first").wrapAll('<div class="field"></div>');
    $("label:nth-child(2), input:nth-child(3)").wrapAll('<div class="field"></div>');
    $("label:nth-child(3), input:nth-child(4)").wrapAll('<div class="field"></div>');
    $("label:nth-child(4), textarea:first").wrapAll('<div class="field"></div>');

    $("#name").on('blur', function() {
        var text = $(this).val();
        if (text == "") {
            $(this).focus();
        }
    });

    $("#email").on('blur', function() {
        var text = $(this).val();
        if (text == "") {
            $("label:eq(1)").css({
                'border': '3px solid green',
                'background-color': 'red'
            });
            $("<p class='message'>This field can't be empty</p>").insertAfter("label:eq(1)");
            /*$('label:first').fadeIn(500);
            setTimeout("$('label:first').fadeOut(1500);", 3000);*/
        }
    });

    $("input:last").one('click', function() {
        alert('Esto esta bien, no me marees!');
    });

});
