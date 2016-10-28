
function sum(){

  var arrayCount = arguments.length;
  alert(arrayCount);

  var res = 0;

  for (var i=0; i<arguments.length; i++) {
    res = res + arguments[i];
  }
  alert(res);
}

sum(1,2,3);
