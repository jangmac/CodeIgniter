<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 카스퍼스키</h3>
                <a class="btn btn-primary btn-sm" href="/soft/write_kaspersky/">등록</a>
                <a class="btn btn-danger btn-sm"> 삭제</a>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        목록
                    </header>
                    <table class="table table-striped table-advance table-hover">
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





