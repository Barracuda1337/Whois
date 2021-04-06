<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Whois</title>
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

		body {
			font-weight: 400;
			line-height: 1.7;
			font-family: "Poppins", sans-serif !important;
			background-image: url("https://i.pinimg.com/originals/65/f5/6e/65f56efd2a0a3144424b4f47a39cd54f.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			width: auto;
			height: 100%;
		}

		h1 {
			font-size: 2rem;
			margin-bottom: 25px;
			color: white;
			text-shadow: 0px 0px 7px rgba(150, 150, 150, 1);
		}

		.search {
			padding-top: 100px;
			text-align: center;
		}

		.search input,
		.search button {
			padding: 10px 20px;
			border: none;
			outline: none;
			font-size: 20px;
		}

		.search input {
			transition: all 0.3s ease-in;
			border-radius: 25px 0 0 25px;
			width: 60vw;
			max-width: 600px;
			-webkit-box-shadow: 0px 10px 38px -17px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: 0px 10px 38px -17px rgba(0, 0, 0, 0.75);
			box-shadow: 0px 10px 38px -17px rgba(0, 0, 0, 0.75);
		}


		.search button {
			border-radius: 0 25px 25px 0;
			margin-left: -5px;
			color: white;
			background-color: black;
			cursor: pointer;
		}
	</style>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
	<div class="search">
		<h1>Whois</h1>
		<form action="whois.php">
			<input id="domain" name="domain" type="text" placeholder="Write this area." required>
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
</body>

</html>