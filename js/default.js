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
