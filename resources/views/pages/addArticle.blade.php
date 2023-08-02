<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container my-3">
    <h1 class="text-center">Добавление статьи</h1>
    <div class="col-sm-6 mx-auto">
        <form method="POST" action="/addArticle">
            @csrf
            <div class="mb3-3">
                <input type="text" class="form-control" name="title" placeholder="Заголовок">
            </div>
            <div class="mb3-3">
                <textarea name="article" type="text" class="form-control" placeholder="Статья"></textarea>
            </div>

<div class="mb-3">
    <input type="submit" class="btn btn-primary form-control" value="Добавить статью">
</div>


</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>








