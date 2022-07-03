<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>V Book Store</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
  <!-- Box Icons Font CDN LINK -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>  
    @include('include.header')
    
    @yield('content')
    
    @include('include.footer')  
</body>
</html>