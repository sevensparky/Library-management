<?php

namespace Samkaveh\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Samkaveh\User\databases\Repositories\UserRepository;
use Samkaveh\User\Models\User;
use Samkaveh\User\Http\Requests\UserRequest;

class UserController extends Controller
{

    public $repository;
    
    protected $userInfo = [
        'name',
        'mobile',
        'father_name',
        'national_code',
        'latest_evidence',
        'email',
    ];

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }
    
    public function index()
    {
        return view('User::index', ['users' => $this->repository->all()]);
    }

    public function create()
    {
        return view("User::create");
    }
   
    public function store(UserRequest $request)
    {
        $this->repository->store($request);
    }
    
    public function show(User $user)
    {
        return view("User::show", compact('user'));
    }
   
    public function edit(User $user)
    {
        return view("User::edit", compact('user'));
    }
   
    public function update(Request $request, User $user)
    {
       $this->repository->update($request, $user);
    }

    
    public function destroy(User $user)
    {
        //
    }
}
