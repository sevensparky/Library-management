<?php

namespace Samkaveh\Author\databases\Repositories;


interface AuthorRepositoryInterface
{
    public function all();
    public function latest();
    public function paginate($pageNumber);
    public function store($request);
    public function update($model, $request);
    public function delete($model);
}
