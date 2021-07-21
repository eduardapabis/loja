function mask_date(){
	var n_char = document.getElementById("txtData").value.length;
	if(n_char == 2){
		document.getElementById("txtData").value = document.getElementById("txtData").value + "/";
	}else if(n_char == 5){
		document.getElementById("txtData").value = document.getElementById("txtData").value + "/";
	}
}
function mask_cep(){
	var n_char = document.getElementById("txtCEP").value.length;
	if(n_char == 5){
		document.getElementById("txtCEP").value = document.getElementById("txtCEP").value + "-";
	}
}
function mask_cel(){
	var n_char = document.getElementById("txtCel").value.length;
	if(n_char == 2){
		document.getElementById("txtCel").value = "("+ document.getElementById("txtCel").value + ") 9";
	
	}else if(n_char == 10){
		document.getElementById("txtCel").value = document.getElementById("txtCel").value + "-";
	}
}