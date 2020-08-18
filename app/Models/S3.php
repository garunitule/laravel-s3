<?php

namespace App\Models;

use Aws\S3\S3Client;
use Illuminate\Database\Eloquent\Model;

class S3 extends Model
{
    private $s3Client;

    public function __construct()
    {
        $this->s3Client = new S3Client([
            'version' => 'latest',
            'region' => env('AWS_DEFAULT_REGION', 'Region'),
        ]);
    } 

    public function upload($file, $key)
    {
        $reault = $this->s3Client->putObject([
            'Bucket' => env('AWS_BUCKET', 'Bucket'),
            'Key' => $key,
            'SourceFile' => $file,
        ]);
    }

    public function index()
    {
        return $this->s3Client->ListObjects([
            'Bucket' => env('AWS_BUCKET', 'Bucket'),
        ]);
    }
}
