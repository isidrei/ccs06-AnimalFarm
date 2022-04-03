<html>
<head>
<title>Animal Farm </title>
</head>
<body>
<body style="background-color:#Ffe8cb; font-family:courier;">
<center>
    <h1> {{ $book_name }} </h1>
    <h2> {{ $book_author }} </h2>

    @for ($i=1; $i <= $book_chapters; $i++)
             
         <a href="/chapter/{{$i}}"> Chapter {{$i}} </a>     
       
    @endfor
<hr>
    <code>
    @include ("chapter" . $chapter_number)
</code>

</body>

    </html>