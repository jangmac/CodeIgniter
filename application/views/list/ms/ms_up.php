<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>MS-OFFICE 업그레이드</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write_ms_up/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="10%">구분</th>
                    <th scope="col">MS-Office 2003 Professional</th>
                    <th scope="col">MS-Office 2007 Professional</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($ms_up as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <a href="/soft/view_ms_up/<?php echo $lt->idx ?>"><?php echo $lt -> office2003_pro;?>
                        </td>
                        <td>
                            <?php echo $lt -> office2007_pro;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





