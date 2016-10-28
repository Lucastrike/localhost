
window.onload = function(){

var projectsMenu = document.getElementById('projectsMenu');
projectsMenu.onmouseover = function(){
  var projectsLi = projectsMenu.getElementsByClassName('projectsLi');
  for (var i=0; i<projectsLi.length; i++) {
    projectsLi[i].style.display = "block";
  }
}

}
