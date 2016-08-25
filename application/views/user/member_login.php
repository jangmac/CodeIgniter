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
        return true;
    }
</script>

<body>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Welcome</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->

<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">

        <div class="inner">
            <form action="login_ok.php" method="post" onsubmit="return chk_frm()" name="join">
                <label class="col-sm-3 control-label" for="inputID">아이디</label>
                <div class="col-sm-6">
                    <input class="form-control" name="user_id" type="text" placeholder="아이디를 입력해주세요">
                </div>
                <br>
                <label class="col-sm-3 control-label" for="inputPassword">비밀번호</label>
                <div class="col-sm-6">
                    <input class="form-control" name=user_pw type="password" placeholder="비밀번호를 입력해주세요">
                </div>
                <br>
                <div class="col-sm-12 text-center">
                    <button class="btn btn-success" type="submit">로그인</button>
                    <a href="member_register_form" class="btn btn-danger">회원가입</a>
                </div>
            </form>
        </div>

    </section>





