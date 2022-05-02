@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/doctors.jpg" class="img-fluid" style="border:1px solid #CD853F;">
        </div>
        <div class="col-md-6">
            <h2>find a doctor</h2>
            <p> search for expert doctor. make your  own schedule.
                Here you can find all types of doctors And enjoy quality services  </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection
