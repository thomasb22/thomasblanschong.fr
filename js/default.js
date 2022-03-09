// Boucle les animations de la partie présentation

setInterval(function () {
	document.querySelectorAll('#presentation img').forEach(function(e) {
		e.classList.remove('animed');
		void e.offsetWidth;
		e.classList.add('animed');
	});
}, 9500);

// Observe la position pour activer l'animation de chaque section lors du premier passage

var scrollContainer = document.querySelector('main');
var elements = document.querySelectorAll('main > section');

var observer = new IntersectionObserver(function(entries, observer) {
		var activated = entries.reduce(function (max, entry) {
			return (entry.intersectionRatio > max.intersectionRatio) ? entry : max;
		});

		if (activated.intersectionRatio > 0) {
			if (activated.target.getAttribute('id') != 'presentation')
				activated.target.classList.add('animed');
		}
	}, {
		root: scrollContainer,
		threshold: 1
	}
);

elements.forEach(element => observer.observe(element));

// Observe la position du défilement horizontal des créations pour afficher ou non les boutons de navigation

var creations = document.querySelector('#creations');
var creationElements = document.querySelectorAll('#creations > ul > li');

var observerCreation = new IntersectionObserver(function(entries, observer) {
		var activated = entries.reduce(function (max, entry) {
			return (entry.intersectionRatio > max.intersectionRatio) ? entry : max;
		});

		if (activated.target.previousElementSibling != null) {
			document.querySelector('#creation-previous').style.visibility = 'visible';
			document.querySelector('#creation-previous').setAttribute('href', '#' + activated.target.previousElementSibling.getAttribute('id') );
		}
		else
			document.querySelector('#creation-previous').style.visibility = 'hidden';

		if (activated.target.nextElementSibling != null) {
			document.querySelector('#creation-next').style.visibility = 'visible';
			document.querySelector('#creation-next').setAttribute('href', '#' + activated.target.nextElementSibling.getAttribute('id') );
		}
		else
			document.querySelector('#creation-next').style.visibility = 'hidden';
	}, {
		root: creations,
		threshold: 0.5
	}
);

creationElements.forEach(creation => observerCreation.observe(creation));

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
