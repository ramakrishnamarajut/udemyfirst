@if(count($errors)>0)
 @foreach($errors->all() as $error)
 {{ $error }}
 @endforeach
@endif
<form action="{{ route ('admin.login')}}" method="post">
    <input type="text" name="username" id="username" placeholder="username"/><br>
    <input type="password" name="password" id="password" placeholder="password"/><br>
    <button type="submit">Submit</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}"/>
</form>