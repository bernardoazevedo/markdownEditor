$(document).ready(function(){
    let parseMarkdown = function(){
        let markdownText = $('#text').val();

        $.ajax({
            url: '/markdownToHtml',
            type: 'POST',
            data:{
                markdownText: markdownText
            },
            success: function(htmlText){
                $('#htmlText').html(htmlText);
            },
            error: function(){

            }
        });
    }

    $('#text').ready(parseMarkdown);
    $('#text').on('keyup', parseMarkdown);

    var root = document.querySelector(':root');

    $('#highlight-color').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--highlight-color', newColor);
    });

    $('#text-color').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--text-color', newColor);
    });

    $('#background-color').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--background-color', newColor);
    });
});
