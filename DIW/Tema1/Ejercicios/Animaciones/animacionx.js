function mostrar(x) {
  x.classList.toggle("change");
  document.getElementById("menu-vertical").style.width = "30%";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("menu").style.display = "none";
}


function ocultar() {
  document.getElementById("menu-vertical").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("menu").style.display = "inline";

}