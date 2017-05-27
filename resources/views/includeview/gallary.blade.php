<div class="carousel slide" id="myCarousel">
 <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item" data-slide-number="0">
            <img src="{{asset('/picture/product/product1/p1.png')}}">
        </div>

        <div class="item" data-slide-number="1">
            <img src="{{asset('/picture/product/product1/p2.png')}}">
        </div>

        <div class="item" data-slide-number="2">
            <img src="{{asset('/picture/product/product1/p3.png')}}">
        </div>

        <div class="item" data-slide-number="3">
            <img src="{{asset('/picture/product/product1/p4.png')}}">
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<ul class="hide-bullets">
    <li class="col-xs-3">
        <a class="thumbnail" id="carousel-selector-0">
            <img src="{{asset('/picture/product/product1/p1.png')}}">
        </a>
    </li>

    <li class="col-xs-3">
        <a class="thumbnail" id="carousel-selector-1">
            <img src="{{asset('/picture/product/product1/p2.png')}}">
        </a>
    </li>

    <li class="col-xs-3">
        <a class="thumbnail" id="carousel-selector-2">
            <img src="{{asset('/picture/product/product1/p3.png')}}">
        </a>
    </li>

    <li class="col-xs-3">
        <a class="thumbnail" id="carousel-selector-3">
            <img src="{{asset('/picture/product/product1/p4.png')}}">
        </a>
    </li>

</ul>