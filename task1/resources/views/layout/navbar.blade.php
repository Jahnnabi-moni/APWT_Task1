<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table width=50%>
		<tr>
			<td><a href="{{ route('home') }}"> Home </a></td>
			<td><a href="{{ route('teams') }}"> Teams </a></td>
			<td><a href="{{ route('service') }}"> Service </a></td>
			<td><a href="{{ route('contact') }}"> Contact</a></td>
			<td><a href="{{ route('about') }}"> About us </a></td>

		</tr>
	</table>
	@yield('Title')
	

</body>
</html>