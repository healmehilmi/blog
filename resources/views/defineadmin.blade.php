@extends('layouts.admin')

@section('content')

<div class="container" style="margin-top: 150px;">
   
       
     
   


    <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Restaurants
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Restaurant-list</a>
              <a class="dropdown-item" href="#">Restaurant-add</a>
              <a class="dropdown-item" href="{{ url('/restaurantedit') }}">Restaurant-edit</a>
              <a class="dropdown-item" href="#">Restaurant-delete</a>

            </div>
          </div>
          <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">User-list</a>
                  <a class="dropdown-item" href="#">User-add</a>
                  <a class="dropdown-item" href="#">User-edit</a>
                  <a class="dropdown-item" href="#">User-delete</a>
    
                </div>
              </div>
   
              <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manegers
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Maneger-list</a>
                      <a class="dropdown-item" href="#">Maneger-add</a>
                      <a class="dropdown-item" href="#">Maneger-edit</a>
                      <a class="dropdown-item" href="#">Maneger-delete</a>
        
                    </div>
                  </div>
                  <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bills
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Open-bills</a>
                          <a class="dropdown-item" href="#">Paid-bills</a>
                          
            
                        </div>
                      </div>


</div>
@endsection
