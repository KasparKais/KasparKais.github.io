<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">  
</head>
<body class="p-3">
    <div class="d-flex justify-content-center">
        <form action="/KasparKais.github.io/backend/<?= $isEdit ? 'edit.php' : 'add.php'?>" method="POST">
            <div class="form-group">
                <label>
                    Name

                    <input class="form-control" name="name" value="<?= $name ?>">
                </label>
            </div>
            <div class="form-group">
                <label>Password
                    <input class="form-control" name="password" value="">
                </label>
            </div>
            <input hidden name="id" value="<?= $id ?>">
            <button class="btn btn-primary" type="submit" name="submit">Save (PHP)</button>
            

        </form>
    </div>
</body>
</html>