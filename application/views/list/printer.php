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
            <h2>프린터관리</h2>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" rowspan="2">구분</th>
                    <th scope="col" rowspan="2">제품명</th>
                    <th scope="col" rowspan="2">사용장소</th>
                    <th scope="col" rowspan="2">계약기간</th>
                    <th scope="col" rowspan="2">유지비용</th>
                    <th scope="col" colspan="2" align="center">칼라</th>
                    <th scope="col" colspan="2">흑백</th>
                </tr>
                <tr>
                    <th scope="col">A4</th>
                    <th scope="col">A3</th>
                    <th scope="col">A4</th>
                    <th scope="col">A3</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($printer as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <?php echo $lt -> product_name;?>
                        </td>
                        <td>
                            <?php echo $lt -> use_place;?>
                        </td>
                        <td>
                            <?php echo $lt -> term;?>
                        </td>
                        <td>
                            <?php echo $lt -> cost;?>
                        </td>
                        <td>
                            <?php echo $lt -> color_a4;?>
                        </td>
                        <td>
                            <?php echo $lt -> color_a3;?>
                        </td>
                        <td>
                            <?php echo $lt -> black_a4;?>
                        </td>
                        <td>
                            <?php echo $lt -> black_a3;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th colspan="4"><a href="/main/write/" class="btn btn-success">
                            쓰기
                        </a></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </section>





