<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
</head>
<body>
    <h1>Details:</h1>
    <p>Name: {{ $data['name'] }}</p>
    <p>Age: {{ $data['age'] }}</p>
    <form action="{{ route('processForm') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>
    <p>Name from form: {{ $name ?? 'No name provided' }}</p>

</body>
</html>
