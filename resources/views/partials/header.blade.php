

<header>
    <div class="container d-flex justify-content-between align-items-center h-100">

    <div class="logo">
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
    </div>
    <nav>
      <ul>
        <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a></li>

        <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a></li>

        <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a></li>

        <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a></li>

        <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a></li>

        <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a></li>

        <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">VIDEOS</a></li>

        <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a></li>

        <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a></li>

        <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a></li>
      </ul>
    </nav>
    </div>
</header>

<style lang="scss" scoped>
header{
  height: 120px;
  background-color: white;
}
img{
  width: 80px;
}
nav{
  height: 100%;
}
ul{
  display: flex;
  align-items: center;
  // flex-wrap: wrap;
  height: 100%;
}
li{
  list-style-type: none;
  padding: 0px 10px;
  width: 100%;
  height: 100%;
}
a{
  display: flex;
  align-items: center;
  height: 100%;
  text-decoration: none;
  color: #464646;
  &:hover,
}
.active{
  color: #2b82f9;
  border-bottom: 3px solid #2b82f9;}
</style>
