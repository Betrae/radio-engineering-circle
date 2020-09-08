@extends('master')
@section('content')
<div>

<ul class="slides">
  <input type="radio" name="radio-btn" id="img-1" checked />
  <li class="slide-container">
    <div class="slide">
      <img src="/assets/images/th.jpg" />
    </div>
    <div class="nav">

      <label for="img-2" class="next">&#x203a;</label>
    </div>
  </li>

  <input type="radio" name="radio-btn" id="img-2" />
  <li class="slide-container">
    <div class="slide">
      <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
    </div>
    <div class="nav">

      <label for="img-3" class="next">&#x203a;</label>
    </div>
  </li>

  <input type="radio" name="radio-btn" id="img-3" />
  <li class="slide-container">
    <div class="slide">
      <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
    </div>
    <div class="nav">

      <label for="img-4" class="next">&#x203a;</label>
    </div>
  </li>

  <input type="radio" name="radio-btn" id="img-4" />
  <li class="slide-container">
    <div class="slide">
      <img src="/assets/images/logo.jpg" />
    </div>
    <div class="nav">

      <label for="img-5" class="next">&#x203a;</label>
    </div>
  </li>

  <input type="radio" name="radio-btn" id="img-5" />
  <li class="slide-container">
    <div class="slide">
      <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
    </div>
    <div class="nav">
      <label for="img-6" class="next">&#x203a;</label>
    </div>
  </li>

  <input type="radio" name="radio-btn" id="img-6" />
  <li class="slide-container">
    <div class="slide">
      <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
    </div>
    <div class="nav">
      <label for="img-1" class="next">&#x203a;</label>
    </div>
  </li>
</ul>
</div>
<div class="main-content">
  <div class="left-box">
    <div class="left-upper">
      <div class="left-upper-content">
        <div class="left-upper-box">
          <div class="">
            <img src="/assets/images/logo.jpg" alt="">
          </div>
          <a target="_blank"href="https://www.youtube.com/watch?v=pdFhBwnWxOw">REC membership/Join REC/REC Section</a>
        </div>
      </div>

      <div class="left-upper-box">
        <div class="">
          <img src="/assets/images/logo.jpg" alt="">
        </div>
        <a target="_blank" href="https://www.youtube.com/watch?v=2MgWbAYu8_U">Upcoming Events</a>
      </div>

    </div>

    <!-- Leff Lower box -->
    <div class="left-lower">
      <h2>Latest News and Updates</h2>
      <div class="left-lower-content">
        <div class="left-lower-box">
          <div class="">
            <img src="/assets/images/logo.jpg" alt="">
          </div>
          <div class="title-desc">
            <h5><span><a target="_blank" href="https://www.youtube.com/watch?v=zMMZrxozjrY">IECEP Cavite AICTP Free Webinar and Oath Taking of Newly Elected Officers</a></span>
              <span>
                <p>DESCRIPTION</p>
              </span>
            </h5>
          </div>

        </div>


        <div class="left-lower-box">
          <div class="">
            <img src="/assets/images/logo.jpg" alt="">
          </div>
          <div class="title-desc">
            <h5><span><a target="_blank" href="https://www.youtube.com/watch?v=s2VtaERBQVU">IECEP MIndoro Chapter Online Technology Summit</a></span>
              <span>
                <p>DESCRIPTION</p>
              </span>
            </h5>
          </div>
        </div>
        <div class="left-lower-box">
          <div class="">
            <img src="/assets/images/logo.jpg" alt="">
          </div>
          <div class="title-desc">
            <h5><span><a href="">TITLE</a></span>
              <span>
                <p>DESCRIPTION</p>
              </span>
            </h5>
          </div>
        </div>
        <div class="left-lower-box">
          <div class="">
            <img src="/assets/images/logo.jpg" alt="">
          </div>
          <div class="title-desc">
            <h5><span><a href="">TITLE</a></span>
              <span>
                <p>DESCRIPTION</p>
              </span>
            </h5>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="right-box">
    <h3>Calendar of Activities</h3>
    <div class="right-upper-box">
      <p>
        <span>Date:</span><br>
        <span>09/09/2020</span><br>
        <span><a target="_blank" href="https://www.facebook.com/REC.org.ph/">Facebook Live</a></span>
      </p>
    </div>
    <div class="right-upper-box">
      <p>
        <span>Date:</span><br>
        <span>09/15/2020</span><br>
        <span><a target="_blank" href="https://www.youtube.com/watch?v=FhGe5zPS8N8">Mindoro Summit</a></span>
      </p>
    </div>
    <div class="right-upper-box">
      <p>
        <span>Date:</span><br>
        <span>Month/Day/Year</span><br>
        <span><a href="">TITLE</a></span>
      </p>
    </div>
    <div class="right-upper-box">
      <p>
        <span>Date:</span><br>
        <span>Month/Day/Year</span><br>
        <span><a href="">TITLE</a></span>
      </p>
    </div>

    <div class="right-lower-box">
      <h3>Announcements</h3>
      <ul>
        <li><a target="_target" href="https://www.youtube.com/channel/UC_3P5KZb6M7rBZ-oFARkbDQ">Resonate At Home Free Technology Webinar</a></li>
        <li><a target="_target" href="https://www.youtube.com/channel/UC_3P5KZb6M7rBZ-oFARkbDQ">The Z-zoned! Online Technology Forum</a></li>
        <li><a href="">TITLE</a></li>
        <li><a href="">TITLE</a></li>
        <li><a href="">TITLE</a></li>
        <li><a href="">TITLE</a></li>
        <li><a href="">TITLE</a></li>
      </ul>
    </div>
  </div>

</div>
@endsection