<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 소프트웨어(진행)</h3>
                <a class="btn btn-success btn-sm" href="/soft/write_progress/">신규 등록</a>
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
                            <th>제품명</th>
                            <th>버전</th>
                            <th>제조사</th>
                            <th>제품용도</th>
                            <th>사용대상</th>
                            <th>시리얼번호</th>
                            <th>패키지</th>
                            <th>라이센스</th>
                            <th>보관장소</th>
                            <th>사용수</th>
                            <th>비고</th>
                        </tr>
                        <?php
                        foreach ($progress_list as $lt) {
                            ?>
                            <tr>
                                <td>
                                    <a href="/soft/view_progress/<?php echo $lt->idx ?>"><?php echo nl2br($lt->product_name); ?></a>
                                </td>
                                <td><?php echo $lt->version; ?></td>
                                <td><?php echo $lt->company; ?></td>
                                <td><?php echo $lt->purpose; ?></td>
                                <td><?php echo nl2br($lt->target); ?></td>
                                <td><?php echo nl2br($lt->sirial_num); ?></td>
                                <td><?php echo $lt->package; ?></td>
                                <td><?php if(($lt->license_numb)>0) echo $lt->license_numb ; ?></td>
                                <td><?php echo $lt->keep_place; ?></td>
                                <td><?php if(($lt->use_num)>0) echo $lt->use_num ; ?></td>
                                <td><?php echo $lt->remarks; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </section>
            </div>
    </section>
</section>
<!--main content end-->