var menu = document.getElementById('menu');
var navi = document.getElementById('navi');
var exit = document.getElementById('exit');

menu.addEventListener('click', function (e) {
  navi.classList.toggle('hide-mobile');
  e.preventDefault();
});

exit.addEventListener('click', function (e) {
  navi.classList.add('hide-mobile');
  e.preventDefault();
});

function reload() {
  var e = document.getElementById("countryId");
  document.write(e);
}