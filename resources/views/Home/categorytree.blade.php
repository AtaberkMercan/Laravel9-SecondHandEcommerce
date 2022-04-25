
@foreach($children as $subcategory)
    <ul class="list-group">
        @if(count($subcategory->children))
            <li style="color:#0a0a0a;font-family:'Arial Black';font-max-size:large;">{{$subcategory->title}}</li>
        <ul class="list-group">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
            <hr>
        @else
            <a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
    @endif
    </ul>
  @endforeach

