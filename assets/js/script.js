window.onscroll = function () {
  if (document.documentElement.scrollTop > 100) {
    document.getElementById('logo').style.width = '100px';
    document.getElementById('nav').style.padding = '0 10px';
  } else {
    document.getElementById('logo').style.width = '180px';
    document.getElementById('nav').style.padding = '0 10px';
  }

  if (document.documentElement.scrollTop > 200) {
    document.getElementById('back-to-top').style.opacity = '1';
  } else {
    document.getElementById('back-to-top').style.opacity = '0';
  }
};

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

document.getElementById('back-to-top').addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth',
  });
});
