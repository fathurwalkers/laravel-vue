<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel - Vue.js</title>
</head>
<body>
    <div id="app">
      <h1>@{{ message }}</h1>
      <test-component></test-component>
      <router-view></router-view>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>