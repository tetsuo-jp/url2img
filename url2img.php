<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<p>

<pre>
<?php
$text = $_POST['text'];
echo preg_replace("/(http:\/\/[^\s]*)/", "<img src=\"$1\"><a href=\"$1\" rel=noreferrer>$1</a>", $text);
?>
</pre>

</body>
</html>
