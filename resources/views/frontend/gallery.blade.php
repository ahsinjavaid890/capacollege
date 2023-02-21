@extends('frontend.layout')
@section('title','Gallery')
@section('content')
<style type="text/css">
    .gallaerysection {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 45em) {
        .gallaerysection {
            flex-wrap: nowrap;
        }
    }
    @media only screen and (min-width: 275px) and (max-width: 767px){
        .gallery_section ul.tabs{
            width: 100% !important;
        }
        .gallery_section ul.tabs li{
            width: 40% !important;
            font-size: 13px;
        }
    }
    @media only screen and (max-width: 290px){
        .gallery_section ul.tabs li{
            width: 40% !important;
            font-size: 10px !important;
            margin-right: 23px !important;
        }
    }
    

    .cardgallaery {
        position: relative;
        width: 250px;
        height: 250px;
        margin: 10px;
        background: #CCC;
        transform: rotateX(0) rotateY(0);
        transform-style: preserve-3d;
        transition-duration: 0.1s;
        transition-timing-function: ease !important;
        backface-visibility: hidden;
        will-change: tranform;
    }

    .card__overlay {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(http://alexandrebuffet.fr/codepen/parallax-cards/blur-overlay.jpg) no-repeat center center;
        background-size: cover;
        mix-blend-mode: lighten;
        opacity: 0.5;
    }

    .card__image img {
        max-width: 100%;
        width: 250px;
        height: 250px;
        mix-blend-mode: lighten;
    }

    .gallery_section ul.tabs{
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            width: 35%;
            margin: auto;
        }
    .gallery_section ul.tabs li{
            margin-right: 26px;
            font-weight: bold;
            padding-top: 17px;
            text-align: center;
            cursor: pointer;
            background: #6c4646;
            color: #fff;
            border-radius: 30px;
            height: 61px;
            width: 44%;
        }

    .gallery_section ul.tabs li.current{
            background: #64317c;
            color: white;
        }

    .gallery_section .tab-content{
            display: none;
            width: 100%;
            height: auto;
/*            margin-top: -3px;*/
            background: #fff;
            color: #000;
            border-radius: 30px;
            z-index: 1000;
/*            box-shadow: 0px 10px 10px rgb(0 0 0 / 40%);*/
            padding: 30px;
            margin-bottom: 50px;
        }

    .gallery_section .tab-content.current{
            display: inherit;
        }
</style>
<section class="">
    <div class="bg-dark-alt position-relative">
        <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto text-center mt-4">
                        <h2 class="text-white">
                            Gallery
                        </h2>
                    <p class="text-muted">
                       Gallery
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 gallery_section">
    <div class="container">
            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Academic Moment</li>
                <li class="tab-link" data-tab="tab-2">Fun Moments </li>
            </ul>
            <div id="tab-1" class="tab-content current">
               <div class="gallaerysection">
                    @foreach($data as $r)
                    <div id="card-1" class="cardgallaery rounded">
                        <div class="card__overlay">
                        </div>
                        <a href="{{ url('public/images') }}/{{ $r->image }}" class="card__image gallaery">
                            <img src="{{ url('public/images') }}/{{ $r->image }}" alt="" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div class="gallaerysection">
                    @foreach($data as $r)
                    <div id="card-1" class="cardgallaery rounded">
                        <div class="card__overlay">
                        </div>
                        <a href="{{ url('public/images') }}/{{ $r->image }}" class="card__image gallaery">
                            <img src="{{ url('public/images') }}/{{ $r->image }}" alt="" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

    </div>
</section>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $(document).ready(function() {

    $('.gallaery').fancybox({
      buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "share",
        "close"
      ],
      loop: false,
      protect: true
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
    
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

})
</script>
@endsection