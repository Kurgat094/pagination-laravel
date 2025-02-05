<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input</title>
    
</head>
<body>
    <form action="{{ route('inputpost')}}" method="POST" enctype="multipart/form-data">
        <div class="input">
           @csrf
            <h3> Book Details Collection Form</h3>
            <label for=""  class="block text-gray-700 font-medium mb-2">Book</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Book Name" name="bookname">


            <label for=""  class="block text-gray-700 font-medium mb-2">Author</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg p-2"placeholder="Author Name" name="author">

            <label for=""  class="block text-gray-700 font-medium mb-2">Price</label>
            <input type="number" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Price" name="price">


            <label for=""  class="block text-gray-700 font-medium mb-2">Description</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Description" name="description">


            <label for=""  class="block text-gray-700 font-medium mb-2">Book image</label>
            <input type="file" class="w-full border border-gray-300 rounded-lg p-2"  name="image">
            <div class="text-center">
                <button type="submit" class="btn btn-success">Upload</button >
            </div>
        </div>
    </form>
</body>
</html>