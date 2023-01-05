@extends('layouts.app')
@section('title','Dashboard')
@section('background', 'bg-slate-700')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/z4r7vtru6vew0oxniuqr3oo11wqtuccnl7ydckcrain1fz2o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <div class="w-3/4 mx-auto font-serif">
    <h1 class="pt-10 text-2xl font-bold "> Detail Blog </h1>
    <form class="my-10" action="" method="POST">
      <label class="text-xl p-1 tracking-wide " for="title">Judul</label>
      <input class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mt-2 mb-10 leading-tight focus:outline-none focus:shadow-md" id="title" name="title" type="text">
      <label class="text-xl p-1 tracking-wide" for="konten">Deskripsi</label>
      <textarea>
      </textarea>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-5 py-2 my-4 rounded-md">Submit</button>
      <a href="/" class="bg-red-500 hover:bg-red-700 text-white px-5 py-3 mx-4 my-4 rounded-md">Cancel</a>
  </form>
  </div>

  <script>
    tinymce.init({
      selector: 'textarea',
      height : 700,
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
</body>
</html>
@endsection