function includePHP(path){
	req = new XMLHttpRequest()

	req.open('GET', path, false);
	req.send(null);

	// if (req.status === 0) {}

	return req.responseText;
}
