@extends ('layouts/app')

@section('content')
    <main id="site_main">
        <section class="jumbotron"></section>

        <section class="second-section">
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                    <div class="col-2 comic-cover mt-3">
                        <div class="comics">
                            <img class="img-fluid" src="{{$comic['img']}}" alt="">
                            <h6>{{$comic['series']}}</h6>
                        </div>
                    </div>
                    @endforeach
                 </div>
            </div>
            <div class="button-section container flex justify">
                <button type="submit">LOAD MORE</button>
            </div>
        </section>

        <section class="third-section">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div>
                            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" />
                            <a href="#">digital comics</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="" />
                            <a href="#">dc merchandise</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="" />
                            <a href="#">subscriptions</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="" />
                            <a href="#">comic shop locator</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <img
                            class="h-150"
                            src="{{asset('images/buy-dc-power-visa.svg')}}"
                            alt=""
                            />
                            <a href="#">dc power visa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-section">

        </section>
    </main>    
@endsection