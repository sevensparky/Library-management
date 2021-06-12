<header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini">پنل</span>
      <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">۱۰</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">۱۰ اعلان جدید</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">نمایش همه</a></li>
            </ul>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ auth()->user()->name }}
                  <small>مدیریت سایت</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <form action="{{ route('logout') }}" method="POST" id="logout">
                    @csrf
                    <a href="#" onclick="document.getElementById('logout').submit()" class="btn btn-default btn-flat">خروج</a>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>