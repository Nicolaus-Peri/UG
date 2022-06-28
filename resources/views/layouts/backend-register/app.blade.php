<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- STYLESHEET -->
  @include('layouts.backend-register.stylesheet')

</head>
<!-- REGISTER -->
@yield('content')
<!-- /.register-box -->

<!-- JAVASCRIPT -->
@include('layouts.backend-register.javascript')
</body>
</html>