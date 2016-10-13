<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            전화기
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
                                    <label for="product_name"
                                           class="control-label col-lg-2">제품명</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="product_name"
                                               name="product_name" type="text"
                                               value=<?php echo $views->product_name; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num" class="control-label col-lg-2">기안문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="gian_num"
                                               name="gian_num" type="text"
                                               value=<?php echo $views->gian_num; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="buy_day"
                                           class="control-label col-lg-2">구매일</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="buy_day"
                                               type="text" name="buy_day"
                                               value=<?php echo $views->buy_day; ?>>
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