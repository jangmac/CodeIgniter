<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>XP 업/다운그레이드</h3>
        <header class="panel-heading">
            데이터 수정
        </header>

        <div class="panel panel-black" data-sortable-id="form-stuff-4">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate form-horizontal" method="post" action=""
                              id="write_action">
                            <div class="form">
                                <div class="form-group">
                                    <label for="window7" class="col-lg-2 control-label">Window7 32Bit Professional</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="window7" name="window7" value="<?php echo $views -> window7;?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-primary" onclick="history.back();">취소</button>
                                        <button type="submit" class="btn btn-success" id="write_btn">수정</button>
                                        <a href="/soft/xp_down_delete/<?php echo $this -> uri -> segment(3); ?>"
                                           class="btn btn-danger"> 삭제 </a>
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