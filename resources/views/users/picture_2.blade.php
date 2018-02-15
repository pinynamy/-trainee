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
	 @foreach($data as $d)
	    	 <div class="col-md-4">
		<div class="cours2" style="overflow:hidden;">
				<img class="hover" src="images/uploads/{{$d->image}}"   style="width:100%;height:200px;border:1px solid transparent;transition:1s;">
					<div class="cours3">
				 <form action="indexs/{{$d->id}}" method="POST" >
				 {{ csrf_field() }} 
						    <h5 style="text-align:right;"><button type="submit" name="_method" value="DELETE" class="btn btn-success"><i class="fa fa-trash"></i>Delete</button> <a href="indexs/{{$d->id}}/edit"><i class="fa fa-edit"></i></a></h5>
							<h1 style="text-align:center;">{{$d->name}}</h1>
							<h5 style="text-align:center;">Student Can Make Apropariats Are The Creating Applications Are The All About The Relivents If The Regarding..</h5>
                 </form>
					 
					</div>
					<div class="cours4 text-center">
						
						<!-- <button class="cou" style="border:1px solid transparent;padding:10px 20px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">View More</button> -->
					    <span class="label label-warning">
      					 Bed : {{$d->bed}}
     				   </span>
     				   <span class="label label-danger">
      					 Bath : {{$d->bath}}
     				   </span>
     				   <span class="label label-warning">
      					 Bath : {{$d->price}}
     				   </span>
					</div>
					
					
			</div>
			</div>
	@endforeach	
		
	</div>
</div>
 </body>
 </html>