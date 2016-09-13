<body>
<br/><br/>
<div id="wrapper" class="container">
    <fieldset>
        <legend>정보 수정</legend>
        <form class="form-horizontal" method="post" action="" id="write_action">
            <div class="form-group">
                <label for="asiafont2008" class="col-lg-2 control-label">Asia Font 2008</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="asiafont2008" name="asiafont2008" value="<?php echo $views -> asiafont2008;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="integrated_Package" class="col-lg-2 control-label">통합패키지WTTF</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="integrated_Package" name="integrated_Package" value="<?php echo $views -> integrated_Package;?>">
                </div>
            </div>
            <div class="form-actions">
                <div class="col-lg-10 col-lg-offset-2">
                    <button class="btn btn-default" onclick="history.back();">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="write_btn">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>

