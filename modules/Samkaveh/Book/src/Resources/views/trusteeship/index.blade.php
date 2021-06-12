@extends('Common::layouts.master')
@section('content')
    <div class="row">
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                <div class="box-header mt-5">
                        <h3 class="box-title">امانتی ها</h3> 
                        <div class="pull-left box-tools">
                            <a href="{{ route('trusteeship.create')  }}" class="btn btn-primary btn-sm" title="افزودن کتاب"><i class="fa fa-plus"></i></a>
                        </div>

                        <div class="input-group input-group-sm" style="margin-top: 20px">

                          <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">
        
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام امانت برده</th>
                            <th>تصویر کاربر</th>
                            {{-- <th>تاریخ امانت برده</th> --}}
                            <th>نام کتاب</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users->all() as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td><img src="{{ asset('storage/'.$user->img_profile) }}" width="80" height="80"></td>

                           
                           @if (count($user->books) > 1)
                                @php
                                    $push = $user->books->pluck('title')->toArray();
                                    $result = implode(', ',$push); 
                                @endphp
                                <td>
                                    {{ $result }}
                                </td>
                           @else
                               @foreach ($user->books as $book)
                               <td>
                                {{ $book->title }}
                               </td>
                               @endforeach
                           @endif
                           <td>
                                {{-- <form action="#" method="post"> --}}
                                    {{-- @csrf
                                    @method('DELETE') --}}
                                    <div class="pull-left box-tools">
                                        {{-- <a style="margin-left: 0.5rem" href="{{ route('users.show',$user->slug) }}" class="btn btn-info btn-sm" title="مشاهده جزئیات"><i class="fa fa-eye"></i></a> --}}
                                        {{-- <a style="margin-left: 0.5rem" href="{{ route('users.edit',$user->slug) }}" class="btn btn-warning btn-sm" title="ویرایش"><i class="fa fa-pencil"></i></a> --}}
                                        <a href="{{ route('trusteeship.show',$user->id) }}" type="submit" class="btn btn-danger btn-sm" title="تحویل کتاب"><i class="fa fa-trash"></i></a>
                                    </div>
                                {{-- </form> --}}
                            </td>  
                        </tr>  
                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </section>
    </div>
@endsection


@section('breadcrumb')
    <li>کتاب ها</li>
@endsection
@section('title')
    کتاب ها
@endsection