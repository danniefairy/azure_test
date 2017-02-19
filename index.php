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
      .xbox{
        width: 150px;
        height: 150px;
      }
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
					<img class="xbox" src="assets/img/xbox02.png" alt="Stanley">
					<h1 style="font-family:Microsoft JhengHei;"><strong>大家好，我是叉霸!</strong></h1>
					<p style="font-family:Microsoft JhengHei;">感謝參與這次的微軟實習 校園巡迴講座活動</p>
          <p style="font-family:Microsoft JhengHei;">我們非常重視各位意見，對於微軟實習計畫更感興趣的話</p>
          <p style="font-family:Microsoft JhengHei;">可前往Facebook粉絲專頁：<a style="font-family:Microsoft JhengHei;" href="https://www.facebook.com/Microsoft.Student.Program">微軟實習 未來生涯體驗計劃</a></p>
          <p style="font-family:Microsoft JhengHei;">或是未來生涯體驗計畫：<a style="font-family:Microsoft JhengHei;" href="https://www.microsoft.com/taiwan/campus/">台灣微軟 未來生涯體驗計劃</a></p>


				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->


	<!-- +++++ Projects Section +++++ -->
  
  <!--AJAX Http-->
  <script type="text/javascript">
    function load(value){
      var xhttp;
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          //alert(this.responseText);
        }
      };
      xhttp.open("GET", "send.php?value="+value, true);
      xhttp.send();
        }

    function submit(){
      var other=document.getElementById("other").value;
      var comment=document.getElementById("comment").value;
      var finish=true;
      //alert(v);
      window.location.href='finish.php?other='+other+'&comment='+comment+'&finish='+finish;
    }
  </script>

	<div class="container pt">
		<div class="row mt centered">
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">1. 您對於活動的整體滿意度 ?</h3>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-1" id="group-1-0" value="one-10"  onclick="load(value)" /><label for="group-1-0"></label>
                <input type="radio" name="group-1" id="group-1-1" value="one-9"  onclick="load(value)" /><label for="group-1-1"></label>
                <input type="radio" name="group-1" id="group-1-2" value="one-8"  onclick="load(value)" /><label for="group-1-2"></label>
                <input type="radio" name="group-1" id="group-1-3" value="one-7"  onclick="load(value)" /><label for="group-1-3"></label>
                <input type="radio" name="group-1" id="group-1-4" value="one-6"  onclick="load(value)" /><label for="group-1-4"></label>
                <input type="radio" name="group-1" id="group-1-5" value="one-5"  onclick="load(value)" /><label for="group-1-5"></label>
                <input type="radio" name="group-1" id="group-1-6" value="one-4"  onclick="load(value)" /><label for="group-1-6"></label>
                <input type="radio" name="group-1" id="group-1-7" value="one-3"  onclick="load(value)" /><label for="group-1-7"></label>
                <input type="radio" name="group-1" id="group-1-8" value="one-2"  onclick="load(value)" /><label for="group-1-8"></label>
                <input type="radio" name="group-1" id="group-1-9" value="one-1"  onclick="load(value)" /><label for="group-1-9"></label>

            </form>

        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">2. 講師的內容符合您的期待 ?</h3>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-2" id="group-2-0" value="two-10"  onclick="load(value)" /><label for="group-2-0"></label>
                <input type="radio" name="group-2" id="group-2-1" value="two-9"  onclick="load(value)" /><label for="group-2-1"></label>
                <input type="radio" name="group-2" id="group-2-2" value="two-8"  onclick="load(value)" /><label for="group-2-2"></label>
                <input type="radio" name="group-2" id="group-2-3" value="two-7"  onclick="load(value)" /><label for="group-2-3"></label>
                <input type="radio" name="group-2" id="group-2-4" value="two-6"  onclick="load(value)" /><label for="group-2-4"></label>
                <input type="radio" name="group-2" id="group-2-5" value="two-5"  onclick="load(value)" /><label for="group-2-5"></label>
                <input type="radio" name="group-2" id="group-2-6" value="two-4"  onclick="load(value)" /><label for="group-2-6"></label>
                <input type="radio" name="group-2" id="group-2-7" value="two-3"  onclick="load(value)" /><label for="group-2-7"></label>
                <input type="radio" name="group-2" id="group-2-8" value="two-2"  onclick="load(value)" /><label for="group-2-8"></label>
                <input type="radio" name="group-2" id="group-2-9" value="two-1"  onclick="load(value)" /><label for="group-2-9"></label>
            </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">3. 您是否透過介紹與分享，了解實習計畫 ?</h3>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-3" id="group-3-0" value="three-10"  onclick="load(value)" /><label for="group-3-0"></label>
                <input type="radio" name="group-3" id="group-3-1" value="three-9"  onclick="load(value)" /><label for="group-3-1"></label>
                <input type="radio" name="group-3" id="group-3-2" value="three-8"  onclick="load(value)" /><label for="group-3-2"></label>
                <input type="radio" name="group-3" id="group-3-3" value="three-7"  onclick="load(value)" /><label for="group-3-3"></label>
                <input type="radio" name="group-3" id="group-3-4" value="three-6"  onclick="load(value)" /><label for="group-3-4"></label>
                <input type="radio" name="group-3" id="group-3-5" value="three-5"  onclick="load(value)" /><label for="group-3-5"></label>
                <input type="radio" name="group-3" id="group-3-6" value="three-4"  onclick="load(value)" /><label for="group-3-6"></label>
                <input type="radio" name="group-3" id="group-3-7" value="three-3"  onclick="load(value)" /><label for="group-3-7"></label>
                <input type="radio" name="group-3" id="group-3-8" value="three-2"  onclick="load(value)" /><label for="group-3-8"></label>
                <input type="radio" name="group-3" id="group-3-9" value="three-1"  onclick="load(value)" /><label for="group-3-9"></label>
            </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">4. 實習生的分享內容，讓您有所收穫 ?</h3>
        <div class="acidjs-rating-stars">
            <form>
                <input type="radio" name="group-4" id="group-4-0" value="four-10"  onclick="load(value)" /><label for="group-4-0"></label>
                <input type="radio" name="group-4" id="group-4-1" value="four-9"  onclick="load(value)" /><label for="group-4-1"></label>
                <input type="radio" name="group-4" id="group-4-2" value="four-8"  onclick="load(value)" /><label for="group-4-2"></label>
                <input type="radio" name="group-4" id="group-4-3" value="four-7"  onclick="load(value)" /><label for="group-4-3"></label>
                <input type="radio" name="group-4" id="group-4-4" value="four-6"  onclick="load(value)" /><label for="group-4-4"></label>
                <input type="radio" name="group-4" id="group-4-5" value="four-5"  onclick="load(value)" /><label for="group-4-5"></label>
                <input type="radio" name="group-4" id="group-4-6" value="four-4"  onclick="load(value)" /><label for="group-4-6"></label>
                <input type="radio" name="group-4" id="group-4-7" value="four-3"  onclick="load(value)" /><label for="group-4-7"></label>
                <input type="radio" name="group-4" id="group-4-8" value="four-2"  onclick="load(value)" /><label for="group-4-8"></label>
                <input type="radio" name="group-4" id="group-4-9" value="four-1"  onclick="load(value)" /><label for="group-4-9"></label>
            </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">5. 您是如何知道本次活動 ?</h3>
        </br>
        <div class="col-md-6 col-md-offset-3 text-left">
          <form>
              <input type="radio" name="group-5" id="group-5-0" value="five-1"  onclick="load(value)"/><label for="group-5-0" style="font-family:Microsoft JhengHei;">&nbsp; 粉絲專頁(FB社群平台)</label></br>
              <input type="radio" name="group-5" id="group-5-1" value="five-2"  onclick="load(value)"/><label for="group-5-1" style="font-family:Microsoft JhengHei;">&nbsp; 微軟實習官方網站</label></br>
              <input type="radio" name="group-5" id="group-5-2" value="five-3"  onclick="load(value)"/><label for="group-5-2" style="font-family:Microsoft JhengHei;">&nbsp; 海報 / 傳單</label></br>
              <input type="radio" name="group-5" id="group-5-3" value="five-4"  onclick="load(value)"/><label for="group-5-3" style="font-family:Microsoft JhengHei;">&nbsp; 宣傳攤位</label></br>
              <input type="radio" name="group-5" id="group-5-4" value="five-5"  onclick="load(value)"/><label for="group-5-4" style="font-family:Microsoft JhengHei;">&nbsp; 親友分享</label></br>
              </label><input id="other" class="form-control" id="inputPassword2" placeholder="其他" style="font-family:Microsoft JhengHei;">
          </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h4 style="font-family:Microsoft JhengHei;">6. 您是否會想報名【台灣微軟-未來生涯體驗計畫】呢?</h4>
        </br>
        <div class="col-md-6 col-md-offset-3 text-left">
          <form>
              <input type="radio" name="group-6" id="group-6-0" value="six-1"  onclick="load(value)"/><label for="group-6-0" style="font-family:Microsoft JhengHei;">&nbsp; 會</label></br>
              <input type="radio" name="group-6" id="group-6-1" value="six-2"  onclick="load(value)"/><label for="group-6-1" style="font-family:Microsoft JhengHei;">&nbsp; 不會</label></br>
              <input type="radio" name="group-6" id="group-6-2" value="six-3"  onclick="load(value)"/><label for="group-6-2" style="font-family:Microsoft JhengHei;">&nbsp; 不一定</label></br>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3"></br></br></br></div>
      <div class="col-md-6 col-md-offset-3">
        <h3 style="font-family:Microsoft JhengHei;">7. 您對於本次活動有任何的建議嗎 ?</h3>
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
          line-height: 40px;
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

    </style>

  </body>
</html>
