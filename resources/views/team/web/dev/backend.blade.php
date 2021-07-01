@extends('layouts.index')
@section('content')
    <section>
        <div class='row'>
            @foreach ($backends as $element)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        {{-- Avoir accès à Chaque propriété photo des objets du tableau backends--}}
                        <img src="{{asset('img/'.$element->photo)}}"class="card-img-top" alt="...">
                        <div class="card-body">
                            {{-- Avoir accès à Chaque propriété nom des objets du tableau backends--}}
                            <h5 class="card-title">{{$element->nom}}</h5>
                            {{-- Avoir accès à Chaque propriété fonction des objets du tableau backends--}}
                            <p class="card-text">{{$element->fonction}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection