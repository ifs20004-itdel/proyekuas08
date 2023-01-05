@extends('layouts.app')
@section('title','Dashboard')
@section('background', 'bg-slate-700')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/z4r7vtru6vew0oxniuqr3oo11wqtuccnl7ydckcrain1fz2o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link
  href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
  rel="stylesheet"
/>
<link
  href="https://unpkg.com/@yaireo/tagify/dist/tagify.css"
  rel="stylesheet"
  type="text/css"
/>
</head>
<body>
  <div class="w-3/4 mx-auto font-serif">
    <h1 class="pt-10 text-4xl font-bold "> Detail Blog </h1>
    <form class="my-10" action="{{route('store-blog')}}" method="POST">
    @csrf
      <label class="text-xl p-1 tracking-wide" for="title">Judul</label>
      <input class="block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mt-2 mb-10 leading-tight focus:outline-none hover:shadow-md" id="title" name="title" type="text">
      <label class="text-xl p-1 tracking-wide" for="tags">Tags</label>
      <input
        type="text"
        class="w-full px-4 py-2 mt-2 mb-10 text-sm border border-gray-300 rounded leading-tight focus:outline-none hover:shadow-md "
        id="tags"
        name="tags"
        value="Artikel"
        autofocus/>
      <label class="text-xl p-1 tracking-wide" for="konten">Deskripsi</label>
      <textarea id="description" name="description">
      </textarea>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-5 py-2 my-4 rounded-md">Submit</button>
      <a href="/" class="bg-red-500 hover:bg-red-700 text-white px-5 py-3 mx-4 my-4 rounded-md">Cancel</a>
  </form>
  </div>

    {{-- Script for input tags --}}
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script>
      // The DOM element you wish to replace with Tagify
      var input = document.querySelector('input[name=tags]');
      var tagify = new Tagify(input, {
        keepInvalidTags: true,
        whitelist: ['Artikel','Berita', 'Beasiswa', 'Pengumuman'],
        hooks: {
          beforeRemoveTag: (tags) => {
            tags[0].node.classList.add('tagify__tag');

            return new Promise((resolve, reject) => {
              confirm(`Are you sure to delete ${tags[0].data.value} tag ?`)
                ? resolve()
                : reject();
            });
          },
        },
      });
    </script>

    {{-- Script for TinyMCE --}}
  <script>
    tinymce.init({
      selector: 'textarea',
      height : 700,
      plugins: 'anchor autolink charmap codesample emoticons image code link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'insertfile undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],

      automatic_uploads:true,
      images_upload_url: '/upload',
      file_picker_types:'file image media',
      file_picker_callback: 
        function(cb, value, meta){
            var input = document.createElement('input');
            input.setAttribute('type','file');
            input.setAttribute('accept','image/*');
            input.onchange = function(){
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(){
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activateEditor.editorUpload.blobCache;
                    var base64= reader.result.split(',')[1];
                    var blobInfo  = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(),{title:file.name});
                };
            };
            input.click();    
        }
    });
  </script>
</body>
</html>
@endsection