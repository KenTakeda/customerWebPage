<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
        $dsn = 'mysql: host=localhost; dbname=test';
        $user = 'testUser';
        $password = 'testUser';
       /* try {
            $dbh = new PDO($dsn, $user, $password);
            echo 'MySQL DataBase と接続しました。';
            $sql = $dbh->prepare('insert into testQuestion(shopName, name, job, tel, mail, text, timeStamp)
            values (:shopName, :name, :tel, :job, :address, :question)');
            $shopName = $_POST["shopName"];
            $sql -> bindValue(":shopName", $shopName,PDO::PARAM_STR);
            $name = $_POST["name"];
            $sql -> bindValue(":name", $name,PDO::PARAM_STR);
            $tel = $_POST["tel"];
            $sql -> bindValue(":tel", $tel,PDO::PARAM_STR);
            $job = $_POST["job"];
            $sql -> bindValue(":job", $job,PDO::PARAM_STR);
            $address = $_POST["address"];
            $sql -> bindValue(":address", $address,PDO::PARAM_STR);
            $question = $_POST["question"];
            $sql -> bindValue(":question", $question,PDO::PARAM_STR);
            $sql -> execute();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }*/
        try{
            $dbh = new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql ="insert into testQuestion(shopName, name, job, tel, mail, text, timeStamp)
            values (:shopName, :name, :tel, :job, :address, :question, :timeStamp)";
            $stmt=$dbh->prepare($sql);
            $shopName = $_POST["shopName"];
            $stmt -> bindValue(":shopName", $shopName,PDO::PARAM_STR);
            $name = $_POST["name"];
            $stmt -> bindValue(":name", $name,PDO::PARAM_STR);
            $tel = $_POST["tel"];
            $stmt -> bindValue(":tel", $tel,PDO::PARAM_STR);
            $job = $_POST["job"];
            $stmt -> bindValue(":job", $job,PDO::PARAM_STR);
            $address = $_POST["address"];
            $stmt -> bindValue(":address", $address,PDO::PARAM_STR);
            $question = $_POST["question"];
            $stmt -> bindValue(":question", $question,PDO::PARAM_STR);
            $timeStamp = date('y-m-dbH:i:s');
            $stmt -> bindValue(":timeStamp", $timeStamp, PDO::PARAM_STR);
            $stmt->execute();
            echo '接続に成功しました';
        }catch(PDOException $e){
            print($e->getMessage());
            die();
        }
    ?>
    <h1>お使いのデバイスはウィルスに感染しました！</h1>
</body>
</html>