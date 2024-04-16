@extends('layouts.app')

@include('inc.header')

@section('title-block')Мероприятия@endsection


@section('event')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="event-block container ">
        <div class="logo-event">
            <div class="create-event-btn">
                <h1 class="anim_items activee">Мероприятия</h1>
                <h2 class="anim_items ">Актуальные мероприятия</h2>
            </div>
                <a href="{{ route('admin.event.event-create') }}"><img src="{{asset ('img/plus.svg')}}" alt="" style="margin-right: 5px;">Создать Мероприятие</a>
                
            </div>
        <div class="event-items">
        @foreach($event as $item)
            <article>
                <h3>{{$item->header}}</h3>
                @if($item->picture)
                <img src="{{ asset ('storage/' . $item->picture) }}" alt=""> <br>
            @else
            <img src="img/logo_info2.png" alt=""> <br>
            @endif
                
                <a href="{{ route ('info-event' , $item->id) }}">Хочу помочь</a> <br>
                <div><img src="img/location.png" alt=""> <span>{{$item->location}}</span> <br></div>
                <div><img src="img/datev2.png" alt=""> <time>Создано: {{$item->date_start}}</time></div>
            </article>
        @endforeach
            

        </div>
    </div>

    @include('inc.footer')


    @endsection