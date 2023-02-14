<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <title>{{$title}}</title>
</head>

<body>
    <h1>{{$title}}</h1>

    <h1>{{$tieude}}</h1>
    <table>
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
</body>

</html>