
<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>청주교차로 사내 전산관리프로그램</h1>
            <p>사내 전산관리에 효율적으로 할수있도록 제작함. <a href="http://givepro.blog.me">장근식</a><br />
            <ul class="actions">
                <?php
                if ( @$this -> session -> userdata('logged_in') == TRUE) {
                    ?>
                    <?php echo $this -> session -> userdata('username');?> 님 환영합니다. <a href="/user/logout" class="btn">로그아웃</a>
                    <a href="/main/lists" class="btn">전산관리페이지로 이동</a>
                   <?php
                } else {
                    ?>
                    <li><a href="/user" class="button scrolly">관리자 로그인</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </section>



    

