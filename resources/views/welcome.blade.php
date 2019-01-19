@extends('inc.master')

@section('content')
    @include('inc.message')
    <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.html" title="Home"><img height="50px" width="50px" alt="Logo" src="/img/logo.png"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            Netwurk
          </h1>

        <p class="tagline">
          Talk to real people about real stuff!
        </p>
        <a class="btn btn-primary" href="/signup">Get Started Now</a>
      </div>


  </section>
  <!-- /Hero -->



    </div>

@endsection
