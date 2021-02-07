function checkform(){
    var a=document.getElementById('priceForm');

    a.addEventListener('submit', function(event) {
        event.preventDefault();
        if(!check()){
           return false;
        }
        if(check()){
            a.submit();
        }
    });
}

function check(){
    if(isNaN(document.priceform.price.value)){
        swal({
            icon:"error", 
            text:"Please enter a valid price",
            closeOnClickOutside: false,
        });
        return false;
    }

    if(document.priceform.price.value=="0" || document.priceform.price.value=="0.00"){
        swal({
            icon:"error", 
            text:"Please enter a valid price",
            closeOnClickOutside: false,
        });
        return false;
    }
    return true;
}

function resetform(){
    document.getElementById('id').value="";
    document.getElementById('name').value="";
    document.getElementById('price').value="";
}

function priceSuccess(){
    swal({
        icon:"success", 
        text:"Price Updated Successfully!",
        closeOnClickOutside: false,
    });
}

function priceFail(){
    swal({
        icon:"warning", 
        text:"Error!",
        closeOnClickOutside: false,
    });
}

function invalid(){
    swal({
        icon:"error", 
        text:"Invalid ID",
        closeOnClickOutside: false,
    });
}
