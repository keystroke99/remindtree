<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RemindTree - Business Dashboard</title>
    
    
    
    <!-- MyStyles CSS -->
    <link href="{{asset('css/dashboardadditionalstyles.css')}}" rel="stylesheet">
    <link href="{{asset('css/contactsstyles.css')}}" rel="stylesheet">
    
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/buttons.dataTables.min.css')}}" rel="stylesheet">

    <!-- color CSS -->
    <link href="{{asset('css/colors/megna.css')}}" id="theme" rel="stylesheet">
    
<!-- jQuery -->
   
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    
    <!-- Moment JS -->
    <script src="{{asset('js/moment.min.js')}}"></script>
    <!-- Data Tables -->
     <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('js/datetime.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 <link href="{{asset('css/intlTelInput.css')}}" id="theme" rel="stylesheet">
    
    
    <style>
        @media (min-width: 1025px) and (max-width: 1960px) {   
            #logout {
                text-align: center !important;
            }
        }
        @media (min-width: 320px) and (max-width: 1024px) {  
            .iconimgmobile {
                width: 40px !important; 
                display: inline-block !important; 
                padding-right: 20px !important;
            }
            
        }
        @media (min-width: 768px) and (max-width: 1024px) { 
            .open-close {
                display: none !important;
            }
        }
        @media (min-width: 768px) {
            .content-wrapper .top-left-part {
                width: 220px !important;
            }
        }
        
        #slider12a .slider-track-high, #slider12c .slider-track-high {
            background: green;
        }
        
        
        
        

    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background: #4F5467 !important;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img class="responsive" src="../../img/logo2.png" alt="remindtree-logo"></b></a></div>
                <!--<ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>-->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    
                    
                    <li class="" id="bcc"> <a class="waves-effect waves-light" href="javascript:void(0)" id="buycredits" data-toggle="modal" data-target="#buyCredits">Buy Credits</a></li>
                    <li class="" id="pdcu"> <a class="waves-effect waves-light" href="javascript:void(0)" id="pdcontacus" data-toggle="modal" data-target="#contactUs">Contact Us</a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar collapse show">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="visible-xs hidden-sm hidden-md visible-lg user-pro">
                        <a><img src="../plugins/images/users/d1.jpg" alt="user-img" class="img-circle" id="dbuserimg"> </a>
                        <a href="#" class="waves-effect" style="text-align: center;">
                        <span class="hide-menu">User Name Here<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="bd-myprofile.html"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="bd-accountsettings.html"><i class="ti-settings"></i> Account Settings</a></li>
                            <li><a href="bd-teamsettings.html"><i class="ti-settings"></i> Team Settings</a></li>
                            <li><a href="bd-mycredits.html"><i class="ti-hand-point-up"></i> My Credits</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs hidden-sm hidden-md visible-lg user-pro">
                        <a href="#" class="waves-effect" style="text-align: center !important;padding: 0px 15px 10px 15px !important;">
                        <span class="hide-menu">Business Access Code</span>
                        </a>
                    </li>
                    <li class="visible-xs hidden-sm hidden-md visible-lg user-pro">
                        <a href="#" class="waves-effect" style="text-align: center !important;padding: 0px 15px 10px 15px !important;">
                        <span class="hide-menu">Location</span>
                        </a>
                    </li>
                    <hr class="visible-xs hidden-sm hidden-md visible-lg">
                    
                    <li class="hidden-xs visible-sm visible-md hidden-lg user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">User Name Here<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="bd-myprofile.html"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock"></i> Business Access Code</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-location-pin"></i> Location</a></li>
                            <li><a href="bd-accountsettings.html"><i class="ti-settings"></i> Account Settings</a></li>
                            <li><a href="bd-teamsettings.html"><i class="ti-settings"></i> Team Settings</a></li>
                            <li><a href="bd-mycredits.html"><i class="ti-hand-point-up"></i> My Credits</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Message.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Messages <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="inbox.html">Inbox</a></li>
                            <li> <a href="inbox-detail.html">Inbox detail</a></li>
                            <li> <a href="compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Group.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Groups <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctors.html">All Doctors</a> </li>
                            <li> <a href="add-doctor.html">Add Doctor</a> </li>
                            <li> <a href="edit-doctor.html">Edit Doctor</a> </li>
                            <li> <a href="doctor-profile.html">Doctor Profile</a> </li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Contact.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Contacts <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="patients.html">All Patients</a> </li>
                            <li> <a href="add-patient.html">Add Patient</a> </li>
                            <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Send SMS.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Send SMS <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payment-report.html">Payment Report</a></li>
                            <li> <a href="income-report.html">Income Report</a></li>
                            <li> <a href="sales-report.html">Sales Report</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Team.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Team <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payments.html">Payments</a></li>
                            <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs visible-sm visible-md hidden-lg"> <a href="javascript:void(0);" class="waves-effect"><img src="../../img/Store.png" class="img-responsive iconimgmobile"> <span class="hide-menu"> Store <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payments.html">Payments</a></li>
                            <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    
                </ul>
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <div class="r-icon-stats" id="leftmainicons"> <img class="img-responsive" src="../../img/Message.png">
                                <br>
                                <p>Messages</p>   
                            </div>
                        </div>
                
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <a href="{{url('groups')}}"><div class="r-icon-stats" id="leftmainicons"> <img class="img-responsive" src="../../img/Group.png">
                                <br>
                                <p>Groups</p>   
                            </div></a>
                        </div>
                
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <a href="{{url('contacts')}}"><div class="r-icon-stats" id="leftmainicons"> <img class="img-responsive" src="../../img/Contact.png">
                                <br>
                                <p>Contacts</p>
                            </div></a>
                        </div>
                
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <a href="business-sendsms.html"><div class="r-icon-stats"  id="leftmainicons"> <img class="img-responsive" src="../../img/Send SMS.png">
                               <br>
                                <p>Send SMS</p> 
                            </div></a>
                        </div>
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <div class="r-icon-stats"  id="leftmainicons"> <img class="img-responsive" src="../../img/Team.png">
                               <br>
                                <p>Teams</p> 
                            </div>
                        </div>
                        <div class="white-box visible-xs hidden-sm hidden-md visible-lg" id="wb">
                            <div class="r-icon-stats"  id="leftmainicons"> <img class="img-responsive" src="../../img/store.png">
                               <br>
                                <p>Stores</p> 
                            </div>
                        </div>
                <ul class="nav" id="side-menu">             
                    <li><a href="login.html" class="waves-effect"  id="logout"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">