<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>광고 2부</h3>
                <a class="btn btn-success btn-sm" href="/group/ad2_user_register/"> 그룹원 추가</a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-black" data-sortable-id="form-stuff-4">
                    <section class="panel">
                        <header class="panel-heading">
                            목록
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th>부서</th>
                                <th>이름</th>
                                <th>이메일</th>
                                <th>내선</th>
                                <th>직책</th>
                            </tr>
                            <?php
                            foreach ($g_ad2 as $lt) {
                                ?>
                                <tr>
                                    <td><?php echo $lt -> user_group;?></td>
                                    <td><a href="/group/g_view/<?php echo $lt->idx ?>"><?php echo $lt -> user_name;?></td>
                                    <td><?php echo $lt -> user_email;?></td>
                                    <td><?php echo $lt -> user_number;?></td>
                                    <td><?php echo $lt -> user_grade;?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
    </section>
</section>
<!--main content end-->