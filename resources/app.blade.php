<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href= "../public/css/app.css"rel="stylesheet" !important >
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>{{config("app.name", "Cory's Portfolio")}}</title>
        
    </head>
    <body>
    <div class ="btnlistTextCenter">
          <div class ="twitter"><a  href="*"><i class="fa fa-twitter fa-lg" id="twitterIcon" aria-hidden="true"></i>
Twitter</a></div>&nbsp&nbsp&nbsp
         <div class ="gitHub"> <a  href="https://github.com/CoryHrycko"><i class="fa fa-github fa-lg" aria-hidden="true" id="githubIcon"></i>Github  </a></div>
        &nbsp&nbsp&nbsp
         <div class ="linkedIn"> <a  href="https://www.linkedin.com/in/cory-hrycko-196802107/"><i class="fa fa-linkedin fa-lg" aria-hidden="true" id="linkedinIcon"></i>LinkedIn  </a></div>
         &nbsp&nbsp&nbsp
         <div class ="faceBook"> <a  href="https://www.facebook.com/cory.hrycko"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"id="facebookIcon"></i>FaceBook  </a></div>
          </div>
          
	@yield('content')
	
	
<div class="gridSpacer1">1</div>
<div class="gridSpacer2">2</div>
<div class="gridSpacer3">3</div>
<div class="gridSpacer4">4</div>
	
	

    </body>
</html>