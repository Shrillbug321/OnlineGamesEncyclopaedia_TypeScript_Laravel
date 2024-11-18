@extends("layouts.default")
@section("content")
    <article>
        <div id="content">
            <div id="games">
                <p class="title"> Ostatnio dodane gry </p>

                @foreach ($games as $row)
                    <a class="smallCoverDiv" href="game/{{$row->id}}">
                        <img class="smallCover" src="{{$row->galleryFolder}}cover.jpg" alt="Okładka {{$row->title}}"> <br/>
                        <p class="title"> {{$row->title}} </p></a>
                @endforeach
                <div style="clear: both;"></div>
            </div>
            <div id="lastNews">
                <p class="title"> Ostatnio dodane wiadomości </p>

                @foreach ($news as $row)
                    <a class="smallCoverDiv" href="news/{{$row->id}}">
                        <img class="smallCover" src="{{$row->galleryFolder}}cover.jpg" alt="Okładka gry dotyczącej {{$row->title}}"> <br/>
                        <p class="title"> {{$row->title}} </p></a>
                @endforeach
                <div style="clear: both;"></div>
            </div>
        </div>
    </article>
@endsection
