<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style src='https://cdn.quilljs.com/1.2.2/quill.snow.css'></style>
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.2.2/quill.snow.css">
    <script src="https://cdn.quilljs.com/1.2.2/quill.min.js"></script>
    <script src="https://cdn.rawgit.com/kensnyder/quill-image-resize-module/3411c9a7/image-resize.min.js"></script>
</head>
<body>

    <h1>Quill Image Resize Module - Demo</h1>
    <a href="https://github.com/kensnyder/quill-image-resize-module">Quill ImageResize Module</a>
    <br/><br/>

    <div id="editor" style="max-height:400px;overflow:auto">
        <p>Click on the Image Below to resize</p>
        <p><img src="https://source.unsplash.com/random/200x200"></p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><img src="https://source.unsplash.com/random/400x400"></p>
    </div>
    <p>Also see <a href="https://github.com/kensnyder/quill-image-drop-module">quill-image-drop-module</a>,
        a module that enables copy-paste and drag/drop for Quill.</p>



        <script>
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    imageResize: {
                    displaySize: true
                    },
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    //  ['link', 'image'],

                    ['clean']
                ]
                }
            });
        </script>
</body>
</html>
