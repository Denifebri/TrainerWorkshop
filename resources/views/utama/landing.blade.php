@extends('utama.index')

@section('title', 'Halaman Utama')

@section('content')
<div class="container mt-4">
<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <i style="font-size:150px" class="fa fa-institution text-center"></i>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 ml-4">
    <div class="card" style="width: 18rem;">
      <i style="font-size:150px" class="fa text-center">&#xf2c2;</i>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 ml-3">
      <div class="card" style="width: 18rem;">
        <i style="font-size:150px" class="fa text-center">&#xf2b5;</i>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>
@endsection
