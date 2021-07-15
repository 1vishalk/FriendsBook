<html>
<head>
<title>chatbook
</title>

<!--link type="text/css" rel ="stylesheet" href="prof3.css"/-->
<style>
body{ background: linear-gradient(to bottom right, white, #bcbdc4);
height:4000px;}
.header1{
position:fixed;
width:100%;
height:60px;
background:#142170;
top:0;
left:0;
color:white;
z-index:7;

}
#img3{left:100px;
height:50px;
width:40px;
top:5px;
}
#searcharea{top:17px;
left:240px;
height:40px;
}
#searchbox{width:500px;
height:26px;
background:white;
padding:5px;
outline:none;
border-radius: 10px/10px;
background-image:url(sr.png);
background-position:465px;
background-repeat:no-repeat;
}
#profilearea{top:15px;
left:780px;
height:40px;
}
#profilearea1{top:20px;
left:830px;
height:20px;
font-size:20px;
font-family:verdana;}
#profilearea3{top:10px;
left:900px;
height:30px;
font-size:30px;
font-family:verdana;}
#profilearea4{top:20px;
left:920px;
height:20px;
font-size:20px;
font-family:verdana;}
a{color:white;
text-decoration:none;}
#findf{top:2px;
left:1015px;
height:30px;}
#message{top:15px;
left:1060px;
height:30px;}
#notification{top:15px;
left:1105px;
height:30px;}
#profilearea2{top:10px;
left:1150px;
height:30px;
font-size:30px;
font-family:verdana;}
#setting{top:15px;
height:30px;
left:1170px;}
#logout{top:15px;
height:10px;
left:1215px;}
.header0001{
position:fixed;
width:100%;
height:60px;
background:#142170;
top:0;
left:0;
color:white;
z-index:6;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);

}
.coverpad{left:100px;
top:60px;
background:white;
height:360px;
width:850px;
position:absolute;
display:none;}	
	
.coverpadx{left:100px;
top:60px;
height:360px;
width:850px;
position:absolute;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);}	
.profilepic{width:140px;
height:140px;
padding:5px;
top:255px;
left:110px;
background:white;
position:absolute;
border-radius:2px/2px;
}
.profilepicx{width:220px;
height:140px;
padding:5px;
top:255px;
left:110px;
position:absolute;
border-radius:2px/2px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
}
.username{left:350px;
font-size:20px;
font-family:verdana;
color:white;
top:325px;
height:50px;
width:200px;
position:absolute;
}
.box11{top:375px;
left:280px;
padding:12px;
background:white;
position:absolute;
width:70px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
height:16px;
font-size:16px;
font-family:verdana;
cursor:pointer;
color:#868383;}

.box12{top:375px;
left:380px;
padding:12px;
background:white;
position:absolute;
width:70px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
height:16px;
font-size:16px;
font-family:verdana;
cursor:pointer;
color:#868383;}

.box13{top:375px;
left:480px;
padding:12px;
background:white;
position:absolute;
width:70px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
height:16px;
font-size:16px;
font-family:verdana;
cursor:pointer;
color:#868383;}
.box14{top:375px;
left:580px;
padding:12px;
background:white;
position:absolute;
width:70px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
height:16px;
font-size:16px;
font-family:verdana;
cursor:pointer;
color:#868383;}

select{top:375px;
left:680px;
padding:10px;
position:absolute;
width:110px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
height:40px;
font-size:16px;
font-family:verdana;
border:none;
color:#868383;
cursor:pointer;
}

.post1p{top:660px;
left:350px;
display:none;
position:absolute;
background:white;
width:580px;
height:600px;
border-radius:3px/3px;
padding-left:10px;
padding-right:10px;
padding-top:10px;
}
#post2text{left:40px;
top:0px;
padding-top:10px;
height:40px;
width:400px;}
#commentprof2{top:560px;
left:0px;
width:30px;
height:30px;}
#commentboxpos2{top:560px;
left:40px;
width:540px;
height:30px;}
#commentbox{
width:540px;
height:30px;}








</style>



