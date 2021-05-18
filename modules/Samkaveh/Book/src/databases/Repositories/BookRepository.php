<?php

namespace Samkaveh\Book\databases\Repositories;

use Illuminate\Http\Request;
use Samkaveh\Book\Models\Book;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class BookRepository
{
    protected $DBItems = [
        'title',
        'print_series',
        'publishers_name',
        'head_id',
        'publication_details',
        'ISBN',
        'price',
        'image',
        'pages',
        'weigth',
    ];

    public function all()
    {
        return Book::all();
    }

    public function latest()
    {
        return Book::latest()->get();
    }

    public function paginate($number)
    {
        return Book::latest()->paginate($number);
    }

    public function store(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                Image::make($file)->resize(250, 250)->save(storage_path('app\\public\\' . $fileName));
                $book = Book::create(array_merge($request->only($this->DBItems), ['image' => $fileName]));
            }
            if ($request->authors && $request->subjects) {
                $book->authors()->attach($request->authors);
                $book->subjects()->attach($request->subjects);
            }
            Alert::success('عملیات موفق', 'کتاب با موفقیت اضافه شد');
        } catch (Exception $exception) {
            Alert::error('خطا', 'مشکلی رخ داده');
            return back();
        }
        return redirect(route('books.index'));
    }

    public function update(Request $request, Book $book)
    {

        $oldFile = storage_path('app\public\\' . $book->image);
        try {
            if ($request->hasFile('image')) {
                unlink($oldFile);
                $file = $request->file('image');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                Image::make($file)->resize(250, 250)->save(storage_path('app\\public\\' . $fileName));
                $book->update(array_merge($request->only($this->DBItems), ['image' => $fileName]));
            } else {
                $book->update(array_merge($request->only($this->DBItems), ['image' => $book->image]));
            }
            if ($request->authors && $request->subjects) {
                $book->authors()->attach($request->authors);
                $book->subjects()->attach($request->subjects);
            }
            Alert::success('عملیات موفق', 'کتاب با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            dd($exception);
            Alert::error('خطا', 'مشکلی رخ داده');
            return back();
        }
        return redirect(route('books.index'));
    }

    public function delete(Book $book)
    {
        $dir = storage_path('app\public\\' .$book->image);
        unlink($dir);
        $book->delete();
        Alert::success('عملیات موفق','کتاب مورد نظر با موفقیت حذف شد');
        return back();  
    }

}