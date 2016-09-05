<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>WINDOW XP 다운그레이드</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="10%">구분</th>
                    <th scope="col">Window7 32Bit Professional</th>
                    <th scope="col">Window XP Professional</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($xp_down as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <?php echo $lt -> window7;?>
                        </td>
                        <td>
                            <?php echo "V9BG9-Q496K-4BXM7-RJCXG-QYGJT 8Copy"?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





