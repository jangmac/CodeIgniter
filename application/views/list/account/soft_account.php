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
            <h2>Asia Font 업그레이드</h2>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="5%">구분</th>
                    <th scope="col">소프트웨어</th>
                    <th scope="col">아이디</th>
                    <th scope="col">패스워드</th>
                    <th scope="col">비고</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($soft_account as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <?php echo $lt -> product_name;?>
                        </td>
                        <td>
                            <?php echo $lt -> id;?>
                        </td>
                        <td>
                            <?php echo $lt -> pw;?>
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





