
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
                                        <style>
        body, html {
            margin: 0;
            padding: 0;
            
        }
  
        
body{
	margin: 0;
	padding: 0;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	background-color: #e3e3e3;
	color: #333;
	font-size:14px;
	line-height:1.5em;
	height: 100%;
    width: 100%;
    overflow-x: hidden;
    overflow-y:auto;
}

.all{
    display:block;
    position:relative;
    clear:both;
    margin-left:0;
    transition:all 1s;
    float:left;
    width: 100%;
    height: 100%;
    left:0;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.all.fade{
    width:100vw;
    left:260px;
}

body.fade{
    overflow:hidden;
}

 /*::-webkit-scrollbar { 
   display: none; 
}
*/

a{
    color:#999;
    text-decoration:none;
}

.full.center{
    text-align:center;
}

btn{
    font-family:'Lato', sans-serif;
    border-width: 1px;
    border-style: solid;
    border-color: #999;
    padding: 8px 8px 8px 14px; 
    text-align: center;
    background-color: rgba(0, 0, 0, 0.8);
    -webkit-box-shadow: 0 0 5px 0 #000000;
    box-shadow: 0 0 5px 0 #000000;
    color: #efefef;
    letter-spacing: 0.5em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    font-size: 12px;
    margin: 30px auto 0 auto;
    cursor: pointer;
    transition:all 0.5s;
}

btn:hover{
    
    -webkit-box-shadow: 0 0 10px 0 #000000;
    box-shadow: 0 0 10px 0 #000000;
}

btn a{
    color:#fff;
    text-decoration:none;
}

ul, p{
	font-weight: 400;
	line-height: 1.5em;
	font-size: 16px;
	margin: 0 0 1.5em 0;
	font-family: 'Lato',sans-serif;
}


ul{
    list-style-position: inside;
    padding:0;
    margin:0;
}

.full ul li{
    list-style:circle;
    display:block;
    float:left;
    width:calc(50% - 20px);
    padding:0;
    margin:0;
    transition:all 0.5s;
}



a{color:#666;}


h1{
	font-family: 'Oswald', sans-serif;
	font-weight: 400;
	letter-spacing: 0.125em;
	text-transform: uppercase;
	line-height:1.25em;
	font-size: calc(75% + 2vw) !important;
}

h2{
	font-family: 'Lato', sans-serif;
	text-transform: uppercase;
	font-weight: 600;
	letter-spacing: 0.25em;
	font-size: 18px;
	border-width: 0 0 1px 0;
	border-style: solid;
	border-color: #333;
	font-size: calc(70% + 0.5vw) !important;
}

.center{
    text-align:center;
}

img{
	max-width: 100% !important;
	height: auto;
}

.dark{background-color: #212121; color: #efefef;}
.light{background-color: #e3e3e3; color: #333;}

.panel{
    display:block;
    position: relative;
    clear:both;
	height: auto;
	width: calc(100% - 60px);
	padding: 0 30px 0 30px;
	margin: 0 0 60px 0;
	float:left;
}

.panel-overlay{
    position:absolute;
    width:calc(100% + 60px);
    height:100%;
    top:0;
    left:-30px;
    background-color: rgba(255, 255, 255, 0.4);
    -webkit-box-shadow:inset 0 0 15px 0 #000000;
    box-shadow:inset 0 0 15px 0 #000000;
    z-index:0;
}

.panel-overlay.dark{
    background-color: rgba(0, 0, 0, 0.4);
}

/*--Video Background--*/

.vid-bg-box{
    left:0;
    top:0;
    position: absolute;
	height: 100%;
	width: 100%;
	background-color: #000;
	overflow: hidden;
}

.video_background { 
	position: absolute; 
	bottom: 0; 
	right: 0; 
	min-width: 100%; 
	min-height: 100%; 
	width: auto; 
	height: auto; 
	overflow: hidden; 
}	

.full-panel{
	display: table;
	position: relative;
	height: auto;
	min-height:100vh;
	margin: 0 auto;
	width: calc(100% - 60px);
	padding: 30px;
	background-size: cover;
	background-repeat:no-repeat;
	background-position: center top;
	background-attachment: scroll;
	clear:both;
	overflow:hidden;
}

.half-panel{
	display: table;
	position: relative;
	height: 50vh;
	min-height:400px;
	margin: 0 auto 40px auto;
	width:100%;
	background-size: calc(100vh + 75vw) ;
	background-repeat:no-repeat;
	background-position: center top;
	clear:both;
	overflow: hidden;
	background-attachment: scroll;
	-webkit-transition: background-size 0.5s; /* Safari */
    transition: background-size 0.5s;
    background-color:#000;
}




.main-content{
	display: block;
	position: relative;
	margin: 0 auto;
	max-width: 1200px;
	width: calc(100% - 60px);
	padding: 0;
	
}

.cover-title-image{
    display:block;
    position:relative;
    margin:0 auto;
    max-width:700px !important;
    opacity:0.7;
}

.full-panel .main-content, .panel .main-content, .half-panel .main-content{
	width: calc(100%);
}

.middle{
	display: table-cell;
	position: relative;
	vertical-align: middle;
	width:100%;
}


.full{
	display: block;
	position: relative;
	width: calc(100% - 60px);
	clear: both;
	float:left;
}

.full.break{
    margin: 30px 0 30px 0;
}

.row{
	display: block;
	position: relative;
	clear: both;
	width: 100%;
	height: auto;
}

.half{
	display: block;
	float: left;
	width: calc(50% - 60px);
}

.sixty{
	display: block;
	float: left;
	width: calc(60% - 60px);
}

.forty{
	display: block;
	float: left;
	width: calc(40% - 60px);
}

.forty img{
    width:100%;
    height: auto;
}

.third{
	display: block;
	float: left;
	width: calc(33.3% - 60px);
}

.quarter{
	display: block;
	float: left;
	width: calc(25% - 30px);
}

.three-quarters{
	display: block;
	float: left;
	width: calc(75% - 30px);
}


.full, .half, .third, .quarter, .three-quarters, .sixty, .forty{
	padding: 10px 30px 40px 30px;
	transition: all 0.5s;
	text-align: left;
}



.half p img{
	width: 100% ;
	max-width: calc(100% - 60px) !important;
	height: auto;
	display: block;
	position: relative;
	margin: 20px 0 20px 0 !important;
}


.play-audio{
    cursor:pointer;
    text-align:left;
}

.play-audio .material-icons{
    position: absolute;
    font-size:24px;
    margin:-2px 10px 0 5px;
}

.footer-audio{
    position: fixed;
    bottom:-90px;
    min-width:100%;
    height:50px;
    z-index:9999;
    transition: all 0.5s;
}

.show-audio{
    bottom:0;
    cursor: pointer;
}

.audio-box{
    display: none;
    position:relative;
    height:50px;
    width: calc(100% - 40px);
    max-width:800px;
    background-color:#000;
    margin: 0 auto 0 auto;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
    color:#fff;
    font-size:24px;
}

.audio-box .controls{
    display:block;
    position:absolute;
    background-color:#000;
    opacity:0.7;
    width: 120px;
    height:30px;
    margin-top:-30px;
    right:0;
    border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    text-align:center;
}

.audio-box .material-icons{
    font-size:28px;
    opacity: 0.6;
    transition: all 0.5s;
}

.audio-box .material-icons:hover{
    opacity: 1;
}


.audio-box .hide-audio{
    position:absolute;
    top:3px;
    left:10px;
}

.audio-box .close-audio{
    top:3px;
     position:absolute;
     right:10px;
}


.shadow{
    box-shadow: 0 0 10px 0 #000000;
    -webkit-box-shadow: 0 0 10px 0 #000000;
}

.no-shadow{
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
}

.audioplayer{
    margin:5px 0 0 0;
    font-size:16px;
    width:calc(100% - 10px);
    float:right;
}

.side-buttons{
    right: -50px;
    height: 40px;
    position: fixed;
    width: 40px;
    background-color:#000;
     -webkit-border-radius: 6px 0 0 6px;
    border-radius: 6px 0 0 6px;
    color:#fff;
    font-size:24px;
    transition: all 0.5s;
    opacity:0.6;
    cursor: pointer;
    z-index:9999;
    text-align:center;
}

.side-buttons:hover{
    opacity:1;
}

.show-side{
    right:0px;
}

.side-buttons .material-icons{
    font-size:26px;
    display:block;
    position: absolute;
    margin:7px 0 0 7px;
    opacity:0.6;
}

.show-right{
    bottom:50px;
}

.play-audio{
    font-family:'Lato', sans-serif;
	display: block;
	position: relative;
	clear: both;
	max-width: 400px;
	width: calc(100% - 32px);
	border-width: 1px;
	border-style:solid;
	border-color: #999;
	padding: 8px;
	text-align: center;
	background-color:rgba(0, 0, 0, 0.8);
	-webkit-box-shadow: 0 0 5px 0 #000000;
	box-shadow: 0 0 5px 0 #000000;;
	color: #efefef;
	letter-spacing: 0.5em;
	font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    font-size: 12px;
    margin: 30px auto 0 auto;
    cursor: pointer;
	}
	
/*Video Link Styles*/

.big-play{
    display:block;
    position:relative;
    margin:0 auto;
    width:120px;
    height:auto;
    opacity:0.3;
    cursor:pointer;
}

.vid-link, .tube-link{
	display: block;
	position: relative;
	margin: 20px 0 20px 0;
	width: calc(100%);
	background-color: #000;
	height: auto;
	-webkit-box-shadow: 0 0 5px 0 #000000;;
	box-shadow: 0 0 5px 0 #000000;;
}

.vid-link img, .tube-link img {
	position: relative;
	display: block;
	position: relative;
	width: 100%;
	height: auto;
}

.vid-overlay{
	display: block;
	position: absolute;
	width: 100%;
	top:0;
	left: 0;
	height: 100%;
	color: #fff;
}

.vid-table{
	display: table;
	position: relative;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.3);
	transition: all 0.5s;
	cursor: pointer;
}

.vid-table .material-icons{
    font-size:90px;
    text-shadow: 0 0 10px #000000;
}

.vid-table:hover{
	background-color: rgba(0, 0, 0, 0.0);
}

.vid-table .cell{
	display: table-cell;
	vertical-align: middle;
	text-align: center;
}


.vid-table .cell img{
	max-width: 100px;
	height: 100px;
}



.vid-cap{
	text-align: center;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.5em;
	font-size: 14px;
	margin: 0 0 0 0;
}

.vid-link img:hover{
	opacity: 1;
}
	
.menu-btn{
    position:fixed;
    top:10px;
    left:10px;
    width:36px;
    height:29px;
    cursor:context-menu;
    opacity:0.6;
    transition:all 0.5s;
    background-color:#fff;
    border-radius:50%;
    -webkit-border-radius:50%;
    text-align:center;
    padding-top:7px;
}

.menu-btn:hover{
    opacity:1;
}

.menu{
    top:0;
    left:-290px;
    position: fixed;
    background-color:#111;
    width:280px;
    height:100%;
    z-index:999;
    color:#efefef;
    transition: all 0.75s;
}

.show-menu{
    left:0;
}

.menu ul{
    margin:0;
    padding:0;
    list-style:none;
}

.menu ul li{
    display:block;
    color: #efefef;
    font-weight: 300;
    text-transform: uppercase;
    font-size: 12px;
    transition:all 0.5s;
    letter-spacing: 0.25em;
    font-weight:700;
}

.menu ul li a{
    display:block;
    position:relative;
    padding:10px;
    text-decoration:none;
    color: #efefef;
}

.menu ul li:hover{
    background-color:#333;
}

.menu-title{
    text-align:center;
    font-weight:700;
    text-transform: uppercase;
    padding:10px;
    color: #999;
    font-size:18px;
}

.close-menu{
    position: absolute;
    top:9px;
    right:0;
    width:40px;
    height:auto;
    opacity: 0.6;
    transition:all 0.5s;
    cursor: pointer;
}
.close-menu:hover{
    opacity:1;
}


.menu-layer{
   position: fixed;
   top:0;
   left:0;
   width:100%;
   height:100%;
   background-color:#000;
   z-index:999;
   display:none;
   opacity:0.8;
}



/*--Pop Image--*/

.pop-image{
    transition:all 0.5s;
    cursor:zoom-in;
}

.pop-image.shadow:hover{
     box-shadow: 0 0 20px 0 #000000;
    -webkit-box-shadow: 0 0 20px 0 #000000;
}

.img-pop-box{
    display:none;
    z-index:9999;
}
.img-container {
  display: table;
  width: 100%;
  height: 100%;
  position:fixed;
  z-index:999;
  top:0;
  left:0;
}

.img-box {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.img-holder{
    display:inline-block;
    position:relative;
    width:auto;
    height:auto;
    margin:0 auto;
    padding: 0 30px 0 30px;
}

.img-holder img{
    max-width:90vw;
    max-height:90vh;
    width:auto;
    height:auto;
    display:none;
    cursor:zoom-out;
}


.btt-footer{
    display:none;
    bottom:0;
    left: 0;
    height: 37px;
    position: fixed;
    z-index: 99;
    width:100%;
    text-align:center;
    opacity:0.3;
}

.btt-footer img{
    padding:5px 10px 6px 10px;
    width:50px;
    background-color:#000;
    border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
}

.back-to-top{
   height:80px;
    width: 40px;
    background-color: #000;
    -webkit-border-radius :6px;
    border-radius: 6px;
    color: #fff;
    font-size: 24px;
    transition: all 0.5s;
    opacity: 0.6;
    cursor: pointer;
    text-align: center;
}

.back-to-top img{
    display:block;
    position:relative;
    width:80%;
    margin:10px auto 0 auto;
}


@media (max-width: 960px) {
  .quarter, .three-quarters, .sixty, .forty {
    width: calc(50% - 60px);
    float: left;
  }

.third{
    width: calc(100% - 30px);
}
  .lower-copy .content div p img{
	  width: 100%;
	  max-width: 100%;
	  display: block;
	  position: relative;
	  margin: 20px 0 20px 0 !important;
	  float: none !important;
  }
}

@media (max-width: 860px) {
   .full ul li {
        list-style: circle;
        display: block;
        float: left;
        width: calc(100% - 20px);
        padding: 0;
        margin: 0;
    }
}

@media (max-width: 760px) {
  .quarter, .half, .three-quarters, .sixty, .forty {
    width: calc(100% - 60px);
  }
  
  .pull-right, .pull-left{
      float:none !important;
      display:block;
      position: relative;
      margin: 0 auto;
  }
}

/*Accordion Styles*/
.acc-head{
    display:block;
    position:relative;
    font-weight: 400;
    line-height: 1.5em;
    font-size: 16px;
    margin: 0 0 1.5em 0;
    font-family: 'Lato',sans-serif;
    border-width: 1px;
    border-style: solid;
    border-color: #999;
    padding: 8px 8px 8px 14px; 
    text-align: left;
    background-color: #333;
    -webkit-box-shadow: 0 0 5px 0 #000000;
    box-shadow: 0 0 5px 0 #000000;
    color: #efefef;
    letter-spacing: 0.5em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    font-size: 12px;
    margin: 0 auto 0 auto;
    cursor: pointer;
    transition:all 0.5s;
}

.acc-head:hover{
    color:#333;
    background-color: #ccc;
     -webkit-box-shadow: 0 0 10px 0 #000000;
    box-shadow: 0 0 10px 0 #000000;
    border-width: 1px;
    border-style: solid;
    border-color: #333;
}

.acc-head.active{
     color:#333;
    background-color: #ccc;
}

.acc-head i{
    display:block;
    position: absolute;
    top:5px;
    right:5px;
}

.acc-head .minus{
    display:none;
}

.acc-head.active .minus{display:block;}
.acc-head.active .plus{display:none;}
.acc-body{
    display:none;
    padding:20px 10px 10px 10px;
    font-weight: 400;
    line-height: 1.5em;
    font-size: 16px;
    margin: 0 0 1.5em 0;
    font-family: 'Lato',sans-serif;
}

/* Modal Video Version 2 */

.modal-vid{
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    height:100vh;
    z-index:999;
    display:none;
}
.movie-box{
    top:0px;
    left:0px;
    display:table;
    width:100%;
    height:100vh;
    background-color:#232323;
    background-color:rgba(0, 0, 0, 0.80);
    color:#fff;
    text-align:center;
}

.close{
    position:absolute;
    font-weight:300;
    letter-spacing:0.125em;
    text-transform:uppercase;
    font-size:10px;
    right:0px;
    top:-30px;
    color:#999;
    cursor:pointer;
}

.wide-screen{
    display:table-cell;
    text-align: center;
    vertical-align: middle;
}

.vid-holder{
    display:inline-block;
    top:0px;
    left:0px;
    position:relative;
    margin:0 auto;
    -webkit-box-shadow: 0 0 10px 0 #000000;
    box-shadow: 0 0 10px 0 #000000;
    border-style:solid;
    border-width:1px;
    border-color:#333;
    max-width: calc(100% - 122px);
}


.standard-img, .widescreen-img, .sixteen-nine, .pal{
    max-height:calc(100vh - 122px);
    max-width:calc(100vw - 122px);
    position:relative;
    margin:0 auto;
    /*transition: all 0.5s;*/
    display:none ;
}



.show{
    display:block;
}

.hide{
    display:none;
}

.vid-holder video, .vid-holder iframe{
    position: absolute;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
    background-color:#000;
    background-image:url(https://s3.amazonaws.com/imglibs/video_bg.png);
    background-position:center center;
    background-repeat:no-repeat;
}


.pull-right{
    float:right;
}

.pull-left{
    float:left;
}

.open-overlay{
	display: block;
	position: fixed;
	top:0px;
	left: 0px;
	width: 100%;
	height: 100vh;
	z-index: 99999;
	background-color: #121212;
}

.open-overlay-box{
	display: table;
	height: 100vh;
	width: 100%;
	text-align: center;
}

.open-overlay-logo{
	display: table-cell;
	vertical-align: middle;
}

.open-overlay-logo img{
	max-width: 250px !important;
	width: 90%;
	opacity: 0.1;
	-webkit-opacity: 0.1;
}

.media-overlay{
   position: fixed;
   top:0;
   left:0;
   width:100%;
   height:100%;
   background-color:#000;
   z-index:999;
   display:none;
   opacity:0.8;
}

.close-media{
    width:30px;
    height:30px;
    position:fixed;
    top:10px;
    right:10px;
    z-index:999;
    display:none;
    cursor:pointer;
    opacity:0.6;
    transition:all 0.5s;
    color: #fff;
}


    </style>
            
    </head>
<body>



    
<div class="full-panel" style="" name="video-bg">
    <div class="vid-bg-box">
        <video src="https://s3.amazonaws.com/bgrnds/waterfall_bg.mp4" class="video_background" autoplay="autoplay" loop="loop">
	</video>
    </div>
    
    <div class="panel-overlay dark"></div>
    
	<div class="middle">
	    <div class="main-content">
	        <img class="cover-title-image" src="https://s3.amazonaws.com/imglibs/magazine_v2.svg">
        </div>
        
        	<div class="full break center"><a href="#intro"><btn>Introduction</btn></a></div>
    </div>
</div>

<div class="full-panel" name="intro">
		<div class="middle">
		<div class="main-content">
		    <div class="full"><h1 class="center">Magazine Framework V.2</h1></div>
		    <div class="Full">
		        <h2>Overview:</h2>
		        <p>
		            Magazine is a slim framework primarily designed for tablets and desktop as either a multipage or single page website. The JS and CSS has been optimized to support audio, video, menus, smooth scrolling, image light boxes, video backgrounds and parallax effects without all the overhead created by including additional script and style libraries. Below are list of features included with this framework.
		        </p>
		    </div>
		    <div class="Full">
		        <h2>Updates:</h2>
		        <p>
			        17/03/17 - Added new scalable modal videos funcrtionality and design<br />
		            17/04/24 - Adjusted padding for tablet and mobile devices.<br />
		            17/05/04 - Added Accordions<br />
		            17/05/04 - Replaced font Awesome with Google Material Icons<br />
		            17/05/04 - iframe correctly empties when closing YouTube, Vimeo, Wistia, or any other iframe based videos<br />
		            17/05/04 - Removed default YouTube video from iframe.
		        </p>
		    </div>
		    
    		<h2>Features:</h2>
		    <div class="full">
		        <ul>
		            <li>Fully Responsive</li>
		            <li>Support for iframe and video lightboxes</li>
		            <li>Video Backgrounds</li>
		            <li>Image Lightboxes</li>
		            <li>Supports MP4 and MP3</li>
		            <li>Smooth Scrolling</li>
		            <li>Mininal audio player format</li>
		            <li>Light and dark themes available</li>
		            <li>Dynamically loading iframe, audio and video </li>
		            <li>Lightweight JS, and CSS</li>
		            <li>Sidr style menu</li>
		            <li>Prohibitive scrolling during lightbox events</li>
		            <li>Lightweight Parallax optimized for iOS</li>
		            <li>Scalable H1, and H2 fonts</li>
		            
		        </ul>
		    </div>
		    
		   <div class="full break center"><a href="#parallax"><btn>Get Started</btn></a></div>
		    
		 
		    
		</div>
	</div>
</div>


<div class="full-panel parallax" style="background-image:url(https://images.unsplash.com/photo-1432821596592-e2c18b78144f?dpr=1&auto=format&fit=crop&w=1500);" name="parallax">
    <div class="panel-overlay"></div>
	<div class="middle">
	    <div class="main-content">
	        <h1 class="center">Parallax Cover</h1>
	        <div class="full break center"><a href="#audio"><btn>Audio Samples</btn></a></div>
		    
        </div>
    </div>
</div>
    
    
<div class="full-panel" name="audio">
		<div class="middle">
			<div class="main-content">
			
				<div class="full"><h2>Audio Samples</h2></div>
                <div class="half">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Pellentesque ornare justo non orci aliquet ullamcorper. Nullam consectetur lacus mauris, pellentesque hendrerit dolor hendrerit eget. Nulla non finibus mi, ac dignissim elit. Proin semper bibendum ipsum, non dignissim arcu feugiat sit amet. Vestibulum porta nunc urna, ac mattis quam sodales ut.</p>

<p>Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
                    
                    <div class="play-audio" audioUrl="https://www.wpwebos.com/music/halcyon_and_on_and_on.mp3">Play Audio One <i class="material-icons">volume_up</i></div>



                </div>
                <div class="half">
                    
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Pellentesque ornare justo non orci aliquet ullamcorper. Nullam consectetur lacus mauris, pellentesque hendrerit dolor hendrerit eget. Nulla non finibus mi, ac dignissim elit. Proin semper bibendum ipsum, non dignissim arcu feugiat sit amet. Vestibulum porta nunc urna, ac mattis quam sodales ut.</p>

<p>Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
                    
                    
                    <div class="play-audio" audioUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/try_me.mp3">Play Audio Two <i class="material-icons">volume_up</i></div>
                </div>
        </div>
         <div class="full break center"><a href="#video"><btn>Video Sample</btn></a></div>
    </div>
</div>


<div class="full-panel" name="video">
		<div class="middle">
			<div class="main-content">
			   
			  <div class="full"><h2>Video Samples</h2></div>
			   <div class="row">
				   
				   
				   
			    <div class="forty pull-right">
			    	<div class="vid-link movie-btn sixteen-nine-btn" vidurl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/battle_of_britain.mp4">
				    	<img class="img-shadow" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/bob.jpg">
							<div class="vid-overlay">
								<div class="vid-table">
									<div class="cell"><i class="material-icons">play_circle_outline</i></div>
								</div>
							</div>				
			    	</div>
			    	
			    	<div class="vid-cap">Movie Title</div>  
			    			
			    </div>
			    
			    
			    <div class="sixty pull-left">
				    <h2>MPEG4 HTML5 Sample</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
			    
			    </div>
			    
			   </div>
			   
			   <div class="row">
			    
			     <div class="forty pull-left">
			          
			          <div class="tube-link sixteen-nine-btn" vidurl="https://www.youtube.com/embed/RtU_mdL2vBM?autoplay=1">
							<img src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/overwatch_th.jpg">
							<div class="vid-overlay">
								<div class="vid-table">
									<div class="cell"><i class="material-icons">play_circle_outline</i></div>
								</div>
							</div>				
						</div>
						<div class="vid-cap">Movie Title</div>  
			          
			    </div>
			    
			    
			    <div class="sixty pull-right">
				    <h2>YouTube Video Sample</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
			    
			    </div>
			    
			    
			    </div>
			   
			    </div> <!--Close Row-->
			    
			    
			    
		
			
			
			
			<div class="full break center"><a href="#layout"><btn>Basic Layout</btn></a></div>
		</div>
</div>



<div class="half-panel parallax" style="background-image:url(https://jsbin-user-assets.s3.amazonaws.com/ipodscott/toastmaster.jpeg);" name="layout">
    <div class="panel-overlay"></div>
	<div class="middle">
	    <div class="main-content">
	        <h1 class="center">Parallax Half Height Cover</h1>
	        <div class="full break center"><a href="#big-media"><btn>Big Media Link</btn></a></div>
        </div>
    </div>
</div>

<div class="panel">
	    <div class="main-content">
	        <div class="row">
    	        <div class="full"><h2>Basic Layout</h2></div>
    		    <div class="half">
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    		        </p>
    		        </div>
    			<div class="half">
    			     <p>
    			     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    			     </p>
    			</div>
    		</div>
    		
    		<div class="row">
    		    <div class="forty"><img imgUrl="https://s3.amazonaws.com/imglibs/fiat.jpeg" class="pop-image shadow" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Lightbox+Image&w=400&h=300"/></div>
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		</div>
    		
    		<div class="row">
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		    
    		    <div class="forty"><img class="shadow pop-image" imgUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/sombra.jpg" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Lightbox+Image&w=400&h=300"/></div>
    		</div>
    		
    		<div class="row">
    		    <div class="third">
    		        <h2>Section One</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Two</h2>
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Three</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		</div>
	</div>
</div>


<div class="half-panel parallax" style="background-image:url(https://jsbin-user-assets.s3.amazonaws.com/ipodscott/sombra.jpg);" name="big-media">
    <div class="panel-overlay"></div>
	<div class="middle">
	    <div class="main-content">
	        <img class="big-play movie-btn sixteen-nine-btn" vidUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/infiltration.mp4" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/play_dark_btn.svg">
        </div>
    </div>
</div>

<div class="panel">
	    <div class="main-content">
	        <div class="row">
    	        <div class="full"><h2>Video Information</h2></div>
    		    <div class="half">
    		        <p>
    		        Lipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    		        </p>
    		        </div>
    			<div class="half">
    			     <p>
    			     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    			     </p>
    			</div>
    		</div>
    		
    		<div class="row">
    		    <div class="forty pull-left"><img class="shadow" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=400&h=300"/> </div>
    		    <div class="sixty pull-right"> <h2>Accordion</h2>
	    		    <p>
		    		    
		    		    <div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i>Accordion 1</div>
    		            <div class="acc-body">
    		                <p>Four score and seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.</p>

<p>Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.</p>

<p>But, in a larger sense, we can not dedicate -- we can not consecrate -- we can not hallow -- this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us -- that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion -- that we here highly resolve that these dead shall not have died in vain -- that this nation, under God, shall have a new birth of freedom -- and that government of the people, by the people, for the people, shall not perish from the earth.</p>


    		            </div>
    		            
    		            <div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i>Accordion 2</div>
    		            <div class="acc-body">
    		                <p>Four score and seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.</p>

<p>Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.</p>

<p>But, in a larger sense, we can not dedicate -- we can not consecrate -- we can not hallow -- this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us -- that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion -- that we here highly resolve that these dead shall not have died in vain -- that this nation, under God, shall have a new birth of freedom -- and that government of the people, by the people, for the people, shall not perish from the earth.</p>


    		            </div>
    		            
    		            <div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i>Accordion 3</div>
    		            <div class="acc-body">
    		                <p>Four score and seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.</p>

<p>Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.</p>

<p>But, in a larger sense, we can not dedicate -- we can not consecrate -- we can not hallow -- this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us -- that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion -- that we here highly resolve that these dead shall not have died in vain -- that this nation, under God, shall have a new birth of freedom -- and that government of the people, by the people, for the people, shall not perish from the earth.</p>


    		            </div>
		    		    
		    		    
	    		    </p>
    		    </div>
    		</div>
    		
    		<div class="row">
    		    <div class="forty pull-right"><img class="shadow" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=400&h=300"/> </div>
    		    <div class="sixty pull-left"> <h2>Sample Copy</h2> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin. </p> </div>
    		</div>
    		
    		    		    
    		    
    		
    		<div class="row">
    		    <div class="third">
    		        <h2>Section One</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Two</h2>
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Three</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		</div>
	</div>
</div>



<!--Media Layers-->

<div class="footer-audio">
    <div class="audio-box shadow">
        <div class="controls shadow">
            
            <i class="hide-audio material-icons">remove</i>
            
  <i class="material-icons close-audio">close</i>
        </div>
        <audio class="myAudio" id="myAudio" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/try_me.mp3" controls></audio>
    </div>
</div>

<div class="media-overlay"></div>

<div class="img-pop-box">
    <div class="img-container">
        <div class="img-box">
            <div class="img-holder">
               
                <img class="shadow myImage" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=400&h=300">
                
            </div>
        </div>
    </div>
</div>

<!--Menu Layers-->

<div class="close-media"><i class="material-icons">close</i></div>

<div class="menu-layer"></div>




<div class="side-buttons show-right shadow">
    <i class="material-icons">volume_up</i>
</div>

<i class="material-icons menu-btn">menu</i>

<div class="menu shadow">
    <div class="menu-title">Main Menu</div>
    <ul>
        <li><a href="#video-bg">Welcome</a></li>
        <li><a href="#intro">Introduction</a></li>
        <li><a href="#parallax">Parallax Cover</a></li>
        <li><a href="#audio">Audio Samples</a></li>
        <li><a href="#video">Video Sample</a></li>
        <li><a href="#layout">Basic Layout</a></li>
        <li><a href="#big-media">Big Media Link</a></li>
    </ul>
    
    
    <i class="material-icons close-menu">close</i>
</div>

<!--Video Overlay-->

<div class="modal-vid">
    <div class="movie-box">
        <div class="wide-screen">
            <div class="vid-holder">
	            <i class="material-icons close"></i>
                <img class="widescreen-img" src="https://s3.amazonaws.com/imglibs/bg_widescreen.gif"/>
                <img class="standard-img" src="https://s3.amazonaws.com/imglibs/standard_bg.gif"/>
                <img class="sixteen-nine" src="https://s3.amazonaws.com/imglibs/16x9_bg.png"/>
                <img class="pal" src="https://s3.amazonaws.com/imglibs/pal.png"/>
               
                <video id="myVideo" class="myVideo hide" src="" controls></video>
                <iframe class="youTube hide" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<div class="btt-footer">
   <a href="#video-bg"><img class="shadow" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/top_link.svg"></a>
</div>

<div class="open-overlay">
	<div class="open-overlay-box">
		<div class="open-overlay-logo"><img class="cover-title-image" src="http://wpwebos.com/spinner.svg"></div>
	</div>
</div>


<link rel="stylesheet" type="text/css" href="https://dieselpunkindustries.com/libs/audioplayer/css/audioplayer.css">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700|Oswald:300,400,700|Material+Icons" rel="stylesheet">

<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>


<script src="https://www.dieselpunkindustries.com/libs/audioplayer/js/audioplayer.min.js"></script>

<script src="//www.wpwebos.com/scroller/jquery.custom-scrollbar.js"></script>


<script type="text/javascript">
    'use strict';

$(document).ready(function () {
	
	$('.open-overlay').delay(2000).fadeOut(500, function(){});

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
     /* Accordion */
    
    
    var $container = jQuery('.acc-body'), $acc_head = jQuery('.acc-head');

		$acc_head.last().addClass('last');
		
		$acc_head.on('click', function(e) {
			if( jQuery(this).next().is(':hidden') ) {
                $acc_head.removeClass('active').next().slideUp(500);
				jQuery(this).toggleClass('active').next().slideToggle(300);
			}
          else{
            jQuery(this).toggleClass('active').next().slideToggle(300);
          }
			e.preventDefault();
		});
    

    /*Menu Controls*/
    $(".menu-btn").click(function () {
        $(".menu").addClass('show-menu');
        $('body').addClass('fade');
        $('.all').addClass('fade');
        $(".menu-layer").fadeIn(500);
    });

    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function () {
        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);
    });

    /*Audio Controls*/

    $(".play-audio").click(function () {
	    $('.audio-box').fadeIn();
        $('.myAudio').attr("src", $(this).attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
    });

    $(".audio-box .hide-audio").click(function () {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").addClass('show-side');
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
    });

    $(".show-right").click(function () {
        $(".footer-audio").addClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeIn(500);
    });

    $(".close-audio, .vid-link").click(function () {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
    });

    $(function () {
        $('.myAudio').audioPlayer();
    });

    /*Video Controls*/

	function closeAudio() {
		$(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
	}
	
	$( ".movie-btn" ).click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        document.getElementById('myVideo').play();
        $('.myVideo').removeClass("hide");
        $('.myVideo').addClass("show");
        $('.youTube').addClass("hide");
        $('.youTube').removeClass("show");
        closeAudio();
           });
    
    $( ".tube-link" ).click(function() {
        $('.youTube').removeClass("hide");
        $('.youTube').addClass("show");
        $('.myVideo').addClass("hide");
        $('.myVideo').removeClass("show");
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        
         closeAudio();
     });
    
    $(".widscreen-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show");
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
     $(".sixteen-nine-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show");
    });
    
    $(".pal-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal").addClass("show");
    });
    
    
    $(".close").click(function() { 
        $(".modal-vid").fadeOut(500);
        /*document.getElementById('myVideo').pause();*/
        $('.youTube, .myVideo').attr('src', '');
    });
	

    /* Image Pop Controls*/

      $(".pop-image").click(function () {
        $('.myImage').attr("src", $(this).attr("imgUrl"));
        $('.media-overlay, .close-media, .img-pop-box').fadeIn(500, function () {
            $('.img-holder img').fadeIn(500);
        });
        $('body').addClass('fade');
    });

    $(".close-media, .img-holder img").click(function () {
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        $('.media-overlay, .tube-frame, .close-media, .video-box, .img-holder img').fadeOut(500, function () {
            $('.img-pop-box').fadeOut(500);
        });
        document.getElementById('myVideo').pause();
        $('body').removeClass('fade');
    });
 
    /*Parallax*/

    (function ($) {

        $.fn.parallax = function (options) {

            var windowHeight = $(window).height();

            // Establish default settings
            var settings = $.extend({
                speed: 0.15
            }, options);

            // Iterate over each object in collection
            return this.each(function () {

                // Save a reference to the element
                var $this = $(this);

                // Set up Scroll Handler
                $(document).scroll(function () {

                    var scrollTop = $(window).scrollTop();
                    var offset = $this.offset().top;
                    var height = $this.outerHeight();

                    // Check if above or below viewport
                    if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
                        return;
                    }

                    var yBgPosition = Math.round((offset - scrollTop) * settings.speed);

                    // Apply the Y Background Position to Set the Parallax Effect
                    $this.css('background-position', 'center ' + yBgPosition + 'px');
                });
            });
        };
    })(jQuery);

    $('.parallax').parallax({
        speed: -0.125
    });
});

window.document.onkeydown = function (e) {
    if (!e) e = event;
    if (e.keyCode == 27) {

      $('.youTube, .myVideo').attr('src', '');
      $('.modal-vid').fadeOut(500);
       document.getElementById('myVideo').pause();

        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);

        $('.btt-footer').fadeIn(500);
    }

    if (!e) e = event;
    if (e.keyCode == 39) {
        $(".menu").addClass('show-menu');
        $('body').addClass('fade');
        $('.all').addClass('fade');
        $(".menu-layer").fadeIn(500);
    }

    if (!e) e = event;
    if (e.keyCode == 37) {
        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);
    }
};

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 40) {
        $('.btt-footer').fadeIn(500);
    } else {
        $('.btt-footer').fadeOut(500);
    }
});


</script>
</body>
</html>