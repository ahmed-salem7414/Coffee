<!--navbar-->
@include('navbar')

<div class="container-fluid">

    <!--jumbotron 1-->
    <section>
        <div class="jumbotron jumbotron-fluid p-3 m-0 text-center" >
            <div class="d-inline-block align-top" >
                <h1 class="display-4">My Coffee</h1>
                <p class="lead" >
                    Coffee world in your hands.
                </p>
            </div>
            <div class="d-inline-block">
                <img src="<?php echo asset ('img/coffee.svg')?>" class="mycoffee-svg" alt="">
            </div>
        </div>
    </section>

    <!--carousel-->
    <section>
        <div id="carouselMyCoffee" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-interval="1500">
                    <img src="<?php echo asset ('img/img1.jpg')?>" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="1500">
                    <img src="<?php echo asset ('img/img2.jpg')?>" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="1500">
                    <img src="<?php echo asset ('img/img3.jpg')?>" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="1500">
                    <img src="<?php echo asset ('img/img4.jpg')?>" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="1500">
                    <img src="<?php echo asset ('img/img5.jpg')?>" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>
    </section>

    <!--jumbotron 2-->
    <section>
        <div class="jumbotron rounded-bottom">
            <h1 class="display-4">Coffee is my world</h1>
            <p class="lead">Many good health reasons to drink coffee.</p>
            <hr class="my-4">
            <p>Caffeine stimulates your nervous system, signaling fat cells to break down body fat.</p>
            <p>Coffee appears to be protective against two types of cancer: liver and colorectal cancer.</p>
            <a class="btn btn-warning btn-lg" href="#" role="button">Learn more</a>
        </div>
    </section>

    <hr>

    <!--new product-->
    <section>
       
            <div class="container-fluid">
               
                <div class="row p-5" style="padding-left: 17% !important;">

                    <?php 
                    if($products) {
                    foreach($products as $product) { ?>
                    <div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="<?php echo asset ('img/'.$product->image)?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">{{substr($product->describtion, 0, 50)}}.....</p>
                                <a href="{{ url('product_detail/'.$product->id) }}" class="btn btn-warning">Show Details</a>
                            </div>
                        </div>

                    </div>
                    <?php  } } ?>
                </div>
             
            </div>
       
       
    </section>

    <!--jumbotron 2-->
    <section>
        <div class="jumbotron">
            <p class="h1">
                <svg class="bi bi-info-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 108 0a8 8 0 000 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>
                An additional note
            </p>
            <p class="lead">
                <svg class="bi bi-bookmark-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.5 2a.5.5 0 00-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 011 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 014.5 1h4a.5.5 0 010 1h-4zm9-1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
                </svg>
                When people think of coffee, they usually think of its ability to provide an energy boost. However, according to some research, it can also offer some other important health benefits, such as a lower risk of liver cancer, type 2 diabetes, and heart failure.
            </p>
        </div>
    </section>

</div>

<!--footer-->
@include('footer')
