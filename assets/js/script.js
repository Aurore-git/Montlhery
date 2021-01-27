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

var buttonVacationDescriptionToggle = document.getElementById(
  'boutton-vacation-description-toggle'
);

var hidenVacationDescription = document.getElementById(
  'vacation-hiden-description'
);

buttonVacationDescriptionToggle.addEventListener('click', function () {
  if (hidenVacationDescription.className == 'd-none') {
    hidenVacationDescription.className = 'd-block text-justify';
  } else {
    hidenVacationDescription.className = 'd-none';
  }
});
