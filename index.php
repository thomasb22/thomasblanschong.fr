<?php
session_start();
$_SESSION['captcha'] = array( mt_rand(0, 9), mt_rand(1, 9) );
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne - Thomas Blanschong</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta name="keywords" content="developpeur web, freelance, web, internet, intégrateur, création, site internet, developpeur, site web, worpress">
		<meta name="theme-color" content="#ffffff">
		<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
		<!-- Meta Og (facebook) -->
		<meta property="og:image" content="https://thomasblanschong.fr/img/carte-site.webp">
		<link rel="image_src" href="https://thomasblanschong.fr/img/carte-site.webp">
		<meta property="og:locale" content="fr_fr">
		<meta property="og:site_name" content="Thomas Blanschong - Développeur Web">
		<meta property="og:title" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta property="og:description" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://thomasblanschong.fr/">
		<!-- Card (twitter) -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta name="twitter:image" content="https://thomasblanschong.fr/img/carte-site.webp">
		<meta name="twitter:title" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta name="twitter:url" content="https://thomasblanschong.fr/">
		<!-- Meta (google+) -->
		<meta itemprop="name" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta itemprop="description" content="Thomas Blanschong : Création de site web indépendant à Lannion, Côtes-d'Armor, Bretagne">
		<meta itemprop="image" content="https://thomasblanschong.fr/img/carte-site.webp">
		<link rel="manifest" href="/manifest.webmanifest">
		<link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="any">
		<link rel="icon" href="/img/favicons/favicon.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="/img/favicons/apple-touch-icon.png">
		<link rel="stylesheet" href="font-awesome/css/all.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<a href="/#">
				<img src="img/logo.svg" alt="Logo">
			</a>
			<nav id="menu">
				<ul>
					<li>
						<a href="#services">Services</a>
					</li>
					<li>
						<a href="#creations">Créations</a>
					</li>
					<li>
						<a href="https://portfolio.thomasblanschong.fr" target="_blank">Portfolio</a>
					</li>
					<li>
						<a href="#a-propos">À Propos</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</nav>
			<a id="nav-mobile" href="#menu">
				<i class="fas fa-bars"></i>
			</a>
			<a id="nav-mobile-close" href="#menu-close">
				<i class="fas fa-times"></i>
			</a>
		</header>
		<main>
			<header>
				<div>
					<div>
						<h1>
							Création de site web sur mesure
						</h1>
						<a class="bouton" href="#services">
							Mes services
						</a>
						<a class="bouton" href="#contact">
							Me contacter
						</a>
					</div>
				</div>
			</header>
			<section id="services">
				<h2>
					Mes services
				</h2>
				<ul>
					<li class="devweb">
						<h3>
							Développement de site web
						</h3>
						<p>
							Création de site web sur mesure. Que cela soit une simple page vitrine, un blog, un site marchant, ou tout autre type de site, je suis en mesure de vous proposer mes services.
						</p>
					</li>
					<li class="webdesign">
						<h3>
							Webdesign
						</h3>
						<p>
							Besoin d'un nouveau design pour votre site ? Je peux vous proposer plusieurs maquettes se rapprochant du mieux possible au contenu de votre site, et à votre identité.
						</p>
					</li>
					<li class="integration">
						<h3>
							Intégration web
						</h3>
						<p>
							Vous avez un nouveau design, mais personne pour l'intégrer à votre site ? Fournissez moi votre maquette, et je l'intégrerai le plus fidèlement possible à votre site.
						</p>
					</li>
					<li class="modules">
						<h3>
							Développement de modules ou de plugins
						</h3>
						<p>
							Si vous avez besoin d'améliorer votre site, je peux vous proposer le développement ou l'installation de nouveaux modules.
						</p>
					</li>
				</ul>
				<p>
					Je peux prendre en charge la totalité de votre projet. De l'étude de celui-ci à son hébergement. Je peux également me charger du dépôt de votre nom de domaine, ainsi que du référencement de votre site sur les moteurs de recherche.
				</p>
				<p>
					Pour tous mes services, je vous accompagnerai et vous conseillerai tout au long du projet.
				</p>
			</section>
			<section id="creations">
				<h2>
					Mes créations
				</h2>
				<ul>
					<li>
						<a class="linkpic" href="https://portfolio.thomasblanschong.fr/#bleudechauffe" target="_blank">
							<div>
								<picture>
									<source srcset="img/creations/bdc-500w.webp 500w, img/creations/bdc-1920w.webp 1920w" sizes="(max-width: 500px) 500px, 1920px">
									<img src="img/creations/bdc-50w.webp" alt="Capture d'écran du site Bleu de Chauffe" loading="lazy">
								</picture>
							</div>
						</a>
						<div class="mobile">
							<div>
								<img src="img/creations/bdc-mobile.webp" alt="Capture d'écran version mobile du site Bleu de Chauffe" loading="lazy">
							</div>
						</div>
					</li>
					<li>
						<a class="linkpic" href="https://portfolio.thomasblanschong.fr/#lespaniersdelarosette" target="_blank">
							<div>
								<picture>
									<source srcset="img/creations/lpdlr-500w.webp 500w, img/creations/lpdlr-1920w.webp 1920w" sizes="(max-width: 500px) 500px, 1920px">
									<img src="img/creations/lpdlr-50w.webp" alt="Capture d'écran du site Les paniers de la Rosette" loading="lazy">
								</picture>
							</div>
						</a>
						<div class="mobile">
							<div>
								<img src="img/creations/lpdlr-mobile.webp" alt="Capture d'écran version mobile du site Les paniers de la Rosette" loading="lazy">
							</div>
						</div>
					</li>
					<li>
						<a class="linkpic" href="https://portfolio.thomasblanschong.fr/#studiodumiroir" target="_blank">
							<div>
								<picture>
									<source srcset="img/creations/sdm-500w.webp 500w, img/creations/sdm-1920w.webp 1920w" sizes="(max-width: 500px) 500px, 1920px">
									<img src="img/creations/sdm-50w.webp" alt="Capture d'écran du site Studio du Miroir" loading="lazy">
								</picture>
							</div>
						</a>
						<div class="mobile">
							<div>
								<img src="img/creations/sdm-mobile.webp" alt="Capture d'écran version mobile du site Studio du Miroir" loading="lazy">
							</div>
						</div>
					</li>
				</ul>
				<a class="bouton" href="https://portfolio.thomasblanschong.fr/#creations" target="_blank">
					Plus de créations
				</a>
			</section>
			<blockquote>
				<h3>
					Pourquoi parler de <b>site web</b> et non de <b>site Internet</b> ?
				</h3>
				<h3>
					Car le <a href="https://fr.wikipedia.org/wiki/World_Wide_Web" target="_blank" title="Wikipédia" class="help"><b>web</b></a> est un service bien précis, et <a href="https://fr.wikipedia.org/wiki/Internet" target="_blank" title="Wikipédia" class="help"><b>Internet</b></a> est le réseau utilisé par ce service ou un autre.
				</h3>
			</blockquote>
			<section id="a-propos">
				<h2>
					À propos
				</h2>
				<div>
					<img class="avatar" src="img/avatar.webp" alt="Moi" loading="lazy">
					<div class="bulle">
						<p>
							Bonjour, je suis Thomas Blanschong. Je suis développeur web depuis 2013 et j'ai débuté dans ce domaine pendant mes études en autodidacte en 2005. Améliorant mes acquis grâce à mes études et une veille technologique permanente, je suis à même de vous proposer ces connaissances pour créer ou faire évoluer votre projet.
						</p>
						<p>
							Que cela soit pour un projet entièrement réalisé sur mesure, ou via un <a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_de_gestion_de_contenu" target="_blank" title="Wikipédia" class="help">CMS</a> soigneusement choisi (par exemple <b>WordPress</b> ou <b>PrestaShop</b>), je développerai votre projet avec les technologies les plus modernes à ce jour (<a href="https://fr.wikipedia.org/wiki/HTML5" target="_blank" title="Wikipédia" class="help">HTML5</a>, <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade" target="_blank" title="Wikipédia" class="help">CSS3</a>, <a href="https://fr.wikipedia.org/wiki/JavaScript" target="_blank" title="Wikipédia" class="help">JavaScript</a>, <a href="https://fr.wikipedia.org/wiki/Site_web_r%C3%A9actif" target="_blank" title="Wikipédia" class="help">site web réactif</a>, etc.).
						</p>
						<p>
							Pour plus d'informations, je vous invite à visionner mon <a href="https://portfolio.thomasblanschong.fr" target="_blank">portfolio</a> ou à <a href="#contact">me contacter</a>.
						</p>
					</div>
				</div>
			</section>
			<section id="contact">
				<h2>
					Contact
				</h2>
				<div>
					<p>
						Vous pouvez me suivre via les services suivants : <span id="rs">
							<a href="https://gitlab.com/se7h" target="_blank" class="rslogo gitlab">
								<i class="fab fa-gitlab fa-2x"></i>
							</a>
							<a href="https://framagit.org/thomasb22" target="_blank" class="rslogo gitlab">
								<i class="fab fa-gitlab fa-2x"></i>
							</a>
							<a href="https://github.com/thomasb22" target="_blank" class="rslogo github">
								<i class="fab fa-github fa-2x"></i>
							</a>
							<a href="https://www.linkedin.com/in/thomas-blanschong-7b8312258" target="_blank" class="rslogo linkedin">
								<i class="fab fa-linkedin fa-2x"></i>
							</a>
							<a href="http://fr.viadeo.com/fr/profile/thomas.blanschong" target="_blank" class="rslogo viadeo">
								<i class="fab fa-viadeo fa-2x"></i>
							</a>
						</span>
					</p>
					<p>
						Pour tout renseignement, vous pouvez remplir le formulaire qui suit (merci de renseigner le maximum d'informations si vous voulez un devis ou démarrer un projet).
					</p>
					<form method="post" action="lib/sendmail.php">
						<div>
							<div class="inputblock">
								<input type="text" name="nom" id="nom" minlength="3" maxlength="100" placeholder="Nom*" value="<?php echo $_SESSION['formNom'] ?>" required>
								<div class="error">
									3 caractères minimum
								</div>
							</div><div class="inputblock">
								<input type="email" name="email" id="email" maxlength="255" placeholder="Courriel*" value="<?php echo $_SESSION['formEmail'] ?>" required>
								<div class="error">
									Adresse courriel incorrecte
								</div>
							</div>
							<div class="description">
								<input type="checkbox" name="copie" id="copie"> <label for="copie">Envoyer une copie à votre adresse courriel</label>
							</div>
						</div>
						<div>
							<div class="inputblock">
								<input type="text" name="objet" id="objet" minlength="3" maxlength="100" placeholder="Objet*" value="<?php echo $_SESSION['formObjet'] ?>" required>
								<div class="error">
									3 caractères minimum
								</div>
							</div><div class="inputblock">
								<input type="url" name="site" id="site" maxlength="255" placeholder="Site web" value="<?php echo $_SESSION['formSite'] ?>">
								<div class="error">
									L'adresse web doit débuter par http:// ou https://
								</div>
							</div>
						</div>
						<div>
							<textarea name="message" id="message" minlength="20" maxlength="5000" placeholder="Message* (20 caractères minimum)" required><?php echo $_SESSION['formMess'] ?></textarea>
							<div class="error">
								20 caractères minimum
							</div>
							<div class="description">
								<span id="counter">5000</span> <span id="countermessage">caractères restants</span>
							</div>
						</div>
						<div>
							<input type="number" name="captcha" id="captcha" min="0" max="99" placeholder="Combien font <?php echo $_SESSION['captcha'][0]; ?> + <?php echo $_SESSION['captcha'][1]; ?> ?*" required><div class="error">
								Nombre uniquement
							</div>
						</div>
						<div class="description">
							* Obligatoire
						</div>
						<div>
							<input class="bouton" type="submit" name="submitEmail" id="submitEmail" value="Envoyer">
						</div>
					</form>
				</div>
			</section>
		</main>
		<footer>
			<a href="https://gitlab.com/se7h/thomasblanschong.fr" target="_blank">Code source</a>
		</footer>
<?php
if ( isset($_GET['sent']) || isset($_GET['errnom']) || isset($_GET['erremail']) || isset($_GET['errsite']) || isset($_GET['errobjet']) ||
	isset($_GET['errmess']) || isset($_GET['errcaptcha']) || isset($_GET['errsend']) ) {
	$message = '';

	if ( isset($_GET['sent']) )
		$message = "Votre courriel à bien été envoyé.<br>
					Vous aurrez une réponse d'ici les prochaines 72h.";
	else {
		if ( isset($_GET['errnom']) && $_GET['errnom'] == 1 )
			$message .= "> Vous avez oublié d'entrer votre nom<br>";
		if ( isset($_GET['errnom']) && $_GET['errnom'] == 2 )
			$message .= "> Votre nom doit être composé de 3 à 100 caractères<br>";
		if ( isset($_GET['erremail']) && $_GET['erremail'] == 1 )
			$message .= "> Vous avez oublié d'entrer votre courriel<br>";
		if ( isset($_GET['erremail']) && $_GET['erremail'] == 2 )
			$message .= "> Votre courriel est incorrecte<br>";
		if ( isset($_GET['errsite']) && $_GET['errsite'] == 1 )
			$message .= "> L'adresse de votre site web est incorrecte<br>";
		if ( isset($_GET['errobjet']) && $_GET['errobjet'] == 1 )
			$message .= "> L'objet doit être composé de 3 à 100 caractères<br>";
		if ( isset($_GET['errmess']) && $_GET['errmess'] == 1 )
			$message .= "> Le message doit être composé de 20 à 5000 caractères<br>";
		if ( isset($_GET['errcaptcha']) && $_GET['errcaptcha'] == 1 )
			$message .= "> Vous n'avez pas entré la bonne réponse à la question de sécurité<br>";
		if ( isset($_GET['errsend']) && $_GET['errsend'] == 1 )
			$message .= "> Il y a eu une erreur lors de l'envoi de votre courriel. Veuillez réessayer ultérieurement.
					</p>
					<p>
						".$_SESSION['erreurMail'];
	}
?>
		<div id="mbox">
			<form method="get" action="">
				<p>
					<?php echo $message; ?>
				</p>
				<input type="submit" value="Valider">
			</div>
		</div>
<?php
}
?>
		<script src="js/default.js"></script>
		<!-- Matomo -->
		<script>
			var _paq = window._paq = window._paq || [];
			/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u="//p.thomasblanschong.fr/";
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setSiteId', '4']);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			})();
		</script>
		<!-- End Matomo Code -->

	</body>
</html>