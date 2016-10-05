<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
                <button class="btn btn-success btn-sm" onclick="history.back();">그룹목록으로</button>
                <a class="btn btn-warning btn-sm" href="/group/excel_print/<?php echo $this->uri->segment(3); ?>"> 엑셀 출력</a>
                <a class="btn btn-primary btn-sm" href="/group/g_add_option/<?php echo $this->uri->segment(3); ?>"> 신규 추가</a>
                <a href="/group/g_user_delete/<?php echo $this->uri->segment(3); ?>"
                   class="btn btn-danger btn-sm"> 삭제 </a>
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
                                                <legend><label
                                                        class="uname_area"><?php echo $g_view->user_name ?></label>
                                                    <small class="f-s-12"><?php echo $g_view->user_group ?></small>
                                                    <small class="f-s-12">/ <?php echo $g_view->user_grade ?></small>
                                                </legend>
                                                <div id="home">
                                                    <div>
                                                        <a class="bold"
                                                           href="/group/g_moniter/<?php echo $g_view->m_user_idx; ?>">모니터</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>#</th>
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
                                                            <tr>
                                                                <td></td>
                                                                <td><?php echo $g_view->m_company; ?></td>
                                                                <td><?php echo $g_view->m_product_name; ?></td>
                                                                <td><?php echo $g_view->m_model_code; ?></td>
                                                                <td><?php echo $g_view->m_model_name; ?></td>
                                                                <td><?php echo $g_view->m_identify; ?></td>
                                                                <td><?php echo $g_view->m_produce_ym; ?></td>
                                                                <td><?php echo $g_view->m_soft_num; ?></td>
                                                                <td><?php echo $g_view->m_gian_num; ?></td>
                                                                <td><?php echo $g_view->m_buy_day; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_pc/<?php echo $g_view->m_user_idx; ?>">본체</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>제조사</th>
                                                                <th>모델명</th>
                                                                <th>모델코드</th>
                                                                <th>제조번호</th>
                                                                <th>제품코드</th>
                                                                <th>식별부호</th>
                                                                <th>제조년월</th>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td><?php echo $g_view->p_company; ?></td>
                                                                <td><?php echo $g_view->p_model_name; ?></td>
                                                                <td><?php echo $g_view->p_model_code; ?></td>
                                                                <td><?php echo $g_view->p_produce_number; ?></td>
                                                                <td><?php echo $g_view->p_product_code; ?></td>
                                                                <td><?php echo $g_view->p_identify; ?></td>
                                                                <td><?php echo $g_view->p_produce_ym; ?></td>
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
                                                                <td><?php echo $g_view->p_g_cpu; ?></td>
                                                                <td><?php echo $g_view->p_g_ram; ?></td>
                                                                <td><?php echo $g_view->p_g_hdd_c; ?></td>
                                                                <td><?php echo $g_view->p_g_hdd_d; ?></td>
                                                                <td><?php echo $g_view->p_g_graphic; ?></td>
                                                                <td><?php echo $g_view->p_gian_num; ?></td>
                                                                <td><?php echo $g_view->p_buy_day; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_keyboard/<?php echo $g_view->m_user_idx; ?>">키보드</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="20%">제품명</th>
                                                                <th width="20%">식별부호</th>
                                                                <th width="20%">제조일</th>
                                                                <th width="20%">기안문서번호</th>
                                                                <th width="20%">구매일</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->k_product_name; ?></td>
                                                                <td><?php echo $g_view->k_identify; ?></td>
                                                                <td><?php echo $g_view->k_produce_ym; ?></td>
                                                                <td><?php echo $g_view->k_gian_num; ?></td>
                                                                <td><?php echo $g_view->k_buy_day; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_mouse/<?php echo $g_view->m_user_idx; ?>">마우스</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="20%">제품명</th>
                                                                <th width="20%">식별부호</th>
                                                                <th width="20%">제조일</th>
                                                                <th width="20%">기안문서번호</th>
                                                                <th width="20%">구매일</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->mu_product_name; ?></td>
                                                                <td><?php echo $g_view->mu_identify; ?></td>
                                                                <td><?php echo $g_view->mu_produce_ym; ?></td>
                                                                <td><?php echo $g_view->mu_gian_num; ?></td>
                                                                <td><?php echo $g_view->mu_buy_day; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_headset/<?php echo $g_view->m_user_idx; ?>">헤드셋</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="30%">제품명</th>
                                                                <th>기안문서번호</th>
                                                                <th width="30%">구매일</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->h_product_name; ?></td>
                                                                <td><?php echo $g_view->h_gian_num; ?></td>
                                                                <td><?php echo $g_view->h_buy_day; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_cell/<?php echo $g_view->m_user_idx; ?>">전화기</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="30%">제품명</th>
                                                                <th>기안문서번호</th>
                                                                <th width="30%">구매일</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->c_product_name; ?></td>
                                                                <td><?php echo $g_view->c_gian_num; ?></td>
                                                                <td><?php echo $g_view->c_buy_day; ?></td>
                                                            </tr>
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
                                                <legend><label
                                                        class="uname_area"><?php echo $g_view->user_name ?></label>
                                                    <small class="f-s-12"><?php echo $g_view->user_group ?></small>
                                                    <small class="f-s-12">/ <?php echo $g_view->user_grade ?></small>
                                                </legend>
                                                <div id="about">
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_window/<?php echo $g_view->m_user_idx; ?>">Window
                                                            OS</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo nl2br($g_view->win_product_number); ?></td>
                                                                <td><?php echo $g_view->win_gian_num; ?></td>
                                                                <td><?php echo $g_view->win_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_ms/<?php echo $g_view->m_user_idx; ?>">MS-Office</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo nl2br($g_view->ms_product_number); ?></td>
                                                                <td><?php echo $g_view->ms_gian_num; ?></td>
                                                                <td><?php echo $g_view->ms_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_hangul/<?php echo $g_view->m_user_idx; ?>">한글</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo nl2br($g_view->han_product_number); ?></td>
                                                                <td><?php echo $g_view->han_gian_num; ?></td>
                                                                <td><?php echo $g_view->han_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_security/<?php echo $g_view->m_user_idx; ?>">보안프로그램</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th width="50%">제품번호</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo nl2br($g_view->security_product_number); ?></td>
                                                                <td><?php echo $g_view->security_gian_num; ?></td>
                                                                <td><?php echo $g_view->security_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_quark/<?php echo $g_view->m_user_idx; ?>">Quark</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>제품번호</th>
                                                                <th>Font</th>
                                                                <th>기안문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->quark_product_number; ?></td>
                                                                <td><?php echo $g_view->quark_font; ?></td>
                                                                <td><?php echo $g_view->quark_gian_num; ?></td>
                                                                <td><?php echo $g_view->quark_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_adobe/<?php echo $g_view->m_user_idx; ?>">Adobe</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>제품명</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                                <th>비고</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo nl2br($g_view->adobe_product); ?></td>
                                                                <td><?php echo $g_view->adobe_gian_num; ?></td>
                                                                <td><?php echo $g_view->adobe_duration; ?></td>
                                                                <td><?php echo $g_view->adobe_remarks; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_font/<?php echo $g_view->m_user_idx; ?>">Font</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>Asia</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                                <th>묵향</th>
                                                                <th>기안 문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->font_asia; ?></td>
                                                                <td><?php echo $g_view->font_a_gian_num; ?></td>
                                                                <td><?php echo $g_view->font_a_duration; ?></td>
                                                                <td><?php echo $g_view->font_mukhyang; ?></td>
                                                                <td><?php echo $g_view->font_m_gian_num; ?></td>
                                                                <td><?php echo $g_view->font_m_duration; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <a class="Bold"
                                                           href="/group/g_compress/<?php echo $g_view->m_user_idx; ?>">압축프로그램</a>
                                                        <table class="table table-striped table-advance table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>알집</th>
                                                                <th>기안문서번호</th>
                                                                <th>사용기간</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $g_view->compress_alzip; ?></td>
                                                                <td><?php echo $g_view->compress_gian_num; ?></td>
                                                                <td><?php echo $g_view->compress_duration; ?></td>
                                                            </tr>
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