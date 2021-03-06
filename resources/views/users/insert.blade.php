<!-- insert.blade.php -->
<!-- home_.blade.php -->
@extends('users.navbar_')
@section('title','Trainee')
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-insert_1.css')}}">
@section('content')
<br><br><br><br><br><br>
<div class="container">
      <div class="row">
   <form action="{{url('/indexs')}}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Add information </h3>
            </div>
            <div class="panel-body">
              <div class="row">
           
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" class="form-control" required></td>
                      </tr>
                      <tr>
                        <td>Country :</td>
                        <td>
							<select class="form-control" name="county" id="county" required>
                        		<option>--------- Choosing country ----------</option>
  								<option value="Phuket">Phuket</option>
  								<option value="Pattaya">Pattaya</option>
  								<option value="Bangkok">Bangkok</option>
							</select>
                        </td>
                      </tr>
                      <tr>
                        <td>Category :</td>
                        <td>
                        	<select class="form-control" name="category" id="category" required>
                        		<option>--------- Choosing category ---------</option>
  								<option value="Condos">Condo</option>
  								<option value="Villa">Villa</option>
							</select>
                        </td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Size :</td>
                        <td><input type="text" name="size" class="form-control" required> </td>
                        <td> SqM</td>
                      </tr>
                        <tr>
                        <td>Price :</td>
                        <td><input type="text" name="price" class="form-control" required></td>
                      </tr>
                      <tr>
                        <td>Bed :</td>
                        <td><input type="text" name="bed" class="form-control" required></td>
                      </tr>
                        <td>Bath :</td>
                        <td><input type="text" name="bath" class="form-control" required></td>
                           
                      </tr>
                      </tr>
                        <td>Image :</td>
                        <td> <input type="file" name="uploader" id="uploader" /></td>
                           
                      </tr>

             
                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                 	<div align="right">
                      
                      <button class="btn btn-success" type="submit" name = "btn-upload" title="Upload image"> Upload</button>
                 	
                 	</div>
                      
     </form>   
                      
                    </div>
            
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/bootstrap-insert_1.js') }}"></script> 
		@include('users.footer')
@endsection