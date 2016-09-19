<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 아시아폰트</h3>
                <a class="btn btn-primary btn-sm" href="/soft/write_asiafont_up/">등록</a>
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
                            <th scope="col">Asia Font 2008</th>
                            <th scope="col">통합패키지WTTF</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($asiafont_up as $lt) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $lt->idx; ?>
                                </th>
                                <td>
                                    <a href="/soft/view_asiafont_up/<?php echo $lt->idx ?>"><?php echo $lt->asiafont2008; ?>
                                </td>
                                <td>
                                    <?php echo $lt->integrated_Package; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





