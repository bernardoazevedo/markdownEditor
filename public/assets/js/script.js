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


    $('#text').ready(parseMarkdown);
    $('#text').on('keyup', parseMarkdown);


    var root = document.querySelector(':root');

    $('#text').val(Cookies.get("markdownText"));

    let textColor = Cookies.get("textColor");
    $('#textColor').val(textColor);
    root.style.setProperty('--textColor', textColor);

    let highlightColor = Cookies.get("highlightColor");
    $('#highlightColor').val(highlightColor);
    root.style.setProperty('--highlightColor', highlightColor);

    let backgroundColor = Cookies.get("backgroundColor");
    $('#backgroundColor').val(backgroundColor);
    root.style.setProperty('--backgroundColor', backgroundColor);

    let titleMargin = Cookies.get("titleMargin");
    $('#titleMargin').val(titleMargin);
    root.style.setProperty('--titleMargin', titleMargin+'px');

    let marginHeight = Cookies.get("marginHeight");
    $('#marginHeight').val(marginHeight);
    root.style.setProperty('--marginHeight', marginHeight+'px');


    $('#textColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--textColor', newColor);
        Cookies.set("textColor", newColor, {expires: 7});
    });

    $('#highlightColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--highlightColor', newColor);
        Cookies.set("highlightColor", newColor, {expires: 7});
    });

    $('#backgroundColor').on('change', function(){
        let newColor = $(this).val();
        root.style.setProperty('--backgroundColor', newColor);
        Cookies.set("backgroundColor", newColor, {expires: 7});
    });

    $('#titleMargin').on('change', function( ){
        let newTitleMargin = $(this).val();
        root.style.setProperty('--titleMargin', newTitleMargin+'px');
        Cookies.set("titleMargin", newTitleMargin, {expires: 7});
    });

    $('#marginHeight').on('change', function(){
        let newMarginHeight = $(this).val();
        root.style.setProperty('--marginHeight', newMarginHeight+'px');
        Cookies.set("marginHeight", newMarginHeight, {expires: 7});
    });


    $('.copy-button').click(function() {
        event.preventDefault();

        let elementName = $(this).children()[0].value;
        elementToCopy = $('#'+elementName);

        let textToCopy = elementToCopy.text();
        if(textToCopy == ''){
            textToCopy = elementToCopy.val();
        }

        let tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
      });
});
