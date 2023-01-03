<?php
if (isset($_POST['submit'])) {
  $file = fopen("textfile.txt", "w");
  
  fwrite($file, $_POST['content']);
  
  fclose($file);
}

$file = fopen("textfile.txt", "r");

$contents = fread($file, filesize("textfile.txt"));

fclose($file);

echo '<form method="post" action="">';
echo '<textarea name="content">' . $contents . '</textarea>';
echo '<input type="submit" name="submit" value="Save">';
echo '</form>';
?>