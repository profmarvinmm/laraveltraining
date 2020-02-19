<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>LIST OF ALL ARTISTS</h1>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($allArtists as $artist)
        <tr>
            <td>{{ $artist->id }}</td>
            <td>{{ $artist->name}}</td>
            <td>{{ $artist->description }}</td>
            <td><button>Edit</button><button>delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
