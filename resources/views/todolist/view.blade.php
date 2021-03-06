@include('header')
<h1 class="text-center"><a href="{{ url('/')}}">ToDoList</a></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="btn btn-outline-primary float-right">
            <a href="{{ url('/createtask', $list_id) }}"><i class="fa fa-plus"></i> Aanmaken</a>
        </div>                      
    </div>
</div>

<? if(count($list) == 0): ?>
    Er zijn geen taken gevonden<br />
<? else: ?>	
		<div class="row">
	        <div class="col-sm-12">
	        	<table id="myTable" class="table table-responsive table-hover m-b-0">
					<thead>
						<tr>
							<th>Taak</th>
							<th onclick="sortTable(1)">Duur</th>
							<th onclick="sortTable(2)">Status</th>
						</tr>
					</thead>
					<tbody>

						<? foreach($list as $task):?>
							<tr>
								<td>{{$task->description}}</td>	
								<td>
									<a href="{{ url('/filterDescription', [$task->duration, $list_id] ) }}">			{{$task->duration}}
									</a>
								</td>
								<td>
									<a href="{{ url('/filterStatus', [$task->status, $list_id] ) }}">
										{{$task->status}}
									</a>
								</td>
								<td><a href="{{ url('/gettask', $task->id) }}">Edit</a></td>
								<td><a href="{{ url('/deletetask', $task->id) }}">Delete</a></td>
							</tr>
						<? endforeach;?>
					</tbody>
				</table>
			</div>
		</div>	
<? endif; ?>         

@include('footer')