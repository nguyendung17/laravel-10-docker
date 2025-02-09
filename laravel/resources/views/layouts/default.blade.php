<!DOCTYPE html>
<html lang="en">

<head>
  <!--  Title -->
  <title>{{isset($meta['title'])?$meta['title']:''}}</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="{{isset($meta['description'])?$meta['description']:''}}" />
  <meta name="author" content="" />
  <meta name="keywords" content="{{isset($meta['keyword'])?$meta['keywords']:''}}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png" />
  <!-- Core Css -->
  <link rel="stylesheet" href="/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href="/assets/css/style.min.css" />
  @vite(['resources/css/app.scss'])
  @vite(['resources/js/app.js'])
</head>

<body>
  @yield("main")
  <!-- Customizer -->
  <!-- Import Js Files -->
  <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  @yield("script")
  @yield("sub_script")
</body>

</html>