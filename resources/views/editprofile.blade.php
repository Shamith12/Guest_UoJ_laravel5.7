<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/ed.css">
<script src="..\js\ed.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body class="main">

<div class="login-screen"></div>
    <div class="login-center">
        <div class="container min-height" style="margin-top: 20px;">
        	<div class="row">
                <div class="col-xs-4 col-md-offset-8">
                    <div class="login" id="card">
                    	<div class="front signin_form"> 
                        <p>Edit Your Profile</p>
                          <form class="login-form" method="POST" action="{{URL('/update'.$user->id)}}">
                          <input type="hidden" name="_method" value="put"> 
                            {{ csrf_field() }}
                            
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Uname') ? ' has-error' : '' }}">
                                  <label for="Uname" class="form-control"  class="col-md-4 control-label">Name</label>
                                      <input id="Uname" type="text" class="form-control" name="Uname" value="{{$user->Uname}}" required autofocus  >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Uname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Uname') }}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                                  <label for="Email" class="form-control"  class="col-md-4 control-label">Email</label>
                                      <input id="Email" type="text" class="form-control" name="Email" value="{{$user->Email}}" required autofocus  >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Empno') ? ' has-error' : '' }}">
                                  <label for="Empno" class="form-control"  class="col-md-4 control-label">Employee Number</label>
                                      <input id="Empno" type="text" class="form-control" name="Empno" value="{{$user->Empno}}" required autofocus  >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Empno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empno') }}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Nicno') ? ' has-error' : '' }}">
                                  <label for="Nicno" class="form-control"  class="col-md-4 control-label">NIC</label>
                                      <input id="Nicno" type="text" class="form-control" name="Nicno" value="{{$user->Nicno}}" required autofocus  >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Nicno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nicno') }}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Nicno') ? ' has-error' : '' }}">
                                  
                                  <select name="faculty" id="faculty"   value="{{ old('faculty') }}" class="form-control"  required>
                                    <option value="">Faculty</option>
    
                                            <option>Management</option>
                                            <option>Art</option>
                                            <option>Medicine</option>
                                            <option>Technology</option>
                                            <option>Engineering</option>
                                            <option>Agriculture</option>
                                            <option>Science</option>
                                                    </select>
                                                    
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty')}}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Position') ? ' has-error' : '' }}">
                                  
                                  <select name="Position" id="Position"   value="{{ old('Position') }}" class="form-control"  required>
                                    <option value="">Position</option>
    
                                    <option>Dean</option>
                                    <option>Head</option>
                                    <option>Lecture</option>
                                                    </select>
                                                    
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Position')}}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group" class="form-group{{ $errors->has('Pno') ? ' has-error' : '' }}">
                                  <label for="Pno" class="form-control"  class="col-md-4 control-label">Contact Number</label>
                                      <input id="Pno" type="number" min="0" class="form-control" name="Pno" value="{{$user->Department}}" required autofocus  >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      @if ($errors->has('Pno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Pno') }}</strong>
                                    </span>
                                @endif
                                  </div>
                              </div>
                              
                              
                              
                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Update">
                                 
                              </div>
                          </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
    
    </body>