<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>그룹원</h3>
        <header class="panel-heading">
            정보수정
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
                                       value="<?php echo $g_user->idx; ?>">
                                <div class="form-group ">
                                    <label for="user_name"
                                           class="control-label col-lg-2">이름</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="user_name"
                                               name="user_name" type="text"
                                               value=<?php echo $g_user->user_name; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="user_group"
                                           class="control-label col-lg-2">부서</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="user_group"
                                               name="user_group" type="text"
                                               value=<?php echo $g_user->user_group; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="user_email"
                                           class="control-label col-lg-2">이메일</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="user_email"
                                               name="user_email" type="text"
                                               value=<?php echo $g_user->user_email; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="user_number"
                                           class="control-label col-lg-2">내선</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="user_number"
                                               name="user_number" type="text"
                                               value=<?php echo $g_user->user_number; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="user_grade"
                                           class="control-label col-lg-2">직책</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="user_grade"
                                               name="user_grade" type="text"
                                               value=<?php echo $g_user->user_grade; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2" for="inputSuccess">그룹키</label>
                                    <div class="col-lg-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_gs" value="gs"
                                                    <?php if ($g_user->group_key == 'gs') echo "checked"; ?>>
                                                경영지원본부
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_ad1" value="ad1"
                                                    <?php if ($g_user->group_key == 'ad1') echo "checked"; ?>>
                                                광고1부
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_ad2" value="ad2"
                                                    <?php if ($g_user->group_key == 'ad2') echo "checked"; ?>>
                                                광고2부
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_em_edit"
                                                       value="em_edit"
                                                    <?php if ($g_user->group_key == 'em_edit') echo "checked"; ?>>
                                                리크루트/편집
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_tv" value="tv"
                                                    <?php if ($g_user->group_key == 'tv') echo "checked"; ?>>
                                                여행사업팀
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="group_key" id="group_etc" value="etc"
                                                    <?php if ($g_user->group_key == 'etc') echo "checked"; ?>>
                                                기타
                                            </label>
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