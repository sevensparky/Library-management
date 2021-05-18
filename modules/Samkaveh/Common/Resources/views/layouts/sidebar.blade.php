  <!-- right side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>علیرضا حسینی زاده</p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>داشبرد</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> داشبرد اول</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> داشبرد دوم</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('subjects.index') }}">
            <i class="fa fa-files-o"></i>
            <span>موضوعات</span>
          </a>
        </li>
        <li>
          <a href="{{ route('authors.index') }}">
            <i class="fa fa-pencil"></i> <span>نویسندگان</span>
          </a>
        </li>  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>کتاب ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('books.index') }}"><i class="fa fa-circle-o"></i>همه کتاب ها</a></li>
            <li><a href="{{ route('books.create') }}"><i class="fa fa-circle-o"></i>افزودن کتاب</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>جدیدترین کتاب ها</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>کتاب های امانت داده شده</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>کاربران</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('books.index') }}"><i class="fa fa-circle-o"></i>همه کاربران</a></li>
            <li><a href="{{ route('books.index') }}"><i class="fa fa-circle-o"></i>امانتی ها</a></li>
          </ul>
        </li>

        
        <li class="header">برچسب ها</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>مهم</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>هشدار</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>اطلاعات</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
