<?php

//�迭�� �ִ� ���� �̾Ƴ���
$this->load->helper('html');

foreach($result as $item):
if($item['id']==$_POST['id'] && $item['password']==$_POST['password']):
	if ($item['work'] == 'admin'): 
		echo  "����";
		echo br(1);
		
	else:
		echo "����մϴ� ����";
		echo br(1);
	endif;
	return;
	
else:
echo "���̵� �� ��й�ȣ�� �ٽ� �Է��Ͻÿ�";	
	
endif;	
endforeach;
return;

/*foreach ($result as $item):
echo $item['id'].$item['password'];
echo br(1);
endforeach;
*/

?>
