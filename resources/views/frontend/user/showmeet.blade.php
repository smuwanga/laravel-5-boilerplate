@extends('frontend.layouts.app')

@section('content')

<h3>Saved Courses</h3>
<div class="container">
<table class="table table-bordered table-hover">
<thead>
	<tr>
       
        <th>Meeting Title</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Agenda</th>
        
        
        <th>edit</th>
        <th>delete</th>
      </tr>
</thead>
    @foreach($meet as $meet)
        <tr><td>{{$meet->title}}</td> 
        <td>{{$meet->venue}}</td>
        <td>{{$meet->date}}</td>
        <td>{{$meet->agenda}}</td>
        	

 
        	
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        	</td>
    		<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

        </tr>
    @endforeach
</table>
</div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Study</h4>
      </div>
          <div class="modal-body">
            {!! Form::open(array('url'=>'meet')) !!}


            <div class="form-group">
                  
         {!! Form::label('name', 'Meeting Title:', ['class' => 'col-md-4 control-label']) !!}
        
            {!! Form::input('title', 'title', null, ['class' => 'form-control']) !!}
            <!--col-md-6-->
            </div>

             <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />  
                  
            <br>
            <div class="form-group">
                  
            {!! Form::label('name', 'Date:', ['class' => 'col-md-4 control-label']) !!}
             {!! Form::date('date', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'mm/dd/yyyy',
                                       'class'=>'form-control pull-right')) !!}
            </div><!--col-md-6-->
            

                  

            <div class="form-group">
                  
            {!! Form::label('name', 'Venue:', ['class' => 'col-md-4 control-label']) !!}
                
            
            {!! Form::input('venue', 'venue', null, ['class' => 'form-control']) !!}
            </div><!--col-md-6-->
             


            <div class="form-group">
                  
            {!! Form::label('name', 'Agenda:', ['class' => 'col-md-4 control-label']) !!}
                                       {!!Form::textarea('agenda',null, ['class' => 'form-control','rows'=>5]) !!}
            </div><!--col-md-6-->
           
            <br>
           
               <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
              {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
              </div>
                </div>
                <br>
                <br>

            
               
                
            {!!Form::close()!!}   
         </div>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>




      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this Study</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


@endsection