@extends('layout.layout')

@section('title', 'Games')

@section('nav-links')
  <ul>
    <li><a href="{{ route('characters') }}">Characters</a></li>
    <li><a href="{{ route('comics') }}">Comics</a></li>
    <li><a href="{{ route('movies') }}">Movies</a></li>
    <li><a href="{{ route('tv') }}">Tv</a></li>
    <li><a href="{{ route('games') }}" class="active">Games</a></li>
    <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
    <li><a href="{{ route('videos') }}">Videos</a></li>
    <li><a href="{{ route('fans') }}">Fans</a></li>
    <li><a href="{{ route('news') }}">News</a></li>
    <li><a href="#">Shop</a></li>
  </ul>
@endsection

@section('main-content')
  <div class="bg-dark">
    <div class="container">
      <div class="games">
        <div class="btn-tag">
          <span>GAMES</span>
        </div>
        <div class="current-series">
          <div>
            <h2>Coming Soon</h2>
            <div class="btn">
              <span><a href="#">LOAD MORE</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection