<div>
    <h1> This is Header Component </h1>
    <h2>Welcome to, {{$name}}</h2>
    <hr>
    <h3>Danh sách Fruits </h3>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>