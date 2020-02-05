var pagetop, image1, imag, image2, imag1, yPos, nav;
function yScroll(){
	pagetop = document.getElementById('pagetop');
	image1 = document.getElementById('image1');
	imag = document.getElementById('imag');
	image2 = document.getElementById('image2');
	imag1 = document.getElementById('imag1');
	nav = document.getElementById('nav');
	yPos = window.pageYOffset;
	if(yPos > 150){
		pagetop.style.height = "50px";
		pagetop.style.paddingTop = "10px";
		nav.style.paddingTop = "3px";
		image1.style.height = "35px";
		image1.style.width = "40px";
		imag.style.height = "35px";
		imag.style.width = "40px";
		image2.style.paddingLeft = "80px";
		image2.style.height = "35px";
		image2.style.width = "259px";
		imag1.style.height = "35px";
		imag1.style.width = "259px";


	} else {
		pagetop.style.height = "100px";
		pagetop.style.paddingTop = "10px";
		nav.style.paddingTop = "20px";
		image1.style.height = "80px";
		image1.style.width = "90px";
		imag.style.height = "80px";
		imag.style.width = "90px";
		image2.style.paddingLeft = "115px";
		image2.style.height = "40px";
		image2.style.width = "296px";
		imag1.style.height = "40px";
		imag1.style.width = "296px";
	}
}
window.addEventListener("scroll", yScroll);