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

    let insertTextInTextarea = function(newText){
        event.preventDefault();
        let textarea = $('#text');
        let text = textarea.val();
        textarea.val(text+newText);
        parseMarkdown();
    }

    $('.insert-link').click(function(){
        let newText = `
[Link Example](https://md2pdf.lat)
`;
        insertTextInTextarea(newText);
    });

    $('.insert-table').click(function(){
        let newText = `
| Column 1 | Column 2 |
| -------- | -------- |
| Cel1     | Cel1     |
| Cel3     | Cel4     |
| Cel5     | Cel6     |
`;
        insertTextInTextarea(newText);
    });

    $('.insert-codeblock').click(function(){
        let newText = `
\`\`\`
while(true){
    echo "codeblock here";
}
\`\`\`
`;
        insertTextInTextarea(newText);
    });

    $('.insert-list').click(function(){
        let newText = `
- First item
- Second item
`;
        insertTextInTextarea(newText);
    });

    $('.insert-numberedList').click(function(){
        let newText = `
1. Item
2. Item
`;
        insertTextInTextarea(newText);
    });

    $('.insert-h1').click(function(){
        let newText = `
# Header 1
`;
        insertTextInTextarea(newText);
    });

    $('.insert-h2').click(function(){
        let newText = `
## Header 2
`;
        insertTextInTextarea(newText);
    });

    $('.insert-h3').click(function(){
        let newText = `
### Header 3
`;
        insertTextInTextarea(newText);
    });

    $('.insert-blockquote').click(function(){
        let newText = `
> Imagine a beautiful quote here...
`;
        insertTextInTextarea(newText);
    });

    $('.insert-bold').click(function(){
        let newText = `
**bold text**
`;
        insertTextInTextarea(newText);
    });

    $('.insert-italic').click(function(){
        let newText = `
*italic text*
`;
        insertTextInTextarea(newText);
    });

    $('.insert-image').click(function(){
        let newText = `
![Alternate text for the image here](https://images.pexels.com/photos/31356866/pexels-photo-31356866/free-photo-of-majestic-view-of-snow-capped-mount-fuji.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)
`;
        insertTextInTextarea(newText);
    });

    $('.insert-horizontalRule').click(function(){
        let newText = `
---
`;
        insertTextInTextarea(newText);
    });
});
