<h1> Book</h1>


<ul>

<li>
<h2>{{$singlebook->title}} </h2>
<h3>{{$singlebook->author}} </h3>
<p> {{ $singlebook->released_at}} </p>

<div>
    <a href= '/books/'> return</a>
</div>
</li>

</ul>