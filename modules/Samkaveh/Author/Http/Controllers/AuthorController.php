<?php

namespace Samkaveh\Author\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Samkaveh\Author\databases\Repositories\AuthorRepositoryInterface;
use Samkaveh\Author\Http\Requests\AuthorRequest;
use Samkaveh\Author\Models\Author;

class AuthorController extends Controller
{

    protected $repository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
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
        $this->repository->store($request);
        Alert::success('عملیات موفق','نویسنده با موفقیت ایجاد شد');
        return redirect(route('authors.index'));
    }

    public function edit(Author $author)
    {
        return view("Author::edit",compact('author'));
    }

    public function update(AuthorRequest $request, Author $author)
    {
        $this->repository->update($author, $request);
        Alert::success('عملیات موفق','نویسنده با موفقیت ویرایش شد');
        return redirect(route('authors.index'));
    }

    public function destroy(Author $author)
    {
        $this->repository->delete($author);
        Alert::success('عملیات موفق','نویسنده با موفقیت حذف شد');   
        return redirect(route('authors.index'));
    }

}