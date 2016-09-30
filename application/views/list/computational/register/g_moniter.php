<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            모니터
        </header>
        <div class="panel panel-black" data-sortable-id="form-stuff-4">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate form-horizontal" method="post" action=""
                              id="write_action">
                            <div class="form">
                                <input type="hidden" class="form-control" id="user_idx"
                                       name="user_idx"
                                       value="<?php echo $views->m_user_idx; ?>">
                                <div class="form-group ">
                                    <label for="company"
                                           class="control-label col-lg-2">제조사</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="company"
                                               name="company" minlength="5" type="text"
                                               value=<?php echo $views->m_company; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="product_name"
                                           class="control-label col-lg-2">제품명</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="product_name"
                                               type="text" name="product_name"
                                               value=<?php echo $views->m_product_name; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="model_code"
                                           class="control-label col-lg-2">모델코드</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="model_code"
                                               type="text" name="model_code"
                                               value=<?php echo $views->m_model_code; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="model_name" class="control-label col-lg-2">모델명</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="model_name"
                                               name="model_name" type="text"
                                               value=<?php echo $views->m_model_name; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="identify"
                                           class="control-label col-lg-2">식별부호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="identify"
                                               type="text" name="identify"
                                               value=<?php echo $views->m_identify; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="produce_ym"
                                           class="control-label col-lg-2">제조년월</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="produce_ym"
                                               type="text" name="produce_ym"
                                               value=<?php echo $views->m_produce_ym; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="soft_num"
                                           class="control-label col-lg-2">S/N</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="soft_num"
                                               type="text" name="soft_num"
                                               value=<?php echo $views->m_soft_num; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num"
                                           class="control-label col-lg-2">기안문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="gian_num"
                                               type="text" name="gian_num"
                                               value=<?php echo $views->m_gian_num; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="buy_day"
                                           class="control-label col-lg-2">구매일</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="buy_day"
                                               type="text" name="buy_day"
                                               value=<?php echo $views->m_buy_day; ?>>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-2">
                                        <button class="btn btn-success"
                                                onclick="history.back();">목록으로
                                        </button>
                                        <button type="submit" class="btn btn-primary"
                                                id="write_btn">수정
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</section>
<!--main content end-->