@extends('layouts.app')
@section('content')
    <div class="card mt-4">
        <div class="card-title ml-4 mt-5"><h1>My Contact Form</h1>
            <p><b>Please fill and submit the below form for detailed information about Car Model</b></p></div>
        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><b>
                                <label for="Email_Id">Email</label>
                                <input name="Email" type="email" class="form-control" id="Email" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><b>
                                <label for="Model name">Model Name</label>
                                <input name="model" type="text" class="form-control" id="model">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="year">Model Buying Date</label>
                        <input name="year" type="date" class="form-control" id="year">
                    </div>
                </div>
                </div>
                </b>
                <div class="form-group"><b>
                        <label for="message">Queries</label>
                        <textarea type="Message" name="Message" class="form-control" id="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </b>
            </form>
        </div>
    </div>
@endsection