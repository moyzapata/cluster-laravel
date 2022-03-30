window.addEventListener("scroll", function(){
	var header = document.querySelector("header");
	header.classList.toggle("abajo",window.scrollY>0);
})

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})