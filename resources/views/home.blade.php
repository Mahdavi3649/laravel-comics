@extends ('layouts/app')

@section('content')
    <main id="site_main">
        <section class="jumbotron">
            
        </section>
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
            <div class="button-ssection container flex justify">
                <button type="submit">LOAD MORE</button>
            </div>
        </section>
        <section class="third-section">
            <ul class="flex justify align-items">
                <li>
                    <img src="../img/digital-comics.png" alt="">
                </li>
                <li class="mr2">DIGITAL COMICS</li>
                <li>
                    <img src="../img/merchandise.png" alt=""> 
                </li>
                <li class="mr2">DC MERCHANDISE</li>
                <li>
                    <img src="../img/subscription.png" alt="">
                </li>
                <li class="mr2">SUBSCRIPTION</li>
                <li>
                    <img src="../img/shop.png" alt="">
                </li>
                <li class="mr2">COMIC SHOP LOCATOR</li>
                <li>
                    <img src="../img/power-visa.png" alt="">
                </li>
                <li>DC POWER VISA</li>
            </ul>
        </section>
        <section class="fourth-section">

        </section>
    </main>    
@endsection