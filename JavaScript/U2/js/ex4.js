


function functionImage1() {
  var img = document.getElementById('img1');
  scrollTo(img.offsetLeft, img.offsetTop);
  //scrolldelay = setTimeout(pageScroll,10);
}

function functionImage2() {
  var img = document.getElementById('img2');
  scrollTo(img.offsetLeft, img.offsetTop);
  //scrolldelay = setTimeout(pageScroll,10);
}

function functionImage3() {
  var img = document.getElementById('img3');
  scrollTo(img.offsetLeft, img.offsetTop);
  //scrolldelay = setTimeout(pageScroll,10);
}

function functionShuffle() {
  var shuffleNum = Math.floor((Math.random() * 3) + 1);
  var img = document.getElementById('img'+shuffleNum);
  scrollTo(img.offsetLeft, img.offsetTop);
  //scrolldelay = setTimeout(pageScroll,10);
}
