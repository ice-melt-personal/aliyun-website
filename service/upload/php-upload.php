<?php
header("content-type:text/html;charset=utf-8");  //设置编码

$uploaddir = 'service/upload/';
copy($userfile,$uploaddir.$userfile_name);

echo $userfile."-临时名称<br>";
echo $userfile_name."-原始名称<br>";
echo $userfile_size."-文件大小<br>";
echo $userfile_type."-文件类型<br>";
?>
