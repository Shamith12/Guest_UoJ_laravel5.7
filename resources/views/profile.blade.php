<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/pr.css">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img src="/images/facebook-meta.png">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 offset-3 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="/uploads/profile1/{{$user->img}}" style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;" class="rounded-circle">
                            <form enctype="multipart/form-data" action="/profile" method="POST">
                                
                                <input type="file" name="img" id="img">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" class="btn btn-success btn-block follow" >
                                <input type="submit" style="height:40px" class="btn btn-success btn-block follow">
                            </form>
                            
                        </div>
                        
                        
                       
                    </div>
                </div>
                <div class="col-md-9 offset-5 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1>{{$user->Uname}} </h1>
                                    
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                    <a href="{{('/editprofile'.$user->id)}}" class="btn btn-primary btn-block">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 offset-3">
                            <div class="row">
                                <div class="col-md-8">
                                       
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">Employee Number</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->Empno}}</p>
                                                                </div>
                                                            </div>
                                                        <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">NIC</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->Nicno}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">Email</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->Email}}</p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">Faculty</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->faculty}}</p>
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">Position</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->Position}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label style="color:blue">Contact Number</label>
                                                                </div>
                                                                <div class="col-md-6 offset-4">
                                                                    <p>{{$user->Pno}}</p>
                                                                </div>
                                                            </div>
                                                </div>
                                                
                                                
                                                
                                              </div>
                          
                                </div>
                                <div class="col-md-4 right-upper">
                                    <div class="row">
                                       
                                        <a href="http://camaradecomerciozn.com/">
                                            <div class="col-md-12 image-right">
                                                <img src="/images/UoJ_logo.png" >
                                            </div>
                                        </a>
                                        <div class="col-md-12 image-right-detail-section2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contact">Contactarme</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
                    </div>
                    <div class="form-group">
                        <label for="txtFullname">Nombre completo</label>
                        <input type="text" id="txtFullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" id="txtEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtPhone">Teléfono</label>
                        <input type="text" id="txtPhone" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</body>