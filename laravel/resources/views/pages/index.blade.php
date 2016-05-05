@extends('layout.master')

<div class="page-container"> 
   <header> @include('layout.header') </header>
    <div role="main" class="page-body">
		<div class="main-content">
			<div id="jssor_1" style="position: relative; margin: 0 auto; top: -29px; left: -139px; width: 920px; height: 350px; overflow: hidden; visibility: hidden;">sss
				<!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div style="position:absolute;display:block;background:url('/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				</div>
				<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 780px; height: 464px; overflow: hidden;">
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="/images/window1.png" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="/images/window2.png" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="/img/05.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="/img/09.jpg" />
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
			            <img src="/images/circle-img-3.png" alt="sample" style="height: 150px;" />
			            <p>&nbsp;</p>
			            <p>Promotion 1</p>
			            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        </div>
			        <div class="Cell">
			        	<img src="/images/circle-img-3.png" alt="sample" style="height: 150px;" />
			        	<p>&nbsp;</p>
			            <p>Promotion 2</p>
			            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        </div>
			        <div class="Cell">
			        	<img src="/images/circle-img-3.png" alt="sample" style="height: 150px;" />
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
<footer> @include('layout.footer') </footer>
</body>
</html>
