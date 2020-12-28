
jQuery(document).ready(function(){
  if(".fade-letters").length){
  console.log('meow');
   var div = document.querySelector(".fade-letters"),
    letters = div.textContent.split("");

  while (div.hasChildNodes()) div.removeChild(div.firstChild);

  for (var i = 0; i < letters.length; i++) {
    var letter = document.createElement("span"),
      style = "opacity " + Math.random() * 3 + "s ease-in-out";
    letter.appendChild(document.createTextNode(letters[i]));
    letter.style.WebKitTransition = letter.style.transition = style;
    letter.style.opacity = 0;
    div.appendChild(letter);
  }

  setTimeout(function () {
    for (var i = 0; i < div.childNodes.length; i++) {
      div.childNodes[i].style.opacity = 1;
    }
  }, 0);
}

});
