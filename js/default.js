// Observe la position pour activer l'animation de chaque service

var services = document.querySelectorAll('#services ul li, #services > p');
var creations = document.querySelectorAll('#creations ul');

var observer = new IntersectionObserver(function(entries, observer) {
		var activated = entries.reduce(function (max, entry) {
			return (entry.intersectionRatio > max.intersectionRatio) ? entry : max;
		});

		if (activated.intersectionRatio > 0) {
			activated.target.classList.add('animed');
		}
	}, {
		threshold: 0.5
	}
);

services.forEach(element => observer.observe(element));
creations.forEach(element => observer.observe(element));

if (window.location.hash == "#services") {
	function activeAnimation(e) {
		e.classList.add('animed');
	}
	services.forEach(element => activeAnimation(element));
}

if (window.location.hash == "#creations") {
	function activeAnimation(e) {
		e.classList.add('animed');
	}
	creations.forEach(element => activeAnimation(element));
}

// Affichage du nombre de caractères restant

var message = document.querySelector('#message');
var counter = document.querySelector('#counter');
var countermessage = document.querySelector('#countermessage');
var maxchar = 5000;

message.addEventListener('input', updateCounter);

function updateCounter(e) {
	if (e.target.value.length < (maxchar - 1) )
		countermessage.innerHTML = 'caractères restants';
	else
		countermessage.innerHTML = 'caractère restant';
	counter.innerHTML = maxchar - e.target.value.length;
}

// Bouton d'activation du mode Sombre / Clair
// JS Source : https://hidde.blog/dark-light/
var button = document.querySelector('.theme-switcher');
var prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
var currentTheme;

if (prefersDark.matches) {
	currentTheme = 'dark';
} else {
	// default
	currentTheme = 'light';
}

button.addEventListener('click', function(event) {
	currentTheme = document.documentElement.getAttribute('data-theme-preference') === "dark" ? "light" : "dark";
	setTheme(currentTheme);
});

prefersDark.addEventListener('change', function(event) {
	currentTheme = event.matches ? 'dark' : 'light';
	setTheme(currentTheme);
});

function setTheme(currentTheme) {
	var pressed = currentTheme === 'dark' ? 'true' : 'false';
	document.documentElement.setAttribute('data-theme-preference', currentTheme);
	button.setAttribute('aria-pressed', pressed);
}

setTheme(currentTheme);
