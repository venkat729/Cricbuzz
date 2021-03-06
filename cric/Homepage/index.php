<?php
	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=nGuMFhKIkKflwdAuX5WC9f5jAm22');
	$cricketMatches = json_decode($cricketMatchesTxt);
     $i=0;
     $data = Array();
    foreach($cricketMatches->data as $item) {
         if($i<4){
              $data[$i] = $item->title;
         }
         $i = $i + 1;
    }
?>
<html>
	<head>
		<title>Cricbuzz</title>
		<link rel = "icon" href="cricIcon.png">
          <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel = "stylesheet" href = "homepage.css">
		<link rel = "stylesheet" href = "../css/dropdown.css">
          <style media="screen">
          #loading1,#loading2,#loading3,#loading4,#loading5{
               bottom: -500px;
               transform: scale(0);
          }
     </style>
</head>
<body onload="load()">
     <script type="text/javascript">
          function load(){
               var sty1 = document.getElementById("loading1").style;
               var sty2 = document.getElementById("loading2").style;
               var sty3 = document.getElementById("loading3").style;
               var sty4 = document.getElementById("loading4").style;
               var sty5 = document.getElementById("loading5").style;
               sty1.webkitTransform = "scale(1)";
               sty1.webkitTransition = "all 1s cubic-bezier(0,1.42,.26,.85)";
               sty1.webkitTransitionDelay = "0.2s";
               sty2.webkitTransform = "scale(1)";
               sty2.webkitTransition = "all 1s cubic-bezier(0,1.42,.26,.85)";
               sty2.webkitTransitionDelay = "0.4s";
               sty3.webkitTransform = "scale(1)";
               sty3.webkitTransition = "all 1s cubic-bezier(0,1.42,.26,.85)";
               sty3.webkitTransitionDelay = "0.6s";
               sty4.webkitTransform = "scale(1)";
               sty4.webkitTransition = "all 1s cubic-bezier(0,1.42,.26,.85)";
               sty4.webkitTransitionDelay = "0.8s";
               sty5.webkitTransform = "scale(1)";
               sty5.webkitTransition = "all 1s cubic-bezier(0,1.42,.26,.85)";
               sty5.webkitTransitionDelay = "1s";
          }
     </script>
     <header style="z-index:10;">
		<div id = "dropdown">
			<ul>
				<li><a href = "#" style = "font-size:200%;">JNTU Cricbuzz</a>
					
				</li>
			</ul>
			<ul>
				<li><a href = "">Teams List</a>
					<ul>
						<li><a href = "../India/India.html">India</a></li>
						<li><a href = "../australia/aus.html">Australia</a></li>
						<li><a href = "../england/eng.html">England</a></li>
						<li><a href = "../sa/sa.html">South Africa</a></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li><a href = "../news/news.html">News</a>
				</li>
			</ul>
			<ul>
				<li><a href = "#">Rankings</a>
					<ul>
						<li><a href = "../Rankings/PR.html">Top Batsmen</a></li>
						<li><a href = "../Rankings/Bowler.html">Top Bowlers</a></li>
						<li><a href = "../Rankings/AR.html">Top Allrounders</a></li>
						<li><a href = "../Rankings/TR.html">Top Teams</a></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li><a href = "../Gallery/gallery.html">Photos</a>
					<ul>
					</ul>
				</li>
			</ul>			<ul>
				<li><a href = "../about/about.html">About Us</a>
					<ul>
					</ul>
				</li>
			</ul>
		</div>
		</header>
		<br><br><br>
		<div id = "set">
               <div id="loading1">
			<div id = "arrange">

			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td><?php if(isset($data[0])){
                              echo $data[0];
                         }
                         else{
                              echo "SLU2..180/2 (38.5 Ovs)
BANU..179 (49.3 Ovs)
Sri Lanka U23 won by 8 wkts";
                         }?><td>
				</tr>
			</table>
               <div class="one">

               </div>
               <div class="two">

               </div>
			</div>
			</div>
               <div id="loading2">

			<div id = "arrange">
			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td><?php if(isset($data[1])){
                              echo $data[1];
                         }
                         else{
                              echo "West Indies
Pakistan
Saturday, 1 Apr, 10:00 PM";
                         }?></td>
				</tr>
			</table>
               <div class="three">

               </div>
               <div class="four">

               </div>
			</div>
          </div>
          <div id="loading3">

			<div id = "arrange">
			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td><?php
                         if(isset($data[2])){
                              echo $data[2];
                         }
                         else{
                              echo "BAN109/4 (21.3 Ovs)
SL280/9 (50.0 Ovs)
Bangladesh need 172 runs";
                         }
                         ?></td>
				</tr>
			</table>
               <div class="five">

               </div>
               <div class="six">

               </div>
			</div>
          </div>
          <div id="loading4">

			<div id = "arrange">
			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td><?php
                              if(isset($data[3])){
                                   echo $data[3];
                              }
                              else{
                                   echo "AFG144-all out (31.4 Ovs)
PAKU..267/5 (50.0 Ovs)
Pakistan U23 won by 123 runs";
                              }
                         ?></td>
				</tr>
			</table>
               <div class="seven">

               </div>
               <div class="eight">

               </div>
			</div>
          </div>
		</div>
          <br><br>
          <style media="screen">
          *{
               font-family: 'Montserrat', sans-serif;
               font-size: 98%;
          }
          .one,.two,.three,.four,.five,.six,.seven,.eight{
               width: 92px;
               height: 31px;
               box-shadow: 24px 66px 20px rgba(0,0,0,0.8);
               position: absolute;
               z-index: -1;
          }
          .one,.three,.five,.seven{
               top: -13px;
               transform: rotateZ(-8deg);
          }
          .two,.four,.six,.eight{
               top: -18px;
               transform: rotateZ(8deg);
          }
          .one{
               left: 13px;
          }
          .two{
               left: 151px;
          }
          .three{
               left: 278px;
          }
          .four{
               left: 418px;
          }
          .five{
               left: 542px;
          }
          .six{
               left: 683px;
          }
          .seven{
               left: 807px;
          }
          .eight{
               left: 947px;
          }
          #arrange{
               padding: 10px 30px;
               float: left;
               margin-left: 35px;
               height: 60px;
          }
		  #arrange table td{
			  color:white;
		  }
          #set{
               margin-left: 10%;
               margin-top: 2%;
          }
          </style>
          <div id="loading5">

		<div id = "arrange1">
		<table id = "SlideShow" style = "border:2px solid none;background:white;margin-bottom:2%;">
			<tr>
				<th></th>
			</tr>
			<tr>
				<td>
					<img src = "Aus.jpg" width = "600px" style = "margin-left:12.5%;"/><br>
					<br>
					<p align=center>David Warner scored a 78-ball ton while the 20-year-old Matt Renshaw became the third youngest Australian opener to score a Test ton</p>
					<br>
				</td>
			</tr>
			</table>
		<table id = "SlideShow" style = "border:2px solid none;background:white;margin-bottom:2%;">
			<tr>
				<th></th>
			</tr>
			<tr>
				<td>
					<img src = "Anurag.jpg" width = "600px" style = "margin-left:12.5%;"/><br>
					<br>
					<p align=center>Ajay Shirke has also been removed as the secretary of the board</p>
					<br>
				</td>
			</tr>
		</table>
		</div>
          </div>
     </div>
	</body>
</html>
