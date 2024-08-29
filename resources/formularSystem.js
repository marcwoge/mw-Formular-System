window.addEventListener("message", function(event) {
    if (event.data.type === "resizeIframe" && event.data.height) {
        var iframe = document.getElementById('formularIframe');
        if (iframe) {
            console.log("Original height: " + event.data.height);
            console.log("Adjusted height: " + (event.data.height + 400));
            iframe.style.height = (event.data.height + 100) + 'px';
            console.log("Iframe height set to: " + iframe.style.height);
        }
    }
}, false);