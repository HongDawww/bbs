<?php 


	$user = "root";
	$pw = "php504";
	$dbhost = "localhost";
	$dbname ="bbs";
	$dbtype = "mysql";

	$dsn ="$dbtype:host=$dbhost;dbname=$dbname;charset=utf8";

	try{
		$pdo = new PDO($dsn,$user,$pw);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

		echo "DB 연결 성공\n";
	} catch(Exception $pe){
		die("접속 오류 :".$pe->getMessage());
	}

	// 데이터 처리
	try {
		
		$pdo->beginTransaction();

		$sql = " INSERT INTO bbs (table_subject, w_name, email, passwd, content)
					VALUES (?,?,?,?,?)";
		

			$stmt = $pdo->prepare($sql);

			
			$stmt->bindValue(1,$_POST["table_subject"]);
			$stmt->bindValue(2,$_POST["w_name"]);
			$stmt->bindValue(3,$_POST["email"]);
			$stmt->bindValue(4,$_POST["passwd"]);
			$stmt->bindValue(5,$_POST["content"]);
			
			$stmt->execute();

	
			$stmt->execute();

			$pdo->commit();

		//rowcount 입력된 행의 수 돌려줌
		echo "데이터를".$stmt->rowCount()."건을 입력합니다.";

	}catch(Exception $ex){
		$pdo->rollBack();

		echo "오류 : ".$ex->getMessage();
	}




	










?>