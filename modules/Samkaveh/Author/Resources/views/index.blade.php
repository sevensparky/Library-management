@extends('Common::layouts.master')
@section('content')
    <div class="row">
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                <div class="box-header mt-5">
                    <h3 class="box-title">نویسندگان</h3>
                    <div class="pull-left box-tools">
                        <a href="{{ route('authors.create')  }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام نویسنده</th>
                            <th>تاریخ ایجاد</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{  $author->getDaysOfCreatedAt() }}</td>
                            <td>
                                <form action="{{ route('authors.destroy',$author->slug) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="pull-left box-tools">
                                        <a style="margin-left: 0.5rem" href="{{ route('authors.edit',$author->slug) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>   
                        </tr>  
                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $authors->links() }} --}}
                </div>
            </div>
        </section>
    </div>
@endsection
