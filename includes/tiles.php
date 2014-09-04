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

<!--	<div class="loading-code-window"></div> -->


  </div>
</div>';

for ($i=0; $i < 13; $i++) {
  echo $code;
}

?>
