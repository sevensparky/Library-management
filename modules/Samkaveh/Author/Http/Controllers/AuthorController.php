<?php

namespace Samkaveh\Author\Http\Controllers;

use App\Http\Controllers\Controller;
use Samkaveh\Author\Database\Repositories\AuthorRepository;
use Samkaveh\Author\Http\Requests\AuthorRequest;
use Samkaveh\Author\Models\Author;

class AuthorController extends Controller
{
    protected $repository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->repository = $authorRepository;
    }

    public function index()
    {
        return view("Author::index",['authors' => $this->repository->all()]);
    }

    public function create()
    {
        return view("Author::create");
    }

    public function store(AuthorRequest $request)
    {
      return $this->repository->store($request);
    }

    public function edit(Author $author)
    {
        return view("Author::edit",compact('author'));
    }

    public function update(AuthorRequest $request, Author $author)
    {
       return $this->repository->update($author, $request);
    }

    public function destroy(Author $author)
    {
       return $this->repository->delete($author);
    }

}