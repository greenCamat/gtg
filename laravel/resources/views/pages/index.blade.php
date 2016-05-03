@extends('layout.master')

<div class="page-container"> 
    <header class="page-header">
        <nav class="header-navigation">
        	<h1 class="logo"><a href="index.html">GTG</a></h1>
            <!--<ul>
                <li><a href="#" class="btn-new-contact" title="Edit Profile"></a></li>
                <li><a href="#" class="btn-settings" title="Settings"></a></li>
        	</ul>-->
        </nav>
		
		<div class="header-menu">
			<nav id="navigation">
				<ul>
					<li><a href="index.html" title="My Profile">Home</a></li>
					<li><a href="shop.html" title="Shop">Shop</a></li>
					<li><a href="#" title="Sale">Sale</a></li>
					<li><a href="#" title="My Wallet">My Wallet</a></li>
					<li><a href="#" title="Packages">Our Packages</a></li>
					<li><a href="#" title="Contact Us">Contact Us</a></li>
					<!--<li><a href="login.html" title="Logout">Logout</a></li>-->
				</ul>
			</nav>
		</div>
		<div class="division"></div>
		<div class="header-right">
			<div class="socials">
				<a href="#" class="facebook-ico">facebook</a>
				<a href="#" class="twitter-ico">twitter</a>
			</div>
		</div>
    </header>
    <div role="main" class="page-body">
		<div class="main-content">
			<div id="jssor_1" style="position: relative; margin: 0 auto; top: -29px; left: -139px; width: 920px; height: 350px; overflow: hidden; visibility: hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div style="position:absolute;display:block;background:url('../img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				</div>
				<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 780px; height: 464px; overflow: hidden;">
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="../images/window1.png" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="../images/window2.png" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="../img/05.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="../img/09.jpg" />
					</div>
				</div>
				<!-- Bullet Navigator -->
				<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
					<!-- bullet navigator item prototype -->
					<div data-u="prototype" style="width:16px;height:16px;"></div>
				</div>
				<!-- Arrow Navigator -->
				<span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
				<span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
			</div>
		</div>

		<div class="lower-content">
			<div class="Table-content">
			    <!--<div class="Title-content">
			        <p>Title here incase</p>
			    </div>-->
			    <div class="Heading-content">
			        <div class="Cell">
			            <img src="../images/circle-img-3.png" alt="sample" style="height: 150px;" />
			            <p>&nbsp;</p>
			            <p>Promotion 1</p>
			            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        </div>
			        <div class="Cell">
			        	<img src="../images/circle-img-3.png" alt="sample" style="height: 150px;" />
			        	<p>&nbsp;</p>
			            <p>Promotion 2</p>
			            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        </div>
			        <div class="Cell">
			        	<img src="../images/circle-img-3.png" alt="sample" style="height: 150px;" />
			        	<p>&nbsp;</p>
			            <p>Promotion 3</p>
			            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        </div>
			    </div>
			    <div class="Row">
			        <div class="Cell">
			            <a href="#">View details...</a>
			        </div>
			        <div class="Cell">
			           <a href="#">View details...</a>
			        </div>
			        <div class="Cell">
			            <a href="#">View details...</a>
			        </div>
			    </div>
			</div>
		</div>

  </div>

</div>
<!-- /.page-container -->

<footer class="page-footer">
	<div>Copyright GTG - Groceries TO-GO | 2016</div>
</footer><div id="overlay"></div>

<div id="modal-wrap"> <!-- put all modal elements here --> 
</div>
<style>
    </style>
</body>
</html>
