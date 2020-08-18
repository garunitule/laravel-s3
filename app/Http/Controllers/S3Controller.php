<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\S3;

class S3Controller extends Controller
{
    private $S3;

    public function __construct()
    {
        $this->S3 = new S3();
    }

    public function upload(Request $request)
    {
        dd($request->file('upload')->path());
        $this->S3->upload($request->file('upload')->path(), $request->file('upload')->hashName());
    }

    public function index()
    {
        $files = $this->S3->index();
        dd($files);
    }
}
