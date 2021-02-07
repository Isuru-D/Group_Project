function checkform(){
    var a=document.getElementById('registerform');
      
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

function check() {
    if (document.getElementById('pass').value != document.getElementById('repass').value) {
      swal('Provided passwords are mismatching!', 'Register again!!!!', 'error'); 
      return false;
    } else {
      return true;
    }
}

function priceSuccess(){
  swal({
      icon:"success", 
      text:"Price Updated Successfully!",
      closeOnClickOutside: false,
  });
}