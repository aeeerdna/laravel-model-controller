@foreach ($movies as $movie)
    <div>
        <h3>{{ $movie['original_title' ]}}</h3>
        <p>{{ $movie['date'] }}</p>
        <p>{{ $movie['vote'] }}</p>
    </div>
@endforeach
