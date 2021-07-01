@extends('layouts.index')
@section('content')
    <section>
        <div class='row'>
            @foreach ($frontends as $element)
            {{-- Chaque boucle crée un objet $loop dont iteration est une propriété qui definit le nombre de tours --}}
            {{-- $loop->iteration veut dire: Dans l'objet $loop on veut acceder à la proprété iteration --}}
            @if ($loop->iteration<=3)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/'.$element->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$element->nom}}</h5>
                            <p class="card-text">{{$element->fonction}}</p>
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
            @foreach ($backends as $element)
            @if ($loop->iteration<=3)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/'.$element->photo)}}"class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$element->nom}}</h5>
                            <p class="card-text">{{$element->fonction}}</p>
                        </div>
                    </div>
                </div>
                @endif
                {{-- {{dd($loop)}} --}}
            @endforeach
        </div>
    </section>
@endsection