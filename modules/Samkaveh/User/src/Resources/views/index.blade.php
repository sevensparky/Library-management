@extends('Common::layouts.master')
@section('content')
    <div class="row">
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                <div class="box-header mt-5">
                    <h3 class="box-title">کاربران</h3>
                    <div class="pull-left box-tools">
                        <a href="{{ route('users.create')  }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>تصویر کاربر</th>
                            <th>نام کاربر</th>
                            <th>تاریخ ثبت نام</th>
                            <th>امانت برده</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><img src="{{ $user->getImageUserProfile() }}" width="80" height="80"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->getDaysOfCreatedAt() }}</td>
                            <td>
                               @if (!empty($user->books->all()))
                                    <strong class="badge bg-green p-3">بله</strong>
                               @else
                               <strong class="badge bg-blue">خیر</strong>
                               @endif
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="pull-left box-tools">
                                        <a style="margin-left: 0.5rem" href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a style="margin-left: 0.5rem" href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
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
    <li>کاربران</li>
@endsection
@section('title')
کاربران
@endsection