@extends('layouts.app')

@section('content')

<div>
    <div class="container-fluid text-center leap py-1">
        <span> 請假申請作業</span>
    </div>
    <div class="container text-center d1 pt-2">
            <div class="row ">
                <div class="col-lg-2 col-6">
                    <label>班級名稱</label>
                </div>
                <div class="col-lg-2 col-6">
                    <label>科管系四三甲</label>
                </div>
                <div class="col-lg-2 col-6">
                    <label>電子信箱</label>
                </div>
                <div class="col-lg-2 col-6">
                    <label>{{ Auth::user()->email }}</label>
                </div>
                <div class="col-lg-2 col-6">
                    <label>姓名</label>
                </div>
                <div class="col-lg-2 col-6">
                    <label>{{ Auth::user()->name }}</label>
                </div>
            </div>
            
            <hr wight="70%">
    </div>
    <div class="container text-center d2 pb-1">
            <div class="row pb-2">
                <div class="col-lg-2 col-5">
                   <label>請假日期</label>
                </div>
                <div class="col-lg-5 col-6 text-left pb-2">
                    <input type="date">~
                    <input type="date">
                </div>
                <div class="col-lg-2 col-5 ">
                    <label>請假種類 </label>
                </div>
                <div class="col-lg-1 col-6">
                    <select>
                        <option value ="選擇">-選擇</option>
                        <option value ="病假">病假</option>
                        <option value="事假">事假</option>
                        <option value="喪假">喪假</option>
                        <option value ="產假">產假</option>
                        <option value ="公假">公假</option>
                        <option value="婚假">婚假</option>
                        <option value="陪病假">陪病假</option>
                        <option value="哺育假">哺育假</option>
                      </select>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-2 col-6">
                    <label>請假原因</label>
                </div>
                <div class="col-lg-1">
                    <input type="text" size="35">
                </div>
            </div>
    </div>

    <div class="container text-center">
        非連續日期請假，請分不同假單請假，否則假單需學務長（４日以上）校長（６日以上）簽核<br>
        若有同學陪病 請務必輸入 陪病者 以方便陪伴的同學請【陪病假】. <br>
        陪病者 需經由導師或輔導教官指定陪診或照顧住院同學，未經同意視同缺課。
    </div>

    <div class="container text-center py-2">
        <input type="button" value="更多" onclick="add_new_data()">
        <input type="button" value="課表" data-toggle="collapse" data-target="#classtable" aria-expanded="false" aria-controls="classtable">
        <input type="button" value="確認">
    </div>

    <div class="margin text-center collapse" id="classtable">
        <div class=""  >
            <!-- LINK 課表 -->
            <!-- <div w3-include-html="w1.html"></div>   -->
        </div>
        <input type="button" value="加入表單">
    </div>


    <div class="container">
        <table class="table table-hover table-bordered table-sm table-responsive" id="mytable" >
            <thead>
              <tr>
                <th scope="col">序</th>
                <th scope="col">請假日期<div class="d-block d-lg-inline"></div>(ex:1010401)</th>
                <th scope="col">請假時數</th>
                <th scope="col">上課節次</th>
                <th scope="col">上課科目</th>
                <th scope="col">選其他項需在此說明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><input class="text" name="content[]" size="10"></td>
                <td><select name="time[]">
                        <option value>-選擇</option>
                        <option value ="01">1</option>
                        <option value ="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value ="05">5</option>
                        <option value ="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select></td>
                <td><select name="num[]">
                    <option value>-選擇</option>
                    <option value="00">朝會</option>
                    <option value="00">勞作教育</option>
                    <option value ="01">1</option>
                    <option value ="02">2</option>
                    <option value="03">3</option>
                    <option value="04">4</option>
                    <option value ="05">5</option>
                    <option value ="06">6</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select></td>
                <td><select>
                        <option value>-選擇</option>
                        <option value ="I47P6A">.NET 程式設計(科管系四三甲)</option>
                        <option value ="I44k6A">3D列印與設計(科管系四三甲)</option>
                        <option value="I48G6A">行動裝置應用程式設計(科管系四三甲)</option>
                        <option value="I4336A">作業系統(科管系四三甲)</option>
                        <option value ="I4806A">角色動畫(科管系四三甲)</option>
                        <option value ="I4B26A">專題實作（一）(科管系四三甲)</option>
                        <option value="I4U76A">雲端計算(科管系四三甲)</option>
                        <option value="I4846A">影片剪輯(科管系四三甲)</option>
                        <option value="I44M6A">數位配樂(科管系四三甲)</option>
                        <option value="toptom">班會</option>
                        <option value="albert">實習</option>
                        <option value="morning">朝會</option>
                        <option value="other">其他</option>
                      </select></td>
                <td><input class="text" name="else[]" size="20"></td>
              </tr>

            </tbody>
          </table>
    </div>

    <div class="container text-center py-1">
        請確實選取正確【上課科目】 本學年度 請假時數累計已 0 小時
    </div>

    <div class="container text-center">
        <input type="button" value="確認">
    </div>
</div>


@endsection