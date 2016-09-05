<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>프린터관리</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" rowspan="3" >구분</th>
                    <th scope="col" rowspan="2">제품명</th>
                    <th scope="col" rowspan="2">사용장소</th>
                    <th scope="col" rowspan="2">계약기간</th>
                    <th scope="col" rowspan="2">유지비용</th>
                    <th scope="col" colspan="2">칼라</th>
                    <th scope="col" colspan="2">흑백</th>
                </tr>
                <tr>
                    <td scope="col">A4</td>
                    <td scope="col">A3</td>
                    <td scope="col">A4</td>
                    <td scope="col">A3</td>
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
            </table>
        </div>
    </section>





