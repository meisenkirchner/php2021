<!DOCTYPE html>
<html lang="de">
<head>
    <title>Gästebuch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-1">
            <h1>Gästebuch</h1>
        </div>
    </div>
    <form action="display.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name eingeben">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email eingeben">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Text:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="text" id="text" placeholder="Text eingeben"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>