@extends('layouts.main')
@section('content')
<h1>COMICS</h1>
<main>


    <div class="container d-flex ">
      <div class="row m-auto justify-content-evenly">
        @include('partials.card')
      </div>
    </div>
      <div class="loadMore d-flex justify-content-center">
        <span>LOAD MORE</span>
        </div>
  </main>




@endsection
