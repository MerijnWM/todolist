@include('header')

<h1 class="text-center">ToDoList</h1>

<div class="row" align="center">
    <div class="col-sm-12">
    	<form action="{{ url('/editlist') }}" method="POST">
    		{{ csrf_field() }}
    		<input type="hidden" name="id" value="{{$list[0]->id}}">
    		<div class="form-group ">
                <label class="col-md-3 control-label">Lijstnaam</label>
                <div class="col-md-9">
                    <input class="form-control" type="text" name="name" value="{{$list[0]->name}}">
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