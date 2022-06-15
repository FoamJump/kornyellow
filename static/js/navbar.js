let nav = document.getElementById("nav");
let navOpenButton = document.getElementById("navOpenButton");
let navCloseButton = document.getElementById("navCloseButton");
let navCloseOverlay = document.getElementById("navCloseOverlay");

navOpenButton.addEventListener("click", () => nav.classList.toggle("active"));
navCloseButton.addEventListener("click", () => nav.classList.remove("active"));
navCloseOverlay.addEventListener("click", () => nav.classList.remove("active"));

let navButtons = document.querySelectorAll(".js-nav-button");
navButtons.forEach((navButton) => {
	console.log(navButton.href);
	if (navButton.href.includes(window.location.pathname))
		navButton.classList.add("active");
});
