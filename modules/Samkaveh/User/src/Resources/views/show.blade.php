@extends('Common::layouts.master')
@section('content')
<div class="row">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-rounded" src="{{ $user->getImageUserProfile() }}">

          <h3 class="profile-username text-center">{{ $user->name }}</h3>    
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <p class="">
             توضیحات
          </p>
        </div>
        <div class="box-body">
          <strong><i class="fa fa-calendar-o margin-r-5"></i>کتاب های امانتی</strong>
                @if ($user->getUserHasBook())
                    @foreach ($user->books as $book)
                       <section class="media">
                            <a href="{{ route('books.show',$book->slug) }}">
                                <span class="label label-primary media media">{{ $book->title }}</span>
                            </a>
                       </section>
                    @endforeach
                @else
                    <p class="text-warning">
                        هیچ کتابی توسط این کاربر امانت برده نشده است.
                    </p>                
                @endif
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <div class="box-header with-border">
            <h3 class="box-title" style="padding: 12px">اطلاعات کاربر</h3>
            <div class="pull-left box-tools">
              <a href="{{ route('users.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
              </a>
          </div>
        </div>       
        <div class="row">
            <div class="col-md-12">
              <ul class="timeline">
                <li class="time-label">                                          
                      <span class="bg-red">
                        {{ $user->getDaysOfCreatedAt() }}
                      </span>
                </li>
                
                <li>
                    <i class="fa fa-user bg-green"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">نام کاربر</h3>
        
                        <div class="timeline-body">
                        {{ $user->name }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-male bg-orange"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">نام پدر</h3>
        
                        <div class="timeline-body">
                          {{ $user->father_name }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-credit-card bg-blue"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">کد ملی</h3>
        
                        <div class="timeline-body">
                        {{ $user->national_code }}
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-certificate bg-aqua"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">آخرین مدرک تحصیلی</h3>
        
                        <div class="timeline-body">
                          @lang($user->latest_evidence)
                        </div>
                      </div>
                </li>

                <li>
                    <i class="fa fa-internet-explorer bg-purple"></i>
                    <div class="timeline-item">        
                        <h3 class="timeline-header">ایمیل</h3>
        
                        <div class="timeline-body">
                                @if ($user->email)
                                {{ $user->email  }}
                                @else
                                    __
                                @endif
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

@section('breadcrumb')
    <li><a href="{{ route('users.index') }}">کاربران</a></li>
    <li>مشاهده اطلاعات کاربر {{ $user->name }}</li>
@endsection
@section('title')
مشاهده اطلاعات کاربر
@endsection