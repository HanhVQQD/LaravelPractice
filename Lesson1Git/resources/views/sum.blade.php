<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM 2 số</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div style="margin:0 auto; display:flex; justify-content:center">
        <form action="" method="post" >
            @csrf
            <div class="mb-3">
                <label for="a" class="form-label">Số a</label>
                <input type="number" class="form-control" id="a" name="a">
            </div>
            <div class="mb-3">
                <label for="b" class="form-label">Số b</label>
                <input type="number" class="form-control" id="b" name = "b">
            </div>
            <div>
                <button type="submit" class="btn-primary">Tính</button>
                
            </div>
            <br>
            <div class="mb-3">
                <input type="number" name="sum" id="" readonly placeholder="Tổng" value="<?php if(isset($SUM)) echo $SUM ?>">
            </div>
        </form>
    </div>
</body>
</html>