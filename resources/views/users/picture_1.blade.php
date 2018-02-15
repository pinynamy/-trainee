<!-- picture.blade.php -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-picture.css')}}">
    </head>
<body>
<div class="container">
	<div class="row">
	    	 <div class="col-md-4">
		<div class="cours2" style="overflow:hidden;">
				<img class="hover" src="image/villa1.jpg" style="width:100%;height:200px;border:1px solid transparent;transition:1s;">
					<div class="cours3">
						    <h5 style="text-align:right;"><a href="#"><i class="fa fa-trash"></i></a> <a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-eye"></i></a></h5>
							<h1 style="text-align:center;">Pattaya</h1>
							<h5 style="text-align:center;">Student Can Make Apropariats Are The Creating Applications Are The All About The Relivents If The Regarding..</h5>

					
					</div>
					<div class="cours4 text-center">
						
						<!-- <button class="cou" style="border:1px solid transparent;padding:10px 20px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">View More</button> -->
					    <span class="label label-warning">
      					  Condos & Vlilas: {{$countpy}}
     				   </span>
     		
					</div>
					
					
			</div>
			</div>
			 <div class="col-md-4">
		<div class="cours2" style="overflow:hidden;">
				<img class="hover" src="image/villa2.jpg" style="width:100%;height:200px;border:1px solid transparent;transition:1s;">
					<div class="cours3">
						<h5 style="text-align:right;"><a href="#"><i class="fa fa-trash"></i></a> <a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-eye"></i></a></h5>
							<h1 style="text-align:center;">Phuket</h1>
							<h5 style="text-align:center;">Student Can Make Apropariats Are The Creating Applications Are The All About The Relivents If The Regarding..</h5>
					
					</div>
					<div class="cours4 text-center">
						
						<span class="label label-warning">
      					 Condos & Vlilas: {{$countpk}}
     				   </span>
					
					</div>
					
			</div>
			</div>
			 <div class="col-md-4">
		<div class="cours2" style="overflow:hidden;">
				<img class="hover" src="image/villa3.jpg" style="width:100%;height:200px;border:1px solid transparent;transition:1s;">
					<div class="cours3">
						<h5 style="text-align:right;"><a href="#"><i class="fa fa-trash"></i></a> <a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-eye"></i></a></h5>							
						<h1 style="text-align:center;">Bangkok</h1>
						<h5 style="text-align:center;">Student Can Make Apropariats Are The Creating Applications Are The All About The Relivents If The Regarding..</h5>
					
					</div>
					<div class="cours4 text-center">
						
						<span class="label label-warning">
      					 Condos & Vlilas: {{$countbk}}
     				   </span>
					
					</div>
			</div>
			</div>
	</div>
</div>
 </body>
 </html>