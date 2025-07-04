let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  header.classList.toggle('active');
  document.body.classList.toggle('active');
}

window.onscroll = () => {
  if (window.innerWidth < 991) {
    menu.classList.remove('fa-times');
    header.classList.remove('active');
    document.body.classList.remove('active');
  }

  document.querySelectorAll('section').forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

    if (top >= offset && top < offset + height) {
      let links = document.querySelectorAll('.header .navbar a');
      links.forEach(link => link.classList.remove('active'));

      let currentLink = document.querySelector(`.header .navbar a[href="#${id}"]`);
      if (currentLink) currentLink.classList.add('active');
    }
  });

  
}