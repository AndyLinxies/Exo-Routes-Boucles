@extends('layouts.index')
@section('content')
    <section>
        <div class='row'>
            @foreach ($back as $personne)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src={{$personne['image']}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$personne['nom']}}</h5>
                            <p class="card-text">{{$personne['fonction']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection