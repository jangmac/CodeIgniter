<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>프린터</h3>
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
                                <input type="hidden" class="form-control" id="idx" name="idx" value="<?php echo $views -> idx;?>">

                                <div class="form-group">
                                    <label for="product_name" class="col-lg-2 control-label">제품명</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $views -> product_name;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="use_place" class="col-lg-2 control-label">사용장소</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="use_place" name="use_place" value="<?php echo $views -> use_place;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="term" class="col-lg-2 control-label">계약기간</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="term" name="term" value="<?php echo $views -> term;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cost" class="col-lg-2 control-label">유지비용</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="cost" name="cost" value="<?php echo $views -> cost;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="color_a4" class="col-lg-2 control-label">칼라 A4</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="color_a4" name="color_a4" value="<?php echo $views -> color_a4;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="color_a3" class="col-lg-2 control-label">칼라 A3</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="color_a3" name="color_a3" value="<?php echo $views -> color_a3;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="black_a4" class="col-lg-2 control-label">흑백 A4</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="black_a4" name="black_a4" value="<?php echo $views -> black_a4;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="black_a3" class="col-lg-2 control-label">흑백 A3</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="black_a3" name="black_a3" value="<?php echo $views -> black_a3;?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-primary" onclick="history.back();">취소</button>
                                        <button type="submit" class="btn btn-success" id="write_btn">수정</button>
                                        <a href="/soft/printer_delete/<?php echo $this -> uri -> segment(3); ?>"
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