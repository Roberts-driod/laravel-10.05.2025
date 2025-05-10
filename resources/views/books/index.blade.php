

<a href='/books/create' > create </a>
<ul>

@foreach($allBooks as $book)

<li>
<h2>{{$book->title}} </h2>
<h3>{{$book->author}} </h3>
<p> {{ $book->released_at}} </p>
</li>


@endforeach
</ul>