<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codecove</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="stylesheets/style.css">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="app-container">
	
<!-- Sidebar -->
	<div id="sidebar">
		<div class="sidebar-item add">
			<span class="item-name">Add Code</span>
		</div>
		<div class="sidebar-item languages">
			<span class="item-name">Languages</span>
		</div>
		<div class="sidebar-item collections">
			<span class="item-name">Collections</span>
		</div>
		<div class="sidebar-item collection">
			<span class="item-name">Collection: Grunt Setups</span>
			<span class="single-collection-name">Grunt Setups and</span>
		</div>
		<div class="sidebar-item collection">
			<span class="item-name">Collection: Sass Stuff</span>
			<span class="single-collection-name">Sass Stuff</span>
		</div>

	</div>

	<!-- Console -->
	<div id="console">

		<!-- Infobar -->
		<div id="infobar">
			<ul>
				<li>
					<a title="Click to toggle the sidebar or simply press the Control key" class="sidebar-icon"><img src="images/full-screen-icon.svg" alt=""></a>
				</li>
				<li>
					<a title="Codecove Home" class="home-icon" href="/">
						<img src="images/home-icon.svg" alt="" />
					</a>
					<ul class="sub-menu">
						<li><a href="#">Add Code</a></li>
						<li><a href="#">Go Home</a></li>
						<li><a href="#">Get A Job</a></li>
						<li><a href="#">The Ocean</a></li>
						<li><a href="#">Share Code</a></li>
					</ul>
				</li>
			</ul>
			
			
			<span class="breadcrumbs">My Collections > Grunt Setups</span>

      <div class="layout-options">
        <img class="toggle-col-1" src="images/one-column-icon.svg" alt="">
        <img class="toggle-col-2" src="images/two-column-icon.svg" alt="">
        <img class="toggle-col-3" src="images/three-column-icon.svg" alt="">
      </div> 
		</div>

		<div class="search-overlay">
			<span>Searching For:</span>
			<h1 class="search-display">Search</h1>
		</div>

		<div id="main-container">

			<?php 

			$code = '
			<div class="code-window-wrapper">
				<div class="code-window">
					<div class="code-window-toolbar">
						<div class="code-window-info">
							The Gruntfile.js that we used for making our stuff look cool and stuff or whatever
						</div>
						<div class="code-window-controls">
							<div class="maximize"></div>
							<div class="minimize"></div>
						</div>
					</div>

					<textarea name="" class="codemirror-textarea">
			          var element = $("this is my elemnts").hide();
			        </textarea>
				</div>
			</div>';

			for ($i=0; $i < 10; $i++) { 
				echo $code;
			}


			?>

		</div>
		
		<!-- Utility Wrap -->
		<div id="utility-wrap">

			<!-- Utility Belt -->
			<div id="utility-belt">
				<!-- Code Cove Logo -->
				<img src="images/logo.svg" alt="" class="logo">

				<!-- Search Form -->
				<form action="">
					<input type="text" class="search" name="search" placeholder="search through code by title, description, collections, languages... Whatever">
					<div class="react-circle"></div>
				</form>


				<!-- Welcome/Login Message -->
				<div class="profile-utilities">
					<p class="welcome-message">
						Welcome back, Tedd!
						<img src="/images/gear-icon.svg" alt="">
					</p>
				</div>
			</div>
			<!-- End Utility Belt -->

			<!-- Toolbar -->
			<div id="toolbar-wrap">
				<div id="toolbar">
					<div class="tool-item add"><p>Add To Collection</div>
					<div class="tool-item pin"><p>Pin Collection to Sidebar</div>
					<div class="tool-item info"><p>Collection Information</div>
					<div class="tool-item edit"><p>Edit Collection</div>
					<div class="tool-item grid"><p>Snap to Grid</div>					
				</div>
			</div>
			<!-- End Toolbar -->

			<!-- Utility Box -->
			<div class="utilities">
				
			</div>
		</div>
		<!-- End Utility Wrap -->
		
	</div>
	<!-- End Console -->
</div>
<!-- End App Container -->

<!-- *** 
* Bower Components 
* These will need to be replaced upon migration to rails with appropriate gems
*** -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/codemirror/lib/codemirror.js"></script>	
<!-- Importing codemirror modes -->
<script src="bower_components/codemirror/mode/ruby/ruby.js"></script>

<!-- VIM Binding -->
<script src="bower_components/codemirror/keymap/vim.js"></script>

<script src="bower_components/codemirror/mode/javascript/javascript.js"></script>

<!-- Draggabilly -->
<script src="bower_components/draggabilly/draggabilly.js"></script>

<!-- Packery -->
<script src="bower_components/packery/dist/packery.pkgd.js"></script>


<!-- Hotkeys! Whoo!!! -->
<script src="bower_components/jquery.hotkeys/jquery.hotkeys.js"></script>

<!-- Global js build -->
<script src="javascripts/build/global.min.js"></script>	

<!-- live reload -->
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>