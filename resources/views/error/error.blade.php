@if (Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@foreach ($errors->all() as $item)
<p class="alert alert-danger">{{$item}}</p>
@endforeach