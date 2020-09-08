<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <title>R.E.C</title>
</head>

<body>
  @include('header.header')
  @include('navigationbar.navbar')
  <div class="container">
    @yield('content')
  </div>
  @yield('script')
  <div class="clearfix"></div>
  @include('footer.footer')
</body>

</html>