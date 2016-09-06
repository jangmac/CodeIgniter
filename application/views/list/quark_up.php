<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>Quark 업그레이드</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="3%">구분</th>
                    <th scope="col">Quark3</th>
                    <th scope="col">Quark4</th>
                    <th scope="col">Quark8</th>
                    <th scope="col">Quark9</th>
                    <th scope="col">Quark2015</th>
                    <th scope="col">Quark2015 시리얼</th>
                    <th scope="col">세종폰트 시리얼</th>
                    <th scope="col">사용자</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($quark_up as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <?php echo $lt -> quark3;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark4;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark8;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark9;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark2015;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark2015_serial;?>
                        </td>
                        <td>
                            <?php echo $lt -> sejong_font;?>
                        </td>
                        <td>
                            <?php echo $lt -> user;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





