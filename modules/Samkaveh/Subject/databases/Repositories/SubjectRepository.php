<?php

namespace Samkaveh\Subject\databases\Repositories;

use Samkaveh\Subject\Models\Subject;

class SubjectRepository implements SubjectRepositoryInterface
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
       return Subject::create($request->only('title','slug','description'));
    }

    public function update($model, $request)
    {
        return $model->update($request->only('name','slug','description'));
    }
    
    public function delete($model)
    {
        return $model->delete();
    }


}