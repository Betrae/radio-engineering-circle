@extends('master')
@section('content')
<div class="rec-header">
  <h3> About Radio Engineering circle (REC)</h3>
</div>
<div class="main-content">
  <div class="left-content">
    <div class="video-player">
      <video width="320" height="240" controls>
        <source src="/assets/videos/psycho.mp4" type="video/mp4">

      </video>
    </div>
    <div class="what-box">
      <h4> What is REC?</h4>
      <p>
        At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
      </p>
    </div>
    <div class="what-box">
      <h4> What does REC do?</h4>
      <p>
        At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
      </p>
    </div>
    <div class="what-box">
      <h4> Why be a part of REC?</h4>
      <p>
        At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
      </p>
    </div>

  </div>

  <div class="right-content">
    <div class="testimonies">
    <h4>Testimonies</h4>
      <div class="testimony-box">
        <img src="/assets/images/logo.jpg" alt="">
        <p><span><b>Name</b></span><br>
          <span>At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies. </span></p>
      </div>
      <div class="testimony-box">
        <img src="/assets/images/logo.jpg" alt="">
        <p><span><b>Name</b></span><br>
          <span>At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies. </span></p>
      </div>
      <div class="testimony-box">
        <img src="/assets/images/logo.jpg" alt="">
        <p><span><b>Name</b></span><br>
          <span>Testimony</span></p>
      </div>

    </div>
  </div>
</div>
@endsection