@extends('layouts.index')
@section('content')
    <section>
        <div class='row'>
            @foreach ($front as $personne)
            @if ($loop->iteration<=3)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src={{$personne['image']}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$personne['nom']}}</h5>
                            <p class="card-text">{{$personne['fonction']}}</p>
                        </div>
                    </div>
                </div>
                @endif
                {{-- {{dd($loop)}} --}}
            @endforeach
        </div>
    </section>
    <section>
        <div class='row'>
            @foreach ($back as $personne)
            @if ($loop->iteration<=3)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src={{$personne['image']}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$personne['nom']}}</h5>
                            <p class="card-text">{{$personne['fonction']}}</p>
                        </div>
                    </div>
                </div>
                @endif
                {{-- {{dd($loop)}} --}}
            @endforeach
        </div>
    </section>
@endsection