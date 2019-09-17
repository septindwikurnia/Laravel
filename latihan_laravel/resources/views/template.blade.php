<!DOCTYPE html>
<html lang="en">
<head>
      <title>Siswaku</title>
      <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="page-top">

      @include('navbar')

      @yield('main')

      
      @include('footer')

      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bpptstrap/js/bootstrap.bundle.min.js')}}"></script>
      
      <script src="{{asset('vendor/jquery-easing/jquery-easing.min.js')}}"></script>

      <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
      <script src="{{asset('js/contact_me.js')}}"></script>

      <script src="{{asset('js/freelancer.min.js')}}"></script>
</body>

</html>