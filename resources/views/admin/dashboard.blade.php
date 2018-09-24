@if(Auth::check())
<div>
    <a href="{{ route('admin.logout')}}">Logout</a>
</div>
@endif
<ul>
    @foreach($authors as $author)
    <li>{{$author['name']}} ({{$author['password']}})</li>
    @endforeach
</ul>