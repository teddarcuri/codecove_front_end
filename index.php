<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codecove</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="stylesheet" href="bower_components/jquery-ui/themes/base/all.css">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Global Application Flexbox Wrapper -->
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
		<!--<div class="sidebar-item collection">
			<span class="item-name">Collection: Grunt Setups</span>
			<span class="single-collection-name">Grunt Setups and</span>
		</div>
		<div class="sidebar-item collection">
			<span class="item-name">Collection: Sass Stuff</span>
			<span class="single-collection-name">Sass Stuff</span>
		</div> -->

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
						<li><a href="#">Share Collection</a></li>
						<li><a href="#">Go Home</a></li>
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

					<textarea name="" class="codemirror-textarea">
class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception
end
# Ruby knows what you
# mean, even if you
# want to do math on
# an entire Array
cities  = %w[ London
              Oslo
              Paris
              Amsterdam
              Berlin ]
visited = %w[Berlin Oslo]

puts "I still need " +
     "to visit the " +
     "following cities:",
     cities - visited

	# The Greeter class
class Greeter
  def initialize(name)
    @name = name.capitalize
  end

  def salute
    puts "Hello #{@name}!"
  end
end

# Create a new object
g = Greeter.new("world")

# Output "Hello World!"
g.salute
			        </textarea>

					<div class="code-window-toolbar">
						<div class="code-window-info">
							The Gruntfile.js that we used for making our stuff look cool and stuff or whateverThe Gruntfile.js that we used for making our stuff look cool andThe Gruntfile.js that we used for making our stuff look cool andThe Gruntfile.js that we used for making our stuff look cool and
						</div>
						<div class="code-window-controls">
							<div class="maximize"></div>
							<div class="minimize"></div>
						</div>
					</div>

				<!-- <div class="loading-code-window"></div> -->


				</div>
			</div>';

			for ($i=0; $i < 13; $i++) {
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
					<div class="tool-item edit"><p>Edit Collection</div>
					<div class="tool-item pin"><p>Pin Collection to Sidebar</div>
					<div class="tool-item info"><p>Collection Information</div>
					<!-- <div class="tool-item grid"><p>Snap to Grid</div> -->
				</div>
			</div>
			<!-- End Toolbar -->

			<!-- Utility Box -->
			<div class="utilities">

				<div class="container utility-container">
					<h1>Happy Saturday, Tedd!</h1>
					<hr>
					<h3>Your code</h3>
					<h1>23 <span>Ruby</span></h1>
				</div>

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

<script src="bower_components/codemirror/mode/ruby/ruby.js"></script>

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
