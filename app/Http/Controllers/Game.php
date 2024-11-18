<?php

	namespace App\Http\Controllers;

	use Illuminate\Foundation\Http\FormRequest;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class Game extends \Illuminate\Routing\Controller
	{
		public function details(string $idGame)
		{
			$sql = "SELECT id, title, description, platforms, releasedDate, producent, publisher, language, status, requirements FROM games WHERE id=$idGame";
			$game = DB::selectOne($sql);
			$newses = DB::select("SELECT id, title FROM news WHERE idGame=$idGame");
			return view("pages/game/game", ["game" => $game, "idGame" => $idGame, "circleColor" => $this->circleColor($game->status), "newses" => $newses]);
		}

		public function edit($idGame)
		{
			$game = DB::selectOne("SELECT * FROM games WHERE id={$idGame}");
			//echo $game;
			//return view("pages/game/editForm", ["game" => $game, "idGame" => $idGame]);
		}

		public function editPost()
		{
			echo 'b';
			//echo $request->get("idGame");
			/*session_start();
			header('Location: ../game.php?idGame='.$_POST['idGame']);
			require_once("../databaseConnection.php");
			$date = $_POST['releasedDate'];
			$dateFormatted = substr($date, 8, 2).'-'
				.substr($date, 5, 2).'-'.substr($date, 0, 4);
			$sql = 'UPDATE games SET title="'.$_POST['title']
				.'", description="'.$_POST['description']
				.'", platforms="'.$_POST['platforms']
				.'", releasedDate="'.$dateFormatted
				.'", producent="'.$_POST['producent']
				.'", publisher="'.$_POST['publisher']
				.'", language="'.$_POST['language']
				.'", status="'.$_POST['status']
				.'", requirements="'.$_POST['requirements']
				.'" WHERE id='.$_POST['idGame'];
			$connection->query($sql);
			if (isset($_FILES['cover']))
			{
				$directory = '../../media/games/'.$_POST['idGame'].'/img/';
				$directoryUpload = '../media/games/'.$_POST['idGame'].'/img/cover.jpg';
				$fileName = $directory.basename($_FILES['cover']['name']);
				move_uploaded_file($_FILES['cover']['tmp_name'], $fileName);
				rename($fileName, $directory.'/cover.jpg');
			}
			return view("/");*/
			//return view("pages/game/editForm");
		}

		public function circleColor($status)
		{
			return match ($status) {
				'Aktywna, rozwijana' => '<span style="font-size: 22px; color: #63e600;"> &#9679;</span>',
				'Nieaktywna' => '<span style="font-size: 22px; color: red;"> &#9679;</span>',
				default => '<span style="font-size: 22px; color: #ffeb33;"> &#9679;</span>',
			};
		}
	}
