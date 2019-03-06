@include('header')

<h1 class="text-center">ToDoList</h1>

<div class="row " align="center">
    <div class="col-sm-12">
    	<form action="{{ url('/inserttask') }}" method="POST">
    		{{ csrf_field() }}
            <input type="hidden" name="list_id" value="{{$list_id}}">

    		<div class="form-group ">
                <label class="col-md-3 control-label">Taak Omschrijving</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="description">
                </div>
            </div>

            <div class="form-group ">
                <label class="col-md-3 control-label">Duur</label>
                <div class="col-md-9">
                    <input type="time" class="form-control" name="duration">
                </div>
            </div>

            <div class="form-group ">
                <label class="col-md-3 control-label">Status</label>
                <div class="col-md-9">
                    <select class="form-control" name="status"> 
                      <option value="niet gedaan">niet gedaan</option> 
                      <option value="gedaan">gedaan</option>                     
                    </select>
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