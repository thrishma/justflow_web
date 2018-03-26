<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #b71818;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    opacity: .9;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
    background: black !important;
    margin: 10px !important;
    border-radius: 10px !important;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.logo-menu{
    display: table-cell;
    text-align:  center;
    width: 100%;
}
.logo-menu>img{
    width: 30px;
}
.closebtn{
	background-color: #b71818 !important;
}
</style>
<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" style="background-color: #b71818 !important;" class="closebtn" onclick="closeNav()">&times;</a>
	  
	  <a href="aboutUs.php">About Us</a>
	  <a href="features.php">Features</a>
	  <a href="FAQs.php">FAQ's</a>	  
	  <a href="Contactus.php">Contact Us</a>
	  <a href="index.php">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer; display:table-cell;" onclick="openNav()">&#9776;</span>
<div class="logo-menu"><img src="img/logo.png"></div>

<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script>