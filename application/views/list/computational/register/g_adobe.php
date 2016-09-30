<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            Adobe
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
                                    <label for="adobe_product"
                                           class="control-label col-lg-2">제품명</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="adobe_product"
                                                  name="adobe_product"><?php echo $views->adobe_product; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num"
                                           class="control-label col-lg-2">기안 문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="gian_num"
                                               name="gian_num" type="text"
                                               value=<?php echo $views->adobe_gian_num; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="duration"
                                           class="control-label col-lg-2">사용기간</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="duration"
                                               type="text" name="duration"
                                               value=<?php echo $views->adobe_duration; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="remarks"
                                           class="control-label col-lg-2">비고</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="remarks"
                                               type="text" name="remarks"
                                               value=<?php echo $views->adobe_remarks; ?>>
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