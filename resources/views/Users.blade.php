<!doctype html>

<html lang="en">
<head>
	

<meta charset="utf-8">

<meta name="viewport"
content ="width-device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, mainimu-.scale=1.0,">

<meta http-equiv="X-UA-Compatible" content="ie-edge">


<title>Listado de usuarios - Laravel Luis H.</title>

<body>
	
<h1>Todos los Usuarios</h1>

<hr>

@if (!empty($Users))



<ul>

	@foreach($Users as $usuarios)


  <li>{{ $usuarios }}</li>


	@endforeach

</ul>

@else

<p>No hay usuarios registrados</p>

@endif

<hr>
<h2>Hi there</h2>
<hr>
<h2>Hello!</h2>
<hr>
<h1>Las accounts</h1>

<hr>

</body>

</head>

</html>