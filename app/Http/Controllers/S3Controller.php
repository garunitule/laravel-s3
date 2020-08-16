<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Exception\AwsException;
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
        $this->S3->upload($_FILES['upload-image']['name'], $_FILES['upload-image']['name']);
    }    
}
