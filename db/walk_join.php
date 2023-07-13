<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/walk_css.css">
    <title>Walker Holic</title>
</head>
<body>
    <div id="join_form">

    <form method="POST" action="join_check.php">
    <div id="login_title"><a href="../index.php">Walker Holic</a></div>
    <div id="login_tag">이름</div>
    <input type="text" name="userName" id="user_input" placeholder="이름">
    <div id="login_tag">아이디</div>
    <input type="text" name="userId" id="user_input" placeholder="아이디">
    <div id="login_tag">비밀번호</div>
    <input type="password" name="userPassword" id="user_input" placeholder="비밀번호">
    <input type="submit" value="회원가입" id="login_submit">
    </form>

    </div>
</body>
</html>