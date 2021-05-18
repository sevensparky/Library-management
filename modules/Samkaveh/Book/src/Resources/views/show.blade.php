@extends('Common::layouts.master')
@section('content')
<div class="row">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-rounded" src="{{ $book->getImage() }}">

          <h3 class="profile-username text-center">{{ $book->title }}</h3>          
            @foreach ($book->authors as $author)
                <p class="text-muted text-center"> {{ $author->name }} </p>                
            @endforeach
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h5 class="box-title">موضوعات</h5>
        </div>
        <div class="box-body">
          <p>
            @foreach ($book->subjects as $subject)
            <span class="label label-primary">{{ $subject->title }}</span>
            @endforeach
          </p>
          <hr>
          <strong><i class="fa fa-file-text-o margin-r-5"></i>توضیحات</strong>
          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
          {{-- <p>
            {{ $book->description }}
          </p> --}}
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <div class="box-header with-border">
            <h3 class="box-title" style="padding: 12px">جزئیات</h3>
            <div class="pull-left box-tools">
              <a href="{{ route('books.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
              </a>
          </div>
        </div>       
        <div class="row">
            <div class="col-md-12">
              <ul class="timeline">
                <li class="time-label">                                          
                      <span class="bg-red">
                        {{ $book->getDaysOfCreatedAt() }}
                      </span>
                </li>
                
                <li>
                    <i class="fa fa-book bg-green"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">نام کتاب</h3>
        
                        <div class="timeline-body">
                        {{ $book->title }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-users bg-orange"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">نام نویسندگان یا مترجمان</h3>
        
                        <div class="timeline-body">
                            @foreach ($book->authors as $author)
                                {{ $author->name }}،
                            @endforeach
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-print bg-blue"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">سری چاپ</h3>
        
                        <div class="timeline-body">
                        {{ $book->print_series }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-certificate bg-aqua"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">نام انتشارات</h3>
        
                        <div class="timeline-body">
                        {{ $book->publishers_name }} 
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-align-right bg-red"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">سرشناسه</h3>
        
                        <div class="timeline-body">
                        {{ $book->head_id }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-file-text-o bg-purple"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">مشخصات نشر</h3>
        
                        <div class="timeline-body">
                        {{ $book->publication_details }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-sort-numeric-asc bg-yellow"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">شابک</h3>
        
                        <div class="timeline-body">
                        {{ $book->ISBN }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-money bg-maroon"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">قیمت</h3>
        
                        <div class="timeline-body">
                        {{ $book->price }} تومان
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-copy bg-green"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">تعداد صفحات</h3>
        
                        <div class="timeline-body">
                        {{ $book->pages }} صفحه
                        </div>
                      </div>
                </li>
                
                <li>
                    <i class="fa fa-tasks bg-blue"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">تعداد کتب های موجود</h3>
        
                        <div class="timeline-body">
                        {{ $book->pages }} عدد
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-cubes bg-black"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">وزن</h3>
        
                        <div class="timeline-body">
                        {{ $book->weigth }} گرم
                        </div>
                      </div>
                </li>

                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection