<header>
    <div class="logo">
        <h1><a href="/"> Encyklopedia gier sieciowych </a></h1>
    </div>
</header>
<div id="login">
    @if (isset($_SESSION['wrongLoginAttempt']))
        <div id="wrongLogin">
            <div> Niepoprawne dane logowania <br/>
                <button> Rozumiem</button>
            </div>
        </div>
        @php
            unset($_SESSION['wrongLoginAttempt'])
        @endphp
    @endif
    @if (!isset($_SESSION['user']))
        <button class="account" id="loginBtn"> Zaloguj się</button>
    @else
        <button class="account" id="profileBtn">'.$_SESSION['user'].'</button>
    @endif
</div>
@if (isset ($_SESSION['admin']) )
    <div id="adminPanel"><a href="addGameForm.php"> Dodaj grę </a>
        <a href="addNewsForm.php"> Dodaj wiadomość </a></div>
@endif
<div id="links">
    @php
        use Illuminate\Support\Facades\DB;
		$categories = DB::select("SELECT id, category FROM categoryTable");
    @endphp
    <ul>
        <li class="category"><a href="newsCentre.php"> Wiadomości </a></li>
        @foreach($categories as $row)
            <li class="category" data-id="{{$row->id}}">
                <a href="category.php?id={{$row->id}}"> {{$row->category}} </a>
                @php
                    $subcategories = DB::select("SELECT id, subcategory FROM subcategories WHERE idCategory=?", [$row->id])
                @endphp
                <ul>
                    @foreach($subcategories as $subrow)
                        <li class="subcategory" data-id="{{$row->id}}" data-sub="{{$subrow->id}}">
                            <a href="category.php?id={{$row->id}}&sub={{$subrow->id}}">{{$subrow->subcategory}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        <form id="searchForm" action="searchResult.php" method="post">
            <input id="search" type="text" name="search"> <img id="lupa" src="../media/lupa.png">
        </form>
    </ul>
</div>
