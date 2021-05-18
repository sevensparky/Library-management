@extends('Common::layouts.master')
@section('content')
    <div class="row">
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                <div class="box-header mt-5">
                    
                    <h3 class="box-title">همه کتاب ها</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">
        
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>تصویر کتاب</th>
                            <th>نام کتاب</th>
                            <th>نویسنده کتاب</th>
                            <th>تاریخ ایجاد</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td><img src="{{ asset('storage/' . $book->image) }}" width="80" height="80"></td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->authorName() }}</td>
                            <td>{{ $book->getDaysOfCreatedAt() }}</td>
                            <td>
                                <form action="{{ route('books.destroy',$book->slug) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="pull-left box-tools">
                                        <a style="margin-left: 0.5rem" href="{{ route('books.show',$book->slug) }}" class="btn btn-info btn-sm" title="مشاهده جزئیات"><i class="fa fa-eye"></i></a>
                                        <a style="margin-left: 0.5rem" href="{{ route('books.edit',$book->slug) }}" class="btn btn-warning btn-sm" title="ویرایش"><i class="fa fa-pencil"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="حذف"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>   
                        </tr>  
                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $books->links() }} --}}
                </div>
            </div>
        </section>
    </div>
@endsection
