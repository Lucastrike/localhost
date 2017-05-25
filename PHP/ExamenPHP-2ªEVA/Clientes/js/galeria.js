window.onload=function() {
  var eliminar = document.getElementById('elim');
  eliminar.onclick = function() {
    if (confirm("¿Estas seguro de que desea eliminar?")) {
      return true;

    }else {
      return false;
    }
  }
}
