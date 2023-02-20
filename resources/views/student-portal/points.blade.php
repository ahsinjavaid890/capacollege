@extends('layouts.student-portal')
@section('title',__('Points'))
@section('content')
<div class="row">
	<div class="col-md-12">
		<form  enctype="multipart/form-data" method="post" action="{{ url('point') }}">
			@csrf
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Convert Points to Cash</label>
						<h6>Rate:<span>1 Points = 0.10 Cash</span></h6>
						<input  name="points" type="text"  onkeyup="_getConversion(this.value,0.1,'_cash','Cash')" onkeydown="_getConversion(this.value,0.1,'_cash','Cash')" class="form-control">
						<span id="_cash"></span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Convert to Cash</button>
					</div>
				</div>
			</div>
		</form>
		<form method="POST" action="{{ url('cashpoints') }}">
			@csrf
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Convert Cash to Points</label>
						<h6>Rate:<span>1 Cash = 10.00 Points</span></h6>
						<input type="number" name="cash" class="form-control" onkeyup="_getConversion(this.value,10,'_points','Points')" onkeydown="_getConversion(this.value,10,'_points','Points')" >
						<span id="_points"></span>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Convert to Points</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
@section('script')

<script type="text/javascript">
function _getConversion(amt,rate,spanid,name)
{
  amt = isNaN(amt)?0:parseFloat(amt);

  if(amt>0)
  {
    amt = amt*rate;
    document.getElementById(spanid).innerHTML = (amt.toFixed(4)).toString().replace(/\.?0+$/,'')+' '+name;
  }
  else
    document.getElementById(spanid).innerHTML = '';
}
</script>
@endsection