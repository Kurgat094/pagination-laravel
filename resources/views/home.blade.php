<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="upload">
            <table>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    {{-- <th colspan="2">Updates</th> --}}
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->bookname }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->description }}</td>
                    <td><img src="{{ asset('storage/' . $book->image) }}" alt="" style="width: 100px"></td>
                    {{-- <td>
                        <a href="{{ route('edit',['id' => $book-> id]) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('delete', ['id' => $book->id]) }}" class="btn btn-warning">Delete</a>
                    </td> --}}
                    </tr>
                @endforeach
            </table>
            <div class="d-flex justify-content-center">
                {{ $books->links() }}
            </div>
            
        </div>
    </form>
</body>
</html>