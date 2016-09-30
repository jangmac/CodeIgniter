<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>전산 현황</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i>Home</li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-cloud-download"></i>
                    <div class="count">사용자 인원</div>
                    <div class="title">Download</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count">전산실 서버현황</div>
                    <div class="title">Purchased</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">PC 개수</div>
                    <div class="title">Order</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count">모니터 개수</div>
                    <div class="title">Stock</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
        </div><!--/.row-->
        <!-- Today status end -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>각 소프트웨어 현황</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>목록</th>
                                <th>보관장소</th>
                                <th>등록수</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>소프트웨어관리대장(진행)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_progress']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_progress/">신규 등록</a>
                                    <a class="btn btn-success btn-sm" href="/soft/progress_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>소프트웨어관리대장(보관)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_keep']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_keep/">신규 등록</a>
                                    <a class="btn btn-success btn-sm" href="/soft/keep_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>소프트웨어관리대장(사용불가)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_stop']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_stop/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/stop_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>카스퍼스키관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['kaspersky']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_kaspersky/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/kaspersky/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>프린터관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['printer']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_printer/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/printer/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>XP 업/다운그레이드</td>
                                <td>전산실</td>
                                <td><?php echo $counter['xp_down']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_xp_down/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/xp_down/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>MS-Office 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['ms_up']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_ms_up/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/ms_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Quark(쿽) 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['quark_up']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_quark_up/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/quark_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>아시아폰트 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['asiafont_up']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/soft/write_asiafont_up/">신규 등록</a>
                                    <a class="btn btn-success k btn-sm" href="/soft/asiafont_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--/col-->
        </div>
        <!-- statics end -->
        <!-- project team & activity start -->
        <div class="row">
            <div class="col-lg-12">
                <!--Project Activity start-->
                <section class="panel">
                    <div class="panel-body progress-panel">
                        <div class="row">
                            <div class="col-lg-8 task-progress pull-left">
                                <h1>관리자 액션로그</h1>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                        <tr>
                            <td>날짜</td>
                            <td>간략 내용</td>
                            <td>상태</td>
                            <td>관리자</td>
                        </tr>
                        <tr>
                            <td>2016-09-12</td>
                            <td>
                                소프트웨어(진행) 수정
                            </td>
                            <td>
                                <span class="badge bg-success">등록</span>
                                <span class="badge bg-info">수정</span>
                                <span class="badge bg-warning">삭제</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <!--Project Activity end-->
            </div>
        </div>
    </section>
</section>



    

