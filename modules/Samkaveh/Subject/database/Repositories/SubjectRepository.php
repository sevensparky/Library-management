<?php

namespace Samkaveh\Subject\Database\Repositories;

use RealRashid\SweetAlert\Facades\Alert;
use Samkaveh\Subject\Models\Subject;

class SubjectRepository
{
    public function all()
    {
        return Subject::all();
    }

    public function latest()
    {
        return Subject::latest()->get();
    }

    public function paginate($pageNumber)
    {
        return Subject::latest()->paginate($pageNumber);
    }

    public function store($request)
    {
        Subject::create($request->only('title', 'slug', 'description'));
        Alert::success('عملیات موفق', 'موضوع با موفقیت ایجاد شد');
        return redirect(route('subjects.index'));
    }

    public function update($model, $request)
    {
        $model->update($request->only('title', 'slug', 'description'));
        Alert::success('عملیات موفق', 'موضوع با موفقیت ویرایش شد');
        return redirect(route('subjects.index'));
    }

    public function delete($model)
    {
        $model->delete();
        Alert::success('عملیات موفق', 'موضوع با موفقیت حذف شد');
        return redirect(route('subjects.index'));
    }
}