<script src="jquery.js"></script>
<script>$(document).ready(function(){
$(".box13").click(function(){
$(".box13").css('background-color','#e9f0f2');
$(".box11").css('background-color','white');
$(".box12").css('background-color','white');
$(".box14").css('background-color','white');
		$(".frnpad").fadeIn("slow");
		$(".frnpadx").fadeIn("slow");
				$(".aboutpad").fadeOut("slow");
		$(".aboutpadx").fadeOut("slow");
				$(".phpadx").fadeOut("slow");
        $(".phpadx").fadeOut("slow");
				$(".postp").fadeOut("slow");
		$(".postpx").fadeOut("slow");
				$(".post1p").fadeOut("slow");
		$(".post1px").fadeOut("slow");
				$(".abox1").fadeOut("slow");
		$(".abox1x").fadeOut("slow");
				$(".abox2").fadeOut("slow");
		$(".abox2x").fadeOut("slow");
				$(".abox3").fadeOut("slow");
		$(".abox3x").fadeOut("slow");
});
$(".box14").click(function(){
$(".box14").css('background-color','#e9f0f2');
$(".box11").css('background-color','white');
$(".box12").css('background-color','white');
$(".box13").css('background-color','white');
				$(".phpadx").fadeOut("slow");
        $(".phpadx").fadeOut("slow");
				$(".aboutpad").fadeOut("slow");
		$(".aboutpadx").fadeOut("slow");
				$(".frnpad").fadeIn("slow");
		$(".frnpadx").fadeIn("slow");
				$(".postp").fadeOut("slow");
		$(".postpx").fadeOut("slow");
				$(".post1p").fadeOut("slow");
		$(".post1px").fadeOut("slow");
				$(".abox1").fadeOut("slow");
		$(".abox1x").fadeOut("slow");
				$(".abox2").fadeOut("slow");
		$(".abox2x").fadeOut("slow");
				$(".abox3").fadeOut("slow");
		$(".abox3x").fadeOut("slow");
});
$(".box12").click(function(){
$(".box12").css('background-color','#e9f0f2');
$(".box11").css('background-color','white');
$(".box13").css('background-color','white');
$(".box14").css('background-color','white');
				$(".aboutpad").fadeOut("slow");
		$(".aboutpadx").fadeOut("slow");
				$(".frnpad").fadeIn("slow");
		$(".frnpadx").fadeIn("slow");
				$(".phpadx").fadeOut("slow");
        $(".phpadx").fadeOut("slow");
				$(".postp").fadeOut("slow");
		$(".postpx").fadeOut("slow");
				$(".post1p").fadeOut("slow");
		$(".post1px").fadeOut("slow");
				$(".abox1").fadeOut("slow");
		$(".abox1x").fadeOut("slow");
				$(".abox2").fadeOut("slow");
		$(".abox2x").fadeOut("slow");
				$(".abox3").fadeOut("slow");
		$(".abox3x").fadeOut("slow");
});
$(".box11").click(function(){
$(".box11").css('background-color','#e9f0f2');
$(".box12").css('background-color','white');
$(".box13").css('background-color','white');
$(".box14").css('background-color','white');
				$(".aboutpad").fadeOut("slow");
		$(".aboutpadx").fadeOut("slow");
				$(".postp").fadeOut("slow");
		$(".postpx").fadeOut("slow");
				$(".post1p").fadeOut("slow");
		$(".post1px").fadeOut("slow");
				$(".abox1").fadeOut("slow");
		$(".abox1x").fadeOut("slow");
				$(".abox2").fadeOut("slow");
		$(".abox2x").fadeOut("slow");
				$(".abox3").fadeOut("slow");
		$(".abox3x").fadeOut("slow");
				$(".frnpad").fadeIn("slow");
		$(".frnpadx").fadeIn("slow");
				$(".phpadx").fadeOut("slow");
        $(".phpadx").fadeOut("slow");
		
});
$(".box13").click(function(){})


});
</script>
</head>
<body>
<div class="header1">
<div id="img3" class ="header1"><h2>Friendsbook</h2></div>
<div id="searcharea" class ="header1"><input placeholder="search here..." type="text" id="searchbox"/></div>
<div id="profilearea" class ="header1"><img src="profil.png"height="40px" width="40px"/></div>
<div id="profilearea1" class ="header1">profile</div>
<div id="profilearea3" class ="header1">|</div>
<div id="profilearea4" class ="header1"><a href="home11.php">home</a></div>
<div id="findf" class ="header1"><img src="frn.png" height="60px" width="50px"/></div>
<div id="message" class ="header1"><img src="chat.png" height="40px" width="35px"/></div>
<div id="notification" class ="header1"><img src="noti.png" height="40px" width="40px"/></div>
<div id="profilearea2" class ="header1">|</div>
<div id="setting" class ="header1"><img src="set.png" height="45px" width="40px" /></div>
<div id="logout" class ="header1"><img src="lo.png" height="40px" width="40px"/></div>
</div>

<div class="header0001">
</div>

<div class="coverpad">
</div>
<div class="coverpadx"><img src="cover.jpg" height="300px" width=850px"/>
</div>

<div class="profilepic">
</div>
<div class="profilepic"><img src="kid.jpg" height="140px" width="140px"/>
</div>



<div class="username" >
</div>
<div class="box11">Timeline
</div>
<div class="box12">About
</div>
<div class="box13">Friends
</div>
<div class="box14">Photos
</div>
<select>
<option selected>more</option>
<option value="saab">videos</option>
<option value="opel">places</option>
<option value="audi">pages</option>
</select>

<!--div class="postpx">
</div-->



<div class="post1p">
</div>
<div class="post1p"><img src="profile.jpg"/><br><br><img src="rogor.jpg" height="411" width="580" /><br><br><p6>like comment share</p6><br><br><p1>Amit Deb</p1><p2>and</p2><p1>5 other</p1><p2>like this</p2>
<div id="post2text" class="post1p"><p3>Rani Mukharji</p3><p2>with</p2><p1>Arup Pegu</p1><p2>and</p2><p1>15 others.</p1><p4>4 hrs</p4></div>
<div id="commentprof2" class="post1p"><img src="profil.png"/></div>
<div id="commentboxpos2" class="post1p"><input type="textarea" placeholder="comment" id="commentbox"/></div>
</div>











</body>
</html>
