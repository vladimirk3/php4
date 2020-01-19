<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <title>Gallery</title>
</head>
<body>

<?php
$s_files = scandir("img/small");

foreach($s_files as $s_file) {
    if ($s_file != ".." && $s_file != ".") {
        echo "<a class='img_click' href='#' data-imglink='/img/big/$s_file'>";
        echo "<img class='img' src='/img/small/$s_file'>";
        echo "</a>";
    }
}
?>

<div class="win">
    <div class="frame">
        <button class="close_win">
            <svg viewBox="0 0 32 32"><path d="M10,10 L22,22 M22,10 L10,22"></path></svg>
        </button>
        <div class="img_win">
            <img class="pic" src="" alt="big">
        </div>
    </div>
</div>

</body>
</html>