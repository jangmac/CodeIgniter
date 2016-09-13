<body>
<br/><br/>
<div id="wrapper" class="container">
    <fieldset>
        <legend>정보 수정</legend>
        <form class="form-horizontal" method="post" action="" id="write_action">
            <div class="form-group">
                <label for="window7" class="col-lg-2 control-label">Window7 32Bit Professional</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="window7" name="window7" value="<?php echo $views -> window7;?>">
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

