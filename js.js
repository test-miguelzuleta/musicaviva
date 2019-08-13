function showonlyone(thechosenone){
    var newboxes = document.getElementsByTagName("div");
    for(var x=0; x<newboxes.length; x++){
        name = newboxes[x].getAttribute("name");
        if (name == 'newboxes'){
			if (newboxes[x].id == thechosenone){
				newboxes[x].style.display = 'block';}
            else{
				newboxes[x].style.display = 'none';}}}}
				
function checkForm(){
	var zename = document.getElementById('nameInput').value;
	var zeemail = document.getElementById('emailInput').value;
	var zekidsname = document.getElementById('kidsnameInput').value;
	var zedetails = document.getElementById('detailsInput').value;
		if (zename.length < 5 || zeemail.length < 5 || zekidsname.length < 5 || zedetails.length < 5){
			alert("Alguna de tus casillas esta vacia, o incompleta. Por favor llenas con detalle las casillas requeridas para enviar el email");
			return false;}
		else{
			return true;}}