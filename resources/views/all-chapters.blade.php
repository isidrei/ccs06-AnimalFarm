<html>
<head>
<title> Animal Farm </title>
</head>
<body>
<body style="background-color:#Ffe8cb; font-family:courier;">
<center>
    <h1> {{ $book_name }} </h1>
    <h2> {{ $book_author }} </h2>

 @for ($i=1; $i <= $book_chapters; $i++)

  <h3>  Chapter {{$i}}  </h3>
<pre>
@include ("chapter{$i}")
</pre>

    @endfor

</body>

    </html> 