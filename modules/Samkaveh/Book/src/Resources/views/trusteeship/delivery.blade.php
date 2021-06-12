@extends('Common::layouts.master')
@section('content')
<div class="row">
    @include('Subject::layouts.errors.error')
    <div class="col-md-3">
        <form action="{{ route('trusteeship.destroy',$user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-info btn-block margin-bottom">تحویل همه کتاب ها</button>
        </form>
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-rounded" src="{{ $user->getImageUserProfile() }}">
  
            <h3 class="profile-username text-center">{{ $user->name }}</h3>    
          </div>
        </div>
      </div>
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">

            <div class="box-header mt-5">
                <h3 class="box-title">کتاب های امانت برده شده</h3> 
                <div class="pull-left box-tools">
                    <a href="{{ route('trusteeship.index')  }}" class="btn btn-primary btn-sm" title="افزودن کتاب"><i class="fa fa-arrow-left"></i></a>
                </div>

                <div class="input-group input-group-sm" style="margin-top: 20px">

                  <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            <div class="box-body no-padding">

          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
                @foreach ($user->books as $book)
                <tr>
                  <td>
                    <label class="ui-checkbox">
                      <input type="checkbox" class="sub-checkbox" data-id="{{ $book->id }}">
                      <span class="checkmark"></span>
                    </label>                    
                    <td class="mailbox-name"><b>{{ $book->title }}</b></td>
                        @php
                            $result = $book->authors->pluck('name')->toArray();
                            $bookAuthorsName = implode(', ',$result);
                        @endphp
                        <td class="mailbox-subject">{{ $bookAuthorsName }}</td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 دقیقه پیش</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
          <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <div class="pull-left">
                    <button onclick="deleteMultiple('{{ route('trusteeship.multipleDestroy',$user->id) }}')" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></button>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <script src="/js/script.js"></script>
@endpush

@section('breadcrumb')
    <li><a href="{{ route('books.index') }}">کتاب ها</a></li>
    <li>تحویل کتاب</li>
@endsection
@section('title')
تحویل کتاب
@endsection
