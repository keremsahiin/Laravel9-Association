@foreach($children as $submenus)
    <ul class="list-links">
        @if(count($submenus->children))
            <li style="color: #1D00AF;font-family: 'Arial Black'"> {{$submenus->title}}</li>
            <ul class="list-links">
                @include('home.menutree',['children' => $submenus->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('menucontents',['id'=>$submenus->id , 'slug'=>$submenus->title])}}">{{$submenus->title}}</a></li>
        @endif
    </ul>
@endforeach
