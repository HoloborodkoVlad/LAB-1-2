<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
            body {
                flex-direction: column;
                display: flex;
                font-family: 'Nunito';
                margin: 0;
                padding: 0;
                letter-spacing: 1px;
                justify-content: space-between;
                min-height: 100vh;
            }
            
            .footer {
                width: 100%;
                height:100px;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                color:white;
                background-color:black;
                margin-top:40px;
            }
            .title {
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                width:100%;
            }
            .main-content {
                width:100%;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
            }
            .text {
                padding:0 16px;
                
                width:100%;
                color: #7B8898;
                font-size: 1.1875em;
                font-weight: 400;
                font-style: normal;
                font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
                line-height: 1.5;
                animation: fadeInLorem 1000ms linear
            }
            @font-face {
		font-family: 'Sucrose Bold Two';
		src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/sucrose.woff2') format('woff2');
		}
@font-face {
    font-family: 'IM Fell French Canon Pro';
    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/im-fell-french-canon-pro.woff2') format('woff2');
}
* {
  box-sizing: border-box;
}
body {
  margin: 0;
}
header { 
	background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/mountain-range.jpg) no-repeat;
	padding-top: 61.93333333%;
	background-size: cover;
  font-family: 'Sucrose Bold Two';
}
header img {
	position: absolute;
	top: 0;
	right: 0;
	width: 45.8%;
}
header h1 { 
	position: fixed;
	top: 2rem;
	right: 2rem;
  font-size: 12vw;
  line-height: .8;
  margin-top: 0;
  text-align: center;
}
header h1 span {
  display: block;
  font-size: 8.75vw;
}
main { 
  background: #fff;
  position: relative;
  border: 1px solid #fff;
  font-family: 'IM Fell French Canon Pro';
  font-size: 1.4rem;
  padding: 2rem 25%;
  line-height: 1.6;
}
@media all and (max-width: 1200px) {
  main { padding: 2rem; }
}

            
        </style>
    </head>
    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
<header>
	<h1>Land <span>of the</span> Lost</h1>
	<img src="mountain-range-front.png">
</header>

    <body>
    <main>
       <div style="height: 60px;width: 100%;display: flex;justify-content: center;align-items: center;align-content:center;margin-bottom:20px;border-bottom: 1px solid #d4d2d2;text-align:center;">
       
    <h1>Blog </h1>
       </div>

       <div class="content">
            <h1 class="title">{{$page->caption}}</h1>
            
            <div class="main-content">
            <?php echo($page->content) ?>
            </div>
       </div>
       

       
        </main>
        <div class="footer">
               
              
               </div>
    </body>
</html>
