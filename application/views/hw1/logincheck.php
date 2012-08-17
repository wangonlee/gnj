<?php

//배열에 있는 값을 뽑아낼때
$this->load->helper('html');

foreach($result as $item):
if($item['id']==$_POST['id'] && $item['password']==$_POST['password']):
	if ($item['work'] == 'admin'): 
		echo  "하이";
		echo br(1);
		
	else:
		echo "사랑합니다 고객님";
		echo br(1);
	endif;
	return;
	
else:
echo "아이디 및 비밀번호를 다시 입력하시오";	
	
endif;	
endforeach;
return;

/*foreach ($result as $item):
echo $item['id'].$item['password'];
echo br(1);
endforeach;
*/

?>
