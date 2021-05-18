<?php

namespace Samkaveh\Book\Http\Controllers;

use App\Http\Controllers\Controller;
use Samkaveh\Book\Models\Book;
use Illuminate\Http\Request;
use Samkaveh\Book\databases\Repositories\BookRepository;
use Samkaveh\Book\Http\Requests\BookRequest;

class BookController extends Controller
{

    public $repository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }

    public function index()
    {
        return view('Book::index', ['books' => Book::all()]);
    }

    public function create()
    {
        return view('Book::create');
    }

    public function store(BookRequest $request)
    {
        $this->repository->store($request);
    }

    public function show(Book $book)
    {
        return view("Book::show", compact('book'));
    }

    public function edit(Book $book)
    {
        return view('Book::edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $this->repository->update($request, $book);
    }

    public function destroy(Book $book)
    {
        $this->repository->delete($book);
    }
}
