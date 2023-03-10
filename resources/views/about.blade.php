<!--navbar-->
@include('navbar')


<div class="my-content container p-5 my-5 rounded border border-warning">
    <h1 class="text-center">
        <svg class="bi bi-info-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
            <circle cx="8" cy="4.5" r="1"/>
        </svg>
        About My Coffee Company
        <div class="d-inline-block">
            <img src="<?php echo asset ('img/coffee2.svg')?>" class="m-100" alt="">
        </div>
    </h1>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">My Coffee company is a pioneer in the field of coffee for more than 50 years</p>
        <img src="<?php echo asset ('img/coffee3.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">My Coffee Owns coffee plantations in many countries for the most common types of coffee</p>
        <img src="<?php echo asset ('img/farm.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">My Coffee is one of the largest coffee suppliers in the world</p>
        <img src="<?php echo asset ('img/supply.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">My Coffee Company factories fill coffee to international standards</p>
        <img src="<?php echo asset ('img/factory.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">Quality of products is much more important to My Coffee company</p>
        <img src="<?php echo asset ('img/quality.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">We offer you rare types of exquisite international coffee</p>
        <img src="<?php echo asset ('img/coffee4.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">The company's workers are experts and have high efficiency</p>
        <img src="<?php echo asset ('img/employee.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
    <div class="clearfix row">
        <p class="col-10 lead">My Coffee company have fast drinks stores everywhere</p>
        <img src="<?php echo asset ('img/coffee5.svg')?>" class="col-2 float-right about-img rounded-circle" alt="">
    </div>
    <hr>
</div>

<!--footer-->
@include('footer')
