@extends('plantilla')

@section('contenido')

<h1 class="mt-4 text-center" style="color:black"> Macuin Dashboard </h1>

<div class="container mt-4 col-md-9">
  
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-left: 14%">

    <div class="carousel-inner">

      <div class="carousel-item active" data-bs-interval="100">
        <img src="\ima\La.png" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item" data-bs-interval="200">
        <img src="\ima\com.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item" data-bs-interval="200">
        <img src="\ima\conv.jpg" class="d-block w-100" alt="...">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>


@stop