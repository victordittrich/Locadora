var input = document.getElementById('senha');
var img = document.getElementById('olho');
img.addEventListener('click', function () {
  if(input.type== 'password'){
    input.type = "text";
  }else{
    input.type = 'password'
  }
});