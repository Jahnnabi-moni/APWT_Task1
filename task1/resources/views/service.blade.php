@extends('layout.navbar')
@section('Title')
<marquee><h1>This is service page</h1></marquee>
<h2>Product Information</h2>
@foreach($array as $title => $info)
    {{
         $title . " = " . $info;
    }}
    <?php 
        echo "<br>";
        ?>
    @endforeach
@endsection