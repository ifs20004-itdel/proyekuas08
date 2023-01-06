<div class="flex pr-5">
    @foreach($arrayOfArticle as $key => $value)
      @php
        $img = "imgArt";
      @endphp
      <div class="w-1/2 mx-1 shadow hover:shadow-xl bg-white">
        <div class="grid grid-cols-1 divide-y">
          <div class="bg-blue-300 px-3 py-2">
            <img src="{{$value->thumbnail}}" alt="{{$img.=$value->id_article}}" height="300">
            <div class="font-bold pt-2">
              <a href="">
                <h6>{{$value->title}}</h6>
              </a>
            </div> 
          </div>
          <div class="px-3 mx-1">
            <p class="py-2">{{limit_text($value->caption,12)}}</p>
            <p class="text-sm font-serif ">{{$value->created_at}}</p>
          </div>
            <form class=" w-full mx-2 my-5 " action="{{route('article',$value->id_article) }}" method="GET">
              <button class=" inline-flex items-center font-bold text-white text-center bg-blue-500 px-5 py-1 hover:bg-blue-700 rounded-md" type="submit">
                Baca Selengkapnya
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
              </button>
            </form>
        </div>
      </div>
    @endforeach
</div>
<div class=" m-auto pb-5">
  {!! $arrayOfArticle->appends(Request::except('page'))->render() !!}
</div>