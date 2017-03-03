<h3> Supervisors</h3>

<table class="table">
	<thead>
		
		<th>Name</th>
		<th>Email Address</th>
		<th>Add supervisor</th>
		<th>Delete</th>
		</thead>
		<tr>

		@foreach($supervisor as $supervisor)
			
			<td>{{$supervisor->name}}</td>
			<td>{{$supervisor->email}}</td>
			
			
		
		 <td><p data-placement="top" data-toggle="tooltip" title="Add supervisor"> 
		 <a href="{{url('supervise')}}/{{$supervisor->user_id}}"><button type="button" class="btn btn-success">
          ADD <span class="glyphicon glyphicon-plus"></span></button></a> 
		 		
        	</td>
    		<td><p data-placement="top" data-toggle="tooltip" title="Delete supervisor">

    		<a href="{{url('delete_supervisor')}}/{{$supervisor->user_id}}"><button type="button" class="btn btn-danger">
          DELETE<span class="glyphicon glyphicon-minus"></span></button></a>
    		</td>

    		 </tr>
        @endforeach

		 
</table>
