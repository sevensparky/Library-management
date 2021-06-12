<?php

namespace Samkaveh\Subject\Http\Controllers;

use App\Http\Controllers\Controller;
use Samkaveh\Subject\Database\Repositories\SubjectRepository;
use Samkaveh\Subject\Http\Requests\SubjectRequest;
use Samkaveh\Subject\Models\Subject;

class SubjectController extends Controller
{
    protected $repository;

    public function __construct(SubjectRepository $subjectRepository)
    {
        return $this->repository = $subjectRepository;
    }

    public function index()
    {
        return view("Subject::index", ['subjects' => $this->repository->all()]);
    }

    public function create()
    {
        return view("Subject::create");
    }

    public function store(SubjectRequest $request)
    {
        return $this->repository->store($request);
    }

    public function edit(Subject $subject)
    {
        return view("Subject::edit", compact('subject'));
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        return $this->repository->update($subject, $request);
    }

    public function destroy(Subject $subject)
    {
        return $this->repository->delete($subject);
    }
}
