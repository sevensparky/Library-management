@include('Common::layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('sweetalert::alert')

  @include('Common::layouts.header')

  @include('Common::layouts.sidebar')

  <div class="content-wrapper">

  @include('Common::layouts.breadcrumb')
   

   <section class="content">
     @yield('content')
   </section>
  </div>

@include('Common::layouts.footer')

