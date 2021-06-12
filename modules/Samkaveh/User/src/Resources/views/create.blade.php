@extends('Common::layouts.master')
@section('content')
    <div class="row">
            @include('Subject::layouts.errors.error')
            
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن کاربر</h3>
                            <div class="pull-left box-tools">
                                <a href="{{ route('users.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <form role="form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-input label="نام و نام خانوادگی" type="text" name="name" placeholder="نام و نام خانوادگی را وارد کنید..." value="{{ old('name') }}" />
                                    </div>
                                    <div class="col-xs-6">
                                        <x-input label="نام پدر" type="text" name="father_name" placeholder="تلفن همراه را وارد کنید..." value="{{ old('father_name') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-input label="تلفن همراه" type="text" name="mobile" placeholder="تلفن همراه را وارد کنید..." value="{{ old('mobile') }}" />   
                                    </div>
                                    <div class="col-xs-6">
                                        <x-input label="کدملی" type="text" name="national_code" placeholder="کدملی را وارد کنید..." value="{{ old('national_code') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-select name="latest_evidence" label="آخرین مدرک تحصیلی">
                                            <option value="">آخرین مدرک تحصیلی را انتخاب کنید...</option>
                                            <option value="diploma">دیپلم</option>
                                            <option value="associate degree">کاردانی</option>
                                            <option value="bachelor’s degree">کارشناسی</option>
                                            <option value="master’s degree">کارشناسی ارشد</option>
                                            <option value="doctoral degree">دکتری</option>
                                        </x-select>
                                    </div>
                                    <div class="col-xs-6"> 
                                        <x-input label="ایمیل" type="text" name="email" placeholder="ایمیل را وارد کنید..." value="{{ old('email') }}" />                                         
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <x-input label="تصویر کاربر" type="file" name="img_profile" />
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">ثبت</button>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    </div>
@endsection

@section('breadcrumb')
    <li><a href="{{ route('users.index') }}">کاربران</a></li>
    <li>ثبت نام کاربر</li>
@endsection
@section('title')
    ثبت نام کاربر جدید
@endsection
