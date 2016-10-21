<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Window 현재사용내역</h3>
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
                            <th scope="col">사용자</th>
                            <th scope="col">제품명</th>
                            <th scope="col">버전</th>
                            <th scope="col">제조사</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($use_window as $lt) {
                            ?>
                            <tr>
                                <td>
                                    <b><?php echo $lt->user_name; ?></b>
                                </td>
                                <td>
                                    <?php echo $lt->product_number; ?>
                                </td>
                                <td>
                                    <?php echo $lt->gian_num; ?>
                                </td>
                                <td>
                                    <?php echo $lt->duration; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





