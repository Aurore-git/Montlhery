window.onscroll = function () {
  if (document.documentElement.scrollTop > 300) {
    document.getElementById('logo').style.width = '150px';
    document.getElementById('logo').style.transition = 'ease 1s';

    document.getElementById('nav').style.padding = '0px 10px';
    document.getElementById('nav').style.transition = 'ease 1s';
  } else if (document.documentElement.scrollTop < 80) {
    document.getElementById('logo').style.width = '300px';
    document.getElementById('logo').style.transition = 'ease 1s';

    document.getElementById('nav').style.padding = '10px 10px';
    document.getElementById('nav').style.transition = 'ease 1s';
  }

  if (document.documentElement.scrollTop > 250) {
    document.getElementById('back-to-top').style.opacity = '1';
  } else {
    document.getElementById('back-to-top').style.opacity = '0';
  }
};

// Button Du scroll ver haut de page smooth
document.getElementById('back-to-top').addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth',
  });
});

//Smooth vers les ancres
document.querySelectorAll('a[href^="#ancre"]').forEach((anchor) => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
    });
  });
});
