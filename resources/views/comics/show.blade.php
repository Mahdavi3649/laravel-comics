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
        <div class="col-4 mb-3">
            <img class="img-fluid" width="80%" src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>

    
</div>
<section class="info bg-gray">
    <div class="container">
    <div class="row  pt-3 mt-3">
        <div class="col-6">
            <h5>Talent</h5> 
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>Art by:</h6>
                </div>
                <div class="col-8">
                    <div class="values">
                         @foreach($comic['artists'] as $index => $artist)
                            <span class="color_blue">{{$artist}},</span>
                         @endforeach
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>Writen by:</h6>
                </div>
                <div class="col-8">
                    <div class="values">
                       @foreach($comic['writers'] as $writer)
                         <span class="color_blue">{{$writer}},</span>
                       @endforeach
                    </div>
                </div>
            </div>


        </div>
        <div class="col-6">
          <h5>Specs</h5> 
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>Series:</h6>
                </div>
                <div class="col-8">
                    <h6>{{$comic['series']}}</h6>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>$U.S. Price:</h6>
                </div>
                <div class="col-8">
                    <h6>{{$comic['price']}}</h6>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>On Sale Date:</h6>
                </div>
                <div class="col-8">
                    <h6>{{$comic['sale_date']}}</h6>
                </div>
            </div>
            <hr>

            

        </div>
    </div>
    </div>
</section>




@endsection