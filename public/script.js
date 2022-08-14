let darkmode = document.getElementById('darkmode');
let header = document.querySelector('header');
let navbar = document.querySelector('.navbar');
let menu = document.querySelector('#menu-icon');
let percentBars = document.querySelectorAll('.percent-bar');


// SKILLS BARS
let percentValue = document.getElementsByName('percent-value');
let html = document.getElementsByName('skill-bar');

for (var i = 0, max = html.length; i < max; i++) {
  html[i].style.width = percentValue[i].innerText;
}
//END SKILLS BARS


window.addEventListener('scroll', () => {
  header.classList.toggle('shadow', window.scrollY > 0);
});

menu.onclick = () => {
  navbar.classList.toggle('active');
}

window.onscroll = () => {
  navbar.classList.remove('active');
}

darkmode.onclick = () => {
  if (darkmode.classList.contains('bx-moon')) {
    darkmode.classList.replace('bx-moon', 'bx-sun');
    document.body.classList.add('active')

    percentBars.forEach(bar => {
      bar.style.background = "red";
    });

  } else {
    darkmode.classList.replace('bx-sun', 'bx-moon')
    document.body.classList.remove('active');
    percentBars.forEach(bar => {
      bar.style.background = "var(--main-color)";
    });
  }
}