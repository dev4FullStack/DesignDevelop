
skw = new SkyWeb();

/*Fonction anonyme MAIN de l'appli*/
(function(){
	let ith = document.querySelectorAll("[id^='item']");
	let launch = document.querySelector("#launch");

	for(let i = 0; i < ith.length; i++){
		console.log('.'+ith[i].id);
		let block = document.querySelector('.'+ith[i].id);

		ith[i].addEventListener('mouseover',function(){
			
			block.style.display = 'block';
			this.offsetWidth;
			
			block.addEventListener('mouseout',function(){
				this.style.display = 'none';
				this.offsetWidth;
			});
		});


	}

	launch.addEventListener('click',function(e){
	    content = document.querySelector(".content");
	    //ont séléctionne le DOM puis ont injecte notre nouveau contenu 
		content.innerHTML = skw.includePHP('http://127.0.0.1/www/lab/integrationPSD/DesignDevelop/bin/php/addUser.php');
		//ont adapte la classe a celle de notre nouveau contenu
		content.className = "webNav" ;
		content.offsetWidth;
	});

})();

