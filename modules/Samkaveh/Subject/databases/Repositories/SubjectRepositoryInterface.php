<?php

namespace Samkaveh\Subject\databases\Repositories;

interface SubjectRepositoryInterface 
{

    public function all();
    public function latest();
    public function paginate($pageNumber);
    public function store($request);
    public function update($model, $request);
    public function delete($model);

}