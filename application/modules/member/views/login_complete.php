<html>
<head><title>Login page</title>
<script language="javascript">

    function submit_test(mode){
		alert("aa");
           if(mode=="modify"){
            fm.action="/member/modify";
        }else if(mode=="leave"){
            fm.action = "/index.php/member/login_leave";
        }
        fm.submit();
    }       
</script>
</head>
<?php 
$id = $_POST['id'];
?>
<body>
 
<form method=post name='fm'>
    	Login Complete!!<br>
 
<input type="button" value="Modify" onClick="submit_test('modify')">
<input type="button" value="Leave" onClick="submit_test('leave')">

</form>

</body>
</html>

