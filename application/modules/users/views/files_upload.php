<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>



<html>
<head>
<title>Upload Form</title>
</head>
<body>



<?php echo form_open_multipart('users/do_upload');?>

<input type="file" name="images[]" multiple="" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>