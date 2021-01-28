$('#MonCollapse').collapse({
  z-index: 1,
  show: false
});

$('#MonCollapse2').collapse({
  z-index: 1,
  show: false
});

$('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});