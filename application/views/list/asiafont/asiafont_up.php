<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>Asia Font 업그레이드</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write_asiafont_up/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="10%">구분</th>
                    <th scope="col">Asia Font 2008</th>
                    <th scope="col">통합패키지WTTF</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($asiafont_up as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <a href="/soft/view_asiafont_up/<?php echo $lt->idx ?>"><?php echo $lt -> asiafont2008;?>
                        </td>
                        <td>
                            <?php echo $lt -> integrated_Package;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





