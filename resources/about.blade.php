@extends('layouts.app')

@section('content')


<header>
  <div class="content">
    <hgroup>
      <h1>The Joy of Web Design</h1>
      <i>By Cory</i>
    </hgroup>
  </div>
  <div class="overlay"></div>
</header>


<div class='flexAbout'>
	<div class='paddingCustomAbout'>
	</div>
	<div class='contentAbout'>
	</div>
	<div class='pic'>
	</div>
	<div class='contentAboutAbove'>
	<div>
	<!-- this is the main wrapper that holds all of the items-->
  <section id="aboutWrapper" class="skewed">
    <div class="layer bottom">
      <div class="content-wrap">
        <div class="content-body">
          <h1>Back End</h1>
          	<div class='listSkills'>
          	<ul class='listSkills'>
			<li>PHP</li>
			<li>Laravel/Laravel Routes</li>
			<li>API's</li>
			<li>HTTP Methods</li>
			<li>SQL/MYSQL/TSQL</li>
			<li>POSTGRESQL</li>
			<li>Version Controls</li>
			<li>Authentifications</li>
			<li>NODE.JS/NODE.JS Routes</li>
			<li>Python</li>
			<li>Flask</li>
			<li>Algorithms</li>
			<li>Advanced Statistics</li>
			
          	</ul>
          </div>
        </div>
        
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Blue_circle_logo.svg/220px-Blue_circle_logo.svg.png" alt="*">
      </div>
      <div class="layer top">
      <div class="content-wrap">
        <div class="content-body">
          <h1>Front End</h1>
          	<div class='listSkills'>
          	<ul class='listSkills'>
          		<li>Html5/Css3</li>
          		<li>Sass/Scss</li>
          		<li>Bootstrap</li>
          		<li>Webpack/Gulp</li>
          		<li>JavaScript</li>
          		<li>React</li>
          		<li>jQuery</li>
          		<li>JSON</li>
          		<li>AJAX</li>
          		<li>CRUD functionality</li>
          		<li>Object Oriented Programing/Procedural Programing</li>
          	</ul>
          </div>
        </div>
        
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Circle_Rufous_Solid.svg/200px-Circle_Rufous_Solid.svg.png" alt="*2">
      </div>
    </div>
      <div class="handle"></div>
  </section>
		</div>
		</div>
		<div class='aboutdescription'><p>Passionately pursuing a career in the field of Website Development, UX/UI design with an unyielding background in Business Psychology. Living through a series of character challenging circumstances that enabled my drive to be two part: A detereant and a Goal. This allows for more productive work.
		</p></div>
	<div>
	</div>
	<div>
			
		
			
			
			
			
	</div>
</div>
<div class='gridder'>
	<div class='tetris'>
	<p> The Spicest of Text Describing 
	</div>
</div>
    <div class="tetris">
        <div>Score</div>
        <div id="score"></div>
        <canvas id="tetris" width="240" height="400"></canvas>
    <script src="tetris.js"></script>
    </div>

@endsection