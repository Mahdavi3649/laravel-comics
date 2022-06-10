@extends ('layouts/app')

@section('content')

        <div class="comics">
            <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
            <h6>{{$comic['series']}}</h6>
        </div>




@endsection