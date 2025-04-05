$(document).ready(function(){
    let parseMarkdown = function(){
        let markdownText = $('#text').val();
        Cookies.set("markdownText", markdownText, {expires: 7});

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

    lastMarkdownText = Cookies.get("markdownText");
    $('#text').val(lastMarkdownText);

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

    $('#titleMargin').on('change', function(){
        let newTitleMargin = $(this).val();
        root.style.setProperty('--titleMargin', newTitleMargin+'px');
    });

    $('#marginHeight').on('change', function(){
        let newMarginHeight = $(this).val();
        root.style.setProperty('--marginHeight', newMarginHeight+'px');
    });
});
