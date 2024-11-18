//Creator Sebastian Dreszer
/*$(document).ready(function()
{
	document.getElementById("lupa").
	//searching
	$("#lupa").click(function()
	{
		$("#content").load("searchResult.php", {search: $("#search").val()});
	})
	//account manage
	$("#loginBtn").click(function()
	{
		$("#login").load("loginForm.php");
	})
	
	$("#loginForm").find("input").click(function()
	{
		this.value = "";
	})
	
	$("#newAccount").click(function()
	{
		window.location.href = "newAccount.php";
	})
	
	$("#delete").click(function()
	{
		$("#confirmAccountDelete").css( { display: "block"} );
	})
	
	$("#no").click(function()
	{
		$("#confirmAccountDelete").css( { display: "none"} );
	})
	
	$("#wrongLogin").find("button").click(function()
	{
		$("#wrongLogin").css({display: "none"});
	})
	
	$("#profileBtn").click(function()
	{
		$("#login").load("profileTile.php");
	})
	
	//account settings
	$("#changeName").click(function()
	{
		$("#settings").load("profile/changeNameForm.php");
	})
	
	$("#changePassword").click(function()
	{
		$("#settings").load("profile/changePasswordForm.php");
	})
	
	$("#changeAvatar").click(function()
	{
		$("#settings").load("profile/changeAvatarForm.php");
	})
	
	$("#changeBackground").click(function()
	{
		$("#settings").load("profile/changeBackgroundForm.php");
	})
	
	//adding
	$("select[name=\"category\"]").change(function()
	{
		$("#subcategorySel").load("game/subcategory.php", {idCategory: $(this).val()} );
		$("#subcategorySel").css( {display:"inline"} );
	})
	
	$("#howManyButton").click(function()
	{
		$("#content").load("loadImageForm.php", {howMany: $("#howManyImages").val(), idGame: $("#idgame").val() } );
	})
	
	$("#howManyMoviesButton").click(function()
	{
		$("#content").load("loadMovieForm.php", {howMany: $("#howManyMovies").val(), idGame: $("#idgame").val() } );
	})
})*/
	//gallery
	function prev(directory: string)
	{
		let image = document.getElementById("imageBig");
		let id = Number(image.getAttribute("data-id"));
		if (id > 1)
			id--;
		let path = directory+id+".jpg";
		image.setAttribute("src", path);
		image.setAttribute("data-id", id.toString());
	}
	
	function next(directory:string, max:number)
	{
		let image = document.getElementById("imageBig");
		let id = Number(image.getAttribute("data-id"));
		if (id < max)
			id++;
		let path = directory+id+".jpg";
		image.setAttribute("src", path);
		image.setAttribute("data-id", id.toString());
	}
	
	function zoom(directory:string, i:number)
	{
		let image = document.getElementById("imageBig");
		image.setAttribute("data-id", i.toString());
		image.setAttribute("src", directory);
	}
/*Sebastian Dreszer czerwiec 2020*/