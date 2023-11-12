@extends ('layout.main')
@section('content')
{{-- @push('css')
<link rel="stylesheet" href="{{ URL::asset('css/style2.css') }}" />
@endpush --}}
<title>Song Table</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f8f8f8;
  }

  table {
    border-collapse: collapse;
    width: 80%;
    max-width: 800px;
    margin: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  th, td {
    padding: 12px;
    text-align: left;
    border: 0; /* No border */
  }

  th {
    background-color: #333;
    color: white;
  }

  tr {
    cursor: pointer;
    transition: background-color 0.3s;
  }

  tr:hover {
    background-color: #f0f0f0;
  }

  a {
    text-decoration: none;
    color: inherit;
  }
</style>
</head>
<body>
<h1>Likes</h1>
<table>
    <thead>
  <tr>
    <th>Name of Song</th>
    <th>Artist</th>
    <th>Album Name</th>
    <th>Details</th>
  </tr>
</thead>
<tbody>
    @foreach ($songs as $song)
    
      
      <tr>
        <td><a href="{{url($song->link)}}">{{$song->name}}</a></td>
        <td><a href="{{url($song->link)}}">{{$song->artist}}</a></td>
        <td><a href="{{url($song->link)}}">{{$song->album}}</a></td>
        <td><a href="{{url($song->link)}}">{{$song->details}}</a></td>
      </tr>
    
    
    @endforeach
  <!-- Add more rows as needed -->
</tbody>
</table>

{{-- <table>
    <th>
        <td>Name</td>
        <td>Artist</td>
        <td>Album</td>
        <td>Details</td>
    </th>
    @foreach ($songs as $song)
    <tr>
        <td>{{$song->name}}</td>
        <td>{{$song->artist}}</td>
        <td>{{$song->album}}</td>
        <td>{{$song->details}}</td>
    </tr>
    @endforeach
</table> --}}
</body>
</html>
@endsection('content')