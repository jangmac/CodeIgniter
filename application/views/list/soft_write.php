<body>
<br /><br />
<div id="wrapper" class="container">
    <form class="form-horizontal">
        <fieldset>
            <legend>신규등록</legend>
            <form class="form-horizontal" method="post" action="" id="write_action">
            <div class="form-group">
                <label class="col-lg-2 control-label">등록유형</label>
                <div class="col-lg-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            소프트웨어관리대장(진행)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            소프트웨어관리대장(보관)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            소프트웨어관리대장(사용중지)
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="product_name" class="col-lg-2 control-label">제품명</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
            </div>
            <div class="form-group">
                <label for="version" class="col-lg-2 control-label">버전</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="version" name="version">
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="col-lg-2 control-label">제조사</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="company" name="company">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">제품용도</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="input01" name="purpose">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">사용대상</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="input01" name="target">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">호환성</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="input01" name="compatibility">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">시리얼번호</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" name="sirial_num">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label" name="package">패키지 유/무</label>
                <div class="col-lg-10">
                    <input type="checkbox"> 패키지 있으면 선택하세요
                </div>
            </div><div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">라이선스</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" name="license_numb">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">보관장소</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" name="keep_place">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">사용수</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" name="use_num">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">비고</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" name="remarks">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button class="btn btn-default" onclick="document.location.reload()">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="write_btn">Submit</button>
                </div>
            </div>
            </form>
        </fieldset>
    </form>

    <div class="inner">
        <h1>신규 등록</h1>
        <form class="form-horizontal" method="post" action="" id="write_action">
            <button type="submit" class="btn btn-primary" id="write_btn">
                작성
            </button>
            <button class="btn" onClick="history.back();">
                취소
            </button>
        </form>
    </div>

