@include('header')

<h1 class="text-center">ToDoList</h1>

<div class="row " align="center">
    <div class="col-sm-12">
    	<form action="{{ url('/insertlist') }}" method="POST">
    		{{ csrf_field() }}
    		<div class="form-group ">
                <label class="col-md-3 control-label">Lijstnaam</label>
                <div class="col-md-9">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-9">
                   	<input class="btn btn-default form-control" type="submit" name="submit" value="Opslaan">
                </div>
            </div>
    	</form>
	</div>
</div>	

@include('footer')