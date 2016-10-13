<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            본체
        </header>

        <div class="panel panel-black" data-sortable-id="form-stuff-4">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate form-horizontal" method="post" action=""
                              id="write_action">
                            <div class="form">
                                <input type="hidden" class="form-control" id="idx"
                                       name="idx"
                                       value="<?php echo $views->idx; ?>">
                                <div class="form-group ">
                                    <label for="company"
                                           class="control-label col-lg-2">제조사</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="company"
                                               name="company" type="text"
                                               value="<?php echo $views->company; ?>"
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="model_name"
                                           class="control-label col-lg-2">모델명</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="model_name"
                                               type="text" name="model_name"
                                               value="<?php echo $views->model_name; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="model_code"
                                           class="control-label col-lg-2">모델코드</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="model_code"
                                               type="text" name="model_code"
                                               value="<?php echo $views->model_code; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="produce_number" class="control-label col-lg-2">제조번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="produce_number"
                                               name="produce_number" type="text"
                                               value="<?php echo $views->produce_number; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="product_code" class="control-label col-lg-2">제품코드</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="product_code"
                                               name="product_code" type="text"
                                               value="<?php echo $views->product_code; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="identify"
                                           class="control-label col-lg-2">식별부호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="identify"
                                               type="text" name="identify"
                                               value="<?php echo $views->identify; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="produce_ym"
                                           class="control-label col-lg-2">제조년월</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="produce_ym"
                                               type="text" name="produce_ym"
                                               value="<?php echo $views->produce_ym; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="g_cpu"
                                           class="control-label col-lg-2">CPU</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="g_cpu"
                                               type="text" name="g_cpu"
                                               value="<?php echo $views->g_cpu; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="g_ram"
                                           class="control-label col-lg-2">RAM</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="g_ram"
                                               type="text" name="g_ram"
                                               value="<?php echo $views->g_ram; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="g_hdd_c"
                                           class="control-label col-lg-2">HDD(C:)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="g_hdd_c"
                                               type="text" name="g_hdd_c"
                                               value="<?php echo $views->g_hdd_c; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="g_hdd_d"
                                           class="control-label col-lg-2">HDD(D:)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="g_hdd_d"
                                               type="text" name="g_hdd_d"
                                               value="<?php echo $views->g_hdd_d; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="g_graphic"
                                           class="control-label col-lg-2">그래픽카드</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="g_graphic"
                                               type="text" name="g_graphic"
                                               value="<?php echo $views->g_graphic; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num"
                                           class="control-label col-lg-2">기안문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="gian_num"
                                               type="text" name="gian_num"
                                               value="<?php echo $views->gian_num; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="buy_day"
                                           class="control-label col-lg-2">구매일</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="buy_day"
                                               type="text" name="buy_day"
                                               value="<?php echo $views->buy_day; ?>">
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