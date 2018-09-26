	
class SkyWeb(){

	function SkyWeb(self){
		
	}

	function includePHP(path){
		req = new XMLHttpRequest()

		req.open('GET', path, false);
		req.send(null);

		return req.responseText;
	}
}