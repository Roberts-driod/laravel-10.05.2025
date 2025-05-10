<h1> New book </h1>

<form action='/books' method='post'>
    @csrf
<input type='text' name='title'>
<input type='text' name='author'>
<input type='date' name='released_at'>
<input type='submit' value='create'>
</form>