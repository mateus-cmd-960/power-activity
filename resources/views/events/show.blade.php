@extends('layouts.main')
@section('title','$event->title')


@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/images/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline">{{$event->city}}</ion-icon></p>
            <p class="event-participants">X participantes</p>
            <p class="event-owner">{{$eventOwner['name']}}</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presenca</a>
            <h3>O evento conta com:</h3>
            <ul>
                @foreach($event->items as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-12">
            <h3 class="description">Sobre o Evento:</h3>
            <p class="event-description">{{$event->title}}</p>
        </div>
    </div>
</div>

@endsection