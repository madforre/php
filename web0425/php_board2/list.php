<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>글목록</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/list.css">
</head>
<body>

<?php include "header.php" ?>
			<div class="list">
			    <div class="title">
			    	<ul>
			    		<li>아이디</li>
			    		<li>이름</li>
			    		<li>글제목</li>
			    		<li class="times">글쓴시간</li>
			    		<li>조회수</li>
			    	</ul>			    	
			    </div>
				<ul>
					<?php 
					include "dbConnect.php";

					$query="select * from php_board order by id desc ; ";//id기준으로 내림차순 큰거 >> 작은..
					$result=$conn->query($query);

					if($result->num_rows!=0){ //DBFp
							while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때					
								?>
										<li><a href="read.php?id=<?=$row['id']?>"><?=$row['id']?></a></li>
										<li><?=$row['name']?></li>
										<li><a href="read.php?id=<?=$row['id']?>"><?=$row['title']?></a></li>
										<li class="times"><?=$row['wdate']?></li>
										<li><?=$row['view']?></li>			
					<?php
							}
					}
					$conn->close();
					?>
				</ul>
			</div>
</body>
</html>