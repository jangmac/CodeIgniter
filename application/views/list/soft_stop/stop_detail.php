<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>소프트웨어(사용불가)</h3>
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
                                    <label for="version" class="col-lg-2 control-label">버전</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="version" name="version" value="<?php echo $views -> version;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company" class="col-lg-2 control-label">제조사</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="company" name="company" value="<?php echo $views -> company;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="purpose" class="col-lg-2 control-label">제품용도</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="purpose" name="purpose" value="<?php echo $views -> purpose;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="target" class="col-lg-2 control-label">사용대상</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="target" name="target" value="<?php echo $views -> target;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="compatibility" class="col-lg-2 control-label">호환성</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="compatibility" name="compatibility" value="<?php echo $views -> compatibility;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sirial_num" class="col-lg-2 control-label">시리얼번호</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="sirial_num" name="sirial_num" value="<?php echo $views -> sirial_num;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="package" class="col-lg-2 control-label" name="package">패키지 유/무</label>
                                    <div class="col-lg-10">
                                        <input type="checkbox" name="package" value=<?php if($views -> package) echo  "v";?>> 패키지 있으면 선택하세요
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="license_numb" class="col-lg-2 control-label">라이선스</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="license_numb" name="license_numb" value="<?php echo $views -> license_numb;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keep_place" class="col-lg-2 control-label">보관장소</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="keep_place" name="keep_place" value="<?php echo $views -> keep_place;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class="col-lg-2 control-label">비고</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="remarks" name="remarks" value="<?php echo $views -> remarks;?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-primary" onclick="history.back();">취소</button>
                                        <button type="submit" class="btn btn-success" id="write_btn">수정</button>
                                        <a href="/soft/soft_stop_delete/<?php echo $this -> uri -> segment(3); ?>"
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