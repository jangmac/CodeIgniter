<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
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
                                <th>가장많은 소프트웨어</th>
                                <th>등록수</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>소프트웨어관리대장(진행)</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <div class="progress thin">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 73%">
                                        </div>
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 27%">
                                        </div>
                                    </div>
                                    <span class="sr-only">73%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>소프트웨어관리대장(보관)</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <div class="progress thin">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 20%">
                                        </div>
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%">
                                        </div>
                                    </div>
                                    <span class="sr-only">20%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>소프트웨어관리대장(사용불가)</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <div class="progress thin">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 20%">
                                        </div>
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%">
                                        </div>
                                    </div>
                                    <span class="sr-only">20%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>카스퍼스키관리대장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <div class="progress thin">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 20%">
                                        </div>
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%">
                                        </div>
                                    </div>
                                    <span class="sr-only">20%</span>
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
                            <td>Yesterday</td>
                            <td>
                                Project Design Task
                            </td>
                            <td>
                                <span class="badge bg-success">등록</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>21-10-14</td>
                            <td>
                                Generate Invoice
                            </td>
                            <td>
                                <span class="badge bg-success">등록</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>22-10-14</td>
                            <td>
                                Project Testing
                            </td>
                            <td>
                                <span class="badge bg-primary">수정</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>24-10-14</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-info">삭제</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>28-10-14</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-primary">수정</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>Last week</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-primary">수정</span>
                            </td>
                            <td>
                                장근식
                            </td>
                        </tr>
                        <tr>
                            <td>last month</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-primary">수정</span>
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
        <br><br>


        <!-- Footer goes here -->
        </div>
        </div>
        </div>

        </div>

        </div>
        <!-- project team & activity end -->

    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->



    

