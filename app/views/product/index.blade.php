@extends('layout.main')
@section('content')

<h1>{{$tieude}}</h1>
<table border="1">
    <tr>
        <th>id</th>
        <th>ten</th>
        <th>gia</th>
    </tr>
    @foreach($products as $pr)
    <tr>
        <td>{{$pr->id}}</td>
        <td>{{$pr->name}}</td>
        <td>{{$pr->price}}</td>

    </tr>
    @endforeach
</table>
@endsection