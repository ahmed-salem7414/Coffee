<!--navbar-->
@include('navbar')


<div class="my-form container p-5 my-5 rounded border border-warning">
    <form method="post" action="{{url('profile/')}}">
        {{csrf_field()}}
        <h2 class="text-center">Profile</h2>
        <hr>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">State</label>
                <input type="text" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" placeholder="11111" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" readonly class="form-control-plaintext border border-warning rounded" id="inputEmail" placeholder="name@example.com" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputUsername">Username</label>
                <input type="text" readonly class="form-control-plaintext border border-warning rounded" id="inputUsername" placeholder="ahmed" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" required>
            </div>
        </div>

        <button type="submit" class="btn btn-warning">Save Changes</button>
    </form>


</div>


<!--footer-->
@include('footer')
