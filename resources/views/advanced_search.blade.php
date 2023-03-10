<!--navbar-->
@include('navbar')


<div class="my-form container p-5 my-5 rounded border border-warning">
    <form  method="post" action="{{url('filter/')}}">
        {{csrf_field()}}
        <h2 class="text-center">Advanced Search</h2>
        <hr>

        <div class="form-group">
            <label for="inputSearchProductName">Product Name</label>
            <input type="text" class="form-control" name="name" id="inputSearchProductName" placeholder="espresso">
        </div>

        <div class="form-group">
            <label for="inputSearchProductDescription">Product Description</label>
            <input type="text" class="form-control" name="describtion" id="inputSearchProductDescription" placeholder="coffee">
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputSearchPrice1">Price Between</label>
                <input type="number" class="form-control" name="from" id="inputSearchPrice1" placeholder="" >
            </div>

            <div class="form-group col-md-6">
                <label for="inputSearchPrice2">And</label>
                <input type="number" class="form-control" name="to" id="inputSearchPrice2" placeholder="">
            </div>

        </div>

        <div class="form-group">
            <div class="pretty p-svg p-curve p-jelly">
                <input type="checkbox" id="inputCaseSensitive" />
                <div class="state p-warning">
                    <!-- svg path -->
                    <svg class="svg svg-icon" viewBox="0 0 20 20">
                        <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                    </svg>
                    <label>Case Sensitive</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Search for All</button>
    </form>

</div>

<!--footer-->
@include('footer')