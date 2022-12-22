function click() {
    const btn = document.getElementById('heart');

let index = 0;

const colors = ['red', 'white'];

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = colors[index];
  btn.style.color = 'white';

  index = index >= colors.length - 1 ? 0 : index + 1;
});
}