<!DOCTYPE html>
<html>
<head>
	<title>Nate's Class</title>
	<meta name="author" content="Nate Moore">
	
	<meta charset="UTF-8">
	<meta name="description" content="Lesson ideas inspired by the web">
	<meta name="keywords" content="teaching,school,education,lessons">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="alternate style sheet" type="text/css" href="css/print.css" title="Printable">
</head>

<body>
	<div id="container">
		<header>
			<nav class="topnav">
				<div class="topnavimg">
					<a href="home">
						<img class="ncicon" id="desktopicon" src="Images/NCgear2.png" alt="NC" />
						<!-- <img class="ncicon" id="mobileicon" src="Images/NCgear3.png" alt="NC" /> -->

					</a>
				</div>
				<a href="science">Science</a>
				<a href="math">Math</a>
				<a href="coding">Coding</a>
				<a href="other">Other</a>
			</nav>

<!--
			<div id="title">
			<img src="Images/ncLogo.png" />
			</div>
			<nav id="gearnav">
				<a href="view.php?page=science"><img class="gear" src="Images/sciLogo.png" alt="Science"/></a>
				<a href="view.php?page=math"><img class="gear" src="Images/mathLogo.png" alt="Math"/></a>
				<a href="view.php?page=comp"><img class="gear" src="Images/compLogo.png" alt="Computer Science"/></a>
				<a href="view.php?page=music"><img class="gear" src="Images/musicLogo.png" alt="Music"/></a>
				<a href="view.php?page=esp"><img class="gear" src="Images/espLogo.png" alt="Spanish"/></a>
				<ul id="minimenu">
					<li class="navword"><a href="view.php?page=science">Science</a></li>
					<li class="navword"><a href="view.php?page=math">Math</a></li>
					<li class="navword"><a href="view.php?page=comp">Computer Science</a></li>
					<li class="navword"><a href="view.php?page=music">Music</a></li>
					<li class="navword"><a href="view.php?page=esp">Spanish</a></li>
				</ul>
			</nav>
-->

		</header>
		<div id="mainpage">
		<?php
			$ok_pages = array(
			'home',
			'science',
			'math',
			'coding',
			'other'
			);
						
			$page = $_GET['page'];
						
			if(in_array($page, $ok_pages)) {
				@ require_once $page . '.php';
				}
			else {
				@ require_once 'home.php';
				}
		?>
		</div>


		<footer>
			<div class="footerleft">Nate's Class 2019</div>
			<div class="footermid"></div>
			<div class="footerright"><a href="mailto:nate@natesclass.com">Contact</a></div>
		</footer>
	</div>

<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	
	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.parentNode.children[3];
			if (content.style.maxHeight) {
				content.style.maxHeight = null;
			} else {
				content.style.maxHeight = content.scrollHeight + "px";
			}
			});
		}
</script>

</body>
</html>