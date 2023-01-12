<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
  <link rel="stylesheet" href="/vendor/select2/css/select2-bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">

  <title>{{ $title }}</title>
</head>

<body class="d-flex flex-column" style="height: 100vh;">
  @include('partials.nav-admin')

  <div class="container">
    <div class="card mb-3" style="margin-top: -40px;">
      <div class="card-body">
        <h2>{{ $title }}</h2>
      </div>
    </div>
  </div>

  @yield('container')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="/vendor/select2/js/select2.min.js"></script>

  @isset($javascript)
    <script src="js/{{ $javascript }}"></script>
  @endisset

</body>

</html>
