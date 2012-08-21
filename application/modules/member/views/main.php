<html>
<head>
<title>Seageul Style</title>
</head>
<body>
<br>
<form action="modify_user" method="post" >

<?php 

$this->load->helper('form');
$this->load->helper('html');


echo "User Data";
echo br(2);

echo "ID : ";
echo $this->session->userdata('id');
echo br(1);

echo "NAME : ";
echo $this->session->userdata('name');
echo br(3);


echo form_submit('mysubmit', 'Modify');
?>

    
       	<a href='goodbye_user'> <?php 	echo form_button('mybutton','Goodbye')?></a>
</form>



</body>

</html>
