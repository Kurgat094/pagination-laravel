<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .upload{
            margin: 0 auto;
            width: 80%;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th{
            background-color: #f2f2f2;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
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
            <a href="{{ route('input')}}" style="text-decoration: none;">Input</a>
            <div class="d-flex justify-content-center">
                {{ $books->links() }}
            </div>
            
        </div>
    </form>
</body>
</html>