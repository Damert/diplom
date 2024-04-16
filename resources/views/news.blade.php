


@extends('layouts.app')

@include('inc.header')

@section('title-block')Новости@endsection


@section('news')
@csrf
    <div class="container news news_main">
        <div class="big-logo">
            <div class="text-logo-main">
            <h1 class='anim_items'><span class="color">Все</span> новости</h1> 
            <h2 class="anim_items color2">Последние новости о нас</h2>
        </div>
            <div class="news-added">
                <a href="{{ route('admin.news.news-create') }}"><img src="{{asset ('img/plus.svg')}}" alt="" style="margin-right: 5px;">Добавить новость</a>
            </div>
        </div>
        
        
        <div class="news_blocks">
           
        @foreach($news as $item)
        <article class="new_block">
                <h3>{{ $item->header }}</h3>
                
                    <img class="logo-news" src="{{ asset ('storage/' . $item->picture) }}" alt="Картинка новости"><br>
                
                <div class="news-feature">
                    <div>
                        <img src="img/datev2.png" alt=""><time>{{ $item->created_at->format('d.m.y') }}</time>
                    </div>
                    <div>
                        <img src="img/ion_people-sharp.svg" alt=""><time>Участвовали: {{ $item->members }}</time>
                    </div>
                    <a href="{{ route ('new' , $item->id) }}">Подробнее</a>
                    
                </div>
            </article>
        @endforeach
          
            
        </div>
        <ul class="list_news">
            <li class="li_news"><a href="" class="not">&#8592</a></li>
            <li class="li_news"><a href="">1</a></li>
            <li class="li_news"><a href="">2</a></li>
            <li class="li_news"><a href="">3</a></li>
            <li class="li_news"><a href="" class="not">&#8594</a></li>
        </ul>
    </div>

    @include('inc.footer')
   

@endsection

