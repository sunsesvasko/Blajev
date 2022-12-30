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
