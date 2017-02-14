@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4 col-md-push-8">

                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="{{ $logged_in_user->picture }}" alt="Profile picture">
                                    </div><!--media-left-->

                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{ $logged_in_user->name }}<br/>
                                            <small>
                                                {{ $logged_in_user->email }}<br/>
                                                Joined {{ $logged_in_user->created_at->format('F jS, Y') }}
                                            </small>
                                        </h4>

                                        {{ link_to_route('frontend.user.account', trans('navs.frontend.user.account'), [], ['class' => 'btn btn-info btn-xs']) }}

                                        @permission('view-backend')
                                            {{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration'), [], ['class' => 'btn btn-danger btn-xs']) }}
                                        @endauth
                                    </div><!--media-body-->
                                </li><!--media-->
                            </ul><!--media-list-->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Actions</h4>
                                </div><!--panel-heading-->

                                <div class="panel-body">
                                     
                                    <ul><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2" >Public Engagement</a></ul>
                                    
                                     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                 <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">PUBLIC ENGAGEMENT </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                          
                                                          
                                                      <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">YEAR ONE</a></li>
  <li><a data-toggle="tab" href="#menu1">YEAR TWO</a></li>
  <li><a data-toggle="tab" href="#menu2">YEAR THREE</a></li>
  <li><a data-toggle="tab" href="#menu3">YEAR FOUR</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">

  <h3> YEAR ONE </h3>
  <br>
  <br>
        {{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Engagement Type:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Audience:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>
                  

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Frequency:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::number('num', 'num', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>    


            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Comments:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::textarea('comments',null, ['class' => 'form-control','rows'=>5]) }}
            </div><!--col-md-6-->
            </div>   
            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />   
           
               <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>
            {{Form::close()}}  
  </div>
  <div id="menu1" class="tab-pane fade">
  <h3> YEAR TWO </h3>
           <br>
           <br>

            {{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'EngagementType:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Audience:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>
                  

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Frequency:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::number('num', 'num', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>    


            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Comments:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::textarea('comments',null, ['class' => 'form-control','rows'=>5]) }}
            </div><!--col-md-6-->
            </div>   
            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />   
           
                <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>
                
            {{Form::close()}}
    
  </div>
  <div id="menu2" class="tab-pane fade">
  <h3> YEAR THREE </h3>
             <br>
             <br>

            {{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Engagement Type:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Audience:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>
                  

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Frequency:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::number('num', 'num', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>    


            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Comments:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::textarea('comments',null, ['class' => 'form-control','rows'=>5]) }}
            </div><!--col-md-6-->
            </div>   
            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />   
           
                <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>
                
            {{Form::close()}}
    
  </div>

  <div id="menu3" class="tab-pane fade">
  <h3> YEAR FOUR </h3>
  <br>
  <br>

            {{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Engagement Type:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Audience:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>
                  

            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Frequency:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::number('num', 'num', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>    


            <div class="form-group">
             <div class="col-sm-4">     
            {{ Form::label('name', 'Comments:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-8">
            {{ Form::textarea('comments',null, ['class' => 'form-control','rows'=>5]) }}
            </div><!--col-md-6-->
            </div>   
            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />   
           
                <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>
                
            {{Form::close()}}
    
  </div>
</div>



                                                          
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                    
                                    
                                    
                                    <ul><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">Add Study Plan</a></ul>
                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"> CREATE STUDY PLAN </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                          
<div class="row">   

    <div class="col-sm-6">
                                                      <div class="panel panel-success"> 
                                                          <div class="panel-heading"> COURSE COMPLETION SCHEDULE</div>
                                                          
<div class="panel-body">

 {!! Form::open(array('url'=>'course')) !!}

    <div class="form-group">
                  
            {!! Form::label('name', 'Course Title', ['class' => '']) !!}
            {!! Form::input('course_name', 'course_name', null, ['class' => 'form-control']) !!}
            
    </div>


     <div class="form-group">
                  
            {!!Form::label('name', 'Course Code', ['class' => '']) !!}
            {!! Form::input('course_code', 'course_code', null, ['class' => 'form-control']) !!}
            
    </div>


     <div class="form-group">
                  
            {!! Form::label('name', 'Credit Units', ['class' => '']) !!}
            {!! Form::number('credit_units', 'credit_units', null, ['class' => 'form-control']) !!}
            
    </div>

     <div class="form-group">
                  
            {!! Form::label('name', 'Institution', ['class' => '']) !!}
            {!! Form::input('institution', 'institution', null, ['class' => 'form-control']) !!}
            
    </div>

     <div class="form-group">
                  
            {!! Form::label('name', 'Department', ['class' => '','placeholder'=>'department']) !!}
            {!! Form::input('department', 'department', null, ['class' => 'form-control'],'placeholder','department where you belong') !!}
            
    </div>
    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />  

 <div class="form-group">
                  
         <select name="semster">
  <option value="young">ONE</option>
  <option value="adult">TWO</option>
  <option value="adult2">THREE</option>
</select>    
    </div>    

    <div class="form-group">
                  
            <select name="duration">
  <option value="young">yea</option>
  <option value="adult">19 to 30</option>
  <option value="adult2">Over 30</option>
</select>
    </div>    
  
  
            <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
              {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
              </div>
                </div>
                                                              
      </div>
                                                          
  </div>
    </div>
    <div class="col-sm-6">
        
        <div class="panel panel-info"> 
              <div class="panel-heading">SECHDULE MEETING PLAN</div>
             <div class="panel-body">        
             
           {!! Form::open(array('url'=>'meet')) !!}


            <div class="form-group">
                  
         {!! Form::label('name', 'Meeting Title:', ['class' => 'col-md-4 control-label']) !!}
        
            {!! Form::input('title', 'title', null, ['class' => 'form-control']) !!}
            <!--col-md-6-->
            </div>
                  
            <br>
            <div class="form-group">
                  
            {!! Form::label('name', 'Date:', ['class' => 'col-md-4 control-label']) !!}
            {!! Form::date('date', 'date', null, ['class' => 'form-control']) !!}
            </div><!--col-md-6-->
            

                  

            <div class="form-group">
                  
            {!! Form::label('name', 'Venue:', ['class' => 'col-md-4 control-label']) !!}
                
            
            {!! Form::input('venue', 'venue', null, ['class' => 'form-control']) !!}
            </div><!--col-md-6-->
             


            <div class="form-group">
                  
            {!! Form::label('name', 'Agenda:', ['class' => 'col-md-4 control-label']) !!}
                                       {!!Form::textarea('agenda',null, ['class' => 'form-control','rows'=>5]) !!}
            </div><!--col-md-6-->
           
            
           
               <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
              {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
              </div>
                </div>
                
            {!!Form::close()!!}                                       
                    
              </div>          
        </div>
          
    
    </div> <!--col ends here -->
    
</div>
                        
                                                          
    <div class="panel panel-info">
        <div class="panel-heading"> THESIS COMPLETION PLAN </div>  
         <div class="panel-body"> 
            
                  <label>Number of studies</label>  
                    <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#opt">STUDY ONE</a></li>
                    <li><a data-toggle="tab" href="#opt1"><b>STUDY TWO</b></a></li>
                    <li><a data-toggle="tab" href="#opt2"><b>STUDY THREE</b></a></li>
                    <li><a data-toggle="tab" href="#opt3"><b>STUDY FOUR</b></a></li>  
                    <li><a data-toggle="tab" href="#opt4"><b>STUDY FIVE</b></a></li>    
                    </ul>
                    
                    <div class="tab-content">
                        <div id="opt" class="tab-pane fade in active"> <h3><ul>STUDY ONE</ul></h3>
                        
                        <!--CONTENT-->
                        <form class="form-horizontal">
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">STUDY TITLE </label>
                                <div class="col-sm-10">
                                <input type="text" name="title" placeholder="study title here">
                                </div>    
                            </div>     
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">OBJECTIVES</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                            </div>
                            
                            <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">ANTICIPATED MANUSCRIPTS</label>
                            <select class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            </div>

                        </form>    
                            
                            
                            
                    </div>
                    
                    
                        <div id="opt1" class="tab-pane fade">
                        <h3>STUDY TWO</h3>
                            <!--CONTENT-->
                                                    <form class="form-horizontal">

                                                    <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">STUDY TITLE </label>
                                <div class="col-sm-10">
                                <input type="text" name="title" placeholder="study title here">
                                </div>    
                            </div>     
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">OBJECTIVES</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                            </div>
                            
                            <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">ANTICIPATED MANUSCRIPTS</label>
                            <select class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            </div>

                        </form>   
                        </div>
                   
                        
                        
                        <div id="opt2" class="tab-pane fade">
                        <h3>STUDY THREE</h3>
                            <!--CONTENT-->
                        <form class="form-horizontal">
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">STUDY TITLE </label>
                                <div class="col-sm-10">
                                <input type="text" name="title" placeholder="study title here">
                                </div>    
                            </div>     
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">OBJECTIVES</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                            </div>
                            
                            <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">ANTICIPATED MANUSCRIPTS</label>
                            <select class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            </div>

                        </form>   
                        </div>
                  
                        
                        
                        <div id="opt3" class="tab-pane fade">
                        <h3>STUDY FOUR</h3>
                            <!--CONTENT-->
                    <form class="form-horizontal">
                    <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">STUDY TITLE </label>
                                <div class="col-sm-10">
                                <input type="text" name="title" placeholder="study title here">
                                </div>    
                            </div>     
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">OBJECTIVES</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                            </div>
                            
                            <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">ANTICIPATED MANUSCRIPTS</label>
                            <select class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            </div>

                        </form>   
                        </div>
                   
                        
                         
                        <div id="opt4" class="tab-pane fade">
                        <h3>STUDY FIVE</h3>
                            <!--CONTENT-->
                                            <form class="form-horizontal">

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">STUDY TITLE </label>
                                <div class="col-sm-10">
                                <input type="text" name="title" placeholder="study title here">
                                </div>    
                            </div>         
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">OBJECTIVES</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                            </div>
                            
                            <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">ANTICIPATED MANUSCRIPTS</label>
                            <select class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            </div>


                        </div>
                        <br>
                        <br>
                        </form> 
                        </div>


                

                    
                    
                    
             <div class="row"> 
             <div class="col-sm-10"> </div>  
             <div class="col-sm-2">
              <button type="button" class="btn btn-primary">Save changes</button>  
              </div>
             </div>   
                                                          
          </div>                                             
    </div>    
                                                          
          <!-- START DATE , SUBMISSION DATE, PUBLIC DEFENCE(WITH QUATERS EVERY YEAR START WITH 2018) -->                                                
                                                          
    <div class="panel-info">
    <div class="panel-heading">DESERTATION WRITING PLAN</div>
    <br>
    <br>
        
            
            <b> <h3>START DATES FOR:</h3></b> 
                  <form class="form-horizontal">
                        <div class="form-group">
                             <label class="control-label col-sm-4">Data Collection</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>


                            <div class="form-group">
                <label class="control-label col-sm-4">Data Analysis</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Manuscript writing</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

               <div class="form-group">
                <label class="control-label col-sm-4">Desertation Writing</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label class="control-label col-sm-4">Desertation Submission</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

               <b>PUBLIC DEFENCE:</b> 
               <div class="row">
               <div class="col-sm-6">
               <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">QUATERS</label>
                            <select class="custom-select">
                                <option>1ST QUATER</option>
                                <option>2ND QUATER</option>
                                <option>3RD QUATER</option>
                                
                            </select>
                            
               </div>
               </div>

               <div class="col-sm-6">
               <div class="form-group"> 
                            <label class="control-label col-sm-5" for="objective">YEAR</label>
                            <select class="custom-select">
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                            
               </div>
               </div>

               </div>

        <div class="row"> 
             <div class="col-sm-10"> </div>  
             <div class="col-sm-2">
              <button type="button" class="btn btn-primary">Save changes</button>  
              </div>
             </div>   
        </form>
                       <br>
                       <br>


                                                
                                                          
    </div>   


    <div class="panel-info">
    <div class="panel-heading">DISSEMINATION PLAN</div>
        <div class="panel-body">

        <form>
            
            <div class="entry input-group col-xs-3">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
            
        </form>
            

        </div>


    </div>                                                   
                                                          
                                                          
                                                          
                                                          
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                    <ul><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">Research Leadership</a></ul>
                                    
                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                 <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"> RESEARCH LEADERSHIP </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                          
                                                          
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home1">Supervised Students</a></li>
  <li><a data-toggle="tab" href="#menu12">Schools Visited</a></li>
  <li><a data-toggle="tab" href="#menu23">Research Projects</a></li>
</ul>

<div class="tab-content">
  <div id="home1" class="tab-pane fade in active">
    <h3>Supervised Students</h3>
    <br>
    <br>
    
 {{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('frname', 'First Name:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-10">
            {{ Form::input('fname', 'fname', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

            <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('lname', 'Last Name:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-10">
            {{ Form::input('lname', 'lname', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

             <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('name', 'Course:', ['class' => 'col-md-2 control-label']) }}
              </div>
            <div class="col-sm-10">
            {{ Form::input('course','course',null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>   


            <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('name', 'Insititution:', ['class' => 'col-md-2 control-label']) }}
              </div>
            <div class="col-sm-10">
            {{ Form::input('name','name',null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>   

            <div class="form-group">
             <div class="col-sm-2">
              {{ Form::label('name','Level:',null, ['class' => 'col-md-2 control-label']) }}
              </div>
                <div class="col-sm-10">
                          {{Form::select('level', [
                            'Undergraduate',
                            'Masters',
                            
                            ]  
                            ) }}       
                </div>
             </div>
               
           <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>

              {{Form::close()}}  
                
            

  </div>
  <div id="menu12" class="tab-pane fade">
    <h3>Schools Visited</h3>
    

{{ Form::open(['link_to_route' => 'study/meet' ,'class' => 'form-horizontal']) }}

            

            <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('School', 'School Name:', ['class' => 'col-md-2 control-label']) }}
                </div>
            <div class="col-sm-10">
            {{ Form::input('School', 'school', null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>

             <div class="form-group">
             <div class="col-sm-2">     
            {{ Form::label('name', 'District:', ['class' => 'col-md-2 control-label']) }}
              </div>
            <div class="col-sm-10">
            {{ Form::input('dist','dist',null, ['class' => 'form-control']) }}
            </div><!--col-md-6-->
            </div>  


               
           <div class="form-group">
               <div class="col-md-3 offset-md-2"> 
               <button type="submit" class="btn btn-success">SAVE</button>
              </div>
                </div>
                
             {{Form::close()}} 

  </div>
  <div id="menu23" class="tab-pane fade">
    <h3>Research Projects</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
                                                        

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                    
                                    
                                    <ul><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal4">Conferences and Workshops</a></ul>
                                    
                                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">CONFRENCES AND WORKSHOPS </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                          
                                                          
                                                      hello modal here 
                                                          
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                    
                                    <ul><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal5">Personal Development Plan</a></ul>
                                    
                                    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"> PERSONAL DEVELOPMENT </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                          
                                                          
                                                      hello modal here 
                                                          
                                                          
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                </div><!--panel-body-->
                            </div><!--panel-->

                            
                        </div><!--col-md-4-->

                        <div class="col-md-8 col-md-pull-4">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>My Profile</h4>
                                        </div><!--panel-heading-->

                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.</p>
                                        </div><!--panel-body-->
                                    </div><!--panel-->
                                </div><!--col-xs-12-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>Milestones</h4>
                                        </div><!--panel-heading-->

                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.</p>
                                        </div><!--panel-body-->
                                    </div><!--panel-->
                                </div><!--col-md-6-->

                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>Recent Notifications</h4>
                                        </div><!--panel-heading-->

                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.</p>
                                        </div><!--panel-body-->
                                    </div><!--panel-->
                                </div><!--col-md-6-->

                                

                            </div><!--row-->

                        </div><!--col-md-8-->

                    </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection