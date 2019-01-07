class Animation{

	constructor(){
		this.btn = document.querySelector(#animation);
		this.myDiv = document.querySelector(#galerie);
	}

	click(callback){
    	this.btn.addEventListener("click", callback);
	}

	loop(){

		window.requestAnimationFrame(frameLoop1); 
		pos = this.myDiv.syle.left ;
		if (pos <  window.innerWidth){
			this.myDiv.syle.left += (pos+=3) + 'px' ; 
		}else{
			pos = 0 ; 
		}
	}



}


function main(){

	var anim = new Animation(); 
	anim.click(loop) ; 

}
