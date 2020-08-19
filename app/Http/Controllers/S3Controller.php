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
        $this->S3->upload($request->file('upload')->path(), $request->file('upload')->hashName());
        return view('top', [
            'files' => $this->S3->index(),
        ]);
    }

    public function index()
    {
        return view('top', [
            'files' => $this->S3->index(),
        ]);
    }
}
