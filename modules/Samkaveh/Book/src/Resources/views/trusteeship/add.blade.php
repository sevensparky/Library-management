@extends('Common::layouts.master')
@section('content')
    <div class="row">
            @include('Subject::layouts.errors.error')
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن امانت</h3>
                            <div class="pull-left box-tools">
                                <a href="{{ route('books.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <form role="form" action="{{ route('trusteeship.store') }}" method="post">
                            @csrf
                            
                            <div class="box-body">
                                <x-select name="users" label="نام کاربر">
                                    <option value="">نام کاربر را انتخاب کنید</option>
                                    @foreach (\Samkaveh\User\Models\User::all() as $user)                                                
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </x-select>     
                            </div>

                            <div class="box-body">
                                <x-select name="books[]" label="نام کتاب" multiple>
                                    <option value="">نام کتاب را انتخاب کنید</option>
                                    @foreach (\Samkaveh\Book\Models\Book::all() as $book)                                                
                                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                                    @endforeach
                                </x-select>     
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

{{-- @section('breadcrumb')
    <li><a href="{{ route('books.index') }}">کتاب ها</a></li>
    <li>افزودن کتاب</li>
@endsection
@section('title')
افزودن کتاب
@endsection --}}
