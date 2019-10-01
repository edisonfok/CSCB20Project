function hideelements(id) {
	for (working in id){
		var x = document.getElementById(working);
		x.style.display = "none";
	}
}

function hideTA() {
    var x = document.getElementById("TA");
    x.style.display = "block";
	var y = document.getElementById("navbutton");
	var aTag = document.createElement('a');
		aTag.setAttribute('href',"https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#TA");
		aTag.innerHTML = "For TA";
		y.appendChild(aTag);
	var z = document.getElementById("courseview");
	z.innerHTML = "CSCB20 TA View";
}

function hideProf() {
    var x = document.getElementById("Prof");
    x.style.display = "block";
	var y = document.getElementById("navbutton");
	var aTag = document.createElement('a');
		aTag.setAttribute('href',"https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#Prof");
		aTag.innerHTML = "For Prof";
		y.appendChild(aTag);
	var z = document.getElementById("courseview");
	z.innerHTML = "CSCB20 Prof View";
}

function hideStudent() {
	var x = document.getElementById("Student");
    x.style.display = "block";
	var y = document.getElementById("navbutton");
	var aTag = document.createElement('a');
		aTag.setAttribute('href',"https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#Student");
		aTag.innerHTML = "Marking & Feedback";
		y.appendChild(aTag);
}

function changeText(text){
	var display = document.getElementById('loginbutton');
	display.innerHTML = "";
	display.innerHTML = text;
}
