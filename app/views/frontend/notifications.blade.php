@if ($errors->any())
<div class="col-md-6">
	<div class="alert alert-error alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<i class="icon-exclamation-sign"></i>
		<strong>Error: </strong>
		 Please check the form below for errors
	</div>
</div>

@endif

@if ($message = Session::get('success'))
<div class="col-md-6">
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<i class="icon-ok"></i>
		<strong>Success: </strong>
		{{ $message }}
	</div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="col-md-6">
	<div class="alert alert-error alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<i class="icon-exclamation-sign"></i>
		<strong>Error: </strong>
		{{ $message }}
	</div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="col-md-6">
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<i class="icon-warning-sign"></i>
		<strong>Warning: </strong>
		{{ $message }}
	</div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="col-md-6">
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<i class="icon-info-sign"></i>
		<strong>Info: </strong>
		{{ $message }}
	</div>
</div>
@endif
