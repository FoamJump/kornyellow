let nav = document.getElementById("nav");
let navOpenButton = document.getElementById("navOpenButton");
let navCloseOverlay = document.getElementById("navCloseOverlay");

navOpenButton.addEventListener("click", () => nav.classList.toggle("active"));
navCloseOverlay.addEventListener("click", () => nav.classList.remove("active"));

let navButtons = document.querySelectorAll(".js-nav-button");
navButtons.forEach((navButton) => {
	if (window.location.pathname === "/" && navButton.href.includes("/home"))
		navButton.classList.add("active");
	else if (window.location.pathname !== "/" && navButton.href.includes(window.location.pathname))
		navButton.classList.add("active");
});
