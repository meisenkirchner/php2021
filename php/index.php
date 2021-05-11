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
    <form action="index.php" method="POST">
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

<div class="container">
<?php
$name = '[NAME]';
$email = '';
$text = '[TEXT]';

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$prev = file_get_contents("./kommentare.txt");
echo $prev;
if(!($text == "" || $name == "")) {
//$out = "<b>$name</b><br><p>$text</p><br><br>";
    $out = '
    <div class="row mes" style="
    border-top: solid black 2px;
    border-bottom: solid black 2px;">
      <div class="col-12" style="
    font-weight: bold !important;
    margin-bottom: 0;">
          <h6 class="mheader">' . $name . '</h6>
      </div>
      <div class="col-12 mtext" style="
    border-top: solid black 1px;">
        <p class="text">' . $text . '</p>
      </div>
    </div>
    ';
    echo $out;
    file_put_contents("./kommentare.txt", $out, FILE_APPEND);
}
?>
</div>
</body>
</html>