<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Classic editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
</head>
<body>
    <h1>Classic editor</h1>
    <form action="/post" method="post">
        {{ csrf_field() }}
        <select id="post_kelas">
            <option disabled selected value> -- Pilih Kelas -- </option>
            @foreach($kelas as $row)
                <option value="{{ $row->id }}">{{ $row->nama }}</option>
            @endforeach
        </select>
        <select id="post_sub_kelas" name="sub_kelas_id">
            <option disabled selected value> -- Pilih Sub Kelas -- </option>
        </select>
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <button type="submit">Submit</button>
    </form>
    <script src="/js/jquery-akame.min.js"></script>
    <script src="/custom.js"></script>
    <script type="text/javascript">
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
</body>
</html>