@extends('layout.app')

@section('page_name')
Homepage
@endsection

@section('main_content')
<div class="row">
  @forelse($trains as $train)
<div class="card" style="width: 18rem;">
  <img src={{ $train->image }} class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $train->Stazione_di_arrivo }} - {{ $train->Stazione_di_partenza }}</h5>
    <p class="card-text"></p>
    <p class="card-text">{{ $train->Azienda }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@empty
<div class="col-12">
  <h1>🤷‍♂️</h1>
</div>

@endforelse
</div>
@endsection