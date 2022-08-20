let a = document.getElementById("@");
a.innerHTML = "อภิญวัช ขวัญพฤกษ์";
a.style = "font-weight: bold;";

generateRainbowText(a);
window.setInterval(function(){
	generateRainbowText(a);
}, 10);

function generateRainbowText(element) {
	let text = a.innerText;
	a.innerHTML = "";
	for (let i = 0; i < text.length; i++) {
		let charElem = document.createElement("span");
		let b = (getTime()+((360*i)/text.length))%360;
		charElem.style.color = "hsl(" + b + ",80%,50%)";
		charElem.innerHTML = text[i];
		a.appendChild(charElem);
	}
}
function getTime() {
	return Math.floor(Date.now()/5)
}
