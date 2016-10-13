<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 전산실보관 키보드</h3>
                <a class="btn btn-success btn-sm" href="">신규 등록</a>
                <div class="btn-group">
                    <a class="btn btn-default" href="" title="현재페이지">키보드</a>
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/soft/keep_pc" title="pc">PC(본체)</a></li>
                        <li><a href="/soft/keep_moniter" title="moniter">모니터</a></li>
                        <li><a href="/soft/keep_keyboard" title="keyboard">키보드</a></li>
                        <li><a href="/soft/keep_mouse" title="Bootstrap 3 themes generator">마우스</a></li>
                    </ul>
                </div><!-- /btn-group -->
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
                            <th>관리</th>
                            <th>제품명</th>
                            <th>식별부호</th>
                            <th>제조일</th>
                            <th>기안문서번호</th>
                            <th>구매일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($keep_keyboard as $lt) {
                            ?>
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary"
                                           href="/group/g_keyboard/<?php echo $lt->idx; ?>">수정</a>
                                        <a class="btn btn-danger"
                                           href="/group/jeonsan_keyboard_delete/<?php echo $lt->idx; ?>">삭제</a>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $lt->product_name; ?>
                                </td>
                                <td>
                                    <?php echo $lt->identify; ?>
                                </td>
                                <td>
                                    <?php echo $lt->produce_ym; ?>
                                </td>
                                <td>
                                    <?php echo $lt->gian_num; ?>
                                </td>
                                <td>
                                    <?php echo $lt->buy_day; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>