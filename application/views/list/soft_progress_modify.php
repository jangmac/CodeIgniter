<body>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="/main/lists">홈</a></li>
                <li><a href="/main/progress_list">soft_진행</a></li>
                <li><a href="/main/keep_list">soft_보관</a></li>
                <li><a href="/main/stop_list">soft_사용불가</a></li>
                <li><a href="/main/kaspersky">카스퍼스키관리대장</a></li>
                <li><a href="#intro">전산사용대장</a></li>
                <li><a href="/main/printer">프린터</a></li>
                <li><a href="/main/software">소프트웨어</a></li>
                <li><a href="/main/xp_down">XP다운그레이드</a></li>
                <li><a href="/main/ms_up">MS오피스업그레이드</a></li>
                <li><a href="/main/quark_up">Quark업그레이드</a></li>
                <li><a href="/main/asiafont_up">아시아폰트업그레이드</a></li>
                <li><a href="/main/soft_account">소프트웨어 아이디/패스워드</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>SOFT_진행 등록</h1>
            <form class="form-horizontal" method="post" action="" id="write_action">
                <table>
                    <tr>제품명</tr>
                    <tr><input type="text" class="input-xlarge" id="product_name" name="<?$product_name ?>" value="<?php echo $views->product_name?>"</tr>
                    <tr>버전</tr>
                    <tr><input type="text" class="input-xlarge" id="version" name="version"></tr>
                    <tr>제조사</tr>
                    <tr><input type="text" class="input-xlarge" id="company" name="company"></tr>
                    <tr>제품용도</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="purpose"></tr>
                    <tr>사용대상</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="target"></tr>
                    <tr>호환성</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="compatibility"></tr>
                    <tr>시리얼번호</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="sirial_num"></tr>
                    <tr>패키지 유/무</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="package"></tr>
                    <tr>라이선스</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="license_numb"></tr>
                    <tr>보관장소</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="keep_place"></tr>
                    <tr>사용수</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="use_num"></tr>
                    <tr>비고</tr>
                    <tr><input type="text" class="input-xlarge" id="input01" name="remarks"></tr>
                </table>
                <button type="submit" class="btn btn-primary" id="write_btn">
                    작성
                </button>
                <button class="btn" onclick="document.location.reload()">
                    취소
                </button>
            </form>
        </div>
    </section>





