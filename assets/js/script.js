window.onscroll = function () {
  if (document.documentElement.scrollTop > 110) {
    document.getElementById('logo').style.width = '200px';
    document.getElementById('logo').style.transition = 'ease 1s';

    document.getElementById('nav').style.padding = '0px 10px';
    document.getElementById('nav').style.transition = 'ease 1s';
  } else if (document.documentElement.scrollTop < 90) {
    document.getElementById('logo').style.width = '400px';
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
