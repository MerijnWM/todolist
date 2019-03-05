@include('header')

<h1 class="text-center">ToDoList</h1>

<div class="row">
    <div class="col-sm-12">
    	<table class="table table-responsive table-hover m-b-0">
			<thead>
				<tr>
					<th>naam</th>
				</tr>
			</thead>
			<tbody>
				<? foreach($list as $list):?>
					<tr>
						<td>{{$list->name}}</td>
						
						
					</tr>
				<? endforeach;?>
			</tbody>
		</table>
	</div>
</div>	

@include('footer')