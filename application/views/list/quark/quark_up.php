<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Quark(쿽) 업그레이드</h3>
                <a class="btn btn-success btn-sm" href="/soft/write_quark_up/">신규 등록</a>
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
                    <th scope="col">구분</th>
                    <th scope="col">Quark3</th>
                    <th scope="col">Quark4</th>
                    <th scope="col">Quark8</th>
                    <th scope="col">Quark9</th>
                    <th scope="col">Quark2015</th>
                    <th scope="col">Quark2015 시리얼</th>
                    <th scope="col">세종폰트 시리얼</th>
                    <th scope="col">사용자</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($quark_up as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt->idx; ?>
                        </th>
                        <td>
                            <a href="/soft/view_quark_up/<?php echo $lt->idx ?>"><?php echo $lt -> quark3;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark4;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark8;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark9;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark2015;?>
                        </td>
                        <td>
                            <?php echo $lt -> quark2015_serial;?>
                        </td>
                        <td>
                            <?php echo $lt -> sejong_font;?>
                        </td>
                        <td>
                            <?php echo $lt -> user;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





