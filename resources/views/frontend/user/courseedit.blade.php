@extends('frontend.layouts.app')

@section('content')

<div class="panel panel-default">
<div class="panel-heading">EDIT Course</div>
            <div class="panel-body">
               {!! Form::Model($study, [
              'method' => 'PATCH', 
              'url'=>['updatecourse',$study->id]
             //'route' => ['updatestudy', $study->id]
                                ]) !!}

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
    
                  
            {!! Form::label('name', 'Department', ['class' => '']) !!}
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
                                      
      {!!Form::close()!!} 
              <br>
              <br>
              </div>
      </div>  


 
     
     


      @endsection