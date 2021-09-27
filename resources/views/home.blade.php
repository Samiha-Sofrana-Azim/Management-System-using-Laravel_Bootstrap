
@extends('layouts.app')
@include("navbar")

@section('content')
<link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Details</h1></div>
                
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Want to logout? -->
                  
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <h3 class="card-title">Info Desk</h3>
       
<table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Department</th>
                <th scope="col">Number of Seats</th>
                <th scope="col">Minimum GPA</th>
            </tr>
            </thead>
            <tr>
    <td><a href="https://en.wikipedia.org/wiki/Computer_science_and_engineering#:~:text=Computer%20Science%20%26%20Engineering%20(CSE),of%20engineering%20informatics%20academic%20programs.">CSE</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Computer_science_and_engineering#:~:text=Computer%20Science%20%26%20Engineering%20(CSE),of%20engineering%20informatics%20academic%20programs.">EEE</a></td>
    <td>40</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Bachelor_of_Business_Administration#:~:text=The%20Bachelor%20of%20Business%20Administration,more%20areas%20of%20business%20concentrations.">BBA</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Electronic_engineering#:~:text=Electronic%20engineering%20(also%20called%20electronics,devices%2C%20integrated%20circuits%20and%20their">ECE</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="http://uoda.edu.bd/electronic-telecommunication-engineering/electronic-telecommunication-engineering-ete">ETE</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://arts-sciences.buffalo.edu/economics/about/what-is-economics.html#:~:text=Economics%20is%20the%20study%20of,of%20vital%20concern%20to%20society.">Economics</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Industrial_and_production_engineering">IPE</a></td>
    <td>40</td>
    <td>4.0</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Computer_science_and_engineering#:~:text=Computer%20Science%20%26%20Engineering%20(CSE),of%20engineering%20informatics%20academic%20programs.">CS</a></td>
    <td>50</td>
    <td>4.0</td>
  </tr>
</table>
@endsection
