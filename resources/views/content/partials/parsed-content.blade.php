<style>

@property --text-color {
    initial-value: #374151;
}

@property --highlight-color {
    initial-value: #559949;
}

.parsedown {
    color: var(--text-color);
}

.parsedown h1 {
    font-size: 34px;
    font-weight: bold;
    margin-top: 20px;
}

.parsedown h2 {
    font-size: 24px;
    font-weight: bold;
    margin-top: 20px;
}

.parsedown h3 {
    font-size: 20px;
    font-weight: bold;
    margin-top: 20px;
}

.parsedown h4 {
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
}

.parsedown h5 {
    font-size: 16px;
    font-weight: bold;
    margin-top: 20px;
}

.parsedown ul {
    list-style-type: circle;
    list-style-position: inside;
}

.parsedown ol {
    list-style-type: decimal;
    list-style-position: inside;
}

.parsedown a {
    color: var(--highlight-color);
}

.parsedown a:hover {
    color: #437e38;
}

.parsedown pre {
    background-color: #e7e7e7;
    border-radius: 4px;
    padding: 8px 16px;
    margin: 4px 0px 16px 0px;
    text-wrap: wrap;
}

.parsedown code {
    background-color: #e7e7e7;
    color: #111827;
    border-radius: 4px;
    padding: 2px 4px;
    margin: 4px 0px 16px 0px;
    font-family: "Roboto Mono", monospace;
    font-size: small;
}
</style>
<section>
    <div id="htmlText" class="parsedown flex flex-col gap-y-2 sm:w-auto text-gray-700">
        O conteúdo formatado aparecerá aqui
    </div>
</section>