procSelect.onclick=function () {
	var ADS_but = document.getElementById("ADS_but");
	var selector = procSelect.options[this.selectedIndex].value;
	console.log("selector="+selector);
	if ((selector=="CAG")||(selector=="AAG")) {
		console.log("Сработало (selector==\"CAG\")||(selector==\"AAG\")");
		ADS_but.style="display:block";
	}
		else {
			console.log("Не сработало (selector==\"CAG\")||(selector==\"AAG\")");
			ADS_but.style="display=none";
		}
	if (selector=="CAG") {
		console.log("Сработало selector==\"CAG\"");
		ADS_but_link.href="C:/Documents and Settings/Admin.MICROSOF-A903B2/Мои документы/БВВ/git/AngioScript/AngioScript/angioscript-cardiac.html";
	} else if (selector=="AAG") {
		console.log("Сработало selector==\"AAG\"");
		ADS_but_link.href="C:/Documents and Settings/Admin.MICROSOF-A903B2/Мои документы/БВВ/git/AngioScript/AngioScript/angioscript-legs.html";	
	}
}
