<?php

namespace App\Models;

use Aws\S3\S3Client;
use Illuminate\Database\Eloquent\Model;

class S3 extends Model
{
    public function upload($file, $key)
    {
        $s3client = new S3Client([
            'version' => 'latest',
            'region' => env('AWS_DEFAULT_REGION', 'Region'),
        ]);
        $reault = $s3client->putObject([
            'Bucket' => env('AWS_BUCKET', 'Bucket'),
            'Key' => $key,
            'SourceFile' => $file,
        ]);
    }
}
