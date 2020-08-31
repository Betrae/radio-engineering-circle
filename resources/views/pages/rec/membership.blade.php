@extends('master')
@section('content')
<div class="rec-header">
  <h3>Become a Member</h3>
</div>
<div class="membership-upper-content">
  <div class="title-container">
    
  </div>
  <h4>
    <span><b>TITLE</b></span><br>
    <span>Brief overview of why become REC member</span>
  </h4>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="/assets/images/th.jpg">

    </div>

    <div class="mySlides fade">
      <img src="/assets/images/sample.jpg" >

    </div>

    <div class="mySlides fade">
      <img src="/assets/images/logo.jpg">

    </div>

  </div>

</div>
<div class="membership-lower-content">
  <div class="membership-box">
    <h4>Services</h4>
    <ul>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
    </ul>
  </div>

  <div class="membership-box">
    <h4>How does REC membership help me ?</h4>
    <ul>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
      <li>Bulllet Infomation memebership sevices</li>
    </ul>
  </div>
</div>

@endsection
@section('script')
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      console.log("TEST");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }

    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>
@endsection