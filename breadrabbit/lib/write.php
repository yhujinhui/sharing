 <body>
    <header>
        <a href=""></a>
    </header>
    <form action="<?=$formhref?>" method="post" name="formBread" onsubmit="return chkBreadKinds();">
        <div>
            <img src="images/bread1.png" id="breadImg">
        </div>
        <div class="selectKinds">
            <select id="selectKinds" name="Kinds" onchange="alert_select_value(this)" required>
                <option value="none" selected>빵 종류를 선택하세요</option>
                <option value="course">진로</option>
                <option value="family">가족</option>
                <option value="friend">친구</option>
                <option value="love">사랑</option>
                <option value="other">기타</option>
            </select>
            <br/>
        </div>

        <div>
            <p>
                <input type="text" name="breadName" id="breadText" placeholder="빵 이름을 지어주세요" required value="<?=$escaped_title?>">
            </p>
            <p>
                <textarea rows="10" cols="33" name="breadContents" id="breadTextArea" placeholder="고민을 적어주세요" required><?=$escaped_description?></textarea>
            </p>