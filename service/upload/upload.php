<? 
header("content-type:text/html;charset=utf-8");  //设置编码
//取得当前日期信息，并连接成为一个字符串 

$datetime = getdate(); 

$time = implode("",$datetime); 

//构造文件名 

$filename="service/upload/".$time." ".$upfile_name; 

//$filename="service/upload/".$upfile_name; 

//将文件实际的存放在服务器上 

$copymes = copy($upfile,$filename); 

if ($copymes) { 

print("文件上传成功!<br>n"); 

print("文件名：$upfile_name<br>n"); 

print("上传的文件大小：$upfile_size<br>n"); 



} 

else print("文件上传失败!<br>n"); 



if (($upfile_type=="image/gif")||($upfile_type=="image/pjpeg")) 

{ 

//如果是图形文件格式则显之 

echo "<p><img src="; 

echo $filename; 

echo "; 

} 

?> 
