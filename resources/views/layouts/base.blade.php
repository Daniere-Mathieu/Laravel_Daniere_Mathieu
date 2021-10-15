<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <header class="header_menu">
      <nav class="nav_header_menu">
        <div class="left_nav_header_menu">
          <img src="https://scan-trad.fr//content/b74f5ee9461495ba5ca4c72a7108a23904c27a05/1587233833.png" alt="" class="img_header_menu">
          <h2 class="H2_header_menu">Scantrad_low-Cost</h2>
        </div>
        <div class="right_nav_header_menu">
          <ul class="ul_header_menu">
            <li class="li_header_menu"><a href="/">welcome</a> </li>
            <li class="li_header_menu"><a href="/test">test</a></li>
            <li class="li_header_menu"><a href="/jesais/test2">test2</a></li>
            <li class="li_header_menu"><a href="/list">list</a></li>
          </ul>
        </div>
      </nav>
    </header>
    @yield('container')
  </body>
</html>
