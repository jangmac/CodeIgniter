<script>
    function chk_frm() {
        if (!document.join.user_id.value) {
            window.alert('아이디를 입력해 주세요');
            document.join.user_id.focus();
            return false;
        }

        if (!document.join.user_pw.value) {
            window.alert('비밀번호를 입력해 주세요');
            document.join.pw.focus();
            return false;
        }
        if (!document.join.user_name.value) {
            window.alert('이름을 입력해 주세요');
            document.join.email.focus();
            return false;
        }
        return true;
    }
</script>

<body>

<div class="col-md-12">
    <div class="page-header" align="center">
        <h1>회원가입
            <small>테스트</small>
        </h1>
    </div>
    <form class="form-horizontal" action="member_ok.php" method="post" onsubmit="return chk_frm()" name="join">

        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputID">아이디</label>
            <div class="col-sm-6">
                <input class="form-control" name="user_id" type="text" placeholder="아이디를 입력해주세요">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputPassword">비밀번호</label>
            <div class="col-sm-6">
                <input class="form-control" name=user_pw type="password" placeholder="비밀번호를 입력해주세요">
                <p class="help-block">숫자, 특수문자 포함 8자 이상</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputName">이름</label>
            <div class="col-sm-6">
                <input class="form-control" name="user_name" type="text" placeholder="이름">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputNumber">휴대폰번호</label>
            <div class="col-sm-6">
                <div class="input-group">
                    <input type="tel" class="form-control" name="user_mobile" placeholder="- 없이 입력해 주세요"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="inputAgree">약관 동의</label>
            <div class="col-sm-6" data-toggle="buttons">
                <label class="btn btn-warning active">
                    <input id="agree" type="checkbox" autocomplete="off" chacked>
                    <span class="fa fa-check"></span>
                </label>
                <a href="#">이용약관</a> 에 동의 합니다.
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 text-center">
                <button class="btn btn-success" type="submit">회원가입<i class="fa fa-check spaceLeft"></i></button>
                <a href="login.php" class="btn btn-danger">가입취소<i class="fa fa-times spaceLeft"></i></a>
            </div>
        </div>
    </form>
</div>
</body>
</html>