<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    
  <div class="container">
    <div class="row">
        <div class="col-6">
            <form method="post" action="send.php">
            <div class="form-group mt-3">
                <label for="user_name">Введите имя</label>
                <input id="user_name" class = "form-control" type="text" name = "NAME">
            </div>
            <div class="form-group mt-3">
                <label for="user_last_name">Введите фамилию</label>
                <input id="user_last_name" class = "form-control" type="text" name = "LAST_NAME">
            </div>
            <div class="form-group mt-3">
                <label for="user_phone">Введите телефон</label>
                <input id="user_phone" class = "form-control" type="text" name = "PHONE">
            </div>
            <button class = "btn btn-primary mt-4" type="submit">Отправить</button>
            </form>
        </div>
    </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>