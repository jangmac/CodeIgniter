<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-home"></i>전산사용대장</h3>
                <ol class="breadcrumb">
                    <li><i class="icon_document_alt"></i>그룹원 등록</li>
                    <li><i class="fa fa-files-o"></i>신규</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-black" data-sortable-id="form-stuff-4">
                    <section class="panel">
                        <header class="panel-heading">
                            신규등록
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" method="post" action="" id="write_action">
                                    <div class="form-group">
                                        <label for="user_name" class="col-lg-2 control-label">이름</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="user_name" name="user_name"  style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_email" class="col-lg-2 control-label">이메일</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="user_email" name="user_email" style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_group" class="col-lg-2 control-label">부서</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="user_group" name="user_group" style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_grade" class="col-lg-2 control-label">직책</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="user_grade" name="user_grade" style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_number" class="col-lg-2 control-label">내선</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="user_number" name="user_number"style="width:500px;">
                                        </div>
                                    </div>
                                    <!-- 그룹키로 그룹목록을 정해줌. -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="inputSuccess">그룹키</label>
                                        <div class="col-lg-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_gs" value="gs" checked>
                                                    경영지원본부
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_ad1" value="ad1">
                                                    광고1부
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_ad2" value="ad2">
                                                    광고2부
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_em_edit"
                                                           value="em_edit">
                                                    리크루트/편집
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_tv" value="tv">
                                                    여행사업팀
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="group_key" id="group_etc" value="etc">
                                                    기타
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    <div class="form-actions">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" class="btn btn-primary" id="write_btn">등록</button>
                                            <button class="btn btn-default" onclick="history.back();">취소</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</section>
</section>

