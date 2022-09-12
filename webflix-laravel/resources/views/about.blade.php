<h1>A Propos</h1>

<ul>
    @foreach($team as $user)
        <li>{{ $user['name'] . ' fait ' .$user['job']}}</li>
@endforeach
</ul>