<? 
header("content-type:text/html;charset=utf-8");  //���ñ���
//ȡ�õ�ǰ������Ϣ�������ӳ�Ϊһ���ַ��� 

$datetime = getdate(); 

$time = implode("",$datetime); 

//�����ļ��� 

$filename="service/upload/".$time." ".$upfile_name; 

//$filename="service/upload/".$upfile_name; 

//���ļ�ʵ�ʵĴ���ڷ������� 

$copymes = copy($upfile,$filename); 

if ($copymes) { 

print("�ļ��ϴ��ɹ�!<br>n"); 

print("�ļ�����$upfile_name<br>n"); 

print("�ϴ����ļ���С��$upfile_size<br>n"); 



} 

else print("�ļ��ϴ�ʧ��!<br>n"); 



if (($upfile_type=="image/gif")||($upfile_type=="image/pjpeg")) 

{ 

//�����ͼ���ļ���ʽ����֮ 

echo "<p><img src="; 

echo $filename; 

echo "; 

} 

?> 
