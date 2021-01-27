var buttonDescriptionToggle = document.getElementById(
  'boutton-description-toggle'
);

var hidenDescription = document.getElementById('hiden-description');

buttonDescriptionToggle.addEventListener('click', function () {
  if (hidenDescription.className == 'd-none') {
    hidenDescription.className = 'd-block';
  } else {
    hidenDescription.className = 'd-none';
  }
});
