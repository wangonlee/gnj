<html>
<head> </head>
<body>
<form action="modifyok_user" method="post"> 
<?php 

$this->load->helper('form');
$this->load->helper('html');

$prev_id = $this->session->userdata('id');
$prev_pw = $this->session->userdata('pw');
$prev_name = $this->session->userdata('name');

echo "ID:";
echo $prev_id;
/*echo ("<script>
alert('DB INSERT SUCCESS')
</script>");*/
echo br(1);

echo "PW:";
echo form_input('next_pw',$prev_pw);

echo br(1);

echo "NAME:";
echo form_input('next_name',$prev_name);

echo br(1);

echo form_submit('modify','Modify!');
echo form_submit('cancel','Cancel');
echo form_submit('goodbye','Goodbye'); 

?>


</form>
</body>
</html>