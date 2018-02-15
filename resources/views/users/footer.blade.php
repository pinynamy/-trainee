<!-- footer.blade.php -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-footer.css')}}">
    </head>
<body>
<div class="footer-section">
 
	@include('users.slide_')

</div>
<div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text">
								<p>CopyRight © 2018 JIRATCHAYA SIRIRAT</p>
							</div>
						</div> <!-- End Col -->
						<div class="col-sm-6  ">
						    <div class="copyright-text pull-right">
								<p> <a href="/">Home</a> | <a href="#">Privacy</a> |<a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a> </p>
							</div>					
													
						</div> <!-- End Col -->
					</div>
				</div>
    </div>
 </body>
 </html>