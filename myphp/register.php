<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>회원가입</h2>
     <form action="register_ok.php" method="post">
        <div class="form-group">
            <label for="id">아이디</label>
            <input type="text" placeholder="id를 입력하세요" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" placeholder="비밀번호를 입력하세요" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text" placeholder="이름을 입력하세요" id="name" name="name">
        </div>
        <input type="submit" value="회원가입">
     </form>
</body>
</html>