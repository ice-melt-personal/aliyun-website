<?php
header("content-type:text/html;charset=utf-8");  //设置编码

if(isset($_FILES['userfile']['tmp_name'])) {

    $uploaddir = 'upload';

    print "<pre>";
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
        print "File is valid, and was successfully uploaded.  Here's some more debugging info:\n";
        print_r($_FILES);
    } else {
        print "Possible file upload attack!  Here's some debugging info:\n";
        print_r($_FILES);
    }
} else {
?>
    <form enctype="multipart/form-data" action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>"  method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="300000">
    Send this file: <input name="userfile" type="file">
    <input type="submit" value="Send File">
    </form>
<?php
}
?>