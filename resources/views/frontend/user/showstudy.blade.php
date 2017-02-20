@extends('frontend.layouts.app')

@section('content')

<h3>Saved Studies</h3>
<div class="container">
<table class="table table-bordered table-hover">
<thead>
	<tr>
       
        <th>Study Name</th>
        <th>Study Objectives</th>
        <th>Manuscripts</th>
        <th>Data collection</th>
        <th>Data Analysis</th>
        <th>Manuscript writing</th>
        <th>Ethical approval</th>
        
        <th>edit</th>
        <th>delete</th>
      </tr>
</thead>
    @foreach($plans as $plan)
        <tr><td>{{$plan->study_name}}</td> <td>{{$plan->objectives}}</td>
        	<td>{{$plan->number_papers}}</td>
        	<td>{{$plan->data_collection}}</td>
        	<td>{{$plan->data_analysis}}</td>
        	<td>{{$plan->manuscript}}</td>
        	<td>{{$plan->ethical_approval}}</td>
 
        	
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



        {!! Form::open(array('url'=>'plan')) !!}

                        <div class="row">
                        <div class="form-group">
                         
                        {!!Form::label('name', 'STUDY TITLE', ['class' => 'control-label col-sm-2'])!!}
                          <div class="col-sm-10">
                         {!! Form::input('study_name', 'study_name', null, ['class' => 'form-control','placeholder'=>'study title goes here']) !!}
                          </div>     
                            </div>
                            </div>

                            <div class="form-group">
                            {!!Form::hidden('study_number','studyfive',null,['value'=>'studyone'])!!}
                            </div>
                                 
                          
                          <div class="row">
                         <div class="form-group">
                           
                        {!!Form::label('name', 'OBJECTIVES', ['class' => 'control-label col-sm-2'])!!}
                        <div class="col-sm-10">
                         {!! Form::textarea('objectives', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'Your Objectives here')) !!}
                          </div>
                        </div>  
                        </div>       

  <br>

                         <div class="row">
                         <div class="form-group">
                           <div class="col-md-2"></div>
                        {!!Form::label('name', 'Ethical Approval date:', ['class' => 'control-label col-sm-4'])!!}
                        
                        <div class="col-sm-6">
                      
                         {!! Form::date('ethical_approval', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'mm/dd/yyyy',
                                       'class'=>'form-control pull-right')) !!}
                          </div>
                        </div>  
                        </div>
  <br>    
                        <div class="row">
                         <div class="form-group">
                           <div class="col-md-2"></div>
                        {!!Form::label('name', 'Data Collection:', ['class' => 'control-label col-sm-4'])!!}
                        
                        <div class="col-sm-6">
                      
                         {!! Form::date('data_collection', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'mm/dd/yyyy',
                                       'class'=>'form-control pull-right')) !!}
                          </div>
                        </div>  
                        </div>                  


                         
 <br>                  

                       <div class="row">
                         <div class="form-group">
                           <div class="col-md-2"></div>
                        {!!Form::label('name', 'Data Analysis:', ['class' => 'control-label col-sm-4'])!!}
                        
                        <div class="col-sm-6">
                      
                         {!! Form::date('data_analysis', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'mm/dd/yyyy',
                                       'class'=>'form-control pull-right')) !!}
                          </div>
                        </div>  
                        </div>


<br>                    
                            <div class="row">
                         <div class="form-group">
                           <div class="col-md-2"></div>
                        {!!Form::label('name', 'Manuscript Writing:', ['class' => 'control-label col-sm-4'])!!}
                        
                        <div class="col-sm-6">
                      
                         {!! Form::date('manuscript', null, 
                              array('required', 
                                      'class'=>'form-control', 
                                       'placeholder'=>'mm/dd/yyyy',
                                       'class'=>'form-control pull-right')) !!}
                          </div>
                        </div>  
                        </div>
                        <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />  



<br>                      
                        <div class="row">
                          <div class="form-group">
                           <div class="col-md-2"></div>
                        {!!Form::label('name', 'Anticipated Manuscripts:', ['class' => 'control-label col-sm-4'])!!}
                          {!!Form::selectRange('number_papers','1','10')!!}

                            </div> 
                           </div>
                                 

                  

      <div class="row"> 
             
             <div class="col-sm-2">
             <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
              {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
              </div>
                </div>
              </div>
             </div>  



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