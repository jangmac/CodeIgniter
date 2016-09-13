<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h2>카스퍼스키관리대장</h2>
            <a href="#" class="btn btn-primary">목록 </a>
            <a href="#" class="btn btn-success"> 수정 </a>
            <a href="#" class="btn btn-danger"> 삭제 </a>
            <a href="/soft/write_kaspersky/" class="btn btn-warning">쓰기</a>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">구분</th>
                    <th scope="col">제품명</th>
                    <th scope="col">버전</th>
                    <th scope="col">제조사</th>
                    <th scope="col">제품용도</th>
                    <th scope="col">호환성</th>
                    <th scope="col">사용기간(2년)</th>
                    <th scope="col">시리얼번호</th>
                    <th scope="col">패키지</th>
                    <th scope="col">라이선스</th>
                    <th scope="col">보관장소</th>
                    <th scope="col">비고</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($kaspersky as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <a href="/soft/view_kaspersky/<?php echo $lt->idx ?>"><?php echo $lt -> product_name;?>
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
                            <?php echo $lt -> compatibility;?>
                        </td>
                        <td>
                            <?php echo $lt -> duration;?>
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





