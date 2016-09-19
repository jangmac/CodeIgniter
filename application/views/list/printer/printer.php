<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 프린터</h3>
                <a class="btn btn-primary btn-sm" href="/soft/write_printer/">등록</a>
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
                    <th scope="col" rowspan="3" >구분</th>
                    <th scope="col" rowspan="2">제품명</th>
                    <th scope="col" rowspan="2">사용장소</th>
                    <th scope="col" rowspan="2">계약기간</th>
                    <th scope="col" rowspan="2">유지비용</th>
                    <th scope="col" colspan="2">칼라</th>
                    <th scope="col" colspan="2">흑백</th>
                </tr>
                <tr>
                    <td scope="col">A4</td>
                    <td scope="col">A3</td>
                    <td scope="col">A4</td>
                    <td scope="col">A3</td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($printer as $lt) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> idx;?>
                        </th>
                        <td>
                            <a href="/soft/view_printer/<?php echo $lt->idx ?>"><?php echo $lt -> product_name;?>
                        </td>
                        <td>
                            <?php echo $lt -> use_place;?>
                        </td>
                        <td>
                            <?php echo $lt -> term;?>
                        </td>
                        <td>
                            <?php echo $lt -> cost;?>
                        </td>
                        <td>
                            <?php echo $lt -> color_a4;?>
                        </td>
                        <td>
                            <?php echo $lt -> color_a3;?>
                        </td>
                        <td>
                            <?php echo $lt -> black_a4;?>
                        </td>
                        <td>
                            <?php echo $lt -> black_a3;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>





