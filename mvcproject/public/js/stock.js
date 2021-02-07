function resetform(){
    document.getElementById('id').value="";
    document.getElementById('name').value="";
    document.getElementById('quantity').value="";
}

function invalid(){
    swal({
        icon:"error", 
        text:"Invalid ID",
        closeOnClickOutside: false,
    });
}