<?php

$temp=$_POST['input1'];

?>
<?php
include_once "mysql_connect.php";
 
$sql5 = "SELECT COUNT(sform) FROM fullforms WHERE sform LIKE '$temp%'"; 
$rs_result = mysql_query($sql5); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 

$sql6 = "SELECT COUNT(sform) FROM fullforms WHERE sform LIKE '%" .$temp. "%'"; 
$rs_result2 = mysql_query($sql6); 
$row2 = mysql_fetch_row($rs_result2); 
$total_records2 = $row2[0]; 

if($total_records==0)
{$total_records2;}

?>
<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />
<title >SearchBox.com
</title>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<?php echo"<script>jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script>"?>


<style type="text/css">
.WebContainer{
    width:100%;
    min-width:1000px;
    height:auto;
}
.articles{
    width:90%; /*Takes 90% width from WebContainer*/
    height: auto;
    margin: auto;
}
#logo {float:left;
position:absolute;
top:-20px;
left:30px;
background-color:#FF3E96;
border:10px solid #FF3E96;
border-radius:20px;}
.cf:before, .cf:after{
    content:"";
    display:table;
}


 
.cf:after{
    clear:both;
}
 
.cf{
    zoom:1;
}    
/* Form wrapper styling */
.form-wrapper {
    width: 450px;
    padding: 15px;
    margin: 60px auto 50px auto;
    background: #444;
    background: rgba(0,0,0,.2);
    border-radius: 10px;
    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
}
 
/* Form text input */
 
.form-wrapper input {
    width: 330px;
    height: 20px;
    padding: 10px 5px;
    float: left;    
    font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
    border: 0;
    background: #eee;
    border-radius: 3px 0 0 3px;
opacity:0.5;	
}
 
.form-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}
 
.form-wrapper input::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
   font-style: italic;
}
 
.form-wrapper input:-moz-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}
 
.form-wrapper input:-ms-input-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}    
 
/* Form submit button */
.form-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 110px;
    font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    text-transform: uppercase;
    background:  #8B0A50;
    border-radius: 0 3px 3px 0;      
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}   
   
.form-wrapper button:hover{     
    background:#FF3E96;
}   
   
.form-wrapper button:active,
.form-wrapper button:focus{   
    background: #8B0A50;
    outline: 0;   
}
 
.form-wrapper button:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #d83c3c transparent;
    top: 12px;
    left: -6px;
}
 
.form-wrapper button:hover:before{
    border-right-color: #e54040;
}
 
.form-wrapper button:focus:before,
.form-wrapper button:active:before{
        border-right-color: #c42f2f;
}      
 
.form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
}    


#tabu {position:relative;
left:300px;}
.tabs {
  list-style:none;
  padding: 0;
  overflow:hidden;
}
.tab {background-color:#8B0A50;
     font-family:Comic Sans MS;
     color:white;
  display: block;
  float: left;
  border:2px solid pink;
  border-radius:8px 8px 0px 0px;
  padding-left: 30px;
    padding-right: 30px;
	  padding-top: 20px;
	    padding-bottom: 20px;
}
.tab:hover{background-color:#FF3E96;
     color:white;
  position: relative;
  border: 4px solid #FF00FF;
  border-bottom: none;
  border-radius: 8px 8px 0px 0px;
}
.tab.active {background-color:#FF3E96;
     color:white;
  position: relative;
  border: 4px solid #FF00FF;
  border-bottom: none;
  border-radius: 8px 8px 0px 0px;
}
.tab.active::after,
.tab.active::before {
  display: block;
  content: '';
  position: absolute;
  bottom: 0;
  height: 0px;
  width: 43em;
  border-bottom: 2px solid #FF00FF;
  pointer-events: none;
}
.tab.active::before {
  right:100%;
  margin-right: 4px;
}
.tab.active::after {
  left: 100%;
  margin-left: 4px;
}
a {
  color: inherit;
  text-decoration: none;
}
#heading{position:relative;
font-family:Comic Sans MS;
color:#C71585;
left:300px;}

#wall{background:url(wall6.jpg);
       background-repeat:no-repeat;
	   background-size:100% 100%;
	   background-position:0px 0px; }
	   
 body{background-color:#faf9f9;}
 
 #ans{position:relative;
 left:300px;
	 color:#C71585;
      font-family:Comic Sans MS;}

@font-face {
    font-family: 'si';
    src: url('socicon.eot');
    src: url('socicon.eot?#iefix') format('embedded-opentype'),
         url('socicon.woff') format('woff'),
         url('socicon.ttf') format('truetype'),
         url('socicon.svg#icomoonregular') format('svg');
    font-weight: normal;
    font-style: normal;
 
}
 
@media screen and (-webkit-min-device-pixel-ratio:0) {
    @font-face {
        font-family:si;
        src: url(socicon.svg) format(svg);
    }
}

.soc {float:left;
position:relative;
left:20px;
    overflow:hidden;
    margin:0; padding:0;
    list-style:none;
}

.soc li {
    display:inline-block;
    *display:inline;
    zoom:1;
}

.soc li a {
    font-family:si!important;
    font-style:normal;
    font-weight:400;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    -ms-box-sizing:border-box;
    -o-box-sizing:border-box;
    box-sizing:border-box;
    overflow:hidden;
    text-decoration:none;
    text-align:center;
    display:block;
    position: relative;
    z-index: 1;
    width: 50px;
    height: 50px;
    line-height: 80px;
    font-size: 44px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    margin-right: 10px;
    color: #fafafa;
    background-color: #ff00f5;
}

