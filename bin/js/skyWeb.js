function includePHP(path){
	req = new XMLHttpRequest()

	req.open('GET', 'http://127.0.0.1/www/lab/integrationPSD/DesignDevelop/bin/php/core.php', false);
	req.send(null);

	// if (req.status === 0) {}

	return req.responseText;
}
