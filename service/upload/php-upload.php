<?php
header("content-type:text/html;charset=utf-8");  //���ñ���

$uploaddir = 'service/upload/';
copy($userfile,$uploaddir.$userfile_name);

echo $userfile."-��ʱ����<br>";
echo $userfile_name."-ԭʼ����<br>";
echo $userfile_size."-�ļ���С<br>";
echo $userfile_type."-�ļ�����<br>";
?>
