<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> XP 다운그레이드</h3>
                <a class="btn btn-success btn-sm" href="/soft/write_xp_down/">신규 등록</a>
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
                            <th scope="col">Window7 32Bit Professional</th>
                            <th scope="col">Window XP Professional</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($xp_down as $lt) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $lt->idx; ?>
                                </th>
                                <td>
                                    <a href="/soft/view_xp_down/<?php echo $lt->idx ?>"><?php echo $lt->window7; ?>
                                </td>
                                <td>
                                    <?php echo "V9BG9-Q496K-4BXM7-RJCXG-QYGJT" ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





