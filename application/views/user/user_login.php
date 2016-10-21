<body class="login-img3-body">

<div class="container">
    <?php
    $attributes = array(
        'class' => 'login-form',
        'id' => 'auth_login'
    );
    echo form_open('/user', $attributes);
    ?>

    <form class="login-form">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username"
                       value="<?php echo set_value('username'); ?>" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password"
                       value="<?php echo set_value('password'); ?>">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 아이디 기억
                <span class="pull-right"> <a href="#"> 비밀번호를 잊으셨나요?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">로그인</button>
        </div>
    </form>

</div>


