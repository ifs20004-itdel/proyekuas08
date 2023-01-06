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
            <form class=" w-2/4 mx-auto my-5 " action="{{route('article',$value->id_article) }}" method="GET">
              <button class="font-bold text-white text-center bg-blue-500 px-2 py-1 hover:bg-blue-700 rounded-md" type="submit">Baca Selengkapnya</button>
            </form>
        </div>
      </div>
    @endforeach
</div>
<div class=" m-auto pb-5">
  {!! $arrayOfArticle->appends(Request::except('page'))->render() !!}
</div>