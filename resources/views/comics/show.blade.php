@extends ('layouts/app')

@section('content')

<div class="container mt-5 mb-5">
   <img class="img-fluid"  src="{{$comic['thumb']}}" alt="">

    <div class="row">
        <div class="col-8">
            <h4>{{$comic['title']}}</h4>
            <p>{{$comic['description']}}</p>

            <div class="row bg-gr">
                <div class="col-8 d-flex justify-content-between">
                    <div>
                        <span class="text-us">$U.S. Price:</span> <span class="text-white">{{$comic['price']}}</span>
                    </div>
                    <div class="text-uppercase text-us">
                        Available
                    </div>
                </div>
                <div class="col-4  text-end text-white">
                    Check Availabilty
                </div>
            </div>

        </div>
        <div class="col-4">
            <img class="img-fluid" src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>




@endsection