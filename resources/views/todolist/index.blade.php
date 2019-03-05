@include('header')
<h1 class="text-center">ToDoList</h1>

<div class="row">
    <div class="col-sm-12">
        <div class="btn btn-outline-primary float-right">
            <a href="{{url('/createlist')}}"><i class="fa fa-plus"></i> Aanmaken</a>
        </div>                      
    </div>
</div>
<? if(count($lists) == 0): ?>
    Er zijn geen lijsten gevonden<br />
<? else: ?>	
		<div class="row">
	        <div class="col-sm-12">
	        	<table class="table table-responsive table-hover m-b-0">
					<thead>
						<tr>
							<th>naam</th>
						</tr>
					</thead>
					<tbody>
						<? foreach($lists as $list):?>
							<tr>
								<td>{{$list->name}}</td>								
								<td><a href="<?= url('/getlist', $list->id)?>">Edit</a></td>
								<td><a href="{{url('/deletelist')}}"> Delete</a></td>
							</tr>
						<? endforeach;?>
					</tbody>
				</table>
			</div>
		</div>	
<? endif; ?>         

@include('footer')