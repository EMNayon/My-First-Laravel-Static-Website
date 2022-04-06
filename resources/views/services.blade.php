@extends('layout.app')
@section('title','Service')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">My Services</h4>
        </div>
    </div>
</div>

<div class="container mt-5">
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
        </div>
        <div class="col-md-4 p-2">
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

<div class="container mt-5 mb-5">
    <h2 class="text-center">Contact Me</h2><br><br>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Mobile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-block btn-primary">Send Now</button>
            </form>
        </div>
        <div class="col-md-6">
            <h5>Address</h5>
            <p>Bordhonbari, Mirpur-1, Dhaka-1416</p>
            <p>01884735576</p>
            <p>emnayonpu@gmail.com</p>
        </div>
    </div>
</div>


@endsection