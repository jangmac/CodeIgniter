<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
                <button class="btn btn-success btn-sm" onclick="history.back();">그룹목록으로</button>
                <a class="btn btn-warning btn-sm" href="/group/excel_print/<?php echo $this->uri->segment(3); ?>"> 엑셀
                    출력</a>
                <a class="btn btn-primary btn-sm" href="/group/g_add_option/<?php echo $this->uri->segment(3); ?>"> 전산항목 추가</a>
                <a href="/group/g_user_delete/<?php echo $this->uri->segment(3); ?>"
                   class="btn btn-danger btn-sm">그룹원 삭제 </a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-black" data-sortable-id="form-stuff-4">
                    <section class="panel">
                        <header class="panel-heading tab-bg-primary ">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">PC</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#about">SOFT</a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    </br>
                                    <div class="panel-heading">
                                        <h4 class="panel-title"></h4>
                                    </div>
                                    <div class="panel-body">
                                        <form action="/" method="POST">
                                            <fieldset>
                                                <legend>
                                                    <label class="uname_area"><?php echo $view_user->user_name ?></label>
                                                    <small class="f-s-12"><?php echo $view_user->user_group ?></small>
                                                    <small class="f-s-12">/ <?php echo $view_user->user_grade ?></small>
                                                </legend>
                                                <div id="home">
                                                    <div>
                                                        <a class="bold">모니터</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <th width="15%">기능</th>
                                                                    <th>제조사</th>
                                                                    <th>제품명</th>
                                                                    <th>모델코드</th>
                                                                    <th>모델명</th>
                                                                    <th>식별부호</th>
                                                                    <th>제조년월</th>
                                                                    <th>S/N</th>
                                                                    <th>기안문서번호</th>
                                                                    <th>구매일</th>
                                                                </tr>
                                                                <?php
                                                                foreach ($view_moniter as $lt) {
                                                                    ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-success"
                                                                               href="/group/jeonsan_keep_moniter/<?php echo $lt->idx; ?>">보관</a>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_moniter/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_moniter_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $lt->company; ?></td>
                                                                    <td><?php echo $lt->product_name; ?></td>
                                                                    <td><?php echo $lt->model_code; ?></td>
                                                                    <td><?php echo $lt->model_name; ?></td>
                                                                    <td><?php echo $lt->identify; ?></td>
                                                                    <td><?php echo $lt->produce_ym; ?></td>
                                                                    <td><?php echo $lt->soft_num; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">본체</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <?php
                                                            foreach ($view_pc as $lt) {
                                                                ?>
                                                                <tr>
                                                                    <th width="15%">기능</th>
                                                                    <th>제조사</th>
                                                                    <th>모델명</th>
                                                                    <th>모델코드</th>
                                                                    <th>제조번호</th>
                                                                    <th>제품코드</th>
                                                                    <th>식별부호</th>
                                                                    <th>제조년월</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-success"
                                                                               href="/group/jeonsan_keep_pc/<?php echo $lt->idx; ?>">보관</a>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_pc/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_pc_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $lt->company; ?></td>
                                                                    <td><?php echo $lt->model_name; ?></td>
                                                                    <td><?php echo $lt->model_code; ?></td>
                                                                    <td><?php echo $lt->produce_number; ?></td>
                                                                    <td><?php echo $lt->product_code; ?></td>
                                                                    <td><?php echo $lt->identify; ?></td>
                                                                    <td><?php echo $lt->produce_ym; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>CPU</th>
                                                                    <th>RAM</th>
                                                                    <th>HDD(C:)</th>
                                                                    <th>HDD(D:)</th>
                                                                    <th>그래픽카드</th>
                                                                    <th>기안문서번호</th>
                                                                    <th>구매일</th>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><?php echo $lt->g_cpu; ?></td>
                                                                    <td><?php echo $lt->g_ram; ?></td>
                                                                    <td><?php echo $lt->g_hdd_c; ?></td>
                                                                    <td><?php echo $lt->g_hdd_d; ?></td>
                                                                    <td><?php echo $lt->g_graphic; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">키보드</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>제품명</th>
                                                                <th>식별부호</th>
                                                                <th>제조일</th>
                                                                <th>기안문서번호</th>
                                                                <th>구매일</th>
                                                            </tr>
                                                            <?php
                                                            foreach ($view_keyboard as $lt) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php if (($lt->product_name) != '') {
                                                                            ?>
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-success"
                                                                                   href="/group/jeonsan_keep_keyboard/<?php echo $lt->idx; ?>">보관</a>
                                                                                <a class="btn btn-primary"
                                                                                   href="/group/g_keyboard/<?php echo $lt->idx; ?>">수정</a>
                                                                                <a class="btn btn-danger"
                                                                                   href="/group/part_keyboard_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $lt->product_name; ?></td>
                                                                    <td><?php echo $lt->identify; ?></td>
                                                                    <td><?php echo $lt->produce_ym; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">마우스</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>제품명</th>
                                                                <th>식별부호</th>
                                                                <th>제조일</th>
                                                                <th>기안문서번호</th>
                                                                <th>구매일</th>
                                                            </tr>
                                                            <?php
                                                            foreach ($view_mouse as $lt) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php if (($lt->product_name) != '') {
                                                                            ?>
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-success">보관</a>
                                                                                <a class="btn btn-primary"
                                                                                   href="/group/g_mouse/<?php echo $lt->idx; ?>">수정</a>
                                                                                <a class="btn btn-danger"
                                                                                   href="/group/part_mouse_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $lt->product_name; ?></td>
                                                                    <td><?php echo $lt->identify; ?></td>
                                                                    <td><?php echo $lt->produce_ym; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">헤드셋</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th width="30%">제품명</th>
                                                                <th>기안문서번호</th>
                                                                <th width="30%">구매일</th>
                                                            </tr>
                                                            <?php
                                                            foreach ($view_headset as $lt) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php if (($lt->product_name) != '') {
                                                                            ?>
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-success">보관</a>
                                                                                <a class="btn btn-primary"
                                                                                   href="/group/g_headset/<?php echo $lt->idx; ?>">수정</a>
                                                                                <a class="btn btn-danger"
                                                                                   href="/group/part_headset_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $lt->product_name; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">전화기</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th width="30%">제품명</th>
                                                                <th>기안문서번호</th>
                                                                <th width="30%">구매일</th>
                                                            </tr>
                                                            <?php
                                                            foreach ($view_cell as $lt) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_cell/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_cell_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $lt->product_name; ?></td>
                                                                    <td><?php echo $lt->gian_num; ?></td>
                                                                    <td><?php echo $lt->buy_day; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div id="about" class="tab-pane">
                                    </br>
                                    <div class="panel-heading">
                                        <h4 class="panel-title"></h4>
                                    </div>
                                    <div class="panel-body">
                                        <form action="/" method="POST">
                                            <fieldset>
                                                <legend>
                                                    <label class="uname_area"><?php echo $view_user->user_name ?></label>
                                                    <small class="f-s-12"><?php echo $view_user->user_group ?></small>
                                                    <small class="f-s-12">/ <?php echo $view_user->user_grade ?></small>
                                                </legend>
                                                <div id="about">
                                                    <div>
                                                        <a class="Bold">Window OS</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_window as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->product_number) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_window/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_window_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->product_number); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">MS-Office</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_ms as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->product_number) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_ms/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_ms_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->product_number); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">한글</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_hangul as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->product_number) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_hangul/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_hangul_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->product_number); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">보안프로그램</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%"></th>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_security as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->product_number) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_security/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_security_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->product_number); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">Quark</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>제품번호</th>
                                                                <th>Font</th>
                                                                <th>기안문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_quark as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->product_number) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_quark/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_quark_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->product_number); ?></td>
                                                                <td><?php echo nl2br($lt->font); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">Adobe</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>제품명</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                                <th>비고</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_adobe as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->adobe_product) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_adobe/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_adobe_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->adobe_product); ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                                <td><?php echo nl2br($lt->remarks); ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">Font</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>Asia</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                                <th>묵향</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_font as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->asia)||($lt->mukhyang) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_font/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_font_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo nl2br($lt->asia); ?></td>
                                                                <td><?php echo $lt->a_gian_num; ?></td>
                                                                <td><?php echo $lt->a_duration; ?></td>
                                                                <td><?php echo nl2br($lt->mukhyang); ?></td>
                                                                <td><?php echo $lt->m_gian_num; ?></td>
                                                                <td><?php echo $lt->m_duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold">압축프로그램</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="15%">기능</th>
                                                                <th>알집</th>
                                                                <th>기안문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                foreach ($view_compress as $lt) {
                                                                ?>
                                                                <td>
                                                                    <?php if (($lt->alzip) != '') {
                                                                        ?>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success">
                                                                                보관
                                                                            </button>
                                                                            <a class="btn btn-primary"
                                                                               href="/group/g_compress/<?php echo $lt->idx; ?>">수정</a>
                                                                            <a class="btn btn-danger"
                                                                               href="/group/part_compress_delete/<?php echo $lt->idx; ?>">삭제</a>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo $lt->alzip; ?></td>
                                                                <td><?php echo $lt->gian_num; ?></td>
                                                                <td><?php echo $lt->duration; ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div id="profile" class="tab-pane">Profile</div>
                                <div id="contact" class="tab-pane">Contact</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>
<!--main content end-->