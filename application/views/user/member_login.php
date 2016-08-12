<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>회원가입</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>
<script>
    function chk_frm(){
        if(!document.join.user_id.value){
            window.alert('아이디를 입력해 주세요');
            document.join.user_id.focus();
            return false;
        }
        if(!document.join.user_pw.value){
            window.alert('비밀번호를 입력해 주세요');
            document.join.pw.focus();
            return false;
        }
        return true;
    }
</script>
<body>
<br><br><br><br><br><br><br><br><br>
<div>
    <div class="page-header" align="center">
        <h1>로그인</h1>
    </div>
    <form class="form-horizontal" action="login_ok.php" method="post" onsubmit="return chk_frm()" name="join">
        <div class="form-group" align="center">
            <label class="col-sm-3 control-label" for="inputID">아이디</label>
            <div class="col-sm-6">
                <input class="form-control" name="user_id" type="text" placeholder="아이디를 입력해주세요">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputPassword">비밀번호</label>
            <div class="col-sm-6">
                <input class="form-control" name=user_pw type="password" placeholder="비밀번호를 입력해주세요">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 text-center">
                <button class="btn btn-success" type="submit">로그인</button>
                <a href="member_register_form" class="btn btn-danger">회원가입</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>