<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- STYLESHEET -->
  @include('layouts.backend-include.stylesheet')
</head>
<body class="hold-transition login-page">

<!-- LOGIN FORM -->
@yield('content')

<!-- JAVASCRIPT -->
@include('layouts.backend-include.javascript')
</body>
</html>
