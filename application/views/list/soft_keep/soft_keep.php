<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 소프트웨어(보관)</h3>
                <a class="btn btn-success btn-sm" href="/soft/write_keep/">신규 등록</a>
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
                        <tbody>
                        <tr>
                            <th scope="col">제품명</th>
                            <th scope="col">버전</th>
                            <th scope="col">제조사</th>
                            <th scope="col">제품용도</th>
                            <th scope="col">사용대상</th>
                            <th scope="col">시리얼번호</th>
                            <th scope="col">패키지</th>
                            <th scope="col">라이선스</th>
                            <th scope="col">보관장소</th>
                            <th scope="col">비고</th>
                        </tr>
                        <tbody>
                        <?php
                        foreach ($keep_list as $lt) {
                            ?>
                            <tr>
                                <td>
                                    <a href="/soft/view_keep/<?php echo $lt->idx ?>"><?php echo $lt->product_name; ?>
                                </td>
                                <td>
                                    <?php echo $lt->version; ?>
                                </td>
                                <td>
                                    <?php echo $lt->company; ?>
                                </td>
                                <td>
                                    <?php echo $lt->purpose; ?>
                                </td>
                                <td>
                                    <?php echo $lt->target; ?>
                                </td>
                                <td>
                                    <?php echo nl2br($lt->sirial_num); ?>
                                </td>
                                <td>
                                    <?php echo $lt->package; ?>
                                </td>
                                <td>
                                    <?php echo $lt->license_numb; ?>
                                </td>
                                <td>
                                    <?php echo $lt->keep_place; ?>
                                </td>
                                <td>
                                    <?php echo $lt->remarks; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





