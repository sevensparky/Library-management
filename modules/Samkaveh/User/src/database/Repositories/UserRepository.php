<?php

namespace Samkaveh\User\Database\Repositories;

use Illuminate\Http\Request;
use Samkaveh\User\Models\User;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class UserRepository
{

    protected $userInfo = [
        'name',
        'mobile',
        'father_name',
        'national_code',
        'latest_evidence',
        'email',
    ];

    public function all()
    {
        return User::all();
    }

    public function latest()
    {
        return User::latest()->get();
    }

    public function paginate($number)
    {
        return User::latest()->paginate($number);
    }


    public function store(Request $request)
    {
        try {            
            if ($request->hasFile('img_profile')) {
                $path = "app\\public\\";
                $file = $request->file('img_profile');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                Image::make($file)->resize(150, 150)->save(storage_path($path . $fileName));
                User::create(array_merge($request->only($this->userInfo), ['img_profile' => $fileName]));
                Alert::success('عملیات موفق','کاربر با موفقیت ثبت نام شد');
            }          

        } catch (Exception $exception) {
            Alert::error('خطا', 'مشکلی رخ داده');
            return back();
        }
        return redirect(route('users.index'));
    }

    public function update(Request $request, User $user)
    {
        try {            
            $path = "app\\public\\";
            $oldFile = storage_path($path . $user->img_profile);
            if ($request->hasFile('img_profile')) {
                unlink($oldFile);
                $file = $request->file('img_profile');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                Image::make($file)->resize(150, 150)->save(storage_path($path . $fileName));
                $user->update(array_merge($request->only($this->userInfo), ['img_profile' => $fileName]));
                Alert::success('عملیات موفق','اطلاعات کاربر با موفقیت ویرایش شد');
                return redirect(route('users.index'));
            } else{
                $user->update(array_merge($request->only($this->userInfo), ['img_profile' => $user->img_profile]));
            }      

        } catch (Exception $exception) {
            Alert::error('خطا', 'مشکلی رخ داده');
            return back();
        }
    }
    
}
