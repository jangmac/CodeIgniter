<body>

<!-- Wrapper -->
<div id="wrapper" class="container">

    <!-- Intro -->
    <div class="inner">
        <h1>청주교차로 사내 전산관리프로그램</h1>
    </div>
    <ul class="actions">
        <?php
        if ( @$this -> session -> userdata('logged_in') == TRUE) {
            ?>
            <?php echo $this -> session -> userdata('username');?> 님 환영합니다.
            <?php
        } else {
            ?>
            <li><a href="/user" class="button scrolly">관리자 로그인</a></li>
            <?php
        }
        ?>
    </ul>
    <div class="col-lg-4">관리자액션로그</div>
    <div class="col-lg-12">내용</div>
    <div class="col-lg-4">대시보드</div>
    <div class="col-lg-12">내용</div>


</div>