.soc-icon-last{
    margin:0 !important;
}

.soc-twitter:before {
    content:'a';
}
.soc-facebook:before {
    content:'b';
}
.soc-google:before {
    content:'c';
}
.soc-rss:before {
    content:',';
}

footer{position:relative;
top:24px;
left:77px;
	color:pink;
        font-family:Comic Sans MS;}	  




.left{position:absolute;
      left:-10px;
	  top:280px;
	  float:left;
	  border: 7px solid #FF3E96;
	  border-radius:14px;
	  opacity:0.8;}	
	  
	  .back-to-top{position:fixed;
display:none;
top:0px;
left:1195px;}


.back-to-top:hover {  border-radius:10px; 
    background-color:#FF3E96;
}	  
#ad5ve{position:absolute;
        top:0px;
         left:440px;}

#ad5ve2{position:absolute;
        top:0px;
         left:1000px;}	 
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('page-loader2.gif') 50% 50% no-repeat rgb(255,255,255);
}		 
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
</head>
<body>
<div class="loader"></div>

<div id="wall">
<div id="logo"><img src="logo20.jpg" height="240" width="240"></img></div>

<form class="form-wrapper cf" action="search.php" method="post">
        <input name="input1" type="text" size="30" placeholder="Search here..." required>
        <button id ="Submit" type="submit" >Search</button>
    </form> 
	
	
	<div id="tabu"><ul class="tabs">
  <li><a class="tab" href="about.php">About Us</a></li>
  <li><a class="active tab" href="index.php">Home</a></li>
  <li><a class="tab" href="how.php">How to 'search'?</a></li>
  <li><a class="tab" href="rate.php">Rate Us!</a></li>
  <li><a class="tab" href="owner.php">Admin</a></li>
  <li><a class="tab" href="comment.php">Comment</a></li>
  <li><a class="tab" href="contact.php">Contact us</a></li>
</ul>  </div>


      <div id="heading"><h1>found "<?php if($total_records==0)print $total_records2;  else{print $total_records;} ?>" matching terms:</h1></div>
	  <div id="ans">
	   <?php
if($total_records != 0)
	   {

echo "<table style='border: solid 2px pink;border-radius:10px;
                     text-align:center;'>";
 echo "<tr ><th><h4>SHORT FORM</h4></th><th><h4>FULL FORM</h4></th><th><h4>VIEWS</h4></th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:295px;border:3px solid pink ;
		border-radius:10px;font-size:large;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
 $username = "1000253";
$password = "abdulkalam";
$dbname = "1000253db2";
 
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare("SELECT sform,fform,views FROM fullforms WHERE sform LIKE '$temp%' "); 
    $stmt->execute();
     $stmt2 = $conn->prepare("UPDATE fullforms SET views =views+1 WHERE sform LIKE '$temp%' "); 
	  $stmt2->execute();
	  
	
	
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchall())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
	   }
else if($total_records==0 && $total_records2!=0)
{
echo "<table style='border: solid 2px pink;border-radius:10px;
                     text-align:center;'>";
 echo "<tr ><th><h4>SHORT FORM</h4></th><th><h4>FULL FORM</h4></th><th><h4>VIEWS</h4></th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:295px;border:3px solid pink ;
		border-radius:10px;font-size:large;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
 $username = "1000253";
$password = "abdulkalam";
$dbname = "1000253db2";
 
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare("SELECT sform,fform,views FROM fullforms WHERE sform LIKE '%" .$temp. "%' "); 
    $stmt->execute();
     $stmt2 = $conn->prepare("UPDATE fullforms SET views =views+1 WHERE sform LIKE '%" .$temp. "%' "); 
	  $stmt2->execute();
	  
	
	
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchall())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
}else {echo"<h3 style='font-family:chiller;font-size:30px;'>Sorry, something went wrong while we were doing this search.</br> Please try later.</h3>";}
?>
 </div>
 </br></br></br></br></br></br></br></br>
 </br></br></br></br></br></br></br></br>
 </br></br></br></br></br></br>
 </br></br></br></br></br></br></br></br>
 </br></br></br></br></br></br>
<ul class="soc">
    <li><a class="soc-twitter" href="#"></a></li>
    <li><a class="soc-facebook" href="http://www.facebook.com/dr.slang"></a></li>
    <li><a class="soc-google" href="https://plus.google.com/104593024634371159780/posts"></a></li>
    <li><a class="soc-rss soc-icon-last" href="#"></a></li>
</ul>
<footer >
&copy;copyright SearchBox.com
</footer>
<div class="left"><iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=seacomdrsla-20&o=1&p=49&l=ur1&category=hotnewreleases&banner=1PSDE4ATZRRECK8GJ502&f=ifr&linkID=HPRXJ3ZJD7IXV7TP" width="300" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>


<a href="#" class="back-to-top"><img src="b2t.jpg" width="70" height="70"/></a>

<div id="ad5ve"><iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=seacomdrsla-20&o=1&p=26&l=ur1&category=kindle&banner=1DN30T9KNS5T2ZGXTD82&f=ifr&linkID=BB3H6VT3Q7FRZ47I" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>



</div>
<div id="ad5ve2"><iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=seacomdrsla-20&o=1&p=21&l=ur1&category=bestsellingproducts&banner=0R2DJ08H0GJZESCXXJ02&f=ifr&linkID=WXLXCS3YSK3IO32K" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

</div>
   </div>
</body>
</html>