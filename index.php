<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Développeur/Intégrateur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (PHP, MySQL, xHTML, HTML5, CSS3, JavaScript, jQuery) - Thomas Blanschong</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, Python)" />
		<meta name="keywords" content="developpeur web, freelance, web, internet, intégrateur, creation site internet, developpeur site web, php, python" />
		<link rel="stylesheet" href="css/style.css" />
		<style>
			body { 
				display: grid;
				grid-template-areas:
					"header"
					"body"
					"footer";
				grid-template-rows: 60px 1fr 120px;
				grid-template-columns: 1fr;
				grid-gap: 0;
				min-height: 100vh;
				margin: 0;
			}

			header,
			main,
			footer {
				padding: 20px;
				background: gold;
			}

			header {
				grid-area: header;
			}

			main { 
				grid-area: body;
				margin: 0 auto;
				width: 65%;
			}

			.spotlight {
				display: grid;
				grid-template-columns: repeat(2, 1fr);
				grid-auto-rows: minmax(100px, auto);
			}

			.spotlight div:first-child {
				grid-row-start: 1;
				grid-row-end: 3;
			}

			.news {
				display: grid;
				grid-template-columns: repeat(3, 1fr);
				grid-auto-rows: minmax(100px, auto);
			}

			.news div {
			}

			footer {
				grid-area: footer;
			}
		</style>
	</head>
	<body>
		<header>
			Header
		</header>
		<main>
			<section class="spotlight">
				<div>
					1
				</div>
				<div>
					2
				</div>
				<div>
					3
				</div>
			</section>
			<section class="news">
				<div>
					1
				</div>
				<div>
					2
				</div>
				<div>
					3
				</div>
				<div>
					4
				</div>
				<div>
					5
				</div>
				<div>
					6
				</div>
				<div>
					7
				</div>
				<div>
					8
				</div>
				<div>
					9
				</div>
			</section>
		</main>
		<footer>
			Footer
		</footer>
	</body>
</html>