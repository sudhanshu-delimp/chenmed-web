function disableSecureDocumentHotkeys() {
	let iframes = document.getElementsByClassName('pdfjs-iframe');
	if (iframes.length > 0) {
		iframes[0].contentWindow.addEventListener('keydown', function(e) {
			e.stopPropagation();
		}, true);
	}
}
if (window.addEventListener) {
    window.addEventListener('load', disableSecureDocumentHotkeys);
} else {
    window.attachEvent('onload', disableSecureDocumentHotkeys);
}
