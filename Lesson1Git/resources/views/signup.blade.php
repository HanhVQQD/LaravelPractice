<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<body>
    <form action='' method = "post" style = "width: 600px; margin-left: 500px;">
        @csrf
        <div class = "form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class = "form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class = "form-group">
            <label>Date</label>
            <input type="text" class="form-control" name="date">
        </div>
        <div class = "form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="phone">
        </div>
        <div class = "form-group">
            <label>Web</label>
            <input type="url" class="form-control" name="web">
        </div>
        <div class = "form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div>
            @include ('error')
        </div>
        <button type="submit" class="btn btn-primary" style="left: 200px;">Submit</button>
        <div class="display-infor">
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>