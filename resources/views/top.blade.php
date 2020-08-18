<!DOCTYPE html>
    <body>
        <h1>S3アップロード</h1>
        <form method="post" action="/s3/upload" enctype="multipart/form-data">
            @csrf
            <label for="s3">画像ファイル</label>
            <input type="file" name="upload">
            <input type="submit" name="upload" value="upload">
        </form>
        <h1>S3取得</h1>
        <form method="get" action="/s3/index" enctype="multipart/form-data">
            @csrf
            <input type="submit" name="index" value="index">
        </form>
    </body>
</html>