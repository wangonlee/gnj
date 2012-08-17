<html>
<head>
<title>환영합니다</title>
</head>
<body>
<form action="http://localhost:8888/codeIgniter_2.1.2/index.php/hw1/home/info" METHOD="POST">
<h3> 회원가입<br>
	 계정<input type="text" name="id"><br>
     암호<input type="text" name="password"><br>
     암호재입력<input type="text" name="password"><br>
     이름<input type="text" name="name"><br>
     이메일<input type="text" name="email"><br>
     자기소개<br>
	 <td><textarea name="introduce" rows="5" cols="40"></textarea>
	 <br>주소<select name="add">
	 <option value="Seoul" selected>서울</option>
	 <option value="Busan" selected>부산</option> 
	 <option value="Daegu" selected>대구</option>
	 <option value="Daejun" selected>대전</option>	
	 <option value="Kwangju" selected>광주</option>
	 </select>
	 <input type="text" name="sebuadd"><br>
	 등급
	 <input type="radio" name="rank" value="admin" checked>관리자
	 <input type="radio" name="rank" value="user">일반<br>
	 <input type="submit" value="가입">			
     <input type="button" value="취소" onClick="location.href='http://localhost:8888/codeIgniter_2.1.2/index.php/hw1/home/'">
</h3> 
</form>
</body>
</html>

