<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION['user'])) : 
?>

    <div>
        <h2><?= $_SESSION['user']['name'] ?>님이 로그인 중 입니다</h2>
        <a href="logout.php">로그아웃</a>
    </div>

    <?php else : ?>


    <form action="login_ok.php" method="post">
        <div class="form-group">
            아이디
            <input type="text" placeholder="아이디를 입력하세요" id="id" name="id">
        </div>
        <div class="form-group">
            비밀번호
            <input type="password" placeholder="비밀번호를 입력하세요" id="password" name="password">
        </div>
        <input type="submit" value="로그인">
    </form>

    <?php endif; ?>
</body>
</html>