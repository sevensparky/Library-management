<?php

namespace Samkaveh\Book\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Samkaveh\Book\Http\Requests\TrusteeshipRequest;
use Samkaveh\User\Models\User;
use Samkaveh\Book\Database\Repositories\TrusteeshipRepository;

class TrusteeshipController extends Controller
{

    public $repository;

    public function __construct(TrusteeshipRepository $trusteeshipRepository)
    {
        $this->repository = $trusteeshipRepository;
    }

    public function index()
    {
        return view('Book::trusteeship.index', [
            'users' => User::whereHas('books')->get()
        ]);
    }

    public function create()
    {
        return view('Book::trusteeship.add');
    }

    public function store(TrusteeshipRequest $request)
    {
        return $this->repository->store($request);
    }

    public function show(User $user)
    {
        return view("Book::trusteeship.delivery", compact('user'));
    }

    public function destroy(User $user)
    {
        return $this->repository->destroy($user);
    }

    public function multipleDestroy(Request $request)
    {
        return $this->repository->multipleDestroy($request);
    }
}
