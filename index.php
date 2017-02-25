<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>【校園巡迴講座】回饋表單</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
      include "connect_db.php";
      $find_id='SELECT MAX(`id`) FROM `questionnaire`';
      $result=mysqli_query($connect,$find_id);
      $id=mysqli_fetch_array($result)[0]+1;
      session_start();
      $_SESSION['id']=$id;
      $insert="INSERT INTO `questionnaire` (`id`) VALUES ($id)";
      mysqli_query($connect,$insert);
    ?>
    <style>
      .nav{
        width: 280px;
        height: 100px;
      }
    </style>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="nav" src="assets/img/Mi.png" alt="Stanley">


        <h2 style="font-family:Microsoft JhengHei;" class="navbar-brand  navbar-right">【校園巡迴講座】回饋表單</h2>

      </div>
    </div>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <img id="gshan" width="150" height="150" src="">
          <h1 id="hi" style="font-family:Microsoft JhengHei;"><strong></strong></h1>

          <p style="font-family:Microsoft JhengHei;" class="text-01">感謝參與這次的微軟實習 校園巡迴講座活動</p>
          <p style="font-family:Microsoft JhengHei;" class="text-01">我們非常重視各位意見，對於微軟實習計畫更感興趣的話</p>
          <p style="font-family:Microsoft JhengHei;" class="text-01">可前往Facebook粉絲專頁：<a style="font-family:Microsoft JhengHei;" href="https://www.facebook.com/Microsoft.Student.Program">微軟實習 未來生涯體驗計劃</a></p>
          <p style="font-family:Microsoft JhengHei;" class="text-01">或是未來生涯體驗計畫：<a style="font-family:Microsoft JhengHei;" href="https://www.microsoft.com/taiwan/campus/">台灣微軟 未來生涯體驗計劃</a></p>


        </div><!-- /col-lg-8 -->
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->


  <!-- +++++ Projects Section +++++ -->

  <!--Insert to DB-->
   <script type="text/javascript">
      var question=[];
      function load(value){
        q_num=value.split("-")[0];
        question[parseInt(q_num)]=value.split("-")[1];
        //alert(value.split("-")[1])
          }

      function submit(){
        var other=document.getElementById("other").value;
        var comment=document.getElementById("comment").value;
        var name=document.getElementById("name").value;
        var phone=document.getElementById("phone").value;
        if(other!="")
            question[5]="6."+other;
        
        var x="";
        for(i=1;i<6;i++){
          x=x+question[i];
        }
        alert(other+"/"+comment+"/"+name);
        //alert(question);
        //window.location.href='insert_db.php?name='+name+'&phone='+phone+'&one='+question[1]+'&two='+question[2]+'&three='+question[3]+'&four='+question[4]+'&five='+question[5]+'&six='+question[6]+'&comment='+comment;
      }
    </script>


  <div class="container pt">
    <div class="row mt centered">
      <div class="col-md-3 col-md-offset-3">
        <h4 style="font-family:Microsoft JhengHei; text-align:left;"><nobr style="color:red;">*</nobr> 必填</h4>
        <input id="name" class="form-control" id="inputPassword2" placeholder="姓名" style="font-family:Microsoft JhengHei;">
        <br>
        <input type="number" pattern="\d*" id="phone" class="form-control" id="inputPassword2" placeholder="手機後五碼" style="font-family:Microsoft JhengHei;">
        <br>
      </div>



      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">1. 您對於活動的整體滿意度 ? <nobr style="color:red;">*</nobr></h3>
        <div style="background-color:#AFEEEE; border-radius: 5px; font-family:Microsoft JhengHei;"><p id="rwd-lavel1-1"></p></div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel1-2">很不滿意&nbsp;</nobr>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-1" id="group-1-0" value="1-10"  onclick="load(value)" /><label for="group-1-0"></label>
                <input type="radio" name="group-1" id="group-1-1" value="1-9"  onclick="load(value)" /><label for="group-1-1"></label>
                <input type="radio" name="group-1" id="group-1-2" value="1-8"  onclick="load(value)" /><label for="group-1-2"></label>
                <input type="radio" name="group-1" id="group-1-3" value="1-7"  onclick="load(value)" /><label for="group-1-3"></label>
                <input type="radio" name="group-1" id="group-1-4" value="1-6"  onclick="load(value)" /><label for="group-1-4"></label>
                <input type="radio" name="group-1" id="group-1-5" value="1-5"  onclick="load(value)" /><label for="group-1-5"></label>
                <input type="radio" name="group-1" id="group-1-6" value="1-4"  onclick="load(value)" /><label for="group-1-6"></label>
                <input type="radio" name="group-1" id="group-1-7" value="1-3"  onclick="load(value)" /><label for="group-1-7"></label>
                <input type="radio" name="group-1" id="group-1-8" value="1-2"  onclick="load(value)" /><label for="group-1-8"></label>
                <input type="radio" name="group-1" id="group-1-9" value="1-1"  onclick="load(value)" /><label for="group-1-9"></label>
            </form>
        </div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel1-3">&nbsp;非常完美</nobr>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">2. 講師的內容符合您的期待 ? <nobr style="color:red;">*</nobr></h3>
        <div style="background-color:#AFEEEE; border-radius: 5px; font-family:Microsoft JhengHei;"><p id="rwd-lavel2-1"></p></div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel2-2">差強人意&nbsp;</nobr>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-2" id="group-2-0" value="2-10"  onclick="load(value)" /><label for="group-2-0"></label>
                <input type="radio" name="group-2" id="group-2-1" value="2-9"  onclick="load(value)" /><label for="group-2-1"></label>
                <input type="radio" name="group-2" id="group-2-2" value="2-8"  onclick="load(value)" /><label for="group-2-2"></label>
                <input type="radio" name="group-2" id="group-2-3" value="2-7"  onclick="load(value)" /><label for="group-2-3"></label>
                <input type="radio" name="group-2" id="group-2-4" value="2-6"  onclick="load(value)" /><label for="group-2-4"></label>
                <input type="radio" name="group-2" id="group-2-5" value="2-5"  onclick="load(value)" /><label for="group-2-5"></label>
                <input type="radio" name="group-2" id="group-2-6" value="2-4"  onclick="load(value)" /><label for="group-2-6"></label>
                <input type="radio" name="group-2" id="group-2-7" value="2-3"  onclick="load(value)" /><label for="group-2-7"></label>
                <input type="radio" name="group-2" id="group-2-8" value="2-2"  onclick="load(value)" /><label for="group-2-8"></label>
                <input type="radio" name="group-2" id="group-2-9" value="2-1"  onclick="load(value)" /><label for="group-2-9"></label>
            </form>
        </div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel2-3">&nbsp;樂在其中</nobr>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">3. 您是否透過介紹與分享，了解實習計畫 ? <nobr style="color:red;">*</nobr></h3>
        <div style="background-color:#AFEEEE; border-radius: 5px; font-family:Microsoft JhengHei;"><p id="rwd-lavel3-1"></p></div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel3-2">不太了解&nbsp;</nobr>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-3" id="group-3-0" value="3-10"  onclick="load(value)" /><label for="group-3-0"></label>
                <input type="radio" name="group-3" id="group-3-1" value="3-9"  onclick="load(value)" /><label for="group-3-1"></label>
                <input type="radio" name="group-3" id="group-3-2" value="3-8"  onclick="load(value)" /><label for="group-3-2"></label>
                <input type="radio" name="group-3" id="group-3-3" value="3-7"  onclick="load(value)" /><label for="group-3-3"></label>
                <input type="radio" name="group-3" id="group-3-4" value="3-6"  onclick="load(value)" /><label for="group-3-4"></label>
                <input type="radio" name="group-3" id="group-3-5" value="3-5"  onclick="load(value)" /><label for="group-3-5"></label>
                <input type="radio" name="group-3" id="group-3-6" value="3-4"  onclick="load(value)" /><label for="group-3-6"></label>
                <input type="radio" name="group-3" id="group-3-7" value="3-3"  onclick="load(value)" /><label for="group-3-7"></label>
                <input type="radio" name="group-3" id="group-3-8" value="3-2"  onclick="load(value)" /><label for="group-3-8"></label>
                <input type="radio" name="group-3" id="group-3-9" value="3-1"  onclick="load(value)" /><label for="group-3-9"></label>
            </form>
        </div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel3-3">&nbsp;充分了解</nobr>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">4. 實習生的分享內容，讓您有所收穫 ? <nobr style="color:red;">*</nobr></h3>
        <div style="background-color:#AFEEEE; border-radius: 5px; font-family:Microsoft JhengHei;"><p id="rwd-lavel4-1"></p></div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel4-2">毫無收穫&nbsp;</nobr>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-4" id="group-4-0" value="4-10"  onclick="load(value)" /><label for="group-4-0"></label>
                <input type="radio" name="group-4" id="group-4-1" value="4-9"  onclick="load(value)" /><label for="group-4-1"></label>
                <input type="radio" name="group-4" id="group-4-2" value="4-8"  onclick="load(value)" /><label for="group-4-2"></label>
                <input type="radio" name="group-4" id="group-4-3" value="4-7"  onclick="load(value)" /><label for="group-4-3"></label>
                <input type="radio" name="group-4" id="group-4-4" value="4-6"  onclick="load(value)" /><label for="group-4-4"></label>
                <input type="radio" name="group-4" id="group-4-5" value="4-5"  onclick="load(value)" /><label for="group-4-5"></label>
                <input type="radio" name="group-4" id="group-4-6" value="4-4"  onclick="load(value)" /><label for="group-4-6"></label>
                <input type="radio" name="group-4" id="group-4-7" value="4-3"  onclick="load(value)" /><label for="group-4-7"></label>
                <input type="radio" name="group-4" id="group-4-8" value="4-2"  onclick="load(value)" /><label for="group-4-8"></label>
                <input type="radio" name="group-4" id="group-4-9" value="4-1"  onclick="load(value)" /><label for="group-4-9"></label>
            </form>
        </div>
        <nobr style="font-family:Microsoft JhengHei;" id="rwd-lavel4-3">&nbsp;滿載而歸</nobr>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">5. 您是如何知道本次活動 ? <nobr style="color:red;">*</nobr></h3>
        </br>
        <div class="col-md-6 col-md-offset-3 text-left">
            <input type="radio" name="group-5" id="group-5-0" value="5-1.粉絲專頁(FB社群平台)"  onclick="load(value)"/><label for="group-5-0" style="font-family:Microsoft JhengHei;">&nbsp; 粉絲專頁(FB社群平台)</label></br>
              <input type="radio" name="group-5" id="group-5-1" value="5-2.微軟實習官方網站"  onclick="load(value)"/><label for="group-5-1" style="font-family:Microsoft JhengHei;">&nbsp; 微軟實習官方網站</label></br>
              <input type="radio" name="group-5" id="group-5-2" value="5-3.海報 / 傳單"  onclick="load(value)"/><label for="group-5-2" style="font-family:Microsoft JhengHei;">&nbsp; 海報 / 傳單</label></br>
              <input type="radio" name="group-5" id="group-5-3" value="5-4.宣傳攤位"  onclick="load(value)"/><label for="group-5-3" style="font-family:Microsoft JhengHei;">&nbsp; 宣傳攤位</label></br>
              <input type="radio" name="group-5" id="group-5-4" value="5-5.親友分享"  onclick="load(value)"/><label for="group-5-4" style="font-family:Microsoft JhengHei;">&nbsp; 親友分享</label></br>
              </label><input id="other" class="form-control" id="inputPassword2" placeholder="其他" style="font-family:Microsoft JhengHei;">
          </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h4 style="font-family:Microsoft JhengHei; text-align:left;">6. 您是否會想報名【台灣微軟-未來生涯體驗計畫】呢? <nobr style="color:red;">*</nobr></h4>
        </br>
        <div class="col-md-6 col-md-offset-3 text-left">
            <form>
                <input type="radio" name="group-6" id="group-6-0" value="6-1.會"  onclick="load(value)"/><label for="group-6-0" style="font-family:Microsoft JhengHei;">&nbsp; 會</label></br>
                <input type="radio" name="group-6" id="group-6-1" value="6-2.不會"  onclick="load(value)"/><label for="group-6-1" style="font-family:Microsoft JhengHei;">&nbsp; 不會</label></br>
                <input type="radio" name="group-6" id="group-6-2" value="6-3.不一定"  onclick="load(value)"/><label for="group-6-2" style="font-family:Microsoft JhengHei;">&nbsp; 不一定</label></br>
            </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei; text-align:left;">7. 您對於本次活動有任何的建議嗎 ?</h3>
        </br>
        <textarea id="comment" class="form-control" rows="5" placeholder="輸入您的答案" style="font-family:Microsoft JhengHei;"></textarea>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3 text-right">
        <button type="button" class="btn btn-danger" style="font-family:Microsoft JhengHei;" onclick="submit()">提交</button>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->


  <!-- +++++ Footer Section +++++ -->

  <div id="footer">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"><p> All Right Reserved  | Design by Taiwan Micorsoft</p></div>
    </div>

  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var maxNum = 4;
      var minNum = 1;
      var n = Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum;
      switch(n) {
          case 1:
              document.getElementById('gshan').src = "assets/img/bin02.png";
              document.getElementById('hi').innerHTML = "大家好，我是冰妹!";
              break;
          case 2:
              document.getElementById('gshan').src = "assets/img/office02.png";
              document.getElementById("gshan").width = "80";
              document.getElementById('hi').innerHTML = "大家好，我是歐福斯!";
              break;
          case 3:
              document.getElementById('gshan').src = "assets/img/windows02.png";
              document.getElementById('hi').innerHTML = "大家好，我是文豆!";
              break;
          case 4:
              document.getElementById('gshan').src = "assets/img/xbox02.png";
              document.getElementById('hi').innerHTML = "大家好，我是叉霸!";
              break;
          default:
              break;
      }

      rwd();
      $(document).ready(function(){
        $(window).resize(function() {
            rwd();
        });
      });
      function rwd(){
        var wdth;
        wdth=$(window).width();
        $("span").text(wdth);
        if(wdth<480)
        {
          document.getElementById('rwd-lavel1-1').innerHTML = "1顆星：很不滿意</br>10顆星：非常完美";
          document.getElementById('rwd-lavel1-2').innerHTML = "";
          document.getElementById('rwd-lavel1-3').innerHTML = "";
          document.getElementById('rwd-lavel2-1').innerHTML = "1顆星：差強人意</br>10顆星：樂在其中";
          document.getElementById('rwd-lavel2-2').innerHTML = "";
          document.getElementById('rwd-lavel2-3').innerHTML = "";
          document.getElementById('rwd-lavel3-1').innerHTML = "1顆星：不太了解</br>10顆星：充分了解";
          document.getElementById('rwd-lavel3-2').innerHTML = "";
          document.getElementById('rwd-lavel3-3').innerHTML = "";
          document.getElementById('rwd-lavel4-1').innerHTML = "1顆星：毫無收穫</br>10顆星：滿載而歸";
          document.getElementById('rwd-lavel4-2').innerHTML = "";
          document.getElementById('rwd-lavel4-3').innerHTML = "";
        }else{
          document.getElementById('rwd-lavel1-1').innerHTML = "";
          document.getElementById('rwd-lavel1-2').innerHTML = "很不滿意";
          document.getElementById('rwd-lavel1-3').innerHTML = "非常完美";
          document.getElementById('rwd-lavel2-1').innerHTML = "";
          document.getElementById('rwd-lavel2-2').innerHTML = "差強人意";
          document.getElementById('rwd-lavel2-3').innerHTML = "樂在其中";
          document.getElementById('rwd-lavel3-1').innerHTML = "";
          document.getElementById('rwd-lavel3-2').innerHTML = "不太了解";
          document.getElementById('rwd-lavel3-3').innerHTML = "充分了解";
          document.getElementById('rwd-lavel4-1').innerHTML = "";
          document.getElementById('rwd-lavel4-2').innerHTML = "毫無收穫";
          document.getElementById('rwd-lavel4-3').innerHTML = "滿載而歸";
        }
      }

    </script>

    <style>

      .acidjs-rating-stars,
      .acidjs-rating-stars label::before
      {
          display: inline-block;
      }

      .acidjs-rating-stars label:hover,
      .acidjs-rating-stars label:hover ~ label
      {
          color: #189800;
      }

      .acidjs-rating-stars *
      {
          margin: 0;
          padding: 0;
      }

      .acidjs-rating-stars input
      {
          display: none;
      }

      .acidjs-rating-stars
      {
          unicode-bidi: bidi-override;
          direction: rtl;
      }

      .acidjs-rating-stars label
      {
          color: #ccc;
      }

      .acidjs-rating-stars label::before
      {
          content: "\2605";
          width: 25px;
          line-height: 60px;
          text-align: center;
          font-size: 30px;
          cursor: pointer;
      }

      .acidjs-rating-stars input:checked ~ label
      {
          color: #f5b301;
      }

      .acidjs-rating-disabled
      {
          opacity: .50;

          -webkit-pointer-events: none;
          -moz-pointer-events: none;
          pointer-events: none;
      }

      @media only screen and (max-width: 480px) {

        .text-01{
          text-align:left;
      }

    </style>

  </body>
</html>
