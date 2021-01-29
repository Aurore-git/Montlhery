window.onscroll = function (){
	if(document.documentElement.scrollTop > 100){
		document.getElementById("logo").style.width = '100px';
		document.getElementById("nav").style.padding = '0 10px';
	} else{
		document.getElementById("logo").style.width = '180px';
		document.getElementById("nav").style.padding = '0 10px';
	}
}