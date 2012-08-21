<html>
<head>
<title>Login page</title>
</head>
<body>
<form action="login" method="post">
		welcome to Saegeul!!
		<?php 
		$this->load->helper('form');
		$this->load->helper('html');
		
		echo "ID";
		echo form_input('id');
		echo br(1);
		
		echo "PW";
		echo form_input('pw');
		echo br(1);
		
		echo form_submit('mysubmit', 'Login');	//로그인버튼

		//가입버튼
		?>
		<a href='join_page'> <?php 
		echo form_button('mybutton','Join')
		?>
		</a>
	
	
	
</form>	
</body>
</html>

