<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- Include your CSS and JS assets here -->
</head>
<body>
  <header>
    <h1>@yield('header')</h1>
  </header>

  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">@yield('card_title')</h3>
      </div>
      <div class="card-body">
        @yield('content')
      </div>
    </div>
  </div>

  <footer>
    <!-- Footer content here -->
  </footer>

  <!-- Include your scripts here -->
</body>
</html>
