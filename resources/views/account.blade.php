@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row pt-4">
        <div class="col-3 d-flex flex-column align-items-start list-menu">
            <div class="d-flex flex-row justify-content-center align-items-center mb-5">            
                <i class="fab fa-twitter fa-4x pr-3"></i>
                <h5 class="m-0 font-weight-bold text-info">Twittstart</h5>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mb-5 list-menu-items">
                <a href="" class="btn btn-light mr-4 py-2 rounded d-flex align-items-center" role="button">
                    <i class="fas fa-hashtag fa-2x pr-3"></i>
                    <h5 class="m-0 font-weight-bold">Follower</h5>
                </a>      
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mb-5 list-menu-items">
                <a href="" class="btn btn-light mr-4 py-2 rounded d-flex align-items-center" role="button">
                    <i class="far fa-bookmark fa-2x pr-3"></i>
                    <h5 class="m-0 font-weight-bold">Follow</h5>
                </a>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mb-5 list-menu-items">    
                <a href="{{ route('profil') }}" class="btn btn-light mr-4 py-2 rounded d-flex align-items-center" role="button">
                    <i class="fas fa-user-edit fa-2x pr-3"></i>
                    <h5 class="m-0 font-weight-bold">Modifier</h5>
                </a>
 
            </div>
        </div>
        <div class="col-6 content-timeline px-0">
            <div class="content-timeline-title">
                <h4 class="font-weight-bold ml-2">Profil page</h4>
            </div>
            <div class="d-flex flex-column justify-content-center mt-4">
                @foreach ($tweets as $tweet)
                    <div class="card mb-3 mx-3">
                        <div class="card-body d-flex flex-column">
                            <p class="my-0 font-weight-bold">{{$tweet->user->name}}</p>
                            <p class="my-0">{{$tweet->content}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center">
            <div class="mb-5" aria-labelledby="navbarDropdown">
                <a class="btn btn-dark mr-3" href="{{ route('posts') }}">Go back home</a>
                <a class="btn btn-info rounded text-light ml-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Log out') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @foreach ($users as $user)
                <div class="d-flex flex-row align-items-center mb-4 width-user-right">
                    <a href="/usersProfil/{{$user->id}}" class="d-flex flex-row align-items-center pr-4 border-user-right">
                        <img src="{{asset('img/usertwitter.jpg')}}" alt="" class="last-user-image mr-2 ml-1 my-1">
                        <h5 class="mb-0">{{$user->name}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection