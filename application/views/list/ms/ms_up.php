<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> MS-Office 업그레이드</h3>
                <a class="btn btn-primary btn-sm" href="/soft/write_ms_up/">등록</a>
                <a class="btn btn-danger btn-sm"> 삭제</a>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        목록
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th scope="col" width="10%">구분</th>
                            <th scope="col">MS-Office 2003 Professional</th>
                            <th scope="col">MS-Office 2007 Professional</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($ms_up as $lt) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $lt->idx; ?>
                                </th>
                                <td>
                                    <a href="/soft/view_ms_up/<?php echo $lt->idx ?>"><?php echo $lt->office2003_pro; ?>
                                </td>
                                <td>
                                    <?php echo $lt->office2007_pro; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





