<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/fontsreg/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/cssreg/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="images/imagesreg/form-img.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form"  method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                        <h2>Registration Info</h2>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Uname') ? ' has-error' : '' }}">
                            <input id="Uname" type="text" name="Uname"   value="{{ old('Uname') }}" required autofocus>
                            <label for="Uname" class="form-label">Your name</label>
                            @if ($errors->has('Uname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Uname') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}" >
                            <input id="Email" type="text" name="Email"   value="{{ old('Email') }}" required >
                            <label for="Email" class="form-label">E-Mail Address</label>
                            @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Empno') ? ' has-error' : '' }}" >
                            <input id="Empno" type="text" name="Empno"   value="{{ old('Empno') }}" required >
                            <label for="Empno" class="form-label">Employee Number</label>
                            @if ($errors->has('Empno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empno') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Nicno') ? ' has-error' : '' }}" >
                            <input id="Nicno" type="text" name="Nicno"   value="{{ old('Nicno') }}" required >
                            <label for="Nicno" class="form-label">NIC Numberr</label>
                            @if ($errors->has('Nicno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nicno') }}</strong>
                                    </span>
                                @endif
                        </div>
    
                        
                        <div class="form-group form-input" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            
                                <select name="gender" id="gender"   value="{{ old('gender') }}"  required>
                                    <option value="">Gender</option>
                                    <option >Male</option>
                                    <option >Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                            
                                <select name="faculty" id="faculty"   value="{{ old('faculty') }}"  required>
                                    <option value="">Faculty</option>
    
                        <option>Management</option>
                        <option>Art</option>
                        <option>Medicine</option>
                        <option>Technology</option>
                        <option>Engineering</option>
                        <option>Agri</option>
                                </select>
                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty')}}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Department') ? ' has-error' : '' }}" >
                            <input id="Department" type="text" name="Department"   value="{{ old('Department') }}" required >
                            <label for="Department" class="form-label">Department</label>
                            @if ($errors->has('Department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Department') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Position') ? ' has-error' : '' }}">
                            
                                <select name="Position" id="Position"   value="{{ old('Position') }}"  required>
                        <option value="">Position</option>
                        <option>Dean</option>
                        <option>Head</option>
                        <option>Lecture</option>
                            </select>
                                @if ($errors->has('Position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Position') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('Pno') ? ' has-error' : '' }}" >
                            <input id="Pno" type="number" min="0" name="Pno" value="{{ old('Pno') }}" required >
                            <label for="Pno" class="form-label">Phone Number</label>
                            @if ($errors->has('Pno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Pno') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-input" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                            <input id="password" type=password name="password" value="{{ old('password') }}" required >
                            <label for="password" class="form-label">Password</label>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                      
                        <div class="form-group form-input"  >
                            <input id="password-confirm" type=password name="password_confirmation"  required >
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                           
                        </div>
                        
                        

                        <div class="form-submit">
                            <input type="submit" value="Register" class="submit" class="form-control" id="submit" name="submit" />
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/vendorreg/jquery/jquery.min.js"></script>
    <script src="js/jsreg/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>