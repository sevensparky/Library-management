<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-right image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>{{ auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
        @php
          $url = explode('/',URL::current());  
        @endphp
        <li class="{{ $url[3] == 'dashboard' ? 'active' : '' }}">
          <a href="{{ route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>پیشخوان</span>
          </a>
        </li>

        @foreach (config('sidebar.items') as $item)
        <li class="{{ str_starts_with(request()->url(), $item['url']) ? 'active' : '' }}" >
          <a href="{{ $item['url'] }}">
            <i class="fa {{ $item['icon'] }}"></i> 
            <span>{{ $item['title'] }}</span>
          </a>
        </li>
        @endforeach
      </ul>
    </section>
  </aside>
