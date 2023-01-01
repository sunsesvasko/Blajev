  const btn = document.getElementsByClassName('nigga');

  let index = 0;

  const colors = ['red', 'gray'];

  for(var e = 0; e < btn.length; e++) {
    btn.addEventListener('click', onClick)
  }

  function onClick() {
    btn.style.backgroundColor = colors[index];
    btn.style.color = 'white';

    index = index >= colors.length - 1 ? 0 : index + 1;
  };

// ============================

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
// ============================
