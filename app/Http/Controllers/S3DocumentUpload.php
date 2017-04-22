<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class S3DocumentUpload extends Controller
{
    public function UploadFile()
    {
        $prima = new Primafacie();

        if (!is_null(Input::has('file'))) {
            $come_file = Input::file('file');

            $fileprima = new FilePrima();
            $fileprima->size = $come_file->getSize();
            $fileprima->owner_id = Auth::user()->id;
            $fileprima->case_id = Input::get('file_case_id');
            $fileprima->original_name = $come_file->getClientOriginalName();
            $fileprima->user_id = Auth::user()->id;

            if (Input::has('file-name')) {
                $fileprima->name = Input::get('file-name');
            } else {
                $fileprima->name = $come_file->getClientOriginalName();
            }

            $fileprima->mime = $come_file->getClientMimeType();

            $fileprima->save();

            $file_name = Session::get('tenant')->id . '-' . $fileprima->id . Str::random(60) . '.' . $come_file->getClientOriginalExtension();
            $fileprima->storage_name = $file_name;

            $fileprima->save();
            $come_file->move(app_path() . '/files/', $file_name);

            $prima->s3Upload($fileprima->storage_name, $come_file, $fileprima->mime);

            return Redirect::route('cases-show', array('id' => Input::get('file_case_id')));
        }
    }
}
