@extends('layouts.index')
@section('content')
    <section>
        <div class='row'>
            @foreach ($frontends as $element)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                    {{-- Avoir accès à Chaque propriété photo des objets du tableau frontends--}}
                        <img src="{{asset('img/'.$element->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$element->nom}}</h5>
                            <p class="card-text">{{$element->fonction}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
