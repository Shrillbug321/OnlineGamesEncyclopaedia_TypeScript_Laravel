{{-- !not completed! --}}
@extends("layouts.default")
@section("content")
	<div id="game">
		<img class="cover" src="{{asset("media/games")}}/{{$idGame}}/img/cover.jpg" alt="Okładka gry {{$game->title}}">
		<div id="info">
			<p class="gameTitle">{{$game->title}}</p>
			<a href="/game/{{$idGame}}/edit"> <img class="icon" src="{{asset("media/")}}pencil.png" alt="Edytuj grę"> </a>
			@if (isset ($_SESSION['admin']))
				<div id="adminMenu">
					<a href="/game/{{$idGame}}/edit"> <img class="icon" src="{{asset("media/")}}pencil.png" alt="Edytuj grę"> </a>
					<a href="add-image-form.php?idGame={{$idGame}}"> <img class="icon" src="{{asset("media/")}}image.png" alt="Oglądaj obrazki"> </a>
					<a href="add-movie-form.php?idGame={{$idGame}}"> <img class="icon" src="{{asset("media/")}}movie.png" alt="Oglądaj filmy"> </a>
				</div>
			@endif
			<ul id="submenu">
				<li><a href="gallery.php?idGame={{$idGame}}"> Galeria </a></li>
				<li><a href="movies.php?idGame={{$idGame}}"> Filmy </a></li>
			</ul>
			<p class="data"> Platformy: {{$game->platforms}}</p>
			<p class="data"> Data wydania: {{$game->releasedDate}}</p>
			<p class="data"> Producent: {{$game->producent}}</p>
			<p class="data"> Wydawca: {{$game->publisher}}</p>
			<p class="data"> Język: {{$game->language}}</p>
			<p class="data"> Stan: {!! $circleColor !!} {{$game->status}}</p>
		</div>
		<div style="clear:both;">
		</div>
		<p class="description"> Opis </p>
		<p class="data">{{$game->description}}</p>
		<p class="description"> Wymagania sprzętowe </p>
		<p class="data">{{$game->requirements}}</p>
	</div>
	<div id="gameNews">
		@foreach($newses as $news)
			<a href="news.php?id={{$news->id}}">{{$news->title}}</a> <br/>
		@endforeach
	</div>
	<div style="clear: both;"></div>
@endsection
