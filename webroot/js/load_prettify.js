(function() {
	var preTags = document.getElementsByTagName('pre');
	var count = preTags.length;
	for (i=0;i<count;i++) {
		preTags[i].className = preTags[i].className + ' prettyprint';
	}
	prettyPrint();
})();