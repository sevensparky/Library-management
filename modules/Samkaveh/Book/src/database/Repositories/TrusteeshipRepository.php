<?php

namespace Samkaveh\Book\Database\Repositories;

use RealRashid\SweetAlert\Facades\Alert;
use Samkaveh\User\Models\User;

class TrusteeshipRepository
{
 
    public function store($request)
    {
        if ($request->books) {
            $user = User::find($request->users);
            $user->books()->attach($request->books);
            Alert::success('عملیات موفق', 'کتاب با موفقیت امانت داده شد');
            return redirect(route('trusteeship.index'));
        }
        Alert::error('خطا', 'مشکلی رخ داده');
        return back();
    }

    public function destroy($user)
    {
        if (count($user->books) >= 1) {
            $user->books()->detach($user->books);
            Alert::success('عملیات موفق', 'کتاب با موفقیت تحویل داده شد');
            return redirect(route('trusteeship.index'));
        }
        Alert::error('خطا', 'مشکلی رخ داده');
        return back();
    }

    public function multipleDestroy($request)
    {
        $ids = explode(',', $request->ids);
        foreach ($ids as $id) {
            $user = User::find($request->user);
            $trusteeshipBooks = $user->books();
            $user->books()->detach($trusteeshipBooks->whereIn('book_id', [$id])->get());
        }
        Alert::success('عملیات موفق', 'کتاب با موفقیت تحویل داده شد');
        return redirect(route('trusteeship.index'));
    }
}
