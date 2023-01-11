function btn(){
	document.querySelector(".admin-div").style.border = "3px solid red";
	document.getElementById("log-msg").innerHTML = 'Please log in';
}



//for downloading result in PDF format


	var element = document.getElementById("makepdf");

	function generatePDF(){
		
const opt = {
  filename: 'myPage.pdf',
  margin: 2,
  image: {type: 'jpeg', quality: 0.9},
  jsPDF: {format: 'a4', orientation: 'portrait'}
};
// New Promise-based usage:
html2pdf().set(opt).from(element).save();
// Old monolithic-style usage:
//html2pdf(element, opt);
}
