function clrRows(){
	var bodyRef = document.getElementById('table1').getElementsByTagName('tbody')[0]; 
	bodyRef.innerHTML = '';
}

function checkform(){
    if (document.priceform.price.value=="") {
        alert("Please enter the needed amount");
        return false;
    }
    return true;
}

