<body>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="/main/lists">홈</a></li>
                <li><a href="#intro">soft_진행</a></li>
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
            <h2>소프트웨어관리대장(진행)</h2>
            <a href="#" class="button scrolly">목록 </a>
            <a href="#" class="button scrolly"> 수정 </a>
            <a href="#" class="button scrolly"> 삭제 </a>
            <a href="/main/write/" class="button scrolly">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">구분</th>
                    <th scope="col">제품명</th>
                    <th scope="col">버전</th>
                    <th scope="col">제조사</th>
                    <th scope="col">제품용도</th>
                    <th scope="col">사용대상</th>
                    <th scope="col">시리얼번호</th>
                    <th scope="col">패키지</th>
                    <th scope="col">라이선스</th>
                    <th scope="col">보관장소</th>
                    <th scope="col">사용수</th>
                    <th scope="col">비고</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($progress_list as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <a href="/main/modify/"><?php echo $lt -> product_name;?></a>
                        </td>
                        <td>
                            <?php echo $lt -> version;?>
                        </td>
                        <td>
                            <?php echo $lt -> company;?>
                        </td>
                        <td>
                            <?php echo $lt -> purpose;?>
                        </td>
                        <td>
                            <?php echo $lt -> target;?>
                        </td>
                        <td>
                            <?php echo $lt -> sirial_num;?>
                        </td>
                        <td>
                            <?php echo $lt -> package;?>
                        </td>
                        <td>
                            <?php echo $lt -> license_numb;?>
                        </td>
                        <td>
                            <?php echo $lt -> keep_place;?>
                        </td>
                        <td>
                            <?php echo $lt -> use_num;?>
                        </td>
                        <td>
                            <?php echo $lt -> remarks;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





