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
