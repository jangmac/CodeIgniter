<body>
<br/><br/>
<div id="wrapper" class="container">
    <fieldset>
        <legend>신규 등록</legend>
        <form class="form-horizontal" method="post" action="" id="write_action">
            <div class="form-group">
                <label for="product_name" class="col-lg-2 control-label">제품명</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
            </div>
            <div class="form-group">
                <label for="use_place" class="col-lg-2 control-label">사용장소</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="use_place" name="use_place">
                </div>
            </div>
            <div class="form-group">
                <label for="term" class="col-lg-2 control-label">계약기간</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="term" name="term">
                </div>
            </div>
            <div class="form-group">
                <label for="cost" class="col-lg-2 control-label">유지비용</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="cost" name="cost">
                </div>
            </div>
            <div class="form-group">
                <label for="color_a4" class="col-lg-2 control-label">칼라 A4</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="color_a4" name="color_a4">
                </div>
            </div>
            <div class="form-group">
                <label for="color_a3" class="col-lg-2 control-label">칼라 A3</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="color_a3" name="color_a3">
                </div>
            </div>
            <div class="form-group">
                <label for="black_a4" class="col-lg-2 control-label">흑백 A4</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="black_a4" name="black_a4">
                </div>
            </div>
            <div class="form-group">
                <label for="black_a3" class="col-lg-2 control-label">흑백 A3</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="black_a3" name="black_a3">
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

