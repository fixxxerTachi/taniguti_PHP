<?php
$file=$_FILES['my_img'];
echo 'filename:' . $file['name'] . '<br>';
echo 'filetype:' . $file['type'] . '<br>';
echo 'tmp_name:' . $file['tmp_name'] . '<br>';
echo 'error:' . $file['error'] . '<br>';
echo 'size:' . $file['size'] . '<br>';

$ext=substr($file['name'],-4);
if($ext=='.gif' || $ext=='.png' || $ext=='.jpg'){
	$filepath='images/' . $file['name'];
	move_uploaded_file($file['tmp_name'],$filepath);
	echo '<img src="' . $filepath . '">';
}else{
	echo '不正なファイル形式です';
}

