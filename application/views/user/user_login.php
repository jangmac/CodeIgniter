<script>
    function chk_frm() {
        if (!document.join.username.value) {
            window.alert('아이디를 입력해 주세요');
            document.join.username.focus();
            return false;
        }
        if (!document.join.password.value) {
            window.alert('비밀번호를 입력해 주세요');
            document.join.password.focus();
            return false;
        }
        return true;
    }
</script>

<body>

<!-- Wrapper -->
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12" align="center">
                <h1>관리자 로그인</h1>
            </div>
        </div>
    </div>
    <div id="wrapper" class="">
        <?php
        $attributes = array(
            'class' => 'form-horizontal',
            'id' => 'auth_login'
        );
        echo form_open('/user', $attributes);
        ?>
        <!-- Intro -->
        <form class="form-horizontal">
            <div class="inner">
                <div class="form-group">
                    <label for="input1" class="col-lg-4 control-label">아이디</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="input1" name="username"
                               placeholder="아이디를 입력해주세요"
                               value="<?php echo set_value('username'); ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="input2">비밀번호</label>
                    <div class="col-lg-4">
                        <input type="password" class="form-control" id="input2" name="password"
                               placeholder="비밀번호를 입력해주세요"
                               value="<?php echo set_value('password'); ?>"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="help-block"><?php echo validation_errors(); ?></p>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-success">로그인</button>
                    <a class="btn btn-default" href="#" onClick="history.back();">이전페이지로</a>
                    <a class="btn btn-danger" href="user/user_register" class="btn btn-success">회원가입</a>
                </div>
            </div>
        </form>
    </div>
</div>





