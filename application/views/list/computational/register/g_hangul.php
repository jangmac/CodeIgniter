<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>경영지원본부</h3>
        <header class="panel-heading">
            한글
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
                                    <label for="product_number"
                                           class="control-label col-lg-2">제품번호</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="product_number" name="product_number"><?php echo $views->product_number; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num"
                                           class="control-label col-lg-2">기안 문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="gian_num"
                                               type="text" name="gian_num"
                                               value=<?php echo $views->gian_num; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="duration"
                                           class="control-label col-lg-2">사용기간</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="duration"
                                               type="text" name="duration"
                                               value=<?php echo $views->duration; ?>>
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