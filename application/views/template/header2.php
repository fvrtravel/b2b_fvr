<?php
  if(!$this->session->userdata('uid')){
    redirect('login');
  }
  $uid = $this->session->userdata('uid');
 ?>
 
 
 <?php
    $d1 = '%Y-%m-%d';
    //echo mdate($d1);
    $xyz = mdate($d1);
    $dd = strtotime(mdate($d1));
 ?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Provides with airline and ferry booking, eloading, bills payment and many more !">
        <meta name="author" content="FVR Travel and Tours">

        <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>">

        <title>Travel Partners Portal</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css'); ?>">

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/menu.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/carousel/skdslider.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/js/modernizr.min.js'); ?>"></script>    
         <<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?php echo base_url(''); ?>" class="logo"><span>Travel<span>Partners</span>Portal</span><i class="zmdi zmdi-layers"></i></a>                  
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                    	
                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">                        
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>                    
                            <li>
                                <h4 class="page-title"><i style="color:green;">TP<?php echo (1000+$uid); ?></i></h4>
                            </li>
                            <li>
                                <h4 class="page-title">Balance:                   		                 	                   		                  		
                    			<?php
                    				$balance = $this->load->database('balance',TRUE);
	                          	
	                           $exact_bal = 0;	
                                    /*Previous Transactions*/

                                    //Cash
                                    $cash1 = 0;
                                    $query = $balance->select('SUM(cash_amount) as total')->from('cash_info')->where('tp_id',$uid)->where('trans_id !=',8)->where('date_added <',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $cash1 = $row->total;
                                        }
                                    }

                                    //Received Remittance
                                    $remit1 = 0;
                                    $query = $balance->select('SUM(amount) as total')->from('relocator_info')->where('tp_id',$uid)->where('mode_type','REMITTANCERECEIVE')->where('date_made <',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $remit1 = $row->total;              
                                        }
                                    }

                                    $service1 = 0;
                                    $query = $balance->select('(SUM(amount) + SUM(service_fee)) as total')->from('relocator_info')->where('tp_id',$uid)->where('mode_type !=','REMITTANCERECEIVE')->where('date_made <',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $service1 = $row->total;
                                        }
                                    }

                                    /* beginning balance */
                                    $bb = 0;
                                    $query = $balance->select('SUM(cash_amount) as total')->from('cash_info')->where('tp_id',$uid)->where('trans_id',8)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $bb = $row->total;
                                        }
                                    }

                                    /*Current Transaction*/

                                    /*cash transaction */
                                    $cash2 = 0;
                                    $query = $balance->select('SUM(cash_amount) as total')->from('cash_info')->where('tp_id',$uid)->where('date_added',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $cash2 = $row->total;
                                        }
                                    }

                                    /* remittance transaction */
                                    $remit2 = 0;
                                    $query = $balance->select('(SUM(amount) + SUM(partner_share)) as total')->from('relocator_info')->where('tp_id',$uid)->where('mode_type','REMITTANCERECEIVE')->where('date_made',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $remit2 = $row->total;
                                        }
                                    }

                                    /* service transaction */
                                    $service2 = 0;                          
                                    $query = $balance->select('(SUM(amount) + SUM(service_fee)) as total')->from('relocator_info')->where('tp_id',$uid)->where('date_made',$xyz)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $service2 = $row->total;
                                        }
                                    }

                                    $total_in = $cash2 + $remit2;

                                    /* Total */
                                    $to_compare = '';
                                    $query = $balance->select('date_added')->from('cash_info')->where('tp_id',$uid)->where('trans_id',8)->get();
                                    if($query->num_rows() > 0){
                                        foreach($query->result() as $row){
                                            $to_compare = $row->date_added;     
                                        }
                                    }
                                    
                                    if(empty($to_compare)){
                                        
                                    }else{
                                        $to_compare = strtotime($to_compare);
                                        if($dd == $to_compare){
                                            $exact_bal = $exact_bal + $total_in;            
                                        }
                                        else if($to_compare > $dd){
                                            $total_prev = 0;             
                                                $exact_bal = 0;
                                        }
                                        else{
                                            $total_prev = $bb + (($cash1 + $remit1) - $service1);
                                            $exact_bal = $total_prev + ($total_in - $service2);
                                        }
                                    }
				    
				    if($exact_bal < 30000){
				    	echo '<b style="color:red;">&#8369;'.number_format($exact_bal,2).'</b>';
				    }else if($exact_bal > 30000){
                                    	echo '<b style="color:green;">&#8369;'.number_format($exact_bal,2).'</b>';
                                    }
        	                    ?>
                                </h4>
                            </li>                         
                        </ul>
                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                    <h4 class="page-title"><img src="<?php echo base_url('assets/images/fvrlogo.png'); ?>" style="max-height:50px;"></h4>
                           </li>   
                        </ul>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                        	<?php
                        	$user = "";
                        	$default = $this->load->database('default',TRUE);
		                $default->select('e.firstname as fn');
		                $default->from('user_info u');
		                $default->join('employee_info e','e.emp_id = u.emp_id');
		                $default->where(array('uid'=>$uid));
		                $query = $default->get();
		                if($query->num_rows()==1){		                	
		                   	foreach($query->result() as $row){
		                   		$user = $row->fn;
		                  	}		                   
		                }
		                ?>
                            <img src="<?php echo base_url('assets/images/users/no_user.jpg'); ?>" alt="user-img" title="<?php echo $user; ?>" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="javascript:void(0);">
                        	<?php echo '<b>'.$user.'</b>'; ?>
                        
                        </a> </h5>
                        <ul class="list-inline">
                            <li>
                                <button class="btn btn-success" title="Change Password" onclick="change_password()">
                                    <i class="fa fa-user"></i>
                                </button>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/login/logout'); ?>" class="btn btn-danger text-custom" title="Logout">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                           <!--<li style="text-align: center;">
                            	<a href="javasscript:void(0);">
                            	<b>Call Us at Hotline:</b><br>
                            	(085)-815-3332<br>
                            	<b>Mobile(Globe):</b><br>
                            	09274214055<br>
                            	<b>Mobile(Smart):</b><br>
                            	09478292958
                            	</a>
                            </li>-->
                            <li>
                                <a href="<?php echo base_url('');?>" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard </span> </a>
                            </li>
                            <li class="has_sub">

                            </li>                   

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-local-airport"></i><span>Airline Bookings </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="https://www.airasia.com/my/en/login/travel-agent.page" target="_blank">Air Asia</a></li>
                                    <li><a href="https://book.cebupacificair.com/loginagent.aspx" target="_blank">Cebu Pacific</a></li>
                                    <li><a href="https://agenthub.jetstar.com/newtradeloginagent.aspx?culture=en-PH" target="_blank">Jetstar</a></li>
                                    <li><a href="<?php echo base_url(''); ?>">PAL/GDS Airlines</a></li>
                                    <li><a href="https://makeabooking.flyscoot.com/skyagent">Scoot</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" id="ferry"><i class="zmdi zmdi-directions-boat"></i><span>Ferry Bookings</span></a>                               
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/insurance'); ?>" class="waves-effect"><i class="fa fa-heart"></i><span>Travel Insurance</span></a>
                            </li>
                            <li>
                                <a href="https://loadcentral.net/logout.do" class="waves-effect" target="_blank"><i class="fa fa-mobile"></i><span>Eloading</span></a>
                            </li>
                            <li>
                                <a href="https://ecpay.ph/osppro/default.aspx" class="waves-effect" target="_blank"><i class="fa fa-credit-card"></i><span>Bills Payment</span></a>
                            </li>
                            <li>
                                <a href="https://www.sellingplatformconnect.amadeus.com/LoginService/login.jsp?SITE=LOGINURL&LANGUAGE=GB&refreshOnError=true" class="waves-effect" target="_blank"><i class="fa fa-desktop"></i><span>Amadeus</span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javasscript:void(0);" class="waves-effect"><i class="fa fa-book"></i><span>Remittance</span><span class="menu-arrow"></span></a>
                                <ul class="listed-unstyled">
                                	<li><a href="http://remittance.fvrtravelonline.com" target="_blank">Smart Money / PayMaya</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javasscript:void(0);" class="waves-effect"><i class="fa fa-credit-card"></i><span>Bank Accounts</span><span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="javasscript:void(0);">
                                        LANDBANK<br>
                                        <b>Account #:</b><br>
                                        0361-2310-31<br>
                                        <b>Account Name:</b><br>
                                        FVR TRAVEL AND TOURS AGENCY<br>
                                                            </a>
                                    </li>
                                    <li><a href="javasscript:void(0);">
                                        RCBC<br>
                                        <b>Account #:</b><br>
                                        7-590-21772-1<br>
                                        <b>Account Name:</b><br>
                                        FVR TRAVEL AND TOURS AGENCY<br>
                                        </a>
                                    </li>
                                    <li><a href="javasscript:void(0);">
                                        BDO<br>
                                        <b>Savings Account #:</b><br>
                                        002000220882<br>
                                        <b>Account Name:</b><br>
                                        FVR TRAVEL AND TOURS AGENCY     
                                        </a>
                                    </li>
                                    <li><a href="javasscript:void(0);">
                                        Security Bank<br>
                                        <b>Account #:</b><br>
                                        000-006-145137<br>
                                        <b>Account Name:</b><br>
                                        FVR TRAVEL AND TOURS AGENCY<br>
                                        </a>
                                    </li>
                                    <li><a href="javasscript:void(0);">
                                        BPI<br>
                                        <b>Account #:</b><br>
                                        222-912-5616<br>
                                        <b>Account Name:</b><br>
                                        FVR TRAVEL AND TOURS AGENCY<br>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li>
                                <a href="index.html" class="waves-effect"><i class="fa fa-users"></i><span>Personnel</span></a>
                            </li>
                            <li>
                                <a href="index.html" class="waves-effect"><i class="fa fa-gear"></i><span>Setup</span></a>
                            </li>
                            <li>
                                <a href="index.html" class="waves-effect"><i class="fa fa-refresh"></i><span>Updates</span></a>
                            </li>-->
                            <li>
                                <a href="<?php echo base_url('index.php/chat'); ?>" class="waves-effect"><i class="fa fa-envelope"></i><span>Chat Support</span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-info-circle"></i><span>Help Support</span><span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);">How to Book (Soon!)</a></li>
                                    <li><a href="javascript:void(0);">Accounting Report (Soon!)</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
           <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">                        
			<div class="container">
				<!-- Modal -->
				<!-- for adding -->
				<div class="modal fade" id="changePasswordModal" role="dialog" tabindex="-1">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Change Password</h4>
							</div>
							<div class="modal-body">
								<form role="form" action="#" method="post" id="pform" name="pform">
									<input type="hidden" id="pid" name="pid" value="<?php echo $uid; ?>">
									<label>Current Password:</label><input type="password" id="opwd" name="opwd" placeholder="Enter your current password to continue" class="form-control" required="required"><br>
									<label>New Password:</label><input type="password" placeholder="Enter new password" class="form-control" id="pwd" name="pwd" required="required"><br>
									<input type="submit" class="btn btn-primary pull-right" value="Change Password">
								</form>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<div class="container">
				<!-- Modal -->
				<!-- for adding -->
				<div class="modal fade" id="2goModal" role="dialog" tabindex="-1">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Ferry Bookings</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<h4><b>How To Book</b></h4>
										<p>1. Click the deserved option for Ferry bookings whether for 2GO travel or Supercat.</p>
										<p>2. Once you're the booking portal, search and select your desired travel itinenaries.</p>
										<p>3. Screenshot your desired travel quotation on the Ferry Bookings portal and message at our facebook page FVR Travel And Tours Agency or email at <u><b>fvrtravel@fvrtravelonline.com</b></u> or call us for faster acknowledgement at 09195274731 or 09274214055.</p>
										<p>4. Discount for Ferry bookings less &#8369;100.00 per Transactions.</p>
										<p>5. Payment can be made thru online bank transfer.</p>
										<h4><b>Bank Name - Account Number - Account Name - Account Type</b></h4>
										<p>1. BDO - 002000220882 - FVR TRAVEL AND TOURS AGENCY - (SA)</p>
										<p>2. RCBC - 7590217721 - FVR TRAVEL AND TOURS AGENCY - (CA)</p>										
									</div>
									<div class="col-md-6">
										<h4><b>REMITTANCE PAYMENT: OFFLINE PAYMENT</b></h4>
										<p>1. SmartPadala or Paymaya Account No. 5577 5193 2319 6106</p>
										<p>2. GCASH Number 09173706599</p>
										<p>3. Palawan Pawnshop (Express Padala) (Receiver name: ROLAND ARADO)</p>
										<p>4. Cebuana Lhuiller (Receiver name: ROLAND ARADO Mobile 09195274731)</p>
										<p>5. MLhuiller(Receiver name: ROLAND ARADO Mobile 09195274731)</p>
										<br>
										<b>Note:</b> Kindly scan the payment slip email at fvrtravel@fvrtravelonline.com or call us for faster acknowledgement 09195274731
										<br><br><a class="btn btn-danger" style="background-color:pink;" href="https://travel.2go.com.ph/index.asp" target="_blank">2GO</a>
										<a class="btn btn-danger" style="background-color:pink;" href="https://supercat.com.ph/" target="_blank">Supercat</a>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				$("#pform").submit(function(e){
				    e.preventDefault();				
				    var url = "<?php echo base_url('index.php/user/change_pass'); ?>";
				    var data = $('#pform').serialize();				
				    if(confirm("Are you sure you want to change the password ?")){
				        $.ajax({
					        type: "POST",
					        url: url,
					        data: data,
					        beforeSend: function(){				            
					            $("#pform")[0].reset();
					            $("#pform").html("<p>Loading...</p>");				            
					        },
					        success: function(data){				          				            
					            if(data=="Yes"){
						            $("#pform").html("<p>Password successfully changed !</p>");	
						            location.reload('true');
						    }else if(data=="No"){
						             $("#pform").html("<b>Please enter your correct current password !</b>");	
						            location.reload('true');	           
						    }
					        },
					        error: function(err){
					            alert(err);
					        }
				    	});
				    } 
				});								
								
				function change_password(){
					$('#changePasswordModal').modal('show');
				}
								
				$("#ferry").click(function() {
				  $('#2goModal').modal('show');	
				});													
			</script>