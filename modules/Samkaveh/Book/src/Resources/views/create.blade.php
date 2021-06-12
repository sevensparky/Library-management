@extends('Common::layouts.master')
@section('content')
    <div class="row">
            @include('Subject::layouts.errors.error')
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن کتاب</h3>
                            <div class="pull-left box-tools">
                                <a href="{{ route('books.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <form role="form" action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="box-body">
                                <x-input label="نام کتاب" type="text" name="title" placeholder="نام کتاب را وارد کنید..." id="inputError" value="{{ old('title') }}" />
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-select name="authors[]" label="نویسنده و مترجم" multiple>
                                            <option value="">نویسنده و مترجم را انتخاب کنید</option>
                                            @foreach (\Samkaveh\Author\Models\Author::all() as $author)                                                
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </x-select>
                                    </div>
                                    <div class="col-xs-6">  
                                        <x-select name="subjects[]" label="موضوع کتاب" multiple>
                                            <option value="">موضوع کتاب را انتخاب کنید</option>
                                            @foreach (\Samkaveh\Subject\Models\Subject::all() as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                                            @endforeach
                                        </x-select>                                        
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <x-input label="سری چاپ" type="text" name="print_series" placeholder="سری چاپ را وارد کنید..." value="{{ old('print_series') }}" />
                                    </div>
                                    <div class="col-xs-4">
                                        <x-input label="نام انتشارات" type="text" name="publishers_name" placeholder="نام انتشارات را وارد کنید..." value="{{ old('publishers_name') }}" />   
                                    </div>
                                    <div class="col-xs-4">
                                        <x-input label="سرشناسه" type="text" name="head_id" placeholder="سرشناسه را وارد کنید..." value="{{ old('head_id') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-input label="مشخصات نشر" type="text" name="publication_details" placeholder="مشخصات نشر را وارد کنید..." value="{{ old('publication_details') }}" />
                                    </div>
                                    <div class="col-xs-6">
                                        <x-input label="شابک" type="text" name="ISBN" placeholder="شابک را وارد کنید..." value="{{ old('ISBN') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <x-input label="قیمت" type="text" name="price" placeholder="قیمت را وارد کنید..." value="{{ old('price') }}" />
                                    </div>
                                    <div class="col-xs-4">
                                        <x-input label="تعداد صفحات" type="text" name="pages" placeholder="تعداد صفحات را وارد کنید..." value="{{ old('pages') }}" />   
                                    </div>
                                    <div class="col-xs-4">
                                        <x-input label="وزن کتاب" type="text" name="weigth" placeholder="وزن کتاب را وارد کنید..." value="{{ old('weigth') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <x-input label="تصویر کتاب" type="file" name="image" />   
                                    </div>
                                    <div class="col-xs-6">
                                        <x-input label="تعداد کتاب" type="number" name="count" placeholder="تعداد کتاب را وارد کنید..." value="{{ old('count') }}" />   
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <textarea name="description" class="form-control" cols="30" rows="4" style="resize: none" placeholder="توضیحات کوتاهی را وارد کنید...">{{ old('description') }}</textarea>
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
    <li><a href="{{ route('books.index') }}">کتاب ها</a></li>
    <li>افزودن کتاب</li>
@endsection
@section('title')
افزودن کتاب
@endsection
