<?php
$name = '[NAME]';
$email = '';
$text = '[TEXT]';

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$text = htmlspecialchars($text);

$prev = file_get_contents("./kommentare.txt");
echo '
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Gästebuch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<div class="container">';
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
    echo $prev;
    echo '
</div>
</body>
</html>';
    file_put_contents("./kommentare.txt", $out.''.$prev);
}
