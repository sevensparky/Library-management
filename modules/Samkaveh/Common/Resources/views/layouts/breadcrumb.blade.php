<section class="content-header">
    <h1>
      @yield('title')
    </h1>
    <ol class="breadcrumb">
     
      <li><a href="#"><i class="fa  @foreach (config('sidebar.items') as $item) {{ str_starts_with(request()->url(), $item['url']) ? $item['icon'] : '' }} @endforeach" ></i> پیشخوان</a></li>
      @yield('breadcrumb')
    </ol>
  </section>