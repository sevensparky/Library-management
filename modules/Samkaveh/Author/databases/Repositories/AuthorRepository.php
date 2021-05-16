<?php

namespace Samkaveh\Author\databases\Repositories;

use Samkaveh\Author\Models\Author;

class AuthorRepository implements AuthorRepositoryInterface
{

    public function all()
    {
        return Author::all();
    }

    public function latest()
    {
        return Author::latest()->get();
    }

    public function paginate($pageNumber)
    {
        return Author::latest()->paginate($pageNumber);
    }

    public function store($request)
    {
       return Author::create($request->only('name','slug','description'));
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