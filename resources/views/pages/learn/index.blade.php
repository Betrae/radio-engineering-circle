@extends('master')
@section('content')
<div class="rec-header">
  <h3>Learn about amateur radio operator</h3>
</div>
<div class="slideshow-learn">

  <div class="mySlide fade">
    <img src="/assets/images/th.jpg">
  </div>

  <div class="mySlide fade">
    <img src="/assets/images/logo.jpg">

  </div>

</div>
<div class="what-box">
  <h4> WHAT IS AMATEUR RADIO?</h4>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus odit quos harum perspiciatis exercitationem, voluptatem sequi provident aspernatur. Velit et vero vel quasi ut necessitatibus excepturi voluptatem autem consectetur!
    Earum facere est fuga obcaecati porro quasi tempore recusandae! Quis similique deleniti maiores molestias vero saepe doloremque. Aspernatur delectus, laudantium maiores quas nisi nemo dolor mollitia iste necessitatibus at voluptatibus?
    Illo, iste ratione saepe tempore neque possimus rerum corrupti quod temporibus magni omnis quam accusamus velit repudiandae, ab recusandae accusantium eum eaque perferendis quos! Laboriosam nostrum tempore laudantium corrupti vero.
    Ea quaerat dolores cupiditate velit deleniti commodi nostrum, debitis dolor, vitae, doloremque enim tempora. Omnis ut vitae, vel veritatis magni eaque dignissimos laborum consequuntur! Cupiditate reprehenderit atque numquam magni eius?
  </p>
</div>
<div class="what-box">
  <h4>HOW DO I BECOME A RADIO AMATUER?</h4>
  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum aperiam natus eligendi doloremque repellat ab reiciendis voluptas, voluptatibus minima officia inventore provident quia? Libero ipsa eaque velit voluptas numquam sit.
    Ratione consequuntur dolore cumque blanditiis alias totam eligendi placeat similique recusandae quia natus atque tempore perspiciatis praesentium quam id distinctio ex sint, omnis velit debitis vel et minus. Cupiditate, quidem?
    Molestias repellat nemo hic nulla atque labore asperiores iure pariatur voluptatem non modi veniam, reprehenderit rem possimus molestiae dicta, perferendis adipisci repellendus porro minima! Maiores laboriosam quam voluptas qui consequuntur.
    Fugit eos doloremque aliquam quasi id reiciendis placeat non delectus quidem esse! Esse cum qui dolore, maxime nisi nostrum ad quaerat voluptatibus, voluptatum sit culpa vitae consectetur et excepturi beatae.
</div>

@endsection
@section('script')
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlide")
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
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