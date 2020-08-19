<!DOCTYPE html>
    <body>
        <h1>S3アップロード</h1>
        <form method="post" action="/s3/upload" enctype="multipart/form-data">
            @csrf
            <label for="s3">画像ファイル</label>
            <input type="file" name="upload">
            <input type="submit" name="upload" value="upload">
        </form>
        @if (isset($files))
            <h1>S3一覧取得</h1>
            <table>
                <thead>
                    <td>Key</td>
                    <td>Displayname</td>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file['Key'] }}</td>
                            <td>{{ $file['Owner']['DisplayName'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </body>
</html>