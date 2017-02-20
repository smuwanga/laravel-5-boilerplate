@extends('frontend.layouts.app')

@section('content')

<h3>Saved Courses</h3>
<div class="container">
<table class="table table-bordered table-hover">
<thead>
	<tr>
       
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Credit Units</th>
        <th>Institution</th>
        <th>Department</th>
        <th>Semester</th>
        <th>Year</th>
        
        <th>edit</th>
        <th>delete</th>
      </tr>
</thead>
    @foreach($course as $course)
        <tr><td>{{$course->course_name}}</td> 
        	<td>{{$course->course_code}}</td>
        	<td>{{$course->credit_units}}</td>
        	<td>{{$course->institution}}</td>
        	<td>{{$course->department}}</td>
        	<td>{{$course->semster}}</td>
          <td>{{$course->year}}</td>

 
        	
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
{!! Form::open(array('url'=>'course')) !!}


 <div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Course Title', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::text('course_name', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'course title',
                                       'class'=>'form-control pull-right')) !!}
         </div>   
    </div>
    </div>

    <br>

   

<div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Course Code', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::text('course_code', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'course code',
                                       'class'=>'form-control pull-right')) !!}
         </div>   
    </div>
    </div>

    <br>


    <div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Credit Units', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::selectRange('credit_units', '1','5',null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'credit units',
                                       'class'=>'form-control pull-right')) !!}
         </div>   
    </div>
    </div>
    <br>


     <div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Institution', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::text('institution', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'Institution',
                                       'class'=>'form-control pull-right')) !!}
         </div>   
    </div>
    </div>

  
<br>
    
  <div class="row">
 
     <div class="form-group">
     <div class="col-sm-4">
    
                  
            {!! Form::label('name', 'Department') !!}
    </div>
    <div class="col-sm-8">
            {!! Form::text('department', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'Department',
                                      'class'=>'form-control pull-right')) !!}
      </div>
            
   
</div>
    </div>
  
      <br>
    <br>
     <div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Semester', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::select('semster',['one' => 'SEMSTER ONE', 'two' => 'SEMSTER TWO','three'=>'SEMSTER THREE','four'=>'SEMSTER FOUR'], null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'click to select semester')) !!}
         </div>   
    </div>
    </div>

    <br>

      <div class="row">
    
     <div class="form-group">
     <div class="col-sm-4">
                  
            {!!Form::label('name', 'Year', ['class' => '']) !!}
     </div>

     <div class="col-sm-8">
             {!! Form::selectYear('year','2018','2025', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'click to select year')) !!}
         </div>   
    </div>
    </div>

    <br>


            <div class="form-group">
                
              {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
              
                </div>
                <br>                                              
    

      </div>
          <div class="modal-footer ">
          			

                

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