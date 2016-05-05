@extends('layout.master')

<div class="page-container"> 
   <header> @include('layout.header') </header>
    <div role="main" class="page-body">
		<div class="main-content">
			@section('container')
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
