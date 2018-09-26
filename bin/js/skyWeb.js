
function SkyWeb(){

	var self = {};

	self.includePHP = function(path){
		req = new XMLHttpRequest()

		req.open('GET', path, false);
		req.send(null);

		return req.responseText;
	}

	return self;
}