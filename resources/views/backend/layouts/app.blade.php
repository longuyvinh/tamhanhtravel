<!DOCTYPE html>
<html>
<head>
  @include('backend.layouts.headerscript')
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <header class="main-header">
    @include('backend.layouts.mainheader')
  </header>

  <aside class="main-sidebar">
    @include('backend.layouts.mainsidebar')
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      @yield('container')
    </div>
  </div>

  <footer class="main-footer">
    @include('backend.layouts.mainfooter')
  </footer>

  @include('backend.layouts.footerscript')

</body>
</html>
