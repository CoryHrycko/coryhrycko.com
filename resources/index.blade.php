@extends('layouts.app')

@section('content')
@yield('buttons')
<div class='gridder'>
<div class="containerCustom">
  <h1 class="title Custom">Cory's Website</h1>
</div>

	    <div class ="btnlistTextCenter">
          <div class ="twitter"><a  href="*"><i class="fa fa-twitter fa-lg" id="twitterIcon" aria-hidden="true"></i>
Twitter</a></div>&nbsp&nbsp&nbsp
         <div class ="gitHub"> <a  href="https://github.com/CoryHrycko"><i class="fa fa-github fa-lg" aria-hidden="true" id="githubIcon"></i>Github  </a></div>
        &nbsp&nbsp&nbsp
         <div class ="linkedIn"> <a  href="https://www.linkedin.com/in/cory-hrycko-196802107/"><i class="fa fa-linkedin fa-lg" aria-hidden="true" id="linkedinIcon"></i>LinkedIn  </a></div>
         &nbsp&nbsp&nbsp
         <div class ="faceBook"> <a  href="https://www.facebook.com/cory.hrycko"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"id="facebookIcon"></i>FaceBook  </a></div>
     </div>
          
          
          <div class="gridSpacer1">1</div>
<div class="gridSpacer2">2</div>
<div class="gridSpacer3">3</div>
<div class="gridSpacer4">4</div>
</div>
@endsection