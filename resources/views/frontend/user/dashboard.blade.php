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
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">PUBLIC ENGAGEMENT </h4>
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
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Course Title</label>
    <input type="text" class="form-control" id="title" placeholder="Course title">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Course Code</label>
    <input type="text" class="form-control" id="code" placeholder="code">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Credit Units</label>
    <input type="number" class="form-control" id="unit" placeholder="credit units">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Institution</label>
    <input type="text" class="form-control" id="dep" placeholder="where course is offered">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Department</label>
    <input type="text" class="form-control" id="dep" placeholder="department">
  </div>
    
    <div class="form-group">
    <label>SEMESTER </label>
        <select class="selectpicker">
        <option>SEMESTER ONE</option>
        <option>SEMESTER TWO</option>
        </select>
        
    </div>
    
  
   <div class="form-group">
       
       <label>COURSE DURATION </label>
    <select class="custom-select">
  
    <option>ONE WEEK</option>
    <option>TWO WEEKS</option>
    <option>THREE WEEKS</option>
    <option>FOUR WEEKS</option>
    <option>FIVE WEEKS</option>
    <option>SIX WEEKS</option>
    <option>SEMISTER</option>    
  
   </select>
    </div>
  
  <button type="submit" class="btn btn-success">SAVE</button>
</form>
                                                              
                                    </div>
                                                          
                            </div>
    </div>
    <div class="col-sm-6">
        
          <div class="panel panel-info"> 
              <div class="panel-heading">SECHDULE MEETING PLAN</div>
             <div class="panel-body">        
             
            <form>
                 <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
                
              <div class="form-group">
                <label for="exampleInputPassword1">Venue</label>
                <input type="text" class="form-control" id="dep" placeholder="where course the meeting is to be">
            
                </div>
                
                <div class="form-group">
                                <label class="control-label col-sm-2" for="objective">Agenda</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="6"></textarea>
                                </div>    
                </div>
                
               <button type="submit" class="btn btn-success">SAVE</button>
                
                
            </form>                                         
                    
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


                          <b> <h3>START DATES FOR:</h3></b> 
                  <form class="form-horizontal">
                        <div class="form-group">
                             <label class="control-label col-sm-5">Data Collection</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>


                            <div class="form-group">
                <label class="control-label col-sm-5">Data Analysis</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
                <label class="control-label col-sm-5">Manuscript writing</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
        </form>
                       <br>
                       <br>


                    
                    
                    
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
        <form class="form-horizontal">
            <div class="form-group"> 
            <label class="control-label col-sm-5"> START DATE</label>


            </div>


        </form>                                              
                                                          
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
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"> RESEARCH LEADERSHIP </h4>
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