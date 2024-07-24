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
		<link rel="stylesheet" href="css/style.css?v=4">
	</head>
	<body>
		<header>
			<a href="/#">
				<img src="img/logo.svg" alt="Logo">
			</a>
			<nav id="menu">
				<button class="theme-switcher" type="button" title="Changer le mode de couleurs" aria-pressed="false">
					<span class="theme-icon">
						<svg class="theme-icon-light" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="transparent" stroke="currentColor" stroke-linecap="round">
							<path fill="currentColor" d="M18 12a6 6 0 1 1-12 0 6 6 0 0 1 12 0Z"/>
							<path fill="currentColor" fill-rule="evenodd" d="M12 1.25c.41 0 .75.34.75.75v1a.75.75 0 0 1-1.5 0V2c0-.41.34-.75.75-.75ZM4.4 4.4c.3-.3.77-.3 1.06 0l.4.4a.75.75 0 0 1-1.07 1.05l-.4-.4a.75.75 0 0 1 0-1.05Zm15.2 0c.3.3.3.77 0 1.06l-.4.4a.75.75 0 0 1-1.05-1.07l.4-.4a.76.76 0 0 1 1.05 0ZM1.25 12c0-.41.34-.75.75-.75h1a.75.75 0 0 1 0 1.5H2a.75.75 0 0 1-.75-.75Zm19 0c0-.41.34-.75.75-.75h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1-.75-.75Zm-2.1 6.15c.3-.3.77-.3 1.06 0l.4.4a.75.75 0 1 1-1.07 1.05l-.4-.4a.75.75 0 0 1 0-1.05Zm-12.3 0c.3.3.3.77 0 1.06l-.4.4a.75.75 0 1 1-1.05-1.07l.4-.4a.74.74 0 0 1 1.05 0Zm6.15 2.1c.41 0 .75.34.75.75v1a.75.75 0 0 1-1.5 0v-1c0-.41.34-.75.75-.75Z" clip-rule="evenodd"/>
						</svg>
						<svg class="theme-icon-dark" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="transparent" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" /></svg>
					</span>
				</button>
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
					<li id="devweb">
						<h3>
							Développement de site web
						</h3>
						<p>
							Création de site web sur mesure. Que cela soit une simple page vitrine, un blog, un site marchand, ou tout autre type de site, je suis en mesure de vous proposer mes services.
						</p>
					</li>
					<li id="webdesign">
						<h3>
							Webdesign
						</h3>
						<p>
							Besoin d'un nouveau design pour votre site ? Je peux vous proposer plusieurs maquettes se rapprochant du mieux possible au contenu de votre site, et à votre identité.
						</p>
					</li>
					<li id="integration">
						<h3>
							Intégration web
						</h3>
						<p>
							Vous avez un nouveau design, mais personne pour l'intégrer à votre site ? Fournissez moi votre maquette, et je l'intégrerai le plus fidèlement possible à votre site.
						</p>
					</li>
					<li id="modules">
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
							<a href="https://viadeo.journaldunet.com/p/thomas-blanschong-5859776" target="_blank" class="rslogo viadeo">
								<i class="fab fa-viadeo fa-2x"></i>
							</a>
							<a href="https://www.jeveuxunfreelance.fr" target="_blank" class="rslogo jvuf">
								<svg
									width="11.888206mm"
									height="28.949879mm"
									viewBox="0 0 11.888206 28.949879"
									version="1.1"
									id="svg5"
									xmlns="http://www.w3.org/2000/svg"
									xmlns:svg="http://www.w3.org/2000/svg">
									<defs id="defs2" />
									<g id="layer1" transform="translate(39.498467,-36.667969)">
										<path id="path854" d="m -30.173828,36.667969 c -0.283753,0 -0.526339,0.154292 -0.6875,0.375 -0.161161,0.220707 -0.258152,0.507975 -0.302734,0.822265 -0.08917,0.628581 0.03197,1.378612 0.43164,1.949219 0.244292,0.348776 0.503718,0.577296 0.806641,0.636719 0.302923,0.05942 0.604668,-0.07732 0.867187,-0.339844 0.228464,-0.228461 0.321056,-0.561179 0.337891,-0.916016 0.01683,-0.354836 -0.04371,-0.739461 -0.158203,-1.103515 -0.114494,-0.364054 -0.282912,-0.706875 -0.496094,-0.96875 -0.213182,-0.261875 -0.482733,-0.455078 -0.798828,-0.455078 z m -2.869141,1.302734 c -0.09418,-0.01155 -0.191315,-0.0024 -0.287109,0.0293 -0.197616,0.06543 -0.337351,0.224563 -0.417969,0.408203 -0.08062,0.18364 -0.113841,0.395656 -0.115234,0.623047 -0.0028,0.454782 0.120543,0.967699 0.34375,1.384766 0.109381,0.20438 0.229843,0.354793 0.376953,0.445312 0.14711,0.09052 0.338166,0.103016 0.486328,0.02344 0.296323,-0.159157 0.429891,-0.537726 0.482422,-1.072266 0.04816,-0.490029 -0.03849,-0.969222 -0.228516,-1.326172 -0.09502,-0.178475 -0.218105,-0.330223 -0.376953,-0.425781 -0.07942,-0.04778 -0.169491,-0.07829 -0.263672,-0.08984 z m -1.988281,0.990235 c -0.07386,-0.01362 -0.153978,-0.01131 -0.234375,0.01758 -0.15748,0.05658 -0.279592,0.198396 -0.375,0.408203 -0.0015,0.0028 -0.0024,0.0051 -0.0039,0.0078 -6.64e-4,0.0015 -0.0013,0.0024 -0.002,0.0039 -0.130807,0.247151 -0.20749,0.472643 -0.207032,0.716796 4.66e-4,0.24824 0.07546,0.50072 0.207032,0.81836 0.107875,0.260434 0.239062,0.470043 0.396484,0.617187 0.157422,0.147144 0.358394,0.235957 0.5625,0.197266 0.213293,-0.04039 0.381355,-0.183324 0.484375,-0.361328 0.10302,-0.178005 0.151508,-0.392141 0.160156,-0.621094 0.01727,-0.457114 -0.125995,-0.981538 -0.453125,-1.386719 -0.01575,-0.02662 -0.13043,-0.213183 -0.33789,-0.339844 -0.0557,-0.03401 -0.123401,-0.06451 -0.197266,-0.07812 z m -2.160156,1.251953 c -0.09233,-0.003 -0.185743,0.01658 -0.269532,0.06836 -0.26981,0.166746 -0.330345,0.507238 -0.322265,0.867188 0.0081,0.359949 0.105359,0.764938 0.294922,1.11914 0.102282,0.191116 0.219996,0.335242 0.359375,0.425781 0.139378,0.09054 0.311675,0.119824 0.46289,0.06641 0.302432,-0.106834 0.464231,-0.445298 0.519532,-0.908204 0.05061,-0.423614 -0.120913,-0.864451 -0.361328,-1.189453 -0.120208,-0.1625 -0.259933,-0.296793 -0.419922,-0.378906 -0.07999,-0.04106 -0.171344,-0.06727 -0.263672,-0.07031 z m 7.234375,1.029297 c -0.652718,0.06977 -1.370664,0.35826 -2.09375,0.849609 -0.515025,0.349976 -1.666708,0.803173 -2.478516,0.962891 -2.275537,0.447685 -3.844717,1.526036 -4.453125,3.11914 -0.230763,0.604269 -0.290445,0.982878 -0.257812,1.373047 0.03263,0.390169 0.145182,0.772824 0.246093,1.458984 0.06942,0.472022 0.337208,1.227829 0.679688,2.123047 0.342479,0.895219 0.759423,1.917912 1.123047,2.861328 1.109141,2.877631 1.347344,3.80787 1.515625,5.925782 0.220115,2.770303 0.73752,4.25817 1.859375,5.140625 0.413442,0.325212 1.04235,0.497434 1.685547,0.546875 0.643196,0.04944 1.29933,-0.02556 1.773437,-0.279297 0.644336,-0.344838 1.073756,-1.141417 1.277344,-2.013672 0.203588,-0.872256 0.17936,-1.834498 -0.19336,-2.548828 -0.09949,-0.190665 -0.305685,-0.472384 -0.576171,-0.810547 -0.270487,-0.338163 -0.599978,-0.7206 -0.925782,-1.072266 -1.492662,-1.611158 -2.445331,-3.717646 -2.597656,-5.728515 -0.104396,-1.378155 -0.03806,-1.717499 0.546875,-2.802735 0.983919,-1.825453 1.954169,-3.022658 3.125,-3.871094 1.026745,-0.744018 1.705271,-1.601235 1.970703,-2.445312 0.265432,-0.844077 0.09536,-1.687302 -0.550781,-2.296875 -0.42833,-0.404085 -1.022878,-0.561976 -1.675781,-0.492187 z m -8.814453,0.449218 c -0.08242,-0.01456 -0.169728,-0.01224 -0.25586,0.0098 -0.216808,0.05538 -0.364058,0.231777 -0.423828,0.421875 -0.05977,0.190098 -0.05652,0.400737 -0.02539,0.611328 0.06225,0.421182 0.22669,0.838018 0.458984,1.070313 0.119266,0.119266 0.241185,0.203064 0.376953,0.238281 0.135768,0.03522 0.289421,0.0085 0.400391,-0.07422 0.22194,-0.165384 0.294921,-0.466717 0.294922,-0.857422 0,-0.332442 -0.09491,-0.693037 -0.267579,-0.978516 -0.08633,-0.142739 -0.192836,-0.26866 -0.330078,-0.353515 -0.06862,-0.04243 -0.146096,-0.07333 -0.228515,-0.08789 z" />
									</g>
								</svg>
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
								<label>
									<input type="checkbox" name="copie" id="copie">
									<span class="checkbox"></span>
									Envoyer une copie à votre adresse courriel
								</label>
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
						<div class="textareablock">
							<textarea name="message" id="message" minlength="20" maxlength="5000" placeholder="Message* (20 caractères minimum)" required><?php echo $_SESSION['formMess'] ?></textarea>
							<div class="error">
								20 caractères minimum
							</div>
							<div class="description">
								<span id="counter">5000</span> <span id="countermessage">caractères restants</span>
							</div>
						</div>
						<div class="textareablock">
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
			<a href="#ml">Mentions légales</a> – 
			<a href="https://gitlab.com/se7h/thomasblanschong.fr" target="_blank">Code source</a>
		</footer>
		<div id="ml">
			<div id="mentionslegales">
				<h2>
					Mentions légales
				</h2>
				<p>
					Thomas Blanschong<br>
					12 rue Jules Massenet<br>
					22300 LANNION
				</p>
				<p>
					<b>Courriel :</b> contact@thomasblanschong.fr<br>
					<b>Téléphone :</b> 06 32 12 07 10<br>
					<b>SIRET :</b> 793 657 602 00017<br>
					<b>APE :</b> 6201Z
				</p>
				<h3>
					Hébergement du site web
				</h3>
				<p>
					<b>OVH SAS</b> – <a href="https://www.ovhcloud.com/">www.ovhcloud.com</a><br>
					2 rue Kellermann<br>
					59100 ROUBAIX
				</p>
				<p>
					Site web développé par <b>Thomas Blanschong</b>.
				</p>
				<a id="closeml" href="#close">
					<i class="fas fa-times"></i>
				</a>
				<h3>
					Crédits
				</h3>
				<ul>
					<li>
						Photo en en-tête réalisé par DC Studio sur Freepik
					</li>
					<li>
						Police d'écriture principale : Atkinson Hyperlegible
					</li>
					<li>
						Icônes : Font Awesome
					</li>
				</ul>
			</div>
		</div>
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