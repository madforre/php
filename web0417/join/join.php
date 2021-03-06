<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원 가입</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/join.css">
</head>
<body>
 <div id="wrap"> 	
 	<?php include "header.php";?>
	<div class="join">
		<h1 class="title">MEMBER JOIN</h1>
		<form action="joinOk.php" method="post">
		<div class="contents">
			<ul>
				<li><input type="text" name="userId" maxlength="12" size="12" placeholder="아이디(4~12자 영문 대.소문자)" ></li>
				<li><input type="password" name="userPw"  maxlength="16" size="16" placeholder="비빌번호는 6~16자 영문 대소문자,숫자"></li>
				<li><input type="password" id="pwChecked" maxlength="16" size="16" placeholder="비빌번호 확인"></li>
				<li><input type="text" name="userName" placeholder="이름(실명으로입력해주세요)"></li>
				<li><input type="text" name="userYear" class='year' placeholder="생년월일" > 
					<input type="radio" name="userGender" value='남자' checked>남자
					<input type="radio" name="userGender" value='남자'>여자
				</li>
				<li>
					<select name="userPhone[]" >
						<option value=""selected>통신사선택</option>
						<option value="010" >010</option>
						<option value="011">011</option>
						<option value="012">012</option>
					</select>
					<input type="text" name="userPhone[]" class='phone' placeholder="휴대폰번호" >
					
				</li>
				<li>
					<input type="submit" value="가입완료" name="joinForm">
					
				</li>
			</ul>
		</div>
		</form>
	</div>
	
 </div>
  <script src="js/gnb.js"></script>
</body>
</html>