<!DOCTYPE html>
    <body>
        <h1>S3基本操作</h1>
        <form method="post" action="/s3/upload" enctype="multipart/form-data">
            @csrf
            <label for="s3">画像ファイル</label>
            <input type="file" name="upload">
            <input type="submit" name="upload" value="upload">
        </form>
    </body>
</html>