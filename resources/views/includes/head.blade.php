<meta charset="utf-8">
<title> Encyklopedia gier sieciowych </title>
<meta name="description" content="">
<meta name="author" content="Sebastian Dreszer">
<link rel="stylesheet" href="{{asset("style.css")}}" type="text/css">
<link rel="shortcut icon" href="{{asset("media/")}}favicon.ico">
	@if (isset($_SESSION['background']))
        <style>
			html
			{
				background-image: url({{$_SESSION['background']}});
				background-size: 100%;
				background-repeat: repeat-y;
			}
		</style>
    @endif
<script src="../../js/script.ts"> </script>
