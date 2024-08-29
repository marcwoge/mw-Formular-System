window.addEventListener("message", function(event) {
    if (event.data.type === "resizeIframe" && event.data.height) {
        var iframe = document.getElementById('formularIframe');
        if (iframe) {
            iframe.style.height = (event.data.height + 100) + 'px';
        }
    }
}, false);