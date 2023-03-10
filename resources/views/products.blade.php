<!--navbar-->
@include('navbar')


<div class="my-form container p-5 my-5 rounded border border-warning">
    <form>
        <h2 class="text-center">All Products</h2>
        <hr>

        <section>
       
            <div class="container-fluid">
               
                <div class="row p-5">

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


    </form>

</div>

<!--footer-->
@include('footer')
