<!DOCTYPE html>

<html lang="en">
<head>
	<title>Aspect Ratio</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">

	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/libs/jquery-2.1.1.min.js"></script>

	<!-- FONTS -->
	<link rel="stylesheet" type='text/css' href="assets/fonts/fontawesome-pro-6.4.2-web/css/all.min.css">
	<link rel='stylesheet' type='text/css' href='assets/fonts/oswald-v53-latin/oswald.min.css'>
	<link rel='stylesheet' type='text/css' href='assets/fonts/share-tech-v21-latin/share-tech.min.css'>

	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

</head>
<body>

<div class="body_wrapper">
	<div id="page" class="container page">

		<div class="github ribbon">
			<a class="github-fork-ribbon right-top fixed" target="_blank" href="https://github.com/serial/aspect-ratio"
				 data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>
		</div>


		<div class="container logo">
			<img src="assets/img/aliaz_Logo_150ppi_white.png" alt="aliaz-logo"/>
		</div>

		<div class="container page-wrapper">

			<div class="header_container flex-between">
				<h1 class="title uppercase"><span class="fa-light fa-calculator green"></span> Aspect Ratio</h1>
				<h1 class="bolt"><span class="fa fa-bolt link-light button activate-fancy-bg" aria-hidden="true"></span></h1>
			</div>


			<div class="settings_container grid grid-cols-2 gap-x-4 py-4">
				<div class="flex-column text-center gap-y-2">
					<div class="label_container width">
						<label for="width">Width</label>
						<span class="fa-solid fa-arrows-left-right text-xl text-green pl-2"></span>
					</div>
					<input type="number" id="width" class="width" placeholder="width" value="1280">
				</div>

				<div class="flex-column text-center gap-y-2">
					<div class="label_container height">
						<label for="height">Height</label>
						<span class="fa-solid fa-arrows-up-down text-xl text-green pl-2"></span>
					</div>
					<input type="number" id="height" class="height" placeholder="height" value="1024">
				</div>

			</div>

			<div class="spacer h-20"></div>

			<div class="result_container px-12">
				<!--<h1>Aspect Ratio</h1>-->
				<h1 id="result_aspectRatio"></h1>
			</div>

		</div>
	</div>



	<footer id="footer">
		<div class="footer_container flex-around">
			<div class="footer_content text-center">
				<p class="footer_text">
					&copy; <span id="copyright" class="current-year"></span>
					<a href="https://aliaz.de" target="_blank" class="text-decoration-none">aliaz werbeagentur</a>
				</p>
				<p>
					<a href="https://github.com/serial" target="_blank" class="text-decoration-none"><span class="fa-brands fa-github"></span> micha</a>
				</p>
			</div>
		</div>
	</footer>

</div>


<script type="text/javascript" src="./js/init.min.js"></script>
</body>
</html>
