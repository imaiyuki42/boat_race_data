<h1>開催レース</h1>


<ul>
    @foreach ($race_names as $race_name)
    <li><a href="gamagori/detail/{{$race_name->race_name_id}}">{{ $race_name->race_name}}</a></li>
    @endforeach
</ul>