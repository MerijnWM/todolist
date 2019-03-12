@include('header')

<h1 class="text-center">ToDoList</h1>

<div class="row" align="center">
    <div class="col-sm-12">
    	<form action="{{ url('/edittask') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$task[0]->id}}">
            <input type="hidden" name="list_id" value="{{$task[0]->list_id}}">

            <div class="form-group ">
                <label class="col-md-3 control-label">Taak Omschrijving</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="description" value="{{$task[0]->description}}">
                </div>
            </div>

            <div class="form-group ">
                <label class="col-md-3 control-label">Duur</label>
                <div class="col-md-9">
                    <input type="time" class="form-control" name="duration" value="{{$task[0]->duration}}">
                </div>
            </div>

            <div class="form-group ">
                <label class="col-md-3 control-label">Status</label>
                <div class="col-md-9">
                    <select class="form-control" name="status"> 
                      <option value="niet gedaan" <? if($task[0]->status == 'niet gedaan'){echo "selected";} ?>>niet gedaan</option> 
                      <option value="gedaan" <? if($task[0]->status == 'gedaan'){echo "selected";} ?>>gedaan</option>                     
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