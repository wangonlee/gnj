<html>
<head>
<title>Seageul Style</title>
</head>
<body>
hello<br>
<form action="modify_user" method="post" >

<?php 
echo $this->session->userdata('id');

?>

    <input type="submit" value="Modify">
    <input type="button" value="Goodbye" onClick="location.href='goodbye_user'">
       
</form>



</body>

</html>
