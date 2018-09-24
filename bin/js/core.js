(function(){
	let ith = document.querySelectorAll("[id^='item']");
	let instHome = ith.innerHTML;

	console.log(ith.length);
	for(let i = 0; i < ith.length; i++){
		console.log('.'+ith[i].id);
		let block = document.querySelector('.'+ith[i].id);

		ith[i].addEventListener('mouseover',function(){
			
			block.style.display = 'block';
			this.offsetWidth;
			/*
			block.addEventListener('mouseover',function(){
				this.style.display = 'block';
				this.offsetWidth;
			});
			*/
			block.addEventListener('mouseout',function(){
				this.style.display = 'none';
				this.offsetWidth;
			});
		});


	}

})();