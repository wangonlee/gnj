<html>
<head>
<title>Join</title>
</head>
<body>
	<form action="check_userinfo" method="post">
		<?php 
		$this->load->helper('form');
		$this->load->helper('html');

		echo "------Join Page------";
		echo br(1);
		echo "-> Please fill in the blank";
		echo br(2);


		echo "ID";
		echo form_input('id');
		echo br(1);

		echo "Password";
		echo form_input('pw');
		echo br(1);
		
		echo "RePassword";
		echo form_input('repw');
		echo br(1);

		echo "NAME";
		echo form_input('name');
		echo br(1);
		
		?>
		
				
		<?php 
		echo form_submit('mysubmit', 'Save');		//로그인버튼

		echo form_reset('myreset','Reset');		//리셋버튼
		?>
		
		
		<a href='index'> <?php 	echo form_button('mybutton2','Back')?></a>

	</form>
</body>
</html>

