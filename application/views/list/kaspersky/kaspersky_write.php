<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-home"></i> 등록페이지</h3>
                <ol class="breadcrumb">
                    <li><i class="icon_document_alt"></i>카스퍼스키</li>
                    <li><i class="fa fa-files-o"></i>신규</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        신규등록
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="" id="write_action">
                                <div class="form-group">
                                    <label for="product_name" class="col-lg-2 control-label">제품명</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="product_name" name="product_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="version" class="col-lg-2 control-label">버전</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="version" name="version">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company" class="col-lg-2 control-label">제조사</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="purpose" class="col-lg-2 control-label">제품용도</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="purpose" name="purpose">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="compatibility" class="col-lg-2 control-label">호환성</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="compatibility" name="compatibility">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="duration" class="col-lg-2 control-label">사용기간(2년)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="duration" name="duration">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sirial_num" class="col-lg-2 control-label">시리얼번호</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="sirial_num" name="sirial_num">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="package" class="col-lg-2 control-label">패키지 유/무</label>
                                    <div class="col-lg-10">
                                        <input type="checkbox" name="package" value="√"> 패키지 있으면 선택하세요
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="license_numb" class="col-lg-2 control-label">라이선스</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="license_numb" name="license_numb">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keep_place" class="col-lg-2 control-label">보관장소</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="keep_place" name="keep_place">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class="col-lg-2 control-label">비고</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="remarks" name="remarks">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default" onclick="history.back();">취소</button>
                                        <button type="submit" class="btn btn-primary" id="write_btn">등록</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

