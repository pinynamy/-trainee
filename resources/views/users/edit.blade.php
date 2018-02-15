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
    <form action="{{url('indexs',$data->id)}}" method="post" enctype="multipart/form-data">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
      @method('PUT')
   
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Edit information </h3>
            </div>
            <div class="panel-body">
              <div class="row">
           
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" class="form-control" required  value="{{$data->name}}"></td>
                      </tr>
                      <tr>

                    


                        <td>Country :</td>
                        <td>
              <select class="form-control" name="county" id="county" required value="{{$data->county}}">
                  <option>--------- Choosing country ----------</option>
                    @if($data->county == 'Phuket')
                      <option value="Phuket" selected>Phuket</option>
                    @else
                      <option value="Phuket">Phuket</option>
                    @endif
                    @if($data->county == 'Pattaya')
                      <option value="Pattaya" selected>Pattaya</option>
                    @else
                      <option value="Pattaya">Pattaya</option>
                    @endif
                    @if($data->county == 'Pattaya')
                      <option value="Bangkok" selected>Bangkok</option>
                    @else
                      <option value="Bangkok">Bangkok</option>
                    @endif
              </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Category:</td>
                        <td>
                          <select class="form-control" name="category" id="category" required value="{{$data->category}}">
                            <option>--------- Choosing category ---------</option>
                            @if($data->category == 'Condos')
                            <option value="Condos" selected>Condo</option>
                            @else
                            <option value="Condos">Condo</option>
                            @endif
                            @if($data->category == 'Villa')
                            <option value="Villa" selected>Villa</option>
                            @else
                            <option value="Villa">Villa</option>
                            @endif
                            
              </select>
                        </td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Size :</td>
                        <td><input type="text" name="size" class="form-control" required value="{{$data->size}}"> </td>
                        <td> SqM</td>
                      </tr>
                        <tr>
                        <td>Price :</td>
                        <td><input type="text" name="price" class="form-control" required value="{{$data->price}}"></td>
                      </tr>
                      <tr>
                        <td>Bed :</td>
                        <td><input type="text" name="bed" class="form-control" required value="{{$data->bed}}"></td>
                      </tr>
                        <td>Bath :</td>
                        <td><input type="text" name="bath" class="form-control" required value="{{$data->bath}}"></td>
                           
                      </tr>
                      </tr>
                        <td>Image :</td>
                        <td><input type="file" class="form-control" name="uploader" id= "image" required></td>
                           
                      </tr>

             
                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                  <div align="right">

                    <button class="btn btn-success" type="submit" name = "btn-upload" title="Upload image">Update</button>
                  </div>
                  {{ csrf_field() }}
                        
      </form>                
                    </div>
            
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/bootstrap-insert_1.js') }}"></script> 
    @include('users.footer')
@endsection