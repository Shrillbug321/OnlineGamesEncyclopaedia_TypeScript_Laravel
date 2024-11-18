@extends("layouts.default")
@section("content")
	<form id="editGameForm" enctype="multipart/form-data" action="{{action("App\Http\Controllers\Game@editPost")}}" method="post">
		<label> Nazwa gry <br/> <input type="text" name="title" value="{{$game->title}}"> </label> <br/>
		<img class="cover" src="{{$game->galleryFolder}}/cover.jpg" alt="Okładka gry"> <br/> <input type="file" name="cover"> <br/>
		<label> Opis <br/> <textarea id="editDescription"
									 name="description">{{$game->description}} </textarea> </label> <br/>
		<label> Platformy <br/> <input type="text" name="platforms" value="{{$game->platforms}}">
		</label> <br/>
		<label> Data wydania <br/> <input type="date" name="releasedDate"
										  value="{{$game->releasedDate}}"> </label> <br/>
		<label> Producent <br/> <input type="text" name="producent" value="{{$game->producent}}">
		</label> <br/>
		<label> Wydawca <br/> <input type="text" name="publisher" value="{{$game->publisher}}"> </label>
		<br/>
		<label> Język <br/> <input type="text" name="language" value="{{$game->language}}"> </label>
		<br/>
		<label> Stan <br/> <select name="status">
				<option> Aktywna, rozwijana</option>
				<option> Aktywna, nierozwijana</option>
				<option> Aktywna, nieoficjalne serwery</option>
				<option> Nieaktywna</option>
			</select> </label> <br/>
		<label> Wymagania sprzętowe <br/> <textarea
				name="requirements">{{$game->requirements}}</textarea> </label> <br/>
		<label><input type="text" name="idGame" value="{{$idGame}}" hidden></label>
		<input type="submit" value="Zapisz zmiany">
	</form>
@endsection
