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
            @if($item->picture)
                <div class="logo-event-block">
                    <img class="logo-event-img" src="{{ asset ('storage/' . $item->picture) }}" alt=""> <br>
                </div>
            @else
            <div class="logo-event-block">
                <img class="logo-event-img" src="img/logo_info2.png" alt=""> <br>
            </div>
            @endif
            
                <h3>{{$item->header}}</h3>

                <div class="icon-event">
                    <div><img src="img/location.svg" alt=""> {{$item->location}} </div>

                    <div><img src="img/date.svg" alt=""> <time>Создано: {{$item->created_at->format('d.m.y')}}</time></div>
                </div>
                
                
                <a href="{{ route ('info-event' , $item->id) }}">Хочу помочь</a> <br>
                
            </article>
        @endforeach
            

        </div>
    </div>

    @include('inc.footer')


    @endsection