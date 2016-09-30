<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Quark(쿽)</h3>
        <header class="panel-heading">
            데이터 수정
        </header>

        <div class="panel panel-black" data-sortable-id="form-stuff-4">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate form-horizontal" method="post" action=""
                              id="write_action">
                            <div class="form-group">
                                <label for="quark3" class="col-lg-2 control-label">quark3</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark3" name="quark3" value="<?php echo $views -> quark3;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quark4" class="col-lg-2 control-label">quark4</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark4" name="quark4" value="<?php echo $views -> quark4;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quark8" class="col-lg-2 control-label">quark8</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark8" name="quark8" value="<?php echo $views -> quark8;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quark9" class="col-lg-2 control-label">quark9</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark9" name="quark9" value="<?php echo $views -> quark9;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quark2015" class="col-lg-2 control-label">quark2015</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark2015" name="quark2015" value="<?php echo $views -> quark2015;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quark2015_serial" class="col-lg-2 control-label">quark2015_serial</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quark2015_serial" name="quark2015_serial" value="<?php echo $views -> quark2015_serial;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sejong_font" class="col-lg-2 control-label">sejong_font</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="sejong_font" name="sejong_font" value="<?php echo $views -> sejong_font;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user" class="col-lg-2 control-label">user</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="user" name="user" value="<?php echo $views -> user;?>">
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-primary" onclick="history.back();">취소</button>
                                    <button type="submit" class="btn btn-success" id="write_btn">수정</button>
                                    <a href="/soft/quark_up_delete/<?php echo $this -> uri -> segment(3); ?>"
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