@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid mb-5 parallax">
    <div class="row d-flex justify-content-left">
       <div class="col-md-4 text-center">
           <h1>Software Enginner</h1>
           <h3>Mobile & Web</h3>
           <button class="btn btn-primary">Learn More</button>
       </div>
    </div>
</div>
<div class="container mt-5 text-center">
    <h2>My Services</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div><div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5 text-center">
    <h2>Recent Projects</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>    
            </div>
            </div>
        </div><div class="col-md-4 p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/Pucpc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>    
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5 text-center">
    <h2>Contact With Me</h2> <br><br>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-5">
                    <label for="exampleInputEmail1">Your Mobile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-5">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-5">
                    <label for="exampleInputEmail1">Your Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn mt-5 btn-block btn-primary">Send Now</button>
            </form>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7851486741456!2d90.345991214437!3d23.790663984569616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cb8a002d35%3A0xf36071651f4f6585!2sPrime%20University!5e0!3m2!1sen!2sbd!4v1649199595201!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@endsection