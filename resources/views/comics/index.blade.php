@extends ('layouts/app')

@section('content')
    <main id="site_main">
        <section class="jumbotron"></section>

        <section class="second-section">
            <div>
               <button class="series_btn"><h6>Current Series</h6></button>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($comics as $index => $comic)
                    <div class="col-2 comic-cover mt-1">
                        <a href="{{Route('single-comic', $index)}}">
                            <div class="comics">
                                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                                <h6>{{$comic['series']}}</h6>
                            </div>  
                        </a>
                    </div>
                    @endforeach
                 </div>

               <div>
                  <button class="load_btn"><h6>Load More</h6></button>
               </div>
            </div>
            
        </section>

        <section class="third-section">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div>
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
                            <span>digital comics</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
                            <span>dc merchandise</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
                            <span>subscriptions</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
                            <span>comic shop locator</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img
                            class="h-150"
                            src="{{asset('img/buy-dc-power-visa.svg')}}"
                            alt=""
                            />
                            <span>dc power visa</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-section">

        </section>
    </main>    
@endsection