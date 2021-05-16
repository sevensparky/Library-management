<?php

namespace Samkaveh\Subject\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Samkaveh\Subject\databases\Repositories\SubjectRepositoryInterface;
use Samkaveh\Subject\Http\Requests\SubjectRequest;
use Samkaveh\Subject\Models\Subject;

class SubjectController extends Controller
{
    protected $repository;

    public function __construct(SubjectRepositoryInterface $subjectRepository)
    {
        return $this->repository = $subjectRepository;
    }

    public function index()
    {
        return view("Subject::index",['subjects' => $this->repository->all()]);
    }

    public function create()
    {
        return view("Subject::create");
    }


    public function store(SubjectRequest $request)
    {
        $this->repository->store($request);
        Alert::success('عملیات موفق','موضوع با موفقیت ایجاد شد');
        return redirect(route('subjects.index'));
    }

    public function edit(Subject $subject)
    {
        return view("Subject::edit",compact('subject'));
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        $this->repository->update($subject, $request);
        Alert::success('عملیات موفق','موضوع با موفقیت ویرایش شد');
        return redirect(route('subjects.index'));
    }

    public function destroy(Subject $subject)
    {
        $this->repository->delete($subject);
        Alert::success('عملیات موفق','موضوع با موفقیت حذف شد');   
        return redirect(route('subjects.index'));
    }

}