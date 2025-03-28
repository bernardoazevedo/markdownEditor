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

    $('#highlightColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--highlightColor', newColor);
    });

    $('#textColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--textColor', newColor);
    });

    $('#backgroundColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--backgroundColor', newColor);
    });
});
