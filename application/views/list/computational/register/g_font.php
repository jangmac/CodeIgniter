<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            폰트(Font)
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
                                    <label for="asia"
                                           class="control-label col-lg-2">Asia</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="asia"
                                               name="asia" type="text"
                                               value=<?php echo $views->asia; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="a_gian_num"
                                           class="control-label col-lg-2">Asia - 기안 문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="a_gian_num"
                                               name="a_gian_num" type="text"
                                               value=<?php echo $views->a_gian_num; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="a_duration"
                                           class="control-label col-lg-2">Asia - 사용기간</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="a_duration"
                                               name="a_duration" type="text"
                                               value=<?php echo $views->a_duration; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="mukhyang"
                                           class="control-label col-lg-2">묵향<span
                                            class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="mukhyang"
                                               name="mukhyang" type="text"
                                               value=<?php echo $views->mukhyang; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="m_gian_num"
                                           class="control-label col-lg-2">묵향 - 기안 문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="m_gian_num"
                                               type="text" name="m_gian_num"
                                               value=<?php echo $views->m_gian_num; ?>>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="m_duration"
                                           class="control-label col-lg-2">묵향 - 사용기간</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="m_duration"
                                               type="text" name="m_duration"
                                               value=<?php echo $views->m_duration; ?>>
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