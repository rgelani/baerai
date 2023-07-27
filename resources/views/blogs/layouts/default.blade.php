<!doctype html>
<html>
<head>
   @include('blogs.layouts.includes.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('blogs.layouts.includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('blogs.layouts.includes.footer')
   </footer>
</div>
</body>
</html>