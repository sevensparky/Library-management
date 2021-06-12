<?php

namespace Samkaveh\Author\Database\Repositories;

use RealRashid\SweetAlert\Facades\Alert;
use Samkaveh\Author\Models\Author;

class AuthorRepository
{
    public function all()
    {
        return Author::all();
    }

    public function latest()
    {
        return Author::latest()->get();
    }

    public function paginate($pageCount)
    {
        return Author::latest()->paginate($pageCount);
    }

    public function store($request)
    {
       Author::create($request->only('name','slug','description'));
       Alert::success('عملیات موفق','نویسنده با موفقیت ایجاد شد');
       return redirect(route('authors.index'));
    }

    public function update($model, $request)
    {
        $model->update($request->only('name','slug','description'));
        Alert::success('عملیات موفق','نویسنده با موفقیت ویرایش شد');
        return redirect(route('authors.index'));
    }
    
    public function delete($model)
    {
        $model->delete();
        Alert::success('عملیات موفق','نویسنده با موفقیت حذف شد');   
        return redirect(route('authors.index'));
    }
}