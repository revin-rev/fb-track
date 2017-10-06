<?php 
session_start();
if(isset($_SESSION['user'])) :
	/*get accounts of selected user*/
	$cSession = curl_init(); 
	curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/me/adaccounts?fields=account_status,name,account_id,business&access_token=".$_REQUEST['code']);
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	$result=curl_exec($cSession);
	curl_close($cSession);
	$accounts = json_decode($result, true);
	/*get accounts of selected user*/

	/*get camapagins*/
	$cSession = curl_init(); 
	curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns?access_token=".$_REQUEST['code']."&fields=name,buying_type,objective,id,objective_for_results,objective_for_cost,status,delivery_info,adsets{id,name,status,delivery_info,lifetime_budget,daily_budget,start_time,objective_for_results,objective_for_cost},account_id,ads{name,id,delivery_info,objective_for_results,objective_for_cost,status}");
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	$result=curl_exec($cSession);
	curl_close($cSession);
	$camapaigns = json_decode($result, true);
	/*get camapagins*/
?>
<!DOCTYPE html>
<html>
<head>
<title>FB Power-Editor</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.listing .account-category').click(function(){
			$('.account-category').removeClass('active');
			$(this).addClass('active');
			$('.current_account').text($(this).find('.account_name').text()+' ('+$(this).find('.account_id').text()+')');
			var url = window.location.toString();
			console.log('url', url);
			var act = '<?php echo $_REQUEST['act'];?>';
			window.location = url.replace(act, 'act_'+$(this).find('.account_id').text());
			$(".personal-acc-by-id").slideToggle();
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".ads-preview-dropd-down-list a").click(function(event) {
			$(".ads-preview-dropd-down-list ul").toggle();   	  	
		});
	});
</script>
<!-- main three tabs create new popup -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".show-camp-obj-btn").click(function(event) {
			$(".objective").toggle();   	  	
		});
	});
</script>
<!-- new-customer dropdown -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".get-new-customer").click(function(event) {
			$(".three-new-customers-list").toggle();   	  	
		});
	});
</script>
</head>
<body>

<div class="web-outr">	
	<div class="header-outr">
		<div class="header-inr">		 
			<div class="container-fluid">
				<div class="header-left-sec">			
					<a href="#" class="logo"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<div class="power-editor-dropdown">
						<a href="#" class="power-editor-menu"><i class="fa fa-list" aria-hidden="true"></i><span>Power Editor</span></a>
						
					</div>
				</div>
				<div class="power-editor-menus-list">
					<div class="power-menu">
						<span class="menu-arrow"></span>
						<ul>
							<li><h5><i class="fa fa-star" aria-hidden="true"></i> Frequently Used</h5></li>
							<li><a href="ads-manager.html">Ads Manager</a></li>
							<li><a href="index.html" class="active">Power Editor</a></li>
						</ul>
					</div>
				</div>
				<div class="header-right-ec pull-right">
					<div class="header-search">
						 <div class="input-group stylish-input-group">
		                    <input type="text" class="form-control"  placeholder="Search" >
		                    <span class="input-group-addon">
		                        <button type="submit">
		                            <span class="glyphicon glyphicon-search"></span>
		                        </button>  
		                    </span>
		                </div>
					</div>
					<ul class="header-avatar">
						<li>
							 
								<div class="dropdown header-ava">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <img src="img/ava-icon.png"> <?php echo $_SESSION['user']['email']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i>
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">	
								  	<span class="top-arrow"></span>		
								  	<ul>
								  		<li>
								  		<a class="dropdown-item" href="#">Go to Personal News Feed</a><a class="dropdown-item pull-right" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
								  		</li>
								  		<li>
								  			<div class="different-acc">
								  				<img src="../img/acc-img.png">
								  				<p><b>Lorem ipsum dummy text</b><?php echo $_SESSION['user']['email']; ?></p>
								  			</div>
								  		</li>
								  		<li>
								  			<div class="different-acc active">
								  				<img src="../img/acc-img.png">
								  				<p><b>Lorem ipsum dummy text</b><?php echo $_SESSION['user']['email']; ?></p>
								  			</div>
								  		</li>
								  		<li>
								  			<div class="different-acc">
								  				<img src="../img/acc-img.png">
								  				<p><b>Lorem ipsum dummy text</b><?php echo $_SESSION['user']['email']; ?></p>
								  			</div>
								  		</li>
								  	</ul>					    
								    
								  </div>
								</div>
						</li>
						
					</ul>
					<ul class="header-right-icons">
						<li><a href="#" class="notification"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
						<li><a href="#" class="header-pages"><i class="fa fa-flag" aria-hidden="true"></i></a></li>					
					</ul>
					<!-- <a href="#" class="help">Help <i class="fa fa-question-circle" aria-hidden="true"></i></a> -->
				</div>
			</div>		 
		</div>
	</div>
	<div class="body-overlay"></div>
	<div class="working-area-outr">
		<div class="sub-header-outr">
			<div class="sub-header-inr">
				<div class="container-fluid">	
						<div class="sub-header-left-acnt-sec">
								<a href="#"><span class="current_account"><?php echo $accounts['data'][0]['name']." (".str_replace('act_', '', $_REQUEST['act']).")";?></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<div class="personal-acc-by-id-outr">

										<div class="personal-acc-by-id">
											<span class="top-arrow"></span>
											<ul><li style="padding: 15px;"><input type="text" name="" class="form-control" placeholder="Search"></li></ul>
											<ul class="listing">										
												<li>
													<h5><img src="../img/prsnl-acnt-icon.png"> your personal accounts</h5>
													<?php foreach ($accounts['data'] as $key => $account): ?>
														<?php if($account['id'] == $_REQUEST['act']): $acc_class = 'active'; else : $acc_class = ''; endif ?>
														<div class="account-category <?php echo $acc_class;?>">
															<img src="../img/acnt-by-id-icon.png">
															<p>
																<span class="account_name"><b><?php echo $account['name'];?></b></span>
																Account #: <span class="account_id"><?php echo $account['account_id'];?></span>
															</p>
														</div>
													<?php endforeach ?>	
													<!-- <div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category active">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div> -->
												</li>
												<!-- <li>
													<h5><img src="../img/prsnl-acnt-icon.png"> your personal accounts</h5>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
												</li>
												<li>
													<h5><img src="../img/prsnl-acnt-icon.png"> your personal accounts</h5>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
													<div class="account-category">
														<img src="../img/acnt-by-id-icon.png">
														<p><b>Lorem Ipsum Account</b>Account #: 156893694872356</p>
													</div>
												</li> -->
											</ul>
											
										</div>
									</div>		
						</div>
						<div class="sub-header-right-btns-sec">
							<ul>
									<li><button class="light-grey-btn">Discard Changes</button></li>
									<li><button class="blue-btn"><i class="fa fa-arrow-up" aria-hidden="true"></i> Review Draft Items (3)</button></li>
									<li><button class="light-grey-btn"><i class="fa fa-gear" aria-hidden="true"></i></button></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
		<div class="filter-header-outr">
				<div class="filter-header-inr">
						<div class="container-fluid">
							<div class="dropdown search-filter">
								 <div class="dropdown">
									  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    <i class="fa fa-search" aria-hidden="true"></i> Search
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									  	<li class="dropdown-header">Search By</li>
									    <li><a href="#">Action</a></li>
									    <li><a href="#">Another action</a></li>
									    <li><a href="#">Something else here</a></li>									    
									  </ul>
									</div>
							</div>
							<div class="header-filter">
					            <div class="dropdown">
									  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    <i class="fa fa-filter" aria-hidden="true"></i> Filters
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									  	<li class="dropdown-header">Search By</li>
									    <li><a href="#">Action</a></li>
									    <li><a href="#">Another action</a></li>
									    <li><a href="#">Something else here</a></li>									    
									  </ul>
									</div>
							</div>						 
							<div class="filter-by-date">
								<div id="demo" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
					    			<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
								    <span></span> <b class="caret"></b>
								</div>
							</div>
						</div>
				</div>
		</div>
		<div class="working-area">
			<div class="main-four-tabs">
			    <div class=" " style="float: left; width: 100%">
		            <div class="tab four-tabs" role="tabpanel">

		                <!-- Nav tabs -->

		                <ul class="nav nav-tabs main-tabs" role="tablist" style="margin-left: 1px;">

		                    <li role="presentation" class="acc-rev"><a href="#acc-rev" aria-controls="home" role="tab" data-toggle="tab">Account Overview</a></li>

		                    <li role="presentation" class="active camp"><a href="#camp" aria-controls="profile" role="tab" data-toggle="tab">Campaigns</a>
		                    	<div class="selected-row-count" id="camapaign_selected" style="display: none;"><span>2</span> selected <i class="fa fa-times" aria-hidden="true"></i></div>
		                    </li>

		                    <li role="presentation" class="ad-sets"><a href="#ad-sets" aria-controls="messages" role="tab" data-toggle="tab">Ad Sets<span></span></a>
								<div class="selected-row-count" id="adsets_selected" style="display: none;"><span>2</span> selected <i class="fa fa-times" aria-hidden="true"></i></div>
		                    </li>

		                    <li role="presentation" class="ads"><a href="#ads" aria-controls="settings" role="tab" data-toggle="tab">Ads<span></span></a>
								<div class="selected-row-count" id="ads_selected" style="display: none;"><span>2</span> selected <i class="fa fa-times" aria-hidden="true"></i></div>
		                    </li>

		                </ul>

		                <!-- Tab panes content goes here-->

		                <div class="tab-content main-tabs-entries">

		                    <div role="tabpanel" class="tab-pane acc-data-tabs" id="acc-rev">
		                    	<div class="col-md-10" style="padding: 0">

	                                    <!-- Nav tabs -->
	                                    <div class="card">
		                                    <ul class="nav nav-tabs four-sub-tabs" role="tablist">
		                                        <li role="presentation" class="active">
		                                        	<a href="#reach" aria-controls="home" role="tab" data-toggle="tab">
		                                        		<div class="reach">
		                                        				<div class="rel-cont">Reach <i class="fa fa-info-circle" aria-hidden="true"></i></div>
		                                        				<span class="sub-tab-down-arrow-search">		                                        					
		                                        					<div class="down-arrow-custom-auto-select">
		                                        						<!-- <i class="fa fa-caret-down caret-show-select" aria-hidden="true"></i> -->
		                                        						 <div class="custom-autocomplete-select">
																			<select class="selectpicker select-green-text show-tick" data-live-search="true">
																			  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																			  <option data-tokens="mustard">Lorem</option>
																			  <option data-tokens="frosting">Dummy text printing</option>
																			  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																			  <option data-tokens="mustard">Lorem</option>
																			  <option data-tokens="frosting">Dummy text printing</option>
																			  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																			  <option data-tokens="mustard">Lorem</option>
																			  <option data-tokens="frosting">Dummy text printing</option>
																			</select>

							                                        	</div>
		                                        					</div>
		                                        				</span>
		                                        		</div>
		                                        		<b class="count-in-number"><i class="fa fa-rupee" aria-hidden="true"></i> 25</b>
		                                        	</a>
		                                    	</li>
		                                        <li role="presentation">
		                                        	<a href="#spent" aria-controls="profile" role="tab" data-toggle="tab">
		                                    			<div class="spent-amt">
		                                    				Amount Spent <i class="fa fa-info-circle" aria-hidden="true"></i><span class="sub-tab-down-arrow-search"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
			                                    		</div>
			                                    		<b class="count-in-number"><i class="fa fa-rupee" aria-hidden="true"></i> 25</b>
		                                        	</a>

		                                    	</li>
		                                        <li role="presentation">
		                                    		<a href="#impression" aria-controls="messages" role="tab" data-toggle="tab">
			                                    		<div class="impre">
			                                				Impressions <i class="fa fa-info-circle" aria-hidden="true"></i><span class="sub-tab-down-arrow-search"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
			                                    		</div>
			                                    		<b class="count-in-number"><i class="fa fa-rupee" aria-hidden="true"></i> 25</b>			
		                                    		</a>
		                                        </li>
		                                        <li role="presentation">
		                                        	<a href="#link-clicks" aria-controls="settings" role="tab" data-toggle="tab">
		                                        		<div class="link-clicks">
		                                    				Link Clicks <i class="fa fa-info-circle" aria-hidden="true"></i><span class="sub-tab-down-arrow-search"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
			                                    		</div>
			                                    		<b class="count-in-number"><i class="fa fa-rupee" aria-hidden="true"></i> 25</b>
		                                        	</a> 
		                                        </li>
		                                    </ul>

		                                    <!-- Tab panes -->
		                                    <div class="tab-content">
		                                        <div role="tabpanel" class="tab-pane active" id="reach">
		                                        	<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        	</div>	
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane" id="spent">
		                                        	<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        	</div>		
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane" id="impression">
		                                        	<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        	</div>	
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane" id="link-clicks">
		                                        	<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        	</div>	
		                                        </div>
		                                    </div>
			
	                                	</div>
	                                	<div class="table-result">
											<table class="table">
											  <thead class="thead-default">
											    <tr>
											      <th>Objective</th>
											      <th>Results</th>
											      <th>Cost per Result</th>
											      <th>Reach</th>
											      <th>Amount Spent</th>
											    </tr>
											  </thead>
											  <tbody>
											    <tr>
											      <td>-</td>
											      <td>-</td>
											      <td>-</td>
											      <td>-</td>
											      <td>-</td>
											    </tr>										
											  </tbody>
											</table>
	                                	</div>
	                                	<div class="row"> 
	                                		<div class="col-md-6">
				                                	<div class="age-area">
				                                	   <div class="card">
					                                    <ul class="nav nav-tabs" role="tablist">
					                                        <li role="presentation" class="active">
					                                        	<a href="#age-gender" aria-controls="home" role="tab" data-toggle="tab">
					                                        		Age and Gender
					                                        		 
					                                        	</a>
					                                    	</li>
					                                        <li role="presentation">
					                                        	<a href="#age" aria-controls="profile" role="tab" data-toggle="tab">	 
					                                    			Age		                                    	 		                                    		 
					                                        	</a>
					                                    	</li>
					                                        <li role="presentation">
					                                    		<a href="#gender" aria-controls="messages" role="tab" data-toggle="tab">		                         		
						                                			Gender 	
					                                    		</a>
					                                        </li>
					                                       
					                                    </ul>
					                                     
					                                    <div class="tab-content">
					                                        <div role="tabpanel" class="tab-pane active" id="age-gender">
					                                        	<div class="custom-autocomplete-select">
					                                        		<select class="selectpicker select-blue-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

																	<select class="selectpicker select-green-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

					                                        	</div>
					                                        	<div class="no-result-found">
					                                        			<img src="../img/no-result-img.jpg"><br>	
					                                        			<b>No Activity During Date Range</b><br>
					                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
					                                        	</div>	


					                                        </div>
					                                        <div role="tabpanel" class="tab-pane" id="age">
					                                        	<div class="custom-autocomplete-select">
					                                        		<select class="selectpicker select-blue-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

																	<select class="selectpicker select-green-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

					                                        	</div>
					                                        	<div class="no-result-found">
					                                        			<img src="../img/no-result-img.jpg"><br>	
					                                        			<b>No Activity During Date Range</b><br>
					                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
					                                        	</div>


					                                        </div>
					                                        <div role="tabpanel" class="tab-pane" id="gender">
					                                        		<div class="custom-autocomplete-select">
					                                        		<select class="selectpicker select-blue-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

																	<select class="selectpicker select-green-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

					                                        	</div>
					                                        	<div class="no-result-found">
					                                        			<img src="../img/no-result-img.jpg"><br>	
					                                        			<b>No Activity During Date Range</b><br>
					                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
					                                        	</div>
					                                        </div>
					                                        
					                                    </div>
									
				                                	</div>
				                                	</div>
				                            </div>    	
				                            <div class="col-md-6">
				                                	<div class="hours-area">
				                                	   <div class="card">
					                                    <ul class="nav nav-tabs" role="tablist">
					                                        <li role="presentation" class="active">
					                                        	<a href="#age-gender" aria-controls="home" role="tab" data-toggle="tab">
					                                        		Hour				                                        		 
					                                        	</a>
					                                    	</li>
					                                        
					                                       
					                                    </ul>
					                                     
					                                    <div class="tab-content">
					                                        <div role="tabpanel" class="tab-pane active" id="age-gender">
					                                        	<div class="custom-autocomplete-select">
					                                        		<select class="selectpicker select-blue-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

																	<select class="selectpicker select-green-text show-tick" data-live-search="true">
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																	  <option data-tokens="mustard">Lorem</option>
																	  <option data-tokens="frosting">Dummy text printing</option>
																	</select>

					                                        	</div>
					                                        	<div class="no-result-found">
					                                        			<img src="../img/no-result-img.jpg"><br>	
					                                        			<b>No Activity During Date Range</b><br>
					                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
					                                        	</div>
					                                        </div>	                                       	                                        
					                                    </div>		
				                                	</div>
				                                	</div>
		                                	</div>
		                                </div>	
		                                <div class="location-section">
		                                	<div class="row">
		                                			<div class="col-md-12">
		                                					<h1>Location</h1>
		                                					<div class="col-md-2 location-radio-selection">
		                                						 <form>
																	    <label class="radio-inline">
																	      <input type="radio" name="optradio">Country
																	    </label>
																	    <label class="radio-inline">
																	      <input type="radio" name="optradio">Region
																	    </label>
																	    <label class="radio-inline">
																	      <input type="radio" name="optradio">DMA Region
																	    </label>
																	  </form>
		                                					</div>
		                                					<div class="col-md-10 location-map">
		                                							<div class="map-result">
		                                									<img src="../img/map-img.jpg">
		                                							</div>
		                                							<div class="select-on-map">
		                                									<div class="custom-autocomplete-select">
																				<select class="selectpicker  show-tick" data-live-search="true">
																				  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																				  <option data-tokens="mustard">Lorem</option>
																				  <option data-tokens="frosting">Dummy text printing</option>
																				  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
																				   
																				</select>

					                                        				</div>
		                                							</div>
		                                					</div>
		                                			</div>
		                                	</div>
		                                </div>
		                                <div class="account-bottom-custom-table">
		                                		<div class="col-md-12" style="padding: 0">
		                                				<div class="top-custom-colums-dropdown pull-right">
		                                					<div class="dropdown custm-columns">
															  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
															    Columns
															    <span class="caret"></span>
															  </button>
															  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
															    <li><a href="#">Action</a></li>
															    <li><a href="#">Another action</a></li>
															    <li><a href="#">Something else here</a></li>									    
															  </ul>
															</div>

															<div class="dropdown breakdowns">
															  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
															    Breakdown
															    <span class="caret"></span>
															  </button>
															  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
															  	<li><a href="">Clear All Breakdowns</a></li>
															  	<li class="dropdown-header">By delivery</li>
															    <li><a href="#">Action</a></li>
															    <li><a href="#">Another action</a></li>
															    <li><a href="#">Something else here</a></li>									    
															  </ul>
															</div>

		                                				</div>
		                                				<div class="col-md-12 acc-table-result">
								                                <div class="table-result">
																	<table class="table">
																	  <thead class="thead-default">
																	    <tr>
																	      <th>Account Name</th>
																	      <th>Results</th>
																	      <th>Reach</th>																       
																	      <th>Amount Spent</th>
																	      <th>Frequency</th>
																	      <th>Impressions</th>
																	      <th>Unique Link Clicks</th>
																	    </tr>
																	  </thead>
																	  <tbody>
																	    <tr>
																	      <td>Johnaccount</td>
																	      <td>-</td>
																	      <td>-</td>
																	      <td>-</td>
																	      <td>-</td>
																	      <td>-</td>
																	      <td>-</td>
																	    </tr>										
																	  </tbody>
																	</table>
							                                	</div>
		                                				</div>
		                                		</div>
		                                </div>
		                    	</div>
		                    	<div class="col-md-2 right-area" style="padding-right: 0">
		                    			<div class="cost-summary">
		                    					<h5>Account Spending Limit <i class="fa fa-info-circle" aria-hidden="true"></i></h5>
		                    					<img src="../img/amount-slider.jpg">
		                    					<p><b>&#8377; 330.00</b> spent toward limit.</p>
		                    					<p><b>&#8377; 330.00</b> limit.</p>
		                    					<p><a href="">Manage Billing & Payments</a></p>
		                    			</div>
		                    	</div>
		                    </div>

		                    <div role="tabpanel" class="tab-pane active" id="camp">
		                    	<div class="thress-tabs-table-top-filters">
		                    		<div class="left-fil1">
				                    		<div class="btn-and-caret-icon-dropdown">
				                    			<a href="#" class="create-camp-btn" data-toggle="modal" data-target="#create-camp-btn">+ Create Campaign</a>
				                    			<!-- craete camp popup  -->
				                    			<div id="create-camp-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Campaign</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">
												         	<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Campaign</option>
																					  <option data-tokens="mustard">Use Existing Campaign</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Name	
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter a campaign name" class="form-control">
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Buying Type
																				</label>
																				<div class="col-md-8">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Auction</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Objective
																				</label>
																				<div class="col-md-8">
																					<button class="light-grey-btn show-camp-obj-btn"><img src="../img/brand-awarns-icon.png">Traffic</button>
																					<div class="objective">
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>	
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																					</div>	
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Campaign</option>
																					  <option data-tokens="mustard">Use Existing Campaign</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Set Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad set name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Campaign</option>
																					  <option data-tokens="mustard">Use Existing Campaign</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
																<p class="no-of-camp">Creating 1 campaign, 1 ad set and 1 ad</p>
															</div>
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Cancel</button>
												        <button class="blue-btn">Save to Draft</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- craete camp popup ends  -->
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-copy"></i> Duplicate</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-pencil"></i> Edit</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="simple-default-icons-group " style="margin-left:10px">	
												<ul>
													<li><i class="fa fa-refresh disable-me"></i></li>
													<li><i class="fa fa-trash disable-me"></i></li>
													<li><i class="fa fa-edit"></i></li>
													<li><i class="fa fa-tag disable-me"></i></li>
												</ul>
											</div>
											<div class="single-btn-div" style="margin-left: 10px">
												<button class="light-grey-btn" style="height: 24px;" data-toggle="modal" data-target="#create-rule-btn">Create Rule</button>
												<!-- create rule popup  -->
				                    			<div id="create-rule-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Rule</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">												         	
												         	<div class="sec1">	
												         	<p>Automatically update campaigns, ad sets or ads in bulk by creating automated rules.</p>													         	
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Apply Rule To
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">All active campaigns </option>
																						</select>												
										                                        	</div>
										                                        	<p style="color: #999">Your rule will apply to campaigns that are active at the time the rule runs</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Action
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Turn off campaigns</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Conditions <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9 conditions-btw">
																					 <p style="margin: 0">ALL of the following match</p>
																					 <div class="custom-autocomplete-select conditions-btw-right">	
																						<select class="selectpicker show-tick" data-size="5">
																						  <optgroup label="Picnic">
																						    <option>cost per mobile app install </option>
																						    <option>Ketchup </option>
																						    <option>Relish </option>
																						  </optgroup>
																						  <optgroup label="Camping">
																						    <option>Tent </option>
																						    <option>Flashlight </option>
																						    <option>Toilet Paper </option>
																						  </optgroup>
																						</select>
																						<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">is not between</option>
																						</select>
																						<input type="text" name=""> - <input type="text" name="">
																						<a href="#">x</a>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Time Range <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<div class="custom-autocomplete-select">
											                                        		<select class="selectpicker show-tick">
																							  <option data-tokens="ketchup mustard">Last 3 days</option>
																							</select>
										                                        		</div>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Attribution Window <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<p>1 day after viewing ad and 28 days after clicking on ad</p>
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Frequency <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>Continuously -</b> This rule will run as often as possible (usually every 30 minutes).</p>	
																				</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Notification <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>	On Facebook -</b> You'll get a notification when conditions for this rule are met.</p>	
																					<p><input type="checkbox"><b>Email -</b>Include results from this rule to an email sent once per day when any of your rules have conditions that are met or new rules are created.</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Subscriber <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p><b>John Clarke</b></p>	
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Rule Name  
																				</label>
																				<div class="col-md-9">
																					<input type="text" name="" placeholder="Rule Name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>														
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Preview</button><span class="preview-span">Create at least one condition to see a preview of results.</span>
												        <button class="light-grey-btn">Cancel</button>
												        <button class="blue-btn">Create</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- craete rule popup ends  -->

											</div>
									</div>
									<div class="right-fil1">
										<ul>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Columns</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Breakdown</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
												<button class="light-grey-btn" style="height: 24px; line-height: normal;">Export</button>
											</li>
										</ul>
									</div>			
		                    	</div>
		                      <div class="table-result table-responsive camp-second-tab-table">
		                      	<div id="duplicate-campaign" class="modal fade duplicate-row-popup" role="dialog">
		                      		<div class="modal-dialog">
		                      			<div class="modal-content">
		                      				<div class="modal-header">
		                      					<button type="button" class="close" data-dismiss="modal">&times;</button>
		                      					<h4 class="modal-title">Duplicate Campaign</h4>
		                      				</div>
		                      				<div class="modal-body">
		                      					<form class="form-inline">
		                      						<div class="form-group">
		                      							<label for="email">Number of duplicates</label>
		                      							<div class="input-group spinner">								        		
		                      								<input type="text" class="form-control" value="42">
		                      								<div class="input-group-btn-vertical">
		                      									<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
		                      									<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
		                      								</div>
		                      							</div>
		                      						</div>
		                      					</form>		  	
		                      				</div>
		                      				<div class="modal-footer">
		                      					<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
		                      					<button type="button" class="blue-btn" data-dismiss="modal">Save to Draft</button>
		                      				</div>
		                      			</div>
		                      		</div>
		                      	</div>
		                      	<table class="table table-bordered table-inverse table-striped table-hover" id="camapaign_table">
		                      		<thead class="thead-default">
		                      			<tr>
		                      				<th><input type="checkbox" name="" class="all_camapaign_checkbox"></th>
		                      				<th></th>
		                      				<th>Campaign Name</th>
		                      				<th>Delivery <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Results <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Reach <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Cost per Result <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Amount Spent <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Ends <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Frequency <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Impressions <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th>Unique Link Clicks <i class="fa fa-info-circle" aria-hidden="true"></i></th>
		                      				<th class="more-plus"><a href="#">+</a></th>
		                      			</tr>
		                      		</thead>
		                      		<tbody id="camapaign_listing">
		                      			<?php 
		                      			if(count($camapaigns['data']) > 0):
		                      			foreach ($camapaigns['data'] as $camapaign):
		                      				
		                      				?>
		                      				<tr class="camp_rows" id="<?php echo $camapaign['id'];?>" data-cmp_name="<?php echo str_replace('"','&#34;',$camapaign['name']);?>">
		                      					<td><input type="checkbox" name="" class="campaigns_checkbox"></td>
		                      					<td>
		                      						<input type="checkbox" <?php if($camapaign['status'] == 'ACTIVE') { echo 'checked'; } ?> class="campaigns_status" data-toggle="toggle" data-size="mini">
		                      					</td>
		                      					<td class="editable-row">
		                      						<a href="#"><?php echo $camapaign['name']; ?> <span class="edit-row-title"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
		                      						<div class="row-editing-icons">
		                      							<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Chart</a>
		                      							<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
		                      							<a href="#duplicate-campaign" data-toggle="modal"><i class="fa fa-copy" aria-hidden="true"></i> Duplicate</a>
		                      						</div>
		                      					</td>
		                      					<td><?php echo $camapaign['delivery_info']['status'];?></td>
		                      					<td><?php echo $camapaign['objective_for_results'];?></td>
		                      					<td>-</td>
		                      					<td><?php echo $camapaign['objective_for_cost'];?></td>	
		                      					<td>&#8377; 0.0</td>
		                      					<td>Ongoing</td>
		                      					<td>-</td>
		                      					<td>-</td>
		                      					<td>-</td>
		                      					<td></td>
		                      				</tr>
		                      			<?php endforeach; ?>
		                      				<tr>
		                      					<td colspan="2"></td>
		                      					<td>Result form <?php echo count($camapaigns['data']); ?> campaigns</td>
		                      					<td></td>
		                      					<td>—Link Click</td>
		                      					<td>—People</td>
		                      					<td>—Per Link Click</td>
		                      					<td>&#8377; 0.0</td>
		                      					<td></td>
		                      					<td>—Per Person</td>
		                      					<td>-Total</td>
		                      					<td>-Total</td>
		                      					<td></td>

		                      				</tr>
		                      			<?php else :?>
		                      				<tr>
		                      					<td colspan="13" align="center">No Result Found</td>
		                      				</tr>	
		                      			<?php endif ?>	
		                      		</tbody>
		                      	</table>
	                        </div>

		                    </div>

		                    <div role="tabpanel" class="tab-pane" id="ad-sets">
		                    	<div class="thress-tabs-table-top-filters">
		                    		<div class="left-fil1">
				                    		<div class="btn-and-caret-icon-dropdown">				                    			 
				                    			<a href="#" class="create-camp-btn" data-toggle="modal" data-target="#create-ad-set-btn">+ Create Ad Set</a>

				                    			<!-- crate ad set popup  -->
				                    			<div id="create-ad-set-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Ad Set</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">
												         	<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Campaign</option>
																					  <option data-tokens="mustard">Use Existing Campaign</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Name	
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter a campaign name" class="form-control">
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Buying Type
																				</label>
																				<div class="col-md-8">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Auction</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Objective
																				</label>
																				<div class="col-md-8">
																					<button class="light-grey-btn show-camp-obj-btn"><img src="../img/brand-awarns-icon.png">Traffic</button>
																					<div class="objective">
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>	
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																					</div>	
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Ad Set</option>
																					  <option data-tokens="mustard">Use Existing Ad Set</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Set Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad set name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Ad</option>
																					  <option data-tokens="mustard">Use Existing Ad</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
																<p class="no-of-camp">Creating 1 campaign, 1 ad set and 1 ad</p>
															</div>
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Cancel</button>
												        <button class="blue-btn">Save to Draft</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- crate ad set popup ends  -->


				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-copy"></i> Duplicate</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-pencil"></i> Edit</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="simple-default-icons-group" style="margin-left:10px">	
												<ul>
													<li><i class="fa fa-refresh disable-me"></i></li>
													<li><i class="fa fa-trash disable-me"></i></li>
													<li><i class="fa fa-edit"></i></li>
													<li><i class="fa fa-tag disable-me"></i></li>
												</ul>
											</div>
											<div class="single-btn-div" style="margin-left: 10px">
												<button class="light-grey-btn" style="height: 24px;" data-toggle="modal" data-target="#create-ad-set-rule-btn">Create Rule</button>
												<!-- create rule popup  -->
				                    			<div id="create-ad-set-rule-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Rule</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">												         	
												         	<div class="sec1">	
												         	<p>Automatically update campaigns, ad sets or ads in bulk by creating automated rules.</p>													         	
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Apply Rule To
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">All active ad sets </option>
																						</select>												
										                                        	</div>
										                                        	<p style="color: #999">Your rule will apply to campaigns that are active at the time the rule runs</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Action
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Turn off ad sets</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Conditions <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9 conditions-btw">
																					 <p style="margin: 0">ALL of the following match</p>
																					 <div class="custom-autocomplete-select conditions-btw-right">	
																						<select class="selectpicker show-tick" data-size="5">
																						  <optgroup label="Picnic">
																						    <option>cost per mobile app install </option>
																						    <option>Ketchup </option>
																						    <option>Relish </option>
																						  </optgroup>
																						  <optgroup label="Camping">
																						    <option>Tent </option>
																						    <option>Flashlight </option>
																						    <option>Toilet Paper </option>
																						  </optgroup>
																						</select>
																						<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">is not between</option>
																						</select>
																						<input type="text" name=""> - <input type="text" name="">
																						<a href="#">x</a>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Time Range <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<div class="custom-autocomplete-select">
											                                        		<select class="selectpicker show-tick">
																							  <option data-tokens="ketchup mustard">Last 3 days</option>
																							</select>
										                                        		</div>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Attribution Window <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<p>1 day after viewing ad and 28 days after clicking on ad</p>
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Frequency <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>Continuously -</b> This rule will run as often as possible (usually every 30 minutes).</p>	
																				</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Notification <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>	On Facebook -</b> You'll get a notification when conditions for this rule are met.</p>	
																					<p><input type="checkbox"><b>Email -</b>Include results from this rule to an email sent once per day when any of your rules have conditions that are met or new rules are created.</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Subscriber <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p><b>John Clarke</b></p>	
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Rule Name  
																				</label>
																				<div class="col-md-9">
																					<input type="text" name="" placeholder="Rule Name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>														
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Preview</button><span class="preview-span">Create at least one condition to see a preview of results.</span>
												        <button class="light-grey-btn">Cancel</button>
												        <button class="blue-btn">Create</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- craete rule popup ends  -->
											</div>
									</div>
									<div class="right-fil1">
										<ul>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Columns</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Breakdown</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
												<button class="light-grey-btn" style="height: 24px; line-height: normal;">Export</button>
											</li>
										</ul>
									</div>			
		                    	</div>
		                    	  <div class="table-result table-responsive ad-sets-third-tab-table">
		                    	  		<div id="duplicate-adSet" class="modal fade duplicate-row-popup" role="dialog">
									  <div class="modal-dialog">
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Duplicate Ad Set</h4>
									      </div>
									      <div class="modal-body">
									      	<form class="form-inline">
												<div class="form-group">
													    <label for="email">Number of duplicates</label>
													    <div class="input-group spinner">								        		
														    <input type="text" class="form-control" value="42">
														    <div class="input-group-btn-vertical">
														      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
														      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
														    </div>
														 </div>
												</div>
											</form>		  	
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
									        <button type="button" class="blue-btn" data-dismiss="modal">Save to Draft</button>
									      </div>
									    </div>

									  </div>
									</div>
									<table class="table table-bordered table-inverse table-striped" id="adset_table">
									  <thead class="thead-default">
									    <tr>
									      <th><input type="checkbox" class="all_adsets_checkbox"></th>
									      <th></th>
									      <th>Ad Set Name</th>
									      <th>Delivery <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Results <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Reach <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Cost per Result <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Budget <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Amount Spent <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Ends <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Schedule <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Frequency <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Impressions <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Unique Link Clicks <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th class="more-plus"><a href="#">+</a></th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php 
									  	foreach($camapaigns['data'] as $campaign) : 
									  		$total_adset = count($campaign['adsets']['data']);
									  		foreach ($campaign['adsets']['data'] as $adsets) : 
									  	?>
									    <tr id="<?php echo $adsets['id'];?>" data-adset_name="<?php echo str_replace('"','&#34;',$adsets['name']);?>" class="adset_rows camp_<?php echo $campaign['id'];?>">
									      <td><input type="checkbox" name="" class="adsets_checkbox"></td>
									      <td><input type="checkbox" <?php if($adsets['status']) { echo "checked"; }?> class="adsets_status" data-toggle="toggle" data-size="mini"></td>
									      <td>
									      	<a href="#"><?php echo $adsets['name']; ?> <span class="edit-row-title"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
									      	<div class="row-editing-icons">
									      			<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Chart</a>
									      			<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
									      			<a href="#duplicate-adSet" data-toggle="modal"><i class="fa fa-copy" aria-hidden="true"></i> Duplicate</a>	
									      	</div>
									      </td>
									      <td><?php echo $adsets['delivery_info']['status'];?></td>
									      <td><?php echo $adsets['objective_for_results'];?></td>
									      <td>-</td>
									      <td><?php echo $adsets['objective_for_cost'];?></td>	
									      <td><?php echo $adsets['daily_budget'];?><span>Daily</span></td>
									      <td>&#8377; 0.00</td>
									      <td>Ongoing-</td>
									      <td>Sep 15, 2017 - Ongoing</td>
									      <td>-</td>
									      <td>-</td>
									      <td>-</td>
									      <td></td>
									    </tr>
										<?php endforeach; endforeach; ?>
									    <?php if($total_adset > 0 ) : ?>
									    	<tr>
									    		<td colspan="2"></td>
									    		<td>Results from <?php echo $total_adset; ?> ad set</td>
									    		<td></td>
									    		<td>-<span>Link Click</span></td>
									    		<td>-<span>People</span></td>
									    		<td>-<span>Per Link Click</span></td>
									    		<td></td>
									    		<td>&#8377; 0.00 Total Spent</td>
									    		<td></td>
									    		<td></td>
									    		<td>-<span>Per People</span></td>
									    		<td>-<span>Total</span></td>
									    		<td>-<span>Total</span></td>
									    		<td></td>
									    	</tr>	
									    <?php else : ?>
									    	<tr>
									    		<td colspan="15" align="center"><b>No Result Found</b></td>
									    	</tr>
									    <?php endif; ?>						
									  </tbody>
									</table>
	                        	</div>
		                    </div>

		                    <div role="tabpanel" class="tab-pane" id="ads">
		                    	<div class="thress-tabs-table-top-filters">
		                    		<div class="left-fil1">
				                    		<div class="btn-and-caret-icon-dropdown">
				                    			
				                    			<a href="#" class="create-camp-btn" data-toggle="modal" data-target="#create-ad-btn">+ Create Ad</a>
 
				                    			<!-- crate ad popup  -->
				                    			<div id="create-ad-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Ad</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">
												         	<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Campaign</option>
																					  <option data-tokens="mustard">Use Existing Campaign</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Name	
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter a campaign name" class="form-control">
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Buying Type
																				</label>
																				<div class="col-md-8">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Auction</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Campaign Objective
																				</label>
																				<div class="col-md-8">
																					<button class="light-grey-btn show-camp-obj-btn"><img src="../img/brand-awarns-icon.png">Traffic</button>
																					<div class="objective">
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>	
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																						<div class="objective-cat">
																							<h5>Awareness</h5>
																							<ul>
																								<li><img src="../img/brand-awarns-icon.png"> Brand</li>
																							</ul>
																						</div>
																					</div>	
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Ad Set</option>
																					  <option data-tokens="mustard">Use Existing Ad Set</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Set Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad set name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
														         	<div class="row" style="margin-bottom:30px;">
																         	<div class="col-md-12">
																         		<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick">
																					  <option data-tokens="ketchup mustard">Create New Ad</option>
																					  <option data-tokens="mustard">Use Existing Ad</option>
																					</select>													
									                                        	</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-4">
																         			Ad Name
																				</label>
																				<div class="col-md-8">
																					<input type="text" name="" placeholder="Enter an ad name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>
															<div class="sec1">
																<p class="no-of-camp">Creating 1 campaign, 1 ad set and 1 ad</p>
															</div>
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Cancel</button>
												        <button class="blue-btn">Save to Draft</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- crate ad popup ends  -->

				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-copy"></i> Duplicate</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
				                    			<a href="#" class="create-camp-btn"><i class="fa fa-pencil"></i> Edit</a>
				                    			<div class="dropdown caret-icon-dropdown-with-btn">
												  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
												    <span class="caret"></span>
												  </button>
												  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												    <a class="dropdown-item" href="#">Action</a>
												    <a class="dropdown-item" href="#">Another action</a>
												    <a class="dropdown-item" href="#">Something else here</a>
												  </div>
												</div>
											</div>	
											<div class="simple-default-icons-group " style="margin-left:10px">	
												<ul>
													<li><i class="fa fa-refresh disable-me"></i></li>
													<li><i class="fa fa-trash disable-me"></i></li>
													<li><i class="fa fa-edit"></i></li>
													<li><i class="fa fa-tag disable-me"></i></li>
												</ul>
											</div>
											<div class="single-btn-div" style="margin-left: 10px">
												<button class="light-grey-btn" style="height: 24px;" data-toggle="modal" data-target="#create-ad-rule-btn">Create Rule</button>
												<!-- create ad rule popup  -->
				                    			<div id="create-ad-rule-btn" class="modal fade common-three-tabs-popup" role="dialog">
												  <div class="modal-dialog">

												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Create Rule</h4>
												      </div>
												      <div class="modal-body">
												         <div class="popup-left-form">												         	
												         	<div class="sec1">	
												         	<p>Automatically update campaigns, ad sets or ads in bulk by creating automated rules.</p>													         	
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Apply Rule To
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">All active ads </option>
																						</select>												
										                                        	</div>
										                                        	<p style="color: #999">Your rule will apply to campaigns that are active at the time the rule runs</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Action
																				</label>
																				<div class="col-md-9">
																					<div class="custom-autocomplete-select">
										                                        		<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">Turn off ad</option>
																						</select>													
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Conditions <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9 conditions-btw">
																					 <p style="margin: 0">ALL of the following match</p>
																					 <div class="custom-autocomplete-select conditions-btw-right">	
																						<select class="selectpicker show-tick" data-size="5">
																						  <optgroup label="Picnic">
																						    <option>cost per mobile app install </option>
																						    <option>Ketchup </option>
																						    <option>Relish </option>
																						  </optgroup>
																						  <optgroup label="Camping">
																						    <option>Tent </option>
																						    <option>Flashlight </option>
																						    <option>Toilet Paper </option>
																						  </optgroup>
																						</select>
																						<select class="selectpicker show-tick">
																						  <option data-tokens="ketchup mustard">is not between</option>
																						</select>
																						<input type="text" name=""> - <input type="text" name="">
																						<a href="#">x</a>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Time Range <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<div class="custom-autocomplete-select">
											                                        		<select class="selectpicker show-tick">
																							  <option data-tokens="ketchup mustard">Last 3 days</option>
																							</select>
										                                        		</div>
										                                        	</div>
										                                        	<div class="sub-label-and-field">
										                                        		<label>Attribution Window <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										                                        		<p>1 day after viewing ad and 28 days after clicking on ad</p>
										                                        	</div>
																				</div>
																         	</div>
																    </div>
																    
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Frequency <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>Continuously -</b> This rule will run as often as possible (usually every 30 minutes).</p>	
																				</div>
																         	</div>
																    </div> 
																    <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Notification <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p>	<b>	On Facebook -</b> You'll get a notification when conditions for this rule are met.</p>	
																					<p><input type="checkbox"><b>Email -</b>Include results from this rule to an email sent once per day when any of your rules have conditions that are met or new rules are created.</p>
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3 label-for-p">
																         			Subscriber <i class="fa fa-info-circle" aria-hidden="true"></i>
																				</label>
																				<div class="col-md-9">
																					<p><b>John Clarke</b></p>	
																				</div>
																         	</div>
																    </div> 
																     <div class="row">    	
																         	<div class="col-md-12">
																         		<label class="col-md-3">
																         			Rule Name  
																				</label>
																				<div class="col-md-9">
																					<input type="text" name="" placeholder="Rule Name" class="form-control">
																				</div>
																         	</div>
																    </div> 
															</div>														
												         </div>
												        <!--  <div class="popup-right-form col-md-4">sds</div> -->
												      </div>
												      <div class="modal-footer">												      	
												        <button type="button" class="light-grey-btn" data-dismiss="modal" style="float: left;">Preview</button><span class="preview-span">Create at least one condition to see a preview of results.</span>
												        <button class="light-grey-btn">Cancel</button>
												        <button class="blue-btn">Create</button>
												      </div>
												    </div>

												  </div>
												</div>
												<!-- craete rule popup ends  -->
											</div>
									</div>
									<div class="right-fil1">
										<ul>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Columns</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
													<div class="custom-autocomplete-select">
		                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="5">
														  <option data-tokens="ketchup mustard">Breakdown</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														  <option data-tokens="ketchup mustard">Lorem Ipsum</option>
														  <option data-tokens="mustard">Lorem</option>
														  <option data-tokens="frosting">Dummy text printing</option>
														</select>													
		                                        	</div>
											</li>
											<li>
												<button class="light-grey-btn" style="height: 24px; line-height: normal;">Export</button>
											</li>
										</ul>
									</div>			
		                    	</div>
		                         <div class="table-result table-responsive ads-fourth-tab-table">
		                         	<div id="duplicate-ads" class="modal fade duplicate-row-popup" role="dialog">
									  <div class="modal-dialog">
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Duplicate Ads</h4>
									      </div>
									      <div class="modal-body">
									      	<form class="form-inline">
												<div class="form-group">
													    <label for="email">Number of duplicates</label>
													    <div class="input-group spinner">								        		
														    <input type="text" class="form-control" value="42">
														    <div class="input-group-btn-vertical">
														      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
														      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
														    </div>
														 </div>
												</div>
											</form>		  	
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
									        <button type="button" class="blue-btn" data-dismiss="modal">Save to Draft</button>
									      </div>
									    </div>

									  </div>
									</div>
									<table class="table table-bordered table-inverse table-striped" id="ad_table">
									  <thead class="thead-default">
									    <tr>
									      <th><input type="checkbox" class="all_ad_checkbox"></th>
									      <th></th>
									      <th>Ad Name</th>
									      <th>Delivery <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Results <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Reach <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Cost per Result <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Amount Spent <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Ends <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Relevance <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Frequency <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Impressions <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Unique Link Clicks <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th>Button Clicks <i class="fa fa-info-circle" aria-hidden="true"></i></th>
									      <th class="more-plus"><a href="#">+</a></th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php 
									  	foreach($camapaigns['data'] as $ads) : 
									  		$adsets = $ads['adsets']['data'];
									  		$total_adset = count($ads['ads']['data']);
									  		foreach ($ads['ads']['data'] as $key => $ad) : ?>
									  		<tr class="ad_rows camp_<?php echo $ads['id'];?> adsets_<?php echo $adsets[$key]['id'];?>" id="<?php echo $ad['id'];?>" data-adset_name="<?php echo str_replace('"','&#34;',$ad['name']);?>">
									  			<td><input type="checkbox" name="" class="ad_checkbox"></td>
									  			<td><input type="checkbox" <?php if($ad['status']) { echo "checked"; }?> class="ad_status" data-toggle="toggle" data-size="mini"></td>
									  			<td>
									  				<a href="#"><?php echo $ad['name']; ?> <span class="edit-row-title"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
									  				<div class="row-editing-icons">
									  					<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Chart</a>
									  					<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
									  					<a href="#duplicate-adSet" data-toggle="modal"><i class="fa fa-copy" aria-hidden="true"></i> Duplicate</a>	
									  				</div>
									  			</td>
									  			<td><?php echo $ad['delivery_info']['status'];?></td>
									  			<td><?php echo $ad['objective_for_results'];?></td>
									  			<td>-</td>
									  			<td><?php echo $ad['objective_for_cost'];?></td>	
									  			<td>-</td>
									  			<td>Ongoing-</td>
									  			<td>-</td>
									  			<td>-</td>
									  			<td>-</td>
									  			<td>-</td>
									  			<td>-</td>
									  			<td></td>
									  		</tr>
									  	<?php endforeach; endforeach; ?>	
									  	<?php if($total_adset > 0) : ?>	
									  		<tr>
									  			<td colspan="2"></td>
									  			<td>Results from <?php echo $total_adset; ?> ad</td>
									  			<td></td>
									  			<td>-</td>
									  			<td>-<span>People</span></td>
									  			<td>-</td>
									  			<td>&#8377; 0.00 Total Spent</td>
									  			<td></td>
									  			<td></td>
									  			<td>-<span>Per People</span></td>
									  			<td>-<span>Total</span></td>
									  			<td>-<span>Total</span></td>
									  			<td>-<span>Total</span></td>
									  			<td></td>
									  		</tr>	
									  	<?php else : ?>
									  		<tr>
									  			<td colspan="16" align="center"><b>No Result Found</b></td>
									  		</tr>
									  	<?php endif; ?>	
									  </tbody>
									</table>
	                        	</div>

		                    </div>

		                </div>
		            </div>
			    </div>
			</div>
			<div class="right-fix-drawer-outr">
				<div class="right-fix-drawer-inr">
					<div class="right-fix-drawer">
							<ul class="drawer-four-icons nav nav-tabs">
								<li class="drawer-arrow open-drw-arrow"><a href="#">&nbsp;</a></li>
								<li class="drawer-view-chart open-drw"><a data-toggle="tab" href="#view-tab"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
								<li class="drawer-edit open-drw"><a data-toggle="tab" href="#edit-tab"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
								<li class="drawer-history open-drw"><a data-toggle="tab" href="#history-tab"><i class="fa fa-clock-o" aria-hidden="true"></i></a></li>
							</ul>
							<div class="drawer-data-rightSec">
								<div class="tab-content first-step-tabs-content">
								    <div id="view-tab" class="tab-pane fade in active">
								    	<h1 class="drw-main-heading">Performance Insights for <span class="dummy_text">Campaign:</span> <span class="camapaign_name">demo</span> <span class="mixed_value" style="display: none;"></h1>
								    	<div class="righ-drw-first-third-tab-cal">
								    			<button class="light-grey-btn">This month: Sep 1, 2017 - Sep 21, 2017</button>
								    	</div>
							      		<div class="hori-three-tabs tabbable-panel">							      			
											<div class="tabbable-line">
												<ul class="nav nav-tabs outr-tabs">
													<li class="active">
														<a href="#tab_default_1" data-toggle="tab">
															<i class="fa fa-bar-chart" aria-hidden="true"></i> Performance 
														</a>
														<span class="arrow"></span>
													</li>
													<li>
														<a href="#tab_default_2" data-toggle="tab">
															<i class="fa fa-users" aria-hidden="true"></i> Demographics 
														</a>
														<span class="arrow"></span>
													</li>
													<li>
														<a href="#tab_default_3" data-toggle="tab">
															<i class="fa fa-copy" aria-hidden="true"></i> Placement
														</a>
														<span class="arrow"></span>
													</li>
												</ul>
												<div class="tab-content three">
													<div class="tab-pane active performance" id="tab_default_1">
															<ul class="nav nav-pills nav-stacked col-md-3">
															  <li class="active"><a href="#links" data-toggle="pill">Results: Link Clicks</a></li>
															  <li><a href="#people" data-toggle="pill"><b>0</b><br>People Reached</a></li>
															  <li><a href="#amount" data-toggle="pill"><b>&#8377; 0.00</b><br>Amount Spent</a></li>
															  <li><a href="#custom" data-toggle="pill"><b>Custom</b></a></li>
															</ul>
															<div class="tab-content col-md-9">
															        <div class="tab-pane active" id="links">
															            <div class="no-result-found">
						                                        			<img src="../img/no-result-img.jpg"><br>	
						                                        			<b>No Activity During Date Range</b><br>
						                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
						                                        		</div>
															        </div>
															        <div class="tab-pane" id="people">
															            <div class="no-result-found">
						                                        			<img src="../img/no-result-img.jpg"><br>	
						                                        			<b>No Activity During Date Range</b><br>
						                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
						                                        		</div>
															        </div>
															        <div class="tab-pane" id="amount">
															             <div class="no-result-found">
						                                        			<img src="../img/no-result-img.jpg"><br>	
						                                        			<b>No Activity During Date Range</b><br>
						                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
						                                        		</div>
															        </div>
															        <div class="tab-pane" id="custom">
															            <div class="no-result-found">
						                                        			<img src="../img/no-result-img.jpg"><br>	
						                                        			<b>No Activity During Date Range</b><br>
						                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
						                                        		</div>
															        </div>
															</div> 


													</div>
													<div class="tab-pane demographics" id="tab_default_2">
														<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        		</div>
													</div>
													<div class="tab-pane placement" id="tab_default_3">
														<div class="no-result-found">
		                                        			<img src="../img/no-result-img.jpg"><br>	
		                                        			<b>No Activity During Date Range</b><br>
		                                        			<button class="light-grey-btn" style="margin-top: 15px;">Change Date</button>
		                                        		</div>
													</div>
												</div>
											</div>
										</div>
								    </div>
								    <div id="edit-tab" class="tab-pane fade">
								      <h1 class="drw-main-heading">Editing <span class="dummy_text">Campaign:</span> <span class="camapaign_name">demo</span> <span class="mixed_value" style="display: none;"></span></h1>
								      	<div class="edit-camp-form-outr">
								      		<!-- start of campaigns -->
								      		<div id="camapaign-full-details" style="display: block;">
								      			<?php foreach($camapaigns['data'] as $camapaign):?>
								      				<div class="camapaign-details-list" id="cmp_<?php echo $camapaign['id'];?>" style="display: none;">
								      					<div class="col-md-7 col-sm-8">
								      						<div class="form-white-block" style="padding: 15px; margin-top: 20px;">
								      							<div class="row">
								      								<div class="col-sm-4"><label for="email" class="pull-right">Campaign Name:</label></div>
								      								<div class="col-sm-8 padding0">
								      									<input type="email" class="form-control" id="email" value="<?php echo str_replace('"','&#34;',$camapaign['name']);?>">
								      									<a href="#">Rename usign available fields</a>
								      								</div>
								      							</div>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Campaign Details</h5>
								      							<div class="white-block-body">
								      								<div class="col-sm-12">
								      									<div class="col-sm-6"><label class="pull-right">Objective</label></div>
								      									<div class="col-sm-6 padding0"><?php echo $camapaign['objective'];?></div>
								      								</div>
								      								<div class="col-sm-12">
								      									<div class="col-sm-6"><label class="pull-right">Buying Type</label></div>
								      									<div class="col-sm-6 padding0"><?php echo $camapaign['buying_type'];?></div>
								      								</div>
								      								<div class="col-sm-12">
								      									<div class="col-sm-6"><label class="pull-right">Campaign Spending Limit <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      									<div class="col-sm-6 padding0">
								      										<input type="text"><span><b>₹NaN.00 Total Spent</b></span>
								      										<p>New limit must be at least ₹5,000.00</p>
								      										<a href="#">Remove Limit</a>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      					</div>

								      					<div class="col-md-5 col-ms-4">
								      						<div class="form-white-block" style="margin-top:20px;">
								      							<div class="row main-heading">
								      								<div class="col-md-9 padding10"><h5><b>Campaign id:<?php echo $camapaign['id'];?></b></h5><input type="checkbox" checked class="" value="<?php echo $camapaign['id'];?>" data-toggle="toggle" data-size="mini"> </div>
								      								<div class="col-md-3 padding10">
								      									<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      										<a href="#" class="create-camp-btn">Link</a>
								      										<div class="dropdown caret-icon-dropdown-with-btn">
								      											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      												<span class="caret"></span>
								      											</button>
								      											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      												<a class="dropdown-item" href="#">Action</a>
								      												<a class="dropdown-item" href="#">Another action</a>
								      												<a class="dropdown-item" href="#">Something else here</a>
								      											</div>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      							<div class="white-block-body">
								      								<p>
								      									<a href="#">1 Ad Set</a><br>
								      									<span>Targeting, placement, budget and schedule</span>
								      								</p>
								      								<p>
								      									<a href="#">1 Ad</a><br>
								      									<span>Images, videos, text and links</span>
								      								</p>
								      								<hr>
								      								<p><b>Rule</b></p>
								      								<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      									<a href="#" class="create-camp-btn">Create Rule</a>
								      									<div class="dropdown caret-icon-dropdown-with-btn">
								      										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      											<span class="caret"></span>
								      										</button>
								      										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      											<a class="dropdown-item" href="#">Action</a>
								      											<a class="dropdown-item" href="#">Another action</a>
								      											<a class="dropdown-item" href="#">Something else here</a>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      					</div>
								      				</div>
								      			<?php endforeach ?>
								      			<div class="camapaign-details-list" id="cmp_mixed" style="display: none;">
								      				<div class="col-md-7 col-sm-8">
								      					<div class="form-white-block" style="padding: 15px; margin-top: 20px;">
								      						<div class="row">
								      							<div class="col-sm-4"><label for="email" class="pull-right">Campaign Name:</label></div>
								      							<div class="col-sm-8 padding0">
								      								<input type="email" class="form-control" id="email" value="Mixed Value">
								      								<a href="#">Rename usign available fields</a>
								      							</div>
								      						</div>
								      					</div>
								      					<div class="form-white-block">
								      						<h5 class="white-block-legend">Campaign Details</h5>
								      						<div class="white-block-body">
								      							<div class="col-sm-12">
								      								<div class="col-sm-6"><label class="pull-right">Objective</label></div>
								      								<div class="col-sm-6 padding0">Traffic</div>
								      							</div>
								      							<div class="col-sm-12">
								      								<div class="col-sm-6"><label class="pull-right">Buying Type</label></div>
								      								<div class="col-sm-6 padding0">Auction</div>
								      							</div>
								      							<div class="col-sm-12">
								      								<div class="col-sm-6"><label class="pull-right">Campaign Spending Limit <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      								<div class="col-sm-6 padding0">
								      									<input type="text" value="Mixed Value"><span><b>₹NaN.00 Total Spent</b></span>
								      									<p>New limit must be at least ₹5,000.00</p>
								      									<a href="#">Remove Limit</a>
								      								</div>
								      							</div>
								      						</div>
								      					</div>
								      				</div>

								      				<div class="col-md-5 col-ms-4">
								      					<div class="form-white-block" style="margin-top:20px;">
								      						<div class="row main-heading">
								      							<div class="col-md-9 padding10"><h5><b>Campaign id: <a data-toggle="modal" data-target="#cam_mixed_value">Mixed Value</a></b></h5><input type="checkbox" checked class="" value="<?php echo $camapaign['id'];?>" data-toggle="toggle" data-size="mini"> </div>
								      							<div class="col-md-3 padding10">
								      								<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      									<a href="#" class="create-camp-btn">Link</a>
								      									<div class="dropdown caret-icon-dropdown-with-btn">
								      										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      											<span class="caret"></span>
								      										</button>
								      										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      											<a class="dropdown-item" href="#">Action</a>
								      											<a class="dropdown-item" href="#">Another action</a>
								      											<a class="dropdown-item" href="#">Something else here</a>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      						<div class="white-block-body">
								      							<p>
								      								<a href="#"><span class="total_adsets_count">1</span> Ad Set</a><br>
								      								<span>Targeting, placement, budget and schedule</span>
								      							</p>
								      							<p>
								      								<a href="#"><span class="total_ads_count"> Ad</a><br>
								      								<span>Images, videos, text and links</span>
								      							</p>
								      							<hr>
								      							<p><b>Rule</b></p>
								      							<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      								<a href="#" class="create-camp-btn">Create Rule</a>
								      								<div class="dropdown caret-icon-dropdown-with-btn">
								      									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      										<span class="caret"></span>
								      									</button>
								      									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      										<a class="dropdown-item" href="#">Action</a>
								      										<a class="dropdown-item" href="#">Another action</a>
								      										<a class="dropdown-item" href="#">Something else here</a>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      					</div>
								      				</div>
								      			</div>
								      		</div>
								      		<!-- end of campaigns -->
								      		<!-- start of adsets -->
								      		<div class="edit-camp-form" style="display: none;" id="adsets-full-details">
								      			<?php foreach ($camapaigns['data'] as $adsets) : 
								      			       foreach ($adsets['adsets']['data'] as $adset) : ?>
								      			<div class="adsets-details-list" id="adset_<?php echo $adset['id'];?>" style="display: none;">
								      				<div class="col-md-7 col-ms-8">
								      					<div class="edit-camp-left-blocks">
								      						<div class="form-white-block" style="padding: 15px;">
								      							<label>Ad Set Name</label>
								      							<input type="text" name="" class="form-control" value="<?php echo str_replace('"','&#34;',$adset['name']);?>">
								      							<a href="#">Rename usign available fields</a>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Traffic</h5>
								      							<div class="white-block-body">
								      								<label class="light-grey-label">Choose where you want to drive traffic. You'll enter more details about the destination later.</label>
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Website</label>
								      								</div>
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">App</label>
								      								</div>
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Messenger</label>
								      								</div>
								      							</div>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Budget & Schedule</h5>
								      							<div class="white-block-body">
								      								<!-- <form> -->
								      									<div class="row">
								      										<div class="col-md-5"><label>Daily Budget</label></div>
								      										<div class="col-md-6">
								      											<input type="text" name="" value="<?php echo $adset[daily_budget]; ?>" style=" margin-right: 10px;width:100px;">
								      											<button class="light-grey-btn" data-toggle="modal" data-target="#adjust_button">Adjust Budget</button>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Schedule Start</label></div>
								      										<div class="col-md-6">
								      											<p><?php echo date_format(date_create($adset['start_time']), 'l, F d, Y h:i a');?></p>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Schedule End</label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label><input type="radio" name="optradio">Don't schedule end date, run as ongoing</label><br>
								      												<label><input type="radio" name="optradio">End run on:</label>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Ad Scheduling</label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label><input type="radio" name="optradio">Run ads all the time</label><br>
								      												<label><input type="radio" name="optradio">Run ads on a schedule</label>
								      											</div>
								      										</div>							      											
								      									</div>
								      								<!-- </form> -->
								      							</div>
								      						</div>	
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Audience</h5>
								      							<div class="white-block-body">
								      								<form>
								      									<div class="row">
								      										<div class="col-md-5"><label>Custom Audiences <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<input type="text" name="" value="800.00" class="form-control"><br>
								      											<a href="#">Exclude</a> | <a href="#">Create New</a>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Location <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<textarea class="form-control"></textarea>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Age <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick" data-size="3">
																					  <option data-tokens="ketchup mustard">45</option>
																					  <option data-tokens="mustard">56</option>
																					  <option data-tokens="frosting">25</option>
																					</select>	
																					<select class="selectpicker show-tick" data-size="3">
																					  <option data-tokens="ketchup mustard">63+</option>
																					  <option data-tokens="mustard">20+</option>
																					  <option data-tokens="frosting">12+</option>
																					</select>													
									                                        	</div>
								      										</div>
								      									</div>
								      									<div class="row gender">
								      										<div class="col-md-5"><label style="border: 0">Gender <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6 r">
								      											<div class="all-gen">
																				<input type="radio" name="radio" id="radio1" class="radio" checked/>
																				<label for="radio1">All</label>
																				</div>

																				<div class="male-gen">
																				<input type="radio" name="radio" id="radio2" class="radio"/>
																				<label for="radio2">Men</label>
																				</div>

																				<div class="female-gen">	
																				<input type="radio" name="radio" id="radio3" class="radio"/>
																				<label for="radio3">Women</label>
																				</div>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Languages <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<input type="text" name="" placeholder="Enter a language" class="form-control"> 
								      										</div>
								      									</div>
								      									<div class="row"><hr class="edit-forms-divider">&nbsp;</hr></div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Detailed Targeting <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label style="padding: 0">INCLUDE people who match at least ONE of the following <i class="fa fa-info-circle" aria-hidden="true"></i></label><br>
								      												<select class="form-control">
								      													<option>Option1</option>
								      												</select>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row"><hr class="edit-forms-divider">&nbsp;</hr></div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Connections <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<div class="custom-autocomplete-select">
									                                        		<select class="selectpicker show-tick" data-size="3">
																					  <option data-tokens="ketchup mustard">Apps</option>
																					  
																					</select>			 											
									                                        	</div>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row" style="margin: 0"><hr class="edit-forms-divider" style="margin: 0">
								      									&nbsp;</hr></div>
								      									<div class="row">
								      										<div class="col-md-5">&nbsp;</div>
								      										<div class="col-md-7">
								      											 <button type="button" class="light-grey-btn" data-toggle="modal" data-target="#save-aud">Save This Audience</button>
								      										</div>
								      									</div>
								      								</form>
								      							</div>
								      						</div>


								      						<div id="save-aud" class="modal fade duplicate-row-popup" role="dialog">
									                      		<div class="modal-dialog">
									                      			<div class="modal-content">
									                      				<div class="modal-header">
									                      					<button type="button" class="close" data-dismiss="modal">&times;</button>
									                      					<h4 class="modal-title">Save Audience</h4>
									                      				</div>
									                      				<div class="modal-body">
									                      					<form class="form-inline">
									                      						<div class="row">
									                      							<div class="col-md-4"><label for="email">Audience Name</label></div>
									                      							<div class="col-md-6">
										                      							<div class="input-group">
										                      								<input type="text" class="form-control" value="42">
										                      							</div>
										                      							<p>Location:<span>India</span></p>
										                      							<p>Location:<span>India</span></p>
										                      						</div>	
									                      						</div>
									                      					</form>		  	
									                      				</div>
									                      				<div class="modal-footer">
									                      					<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
									                      					<button type="button" class="blue-btn" data-dismiss="modal">Save</button>
									                      				</div>
									                      			</div>
									                      		</div>
									                      	</div>


								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Placement</h5>
								      							<div class="white-block-body">
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Automatic Placements (Recommended)</label>
								      									<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      								</div> 
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Edit Placements (Recommended)</label>
								      									<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      								</div> 
								      							</div>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Optimization & Delivery</h5>
								      							<div class="white-block-body">
								      								<!-- <form> -->
								      									<div class="row">
								      										<div class="col-md-5"><label>Optimization for Ad Delivery <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											 
								      											<button class="light-grey-btn" data-toggle="modal" data-target="">Adjust Budget</button>
								      										</div>
								      									</div>
								      									
								      									<div class="row">
								      										<div class="col-md-5"><label>Bid Amount <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label><input type="radio" name="optradio">Automatic - Let Facebook set the bid that helps you get the most impressions at the best price.</label><br>
								      												<label><input type="radio" name="optradio">Manual - Enter a bid based on what 1,000 impressions are worth to you.</label>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>When You Get Charged <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label>Impression</label> 
								      											</div>
								      										</div>							      											
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Delivery Type<i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label>Standard - Show your ads throughout your selected schedule (recommended)</label> 
								      											</div>
								      										</div>							      											
								      									</div>
								      								<!-- </form> -->
								      							</div>
								      						</div>	

								      					</div>
								      				</div>
								      				<div class="col-md-5 col-sm-5">
								      					<div class="form-white-block" style="margin-top:20px;">
								      						<div class="row main-heading">
								      							<div class="col-md-9 padding10"><h5 class="white-block-legend"><b>Ad Set id:<?php echo $adset['id'];?></b></h5><input type="checkbox" checked class="" value="<?php echo $adset['id'];?>" data-toggle="toggle" data-size="mini"> </div>
								      							<div class="col-md-3 padding10">
								      								<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      									<a href="#" class="create-camp-btn">Link</a>
								      									<div class="dropdown caret-icon-dropdown-with-btn">
								      										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      											<span class="caret"></span>
								      										</button>
								      										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      											<a class="dropdown-item" href="#">Action</a>
								      											<a class="dropdown-item" href="#">Another action</a>
								      											<a class="dropdown-item" href="#">Something else here</a>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      						<div class="white-block-body">
								      							<p>
								      								<a href="#">1 Ad Set</a><br>
								      								<span>Targeting, placement, budget and schedule</span>
								      							</p>
								      							<p>
								      								<a href="#">1 Ad</a><br>
								      								<span>Images, videos, text and links</span>
								      							</p>
								      							<hr>
								      							<p><b>Rule</b></p>
								      							<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      								<a href="#" class="create-camp-btn">Create Rule</a>
								      								<div class="dropdown caret-icon-dropdown-with-btn">
								      									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      										<span class="caret"></span>
								      									</button>
								      									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      										<a class="dropdown-item" href="#">Action</a>
								      										<a class="dropdown-item" href="#">Another action</a>
								      										<a class="dropdown-item" href="#">Something else here</a>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      					</div>
								      					<div class="edit-camp-right-blocks">
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Audience Definition</h5>
								      							<div class="white-block-body">
								      								<img src="../img/audience.jpg"> <p>Your audience selection is fairly broad</p> 

								      							</div>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Estimated Daily Results</h5>
								      							<div class="white-block-body">
								      								 <div class="col-md-12" style="padding-left: 0"><b>Reach</b> 33,000 - 210,000 (of 110,000,000)<br>
								      								 	<img src="../img/reach-img.jpg">
								      								 </div>
								      								<div class="radio">
 								      									<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      								</div> 
								      							</div>
								      						</div>
								      					</div>

								      				</div>
								      			</div>
								      		<?php endforeach; endforeach; ?>
								      		<div class="adsets-details-list" id="adset_mixed" style="display: none;">
								      			<div class="col-md-7 col-ms-8">
								      				<div class="edit-camp-left-blocks">
								      					<div class="form-white-block" style="padding: 15px;">
								      						<label>Ad Set Name</label>
								      						<input type="text" name="" class="form-control" value="Mixed Value">
								      						<a href="#">Rename usign available fields</a>
								      					</div>
								      					<div class="form-white-block">
								      						<h5 class="white-block-legend">Traffic</h5>
								      						<div class="white-block-body">
								      							<label class="light-grey-label">Choose where you want to drive traffic. You'll enter more details about the destination later.</label>
								      							<div class="radio">
								      								<label><input type="radio" name="optradio">Website</label>
								      							</div>
								      							<div class="radio">
								      								<label><input type="radio" name="optradio">App</label>
								      							</div>
								      							<div class="radio">
								      								<label><input type="radio" name="optradio">Messenger</label>
								      							</div>
								      						</div>
								      					</div>
								      					<div class="form-white-block">
								      						<h5 class="white-block-legend">Budget &amp; Schedule</h5>
								      						<div class="white-block-body">
								      							<!-- <form> -->
								      								<div class="row">
								      									<div class="col-md-5"><label>Daily Budget</label></div>
								      									<div class="col-md-6">
								      										<input type="text" name="" value="Mixed Value" style=" margin-right: 10px;width:100px;">
								      										<button class="light-grey-btn" data-toggle="modal" data-target="#adjust_button">Adjust Budget</button>
								      									</div>
								      								</div>
								      								<div class="row">
								      									<div class="col-md-5"><label>Schedule Start</label></div>
								      									<div class="col-md-6">
								      										<p>Mixed Value</p>
								      									</div>
								      								</div>
								      								<div class="row">
								      									<div class="col-md-5"><label>Schedule End</label></div>
								      									<div class="col-md-7">
								      										<div class="radio margin-top-zero">
								      											<p>Mixed Value</p>
								      										</div>
								      									</div>	
								      								</div>
								      								<div class="row">
								      									<div class="col-md-5"><label>Ad Scheduling</label></div>
								      									<div class="col-md-7">
								      										<div class="radio margin-top-zero">
								      											<label><input type="radio" name="optradio">Run ads all the time</label><br>
								      											<label><input type="radio" name="optradio">Run ads on a schedule</label>
								      										</div>
								      									</div>							      											
								      								</div>
								      								<!-- </form> -->
								      							</div>
								      						</div>	
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Audience</h5>
								      							<div class="white-block-body">
								      								<form>
								      									<div class="row">
								      										<div class="col-md-5"><label>Custom Audiences <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<input type="text" name="" value="" class="form-control"><br>
								      											<a href="#">Exclude</a> | <a href="#">Create New</a>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Location <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<p>Mixed Value</p>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Age <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<p>Mixed Value</p>
								      										</div>
								      									</div>
								      									<div class="row gender">
								      										<div class="col-md-5"><label style="border: 0">Gender <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6 r">
								      											<p>?Mixed Value</p>
								      										</div>
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Languages <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">
								      											<input type="text" name="" placeholder="Enter a language" class="form-control"> 
								      										</div>
								      									</div>
								      									<div class="row"><hr class="edit-forms-divider">&nbsp;</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Detailed Targeting <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label style="padding: 0">INCLUDE people who match at least ONE of the following <i class="fa fa-info-circle" aria-hidden="true"></i></label><br>
								      												<select class="form-control">
								      													<option>Option1</option>
								      												</select>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row"><hr class="edit-forms-divider">&nbsp;</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Connections <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<div class="custom-autocomplete-select">
								      													<div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Apps"><span class="filter-option pull-left">Apps</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="ketchup mustard" role="option" aria-disabled="false" aria-selected="true"><span class="text">Apps</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" data-size="3" tabindex="-98">
								      														<option data-tokens="ketchup mustard">Apps</option>

								      													</select></div>			 											
								      												</div>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row" style="margin: 0"><hr class="edit-forms-divider" style="margin: 0">
								      									&nbsp;</div>
								      									<div class="row">
								      										<div class="col-md-5">&nbsp;</div>
								      										<div class="col-md-7">
								      											<button type="button" class="light-grey-btn" data-toggle="modal" data-target="#save-aud">Save This Audience</button>
								      										</div>
								      									</div>
								      								</form>
								      							</div>
								      						</div>


								      						<div id="save-aud" class="modal fade duplicate-row-popup" role="dialog">
								      							<div class="modal-dialog">
								      								<div class="modal-content">
								      									<div class="modal-header">
								      										<button type="button" class="close" data-dismiss="modal">×</button>
								      										<h4 class="modal-title">Save Audience</h4>
								      									</div>
								      									<div class="modal-body">
								      										<form class="form-inline">
								      											<div class="row">
								      												<div class="col-md-4"><label for="email">Audience Name</label></div>
								      												<div class="col-md-6">
								      													<div class="input-group">
								      														<input type="text" class="form-control" value="42">
								      													</div>
								      													<p>Location:<span>India</span></p>
								      													<p>Location:<span>India</span></p>
								      												</div>	
								      											</div>
								      										</form>		  	
								      									</div>
								      									<div class="modal-footer">
								      										<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
								      										<button type="button" class="blue-btn" data-dismiss="modal">Save</button>
								      									</div>
								      								</div>
								      							</div>
								      						</div>


								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Placement</h5>
								      							<div class="white-block-body">
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Automatic Placements (Recommended)</label>
								      									<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      								</div> 
								      								<div class="radio">
								      									<label><input type="radio" name="optradio">Edit Placements (Recommended)</label>
								      									<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      								</div> 
								      							</div>
								      						</div>
								      						<div class="form-white-block">
								      							<h5 class="white-block-legend">Optimization &amp; Delivery</h5>
								      							<div class="white-block-body">
								      								<!-- <form> -->
								      									<div class="row">
								      										<div class="col-md-5"><label>Optimization for Ad Delivery <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-6">

								      											<button class="light-grey-btn" data-toggle="modal" data-target="">Adjust Budget</button>
								      										</div>
								      									</div>

								      									<div class="row">
								      										<div class="col-md-5"><label>Bid Amount <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label><input type="radio" name="optradio">Automatic - Let Facebook set the bid that helps you get the most impressions at the best price.</label><br>
								      												<label><input type="radio" name="optradio">Manual - Enter a bid based on what 1,000 impressions are worth to you.</label>
								      											</div>
								      										</div>	
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>When You Get Charged <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label>Mixed Value</label> 
								      											</div>
								      										</div>							      											
								      									</div>
								      									<div class="row">
								      										<div class="col-md-5"><label>Delivery Type<i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
								      										<div class="col-md-7">
								      											<div class="radio margin-top-zero">
								      												<label>Standard - Show your ads throughout your selected schedule (recommended)</label> 
								      											</div>
								      										</div>							      											
								      									</div>
								      									<!-- </form> -->
								      								</div>
								      							</div>	

								      						</div>
								      					</div>
								      					<div class="col-md-5 col-sm-5">
								      						<div class="form-white-block" style="margin-top:20px;">
								      							<div class="row main-heading">
								      								<div class="col-md-9 padding10"><h5 class="white-block-legend"><b>Ad Set id:23842657531340433</b></h5><div class="toggle btn btn-primary btn-xs" data-toggle="toggle" style="width: 17.9531px; height: 3.96875px;"><input type="checkbox" checked="" class="" value="23842657531340433" data-toggle="toggle" data-size="mini"><div class="toggle-group"><label class="btn btn-primary btn-xs toggle-on">On</label><label class="btn btn-default btn-xs active toggle-off">Off</label><span class="toggle-handle btn btn-default btn-xs"></span></div></div> </div>
								      								<div class="col-md-3 padding10">
								      									<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      										<a href="#" class="create-camp-btn">Link</a>
								      										<div class="dropdown caret-icon-dropdown-with-btn">
								      											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      												<span class="caret"></span>
								      											</button>
								      											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      												<a class="dropdown-item" href="#">Action</a>
								      												<a class="dropdown-item" href="#">Another action</a>
								      												<a class="dropdown-item" href="#">Something else here</a>
								      											</div>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      							<div class="white-block-body">
								      								<p>
								      									<a href="#"><span class="total_campaigns_count"></span> Campaigns</a><br>
								      									<span>Targeting, placement, budget and schedule</span>
								      								</p>
								      								<p>
								      									<a href="#"><span class="total_ads_count"></span> Ads</a><br>
								      									<span>Images, videos, text and links</span>
								      								</p>
								      								<hr>
								      								<p><b>Rule</b></p>
								      								<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
								      									<a href="#" class="create-camp-btn">Create Rule</a>
								      									<div class="dropdown caret-icon-dropdown-with-btn">
								      										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
								      											<span class="caret"></span>
								      										</button>
								      										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      											<a class="dropdown-item" href="#">Action</a>
								      											<a class="dropdown-item" href="#">Another action</a>
								      											<a class="dropdown-item" href="#">Something else here</a>
								      										</div>
								      									</div>
								      								</div>
								      							</div>
								      						</div>
								      						<div class="edit-camp-right-blocks">
								      							<div class="form-white-block">
								      								<h5 class="white-block-legend">Audience Definition</h5>
								      								<div class="white-block-body">
								      									<img src="../img/audience.jpg"> <p>Your audience selection is fairly broad</p> 

								      								</div>
								      							</div>
								      							<div class="form-white-block">
								      								<h5 class="white-block-legend">Estimated Daily Results</h5>
								      								<div class="white-block-body">
								      									<div class="col-md-12" style="padding-left: 0"><b>Reach</b> 33,000 - 210,000 (of 110,000,000)<br>
								      										<img src="../img/reach-img.jpg">
								      									</div>
								      									<div class="radio">
								      										<p>Your ads will automatically be shown to your audience in the places they're likely to perform best. For this objective, placements may include Facebook, Instagram, Audience Network and Messenger.</p>
								      									</div> 
								      								</div>
								      							</div>
								      						</div>

								      					</div>
								      				</div>
								      		</div>
										      <!-- end of adsets -->
										      <!-- starts of ads -->
										      	<div class="edit-camp-form" style="display: none;" id="ads-full-details">
										      		<?php foreach ($camapaigns['data'] as $ads) : 
								      			       foreach ($ads['ads']['data'] as $ads) : ?>
										      		<div class="adsets-details-list" id="ad_<?php echo $ads['id']?>">
										      			<div class="col-md-6 col-sm-8">
										      				<div class="edit-camp-left-blocks">
										      					<div class="form-white-block" style="padding: 15px;">
										      						<label>Ad Set Name</label>
										      						<input type="text" name="" class="form-control" value="<?php echo str_replace('"','&#34;',$ads['name']);?>">
										      						<a href="#">Rename usign available fields</a>
										      					</div>

										      					<div class="form-white-block identity">
									      							<h5 class="white-block-legend">Identity</h5>
									      							<div class="white-block-body">
									      								<div class="col-md-12">
										      								<label class="light-grey-label">Facebook Page <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      								<p>Choose a Facebook Page to represent your business in News Feed. Your ad will link to your site, but it will show as coming from your Facebook Page.</p>
										      								<div class="custom-autocomplete-select">
								                                        		<select class="selectpicker show-tick" data-size="3">
																				  <option data-tokens="ketchup mustard">Columns </option>
																				  <option data-tokens="mustard">Lorem</option>
																				  <option data-tokens="frosting">Dummy text printing</option>
																				</select>	
								                                        	</div>
										      								<p>or <a href="#">Don't Connect a Facebook Page</a> (will disable News Feed ads).</p>
									      								</div>

									      								<div class="col-md-12">
									      										<hr class="edit-forms-divider" style="margin-bottom: 20px">
									      								</div>

									      								<div class="col-md-12">
									      										
										      								<label class="light-grey-label">Instagram Account  <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      								<p>The selected Page has no Instagram account connected. Your ad will use the Page name and profile picture.</p>
										      								<div class="identity-instagram">
										      									<button class="light-grey-btn"><img src="../img/ident-acc-icon.jpg">Revinfotech (Page) <i class="fa fa-check" aria-hidden="true"></i></button>
										      									<span>OR</span>
										      									<button class="light-grey-btn" data-toggle="modal" data-target="#add-insta-acct-btn"><i class="fa fa-instagram" aria-hidden="true"></i> Add an Account</button>
										      									

										      								</div>	
									      								</div>
									      							</div>
								      							</div>

								      							<div class="form-white-block new-existing-ads-tab" style="padding:0px;">

										      						 <ul class="nav nav-tabs">
																	  <li class="active"><a data-toggle="tab" href="#crt-ad">Create Ad</a></li>
																	  <li><a data-toggle="tab" href="#ext-post">Use Existing Post</a></li>			 
																	</ul>

																	<div class="tab-content">
																	  <div id="crt-ad" class="tab-pane fade in active">
																	    <ul>
																	    	<li>
																	    		<input type="radio" id="img-vid" name="crt"> 
																	    		<img src="../img/single-img-icon.jpg">
																	    		<label for="img-vid">Ad with an image or video</label>
																	    	</li>
																	    	
																	    	<li>
																		    	<div class="crt-ad-radio-and-img">	
																		    		<input type="radio" id="mul-img" name="crt"> 
																		    		<img src="../img/single-img-icon.jpg">
																		    	</div>	
																		    	<div class="crt-ad-label-and-p">	
																		    		<label for="mul-img">
																		    			<b>Ad with multiple images or videos in a carousel</b>
																		    		 Show multiple images or videos for the same price.<a href="#">Learn more.</a>
																		    		</label>
																		    	</div>	
																	    	</li>
																	    	
																	    	<li>
																	    	<div class="crt-ad-radio-and-img">		
																	    		<input type="radio" id="img-coll" name="crt"> 
																	    		<img src="../img/single-img-icon.jpg">
																	    	</div>	
																	    	<div class="crt-ad-label-and-p">	
																	    		<label for="img-coll">
																	    			<b>Collection</b>Feature a collection of items that open into a fullscreen mobile experience.<a href="#">Learn more.</a>
																	    		</label>
																	    	</div>	
																	    	</li>
																	    </ul>
																	    <div class="crt-ad-radio-desc">
																	    	<b>Fullscreen Experience</b>
																	    	<p>Add a fullscreen Canvas, a mobile experience that opens instantly from your ad. Start with a template or create a custom layout with photos, videos and links to get people to engage with your business and encourage them to take action.</p>
																	    </div>
																	    <div class="full-scrn-canvs-opt">
																	    		<input type="checkbox" name=""><label>Add a fullscreen Canvas</label>
																	    	<ul>
																	    		<li>
																	    			<div class="r">
																	    				<input type="radio" name="">
																	    			</div>
																	    			<div class="des">
																	    				Quick creation from a template
																	    				<div class="new-cst-and-use-temp-row">
																		    				<button class="light-grey-btn get-new-customer">Get new customer <i class="fa fa-caret-down"></i></button>
																		    				<div class="three-new-customers-list">
																		    					<div class="s-r">	
																		    						<div class="s-r-left">
																		    							<img src="../img/new-cus-img.png">
																		    						</div>
																		    						<div class="s-r-right">
																		    							<b>Get New Customers</b><p>Drive conversions with a mobile landing page that encourages action.</p>
																		    						</div>
																		    					</div>
																		    					<div class="s-r">	
																		    						<div class="s-r-left">
																		    							<img src="../img/new-cus-img.png">
																		    						</div>
																		    						<div class="s-r-right">
																		    							<b>Get New Customers</b><p>Drive conversions with a mobile landing page that encourages action.</p>
																		    						</div>
																		    					</div>
																		    					<div class="s-r">	
																		    						<div class="s-r-left">
																		    							<img src="../img/new-cus-img.png">
																		    						</div>
																		    						<div class="s-r-right">
																		    							<b>Get New Customers</b><p>Drive conversions with a mobile landing page that encourages action.</p>
																		    						</div>
																		    					</div>
																		    				</div>	
																								<button type="button" class="blue-btn" data-toggle="modal" data-target="#useTemplate">Use Template</button>

																								
																	    				</div>
																	    			</div>
																	    		</li>
																	    		<li>
																	    			<div class="r">
																	    				<input type="radio" name="">
																	    			</div>
																	    			<div class="des">
																	    				Create a Canvas using advanced creation

																	    			</div>
																	    		</li>
																	    		<li>
																	    			<div class="r">
																	    				<input type="radio" name="">
																	    			</div>
																	    			<div class="des">
																	    				Use existing Canvas
																	    			</div>
																	    		</li>
																	    	</ul>	
																	    </div>
																	    <div class="img-and-video-radio-opt">
																	    	<div class="img-video-radio-tabs">
																				<ul class="nav nav-tabs">
																					<li class="active">
																						<a href="#radio-tab1" data-toggle="tab">
																							<label class="radio-inline">
																								<input id="f-option" name="selector" type="radio">
																								<label for="f-option">Image</label>
																								<div class="check"></div>
																							</label>
																						</a>
																					</li>
																					<li>
																						<a href="#radio-tab2" data-toggle="tab">
																							<label class="radio-inline">
																								<input id="f-option" name="selector" type="radio">
																								<label for="f-option">Video / Slideshow</label>
																								<div class="check"></div>
																							</label>
																						</a>
																					</li>
																				</ul>
																					
																				<div class="tab-content">
																			    	<div class="img-radio-tab-cont tab-pane active" id="radio-tab1">
																			    			<div class="select-img-row">
																			    				<button class="light-grey-btn">Select Image</button>
																			    			</div>
																			    			<div class="img-specification">
																			    				<h5>IMAGE SPECIFICATIONS</h5>
																			    				<ul>
																			    					<li>Recommended image size: 1200 × 628 pixels</li>
																			    					<li>Recommended image ratio: 1.91:1</li>
																			    					<li>To maximize ad delivery, use an image that contains little or no overlaid text.</li>
																			    				</ul>
																			    			</div>
																			    			<div class="destination-row">
																			    				<h5>Destination <i class="fa fa-info-circle"></i></h5>
																			    				<div class="common-row">
																			    					<input type="radio" name="">
																			    					<div class="col-md-11" style="padding-left: 0">
																			    						<b>Website URL</b> <i class="fa fa-info-circle"></i><br>
																			    						<input type="text" name="" class="form-control">
																			    					</div>
																			    					<div class="common-row">
																			    						<input type="radio" name="">
																			    						<div class="col-md-11" style="padding-left: 0">
																				    						<b>Messenger Setup</b> <i class="fa fa-info-circle"></i><br>
																				    						<p>Create the first few messages people see in Messenger after they click on your ad.</p>
																				    						<button class="light-grey-btn">Set up message</button>
																			    						</div>
																			    					</div>
																			    				</div>
																			    			</div>
																			    			<div class="common-row">						    	
																	    						<label>Display Link</label>
																	    						<input type="text" class="form-control">
																			    			</div>
																			    			<div class="common-row">
																	    						<label>Text</label>
																	    						<textarea class="form-control" placeholder="Enter text that clearly tells people about what you're promoting"></textarea>					    				
																			    			</div>
																			    			<div class="common-row">						    	
																	    						<label>Headline</label>
																	    						<input type="text" class="form-control">
																			    			</div>
																			    			<div class="common-row">
																	    						<label>News Feed Link Description <i class="fa fa-info-circle"></i></label>
																	    						<textarea class="form-control" placeholder="Enter text that clearly tells people about what you're promoting"></textarea>					    				
																			    			</div>
																			    			<div class="common-row">
																	    						<label>Call To Action <i class="fa fa-info-circle"></i></label><br>
																	    						<div class="custom-autocomplete-select call-to-ac-lrn-more">
																									<select class="selectpicker show-tick" data-size="8">
																									  <option data-tokens="ketchup mustard">Learn More</option>
																									  <option data-tokens="mustard">Lorem</option>
																									  <option data-tokens="frosting">Dummy text</option>
																									  <option data-tokens="mustard">Lorem</option>
																									  <option data-tokens="frosting">Dummy text</option>
																									  <option data-tokens="mustard">Lorem</option>
																									  <option data-tokens="frosting">Dummy text</option>
																									</select>													
													                                        	</div>
																	    						 				    				
																			    			</div>
																			    	</div>
																					<div class="video-slideshow-radio-tab-cont tab-pane" id="radio-tab2">

																						<div class="common-row">
																							<button class="light-grey-btn select-video-btn">Slect Video</button>
																							<button class="crt-slideshow-btn light-grey-btn">
																								Create Slideshow 
																							</button>
																						</div>
																						<div class="video-specification">

																			    				<h5>Video Recommendations:</h5>
																			    				<ul>
																			    					<li>Recommended Length: Up to 15 seconds</li>
																			    					<li>Recommended Aspect Ratio: Vertical (4:5)</li>
																			    					<li>Sound: Enabled with captions included</li>
																			    				</ul>

																			    				<h5>Video Specifications:</h5>
																			    				<ul>
																			    					<li>Recommended format: .mp4, .mov or .gif</li>
																			    					<li>Required Lengths By Placement:
																			    						<ul style="padding-top: 15px;padding-bottom: 5px;">
																			    							<li>Facebook: 240 minutes max</li>
																			    							<li>Audience Network: 5 - 120 seconds</li>
																			    							<li>Instagram Feed: Up to 60 seconds</li>
																			    						</ul>	

																			    					</li>
																			    					<li>Resolution: 600px minimum width</li>
																			    					<li>File size: Up to 4 GB max</li>
																			    				</ul>

																			    				<h5>Slideshow Specifications:</h5>
																			    				<ul>
																			    					<li>Use high resolution images or a video file to create a slideshow</li>
																			    					<li>Facebook and Instagram: 50 seconds max</li>
																			    					<li>Slideshows will loop</li>
																			    				</ul>
																			    			 
																						</div>

																						<div class="destination-row">
																		    				<h5>Destination <i class="fa fa-info-circle"></i></h5>
																		    				<div class="common-row">
																		    					<input type="radio" name="">
																		    					<div class="col-md-11" style="padding-left: 0">
																		    						<b>Website URL</b> <i class="fa fa-info-circle"></i><br>
																		    						<input type="text" name="" class="form-control">
																		    					</div>
																		    					<div class="common-row">
																		    						<input type="radio" name="">
																		    						<div class="col-md-11" style="padding-left: 0">
																			    						<b>Messenger Setup</b> <i class="fa fa-info-circle"></i><br>
																			    						<p>Create the first few messages people see in Messenger after they click on your ad.</p>
																			    						<button class="light-grey-btn">Set up message</button>
																		    						</div>
																		    					</div>
																		    				</div>
																			    		</div>
																		    			<div class="common-row">						    	
																    						<label>Display Link</label>
																    						<input type="text" class="form-control">
																		    			</div>
																		    			<div class="common-row">
																    						<label>Text</label>
																    						<textarea class="form-control" placeholder="Enter text that clearly tells people about what you're promoting"></textarea>					    				
																		    			</div>
																		    			<div class="common-row">						    	
																    						<label>Headline</label>
																    						<input type="text" class="form-control">
																		    			</div>
																		    			<div class="common-row">
																    						<label>News Feed Link Description <i class="fa fa-info-circle"></i></label>
																    						<textarea class="form-control" placeholder="Enter text that clearly tells people about what you're promoting"></textarea>					    				
																		    			</div>
																		    			<div class="common-row">
																    						<label>Call To Action <i class="fa fa-info-circle"></i></label><br>
																    						<div class="custom-autocomplete-select call-to-ac-lrn-more">
																								<select class="selectpicker show-tick" data-size="8">
																								  <option data-tokens="ketchup mustard">Learn More</option>
																								  <option data-tokens="mustard">Lorem</option>
																								  <option data-tokens="frosting">Dummy text</option>
																								  <option data-tokens="mustard">Lorem</option>
																								  <option data-tokens="frosting">Dummy text</option>
																								  <option data-tokens="mustard">Lorem</option>
																								  <option data-tokens="frosting">Dummy text</option>
																								</select>													
												                                        	</div>
																    						 				    				
																		    			</div>
																					</div>
																				</div>
																			</div>
																	    </div>



																	  </div>
																	  <div id="ext-post" class="tab-pane fade">
																	 	<label>Page Post</label><br>
																	 	<p class="no-post-exist"><i class="fa fa-info-circle" aria-hidden="true"></i> No eligible posts exist.</p>
																	 	<button class="light-grey-btn plus-popup">+</button><br>
																	 	<a href="#">Enter Post ID</a>
																	  </div>																	  
																	</div>
										      					</div>

										      					<div class="form-white-block tracking-form">
										      						<h5 class="white-block-legend">Tracking</h5>
										      						<div class="white-block-body">
										      							<div class="col-md-12 track-row">
										      								<label class="light-grey-label">Facebook Page <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      								 <input type="text" name="" placeholder="Ex: key1=value1&key2=value2" class="col-md-12">
									      								</div>
									      								<div class="col-md-12 track-row">
										      								<label class="light-grey-label">Pixel Tracking <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      								<div class="radio">
										      									<label><input name="optradio" type="radio">Track all conversions from my Facebook pixel</label>
										      									<div class="pixel-tracking-ids">
											      									<ul>
											      										<li><b>John Pixel</b><br>Pixel ID: 143012979405875</li>
											      									</ul>			 
											      								</div>	
								      										</div>
								      										 <div class="radio">
										      									<label><input name="optradio" type="radio">Do not track conversions</label> 
								      										</div>
									      								</div>
									      								<div class="col-md-12 track-row">
									      									<label>Mobile App Events Tracking (optional)</label>
									      									<div class="custom-autocomplete-select">
																				<select class="selectpicker show-tick" data-size="3">
																				  <option data-tokens="ketchup mustard">Columns</option>
																				  <option data-tokens="mustard">Lorem</option>
																				  <option data-tokens="frosting">Dummy text printing</option>
																				</select>													
								                                        	</div>
									      								</div>
										      						</div>
										      					</div>

										      				</div>
										      			</div>
										      			<div class="col-md-6 col-sm-5">
									      					<div class="form-white-block" style="margin-top:20px;">
									      						<div class="row main-heading">
									      							<div class="col-md-9 padding10"><h5><b>Ad id:<?php echo $ads['id'];?></b></h5><input type="checkbox" checked class="" value="<?php echo $ads['id'];?>" data-toggle="toggle" data-size="mini"> </div>
									      							<div class="col-md-3 padding10">
									      								<div class="btn-and-caret-icon-dropdown" style="margin-top: 6px;">
									      									<a href="#" class="create-camp-btn">Link</a>
									      									<div class="dropdown caret-icon-dropdown-with-btn">
									      										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
									      											<span class="caret"></span>
									      										</button>
									      										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									      											<a class="dropdown-item" href="#">Action</a>
									      											<a class="dropdown-item" href="#">Another action</a>
									      											<a class="dropdown-item" href="#">Something else here</a>
									      										</div>
									      									</div>
									      								</div>
									      							</div>
									      						</div>
									      						<div class="white-block-body">
									      							<p>
									      								<a href="#">1 Campaigns</a><br>
									      								<span>Targeting, placement, budget and schedule</span>
									      							</p>
									      							<p>
									      								<a href="#">1 Ad Set</a><br>
									      								<span>Images, videos, text and links</span>
									      							</p>
									      						</div>
									      					</div>
									      					<div class="form-white-block">
									      						<div class="row main-heading">
									      						 	<h5 class="white-block-legend" style="border-bottom: 0">
									      						 		<i class="fa fa-warning" style="color:red"></i> 
									      								Fix 1 Error in 1 Ad
									      							</h5>
									      						</div>  
									      						<div class="white-block-body">
									      							<p>
									      								 Promoted Object Is Missing: Your campaign must include an ad set with a selected object to promote related to your objective (ex: Page, URL, event). Please update your ad set to continue. (#1487930)
									      							</p>
									      						</div>
									      					</div> 

									      					<div class="form-white-block ad-preview">
									      						<div class="row main-heading">
									      						 	<h5 class="white-block-legend" style="border-bottom: 0">
									      						 		 Ad Preview
									      							</h5>
									      						</div>  
									      						<div class="white-block-body">
									      							<div class="row">
									      								<div class="col-md-6 ads-preview-dropd-down-list">
									      									<a href="#" class="light-grey-btn">Feature Phone <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									      									<ul>
									      										<li><img src="../img/ads-list-icon1.jpg"> Mobile News Feed</li>
									      										<li><img src="../img/ads-list-icon1.jpg"> Feature Phone</li>
									      										<li class="active"><img src="../img/ads-list-icon1.jpg"> Desktop New Feed</li>
									      										<li><img src="../img/ads-list-icon1.jpg"> Mobile News Feed</li>
									      										<li><img src="../img/ads-list-icon1.jpg"> Feature Phone</li>
									      										<li><img src="../img/ads-list-icon1.jpg"> Desktop New Feed</li>
									      									</ul>
									      								</div>
									      								<div class="col-md-6 text-right" style="padding-right: 50px;">5 of 10</div>
									      							</div>
									      							<div class="row">
									      								<div class="col-md-12 text-center">
									      									<div id="ads-preview-crsl" class="carousel slide" data-ride="carousel">	
																			    <div class="carousel-inner">
																			      <div class="item active">
																			      		<img src="../img/ads-preview-icon.jpg">
																			         	<p>Please select a Facebook Page post to show this type of ad</p>
																			      </div>

																			      <div class="item">
																			       		<img src="../img/ads-preview-icon.jpg">
																			         	<p>Please select a Facebook Page post to show this type of ad</p>
																			      </div>
																			    
																			      <div class="item">
																			      		<img src="../img/ads-preview-icon.jpg">
																			         	<p>Please select a Facebook Page post to show this type of ad</p>
																			      </div>
																			    </div>

																			    <!-- Left and right controls -->
																			    <a class="left carousel-control" href="#ads-preview-crsl" data-slide="prev">
																			      <span class="glyphicon glyphicon-chevron-left"></span>
																			      <span class="sr-only">Previous</span>
																			    </a>
																			    <a class="right carousel-control" href="#ads-preview-crsl" data-slide="next">
																			      <span class="glyphicon glyphicon-chevron-right"></span>
																			      <span class="sr-only">Next</span>
																			    </a>
																			</div>
																		</div>	
									      							</div>
									      						</div>
									      					</div> 

								      					</div>
										      		</div>
										      	<?php endforeach; endforeach; ?>
										      	<div class="adsets-details-list" id="ad_mixed">
										      		<div class="col-md-6 col-sm-8">
										      			<div class="edit-camp-left-blocks">
										      				<div class="form-white-block" style="padding: 15px;">
										      					<label>Ad Set Name</label>
										      					<input type="text" name="" class="form-control" value="Mixed Value">
										      					<a href="#">Rename usign available fields</a>
										      				</div>

										      				<div class="form-white-block identity">
										      					<h5 class="white-block-legend">Identity</h5>
										      					<div class="white-block-body">
										      						<div class="col-md-12">
										      							<label class="light-grey-label">Facebook Page <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      							<p>Choose a Facebook Page to represent your business in News Feed. Your ad will link to your site, but it will show as coming from your Facebook Page.</p>
										      							<div class="custom-autocomplete-select">
										      								<div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Columns"><span class="filter-option pull-left">Columns </span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="ketchup mustard" role="option" aria-disabled="false" aria-selected="true"><span class="text">Columns </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="mustard" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lorem</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="frosting" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dummy text printing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" data-size="3" tabindex="-98">
										      									<option data-tokens="ketchup mustard">Mixed Value </option>
										      								</select></div>	
										      							</div>
										      							<p>or <a href="#">Don't Connect a Facebook Page</a> (will disable News Feed ads).</p>
										      						</div>

										      						<div class="col-md-12">
										      							<hr class="edit-forms-divider" style="margin-bottom: 20px">
										      						</div>

										      						<div class="col-md-12">

										      							<label class="light-grey-label">Instagram Account  <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      							<p>The selected Page has no Instagram account connected. Your ad will use the Page name and profile picture.</p>
										      							<div class="identity-instagram">
										      								<button class="light-grey-btn"><img src="../img/ident-acc-icon.jpg">Revinfotech (Page) <i class="fa fa-check" aria-hidden="true"></i></button>
										      								<span>OR</span>
										      								<button class="light-grey-btn" data-toggle="modal" data-target="#add-insta-acct-btn"><i class="fa fa-instagram" aria-hidden="true"></i> Add an Account</button>
										      								

										      							</div>	
										      						</div>
										      					</div>
										      				</div>

										      				<div class="form-white-block new-existing-ads-tab" style="padding:0px;">

										      					<ul class="nav nav-tabs">
										      						<li class="active"><a data-toggle="tab" href="#crt-ad" aria-expanded="true">Create Ad</a></li>
										      						<li><a data-toggle="tab" href="#ext-post" aria-expanded="true">Use Existing Post</a></li>			 
										      					</ul>

										      					<div class="tab-content">
										      						<div id="crt-ad" class="tab-pane fade in active">
										      							<ul>
										      								<li><input type="radio" name=""> <img src="../img/single-img-icon.jpg"><label>Ad with an image or video</label></li>
										      								<li><input type="radio" name=""> <img src="../img/single-img-icon.jpg"><label>Ad with multiple images or videos in a carousel </label><p>Show multiple images or videos for the same price.<a href="#">Learn more.</a></p></li>
										      								<li><input type="radio" name=""> <img src="../img/single-img-icon.jpg"><label>Collection</label><p>Feature a collection of items that open into a fullscreen mobile experience.<a href="#">Learn more.</a></p></li>
										      							</ul>
										      						</div>
										      						<div id="ext-post" class="tab-pane fade">
										      							<label>Page Post</label><br>
										      							<p class="no-post-exist"><i class="fa fa-info-circle" aria-hidden="true"></i> No eligible posts exist.</p>
										      							<button class="light-grey-btn plus-popup">+</button><br>
										      							<a href="#">Enter Post ID</a>
										      						</div>																	  
										      					</div>
										      				</div>

										      				<div class="form-white-block tracking-form">
										      					<h5 class="white-block-legend">Tracking</h5>
										      					<div class="white-block-body">
										      						<div class="col-md-12 track-row">
										      							<label class="light-grey-label">Facebook Page <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      							<input type="text" name="" placeholder="Ex: key1=value1&amp;key2=value2" class="col-md-12">
										      						</div>
										      						<div class="col-md-12 track-row">
										      							<label class="light-grey-label">Pixel Tracking <i class="fa fa-info-circle" aria-hidden="true"></i></label>
										      							<div class="radio">
										      								<label><input name="optradio" type="radio">Track all conversions from my Facebook pixel</label>
										      								<div class="pixel-tracking-ids">
										      									<ul>
										      										<li><b>John Pixel</b><br>Pixel ID: 143012979405875</li>
										      									</ul>			 
										      								</div>	
										      							</div>
										      							<div class="radio">
										      								<label><input name="optradio" type="radio">Do not track conversions</label> 
										      							</div>
										      						</div>
										      						<div class="col-md-12 track-row">
										      							<label>Mobile App Events Tracking (optional)</label>
										      							<div class="custom-autocomplete-select">
										      								<div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Columns"><span class="filter-option pull-left">Columns</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="ketchup mustard" role="option" aria-disabled="false" aria-selected="true"><span class="text">Columns</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="mustard" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lorem</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="frosting" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dummy text printing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" data-size="3" tabindex="-98">
										      									<option data-tokens="ketchup mustard">Columns</option>
										      									<option data-tokens="mustard">Lorem</option>
										      									<option data-tokens="frosting">Dummy text printing</option>
										      								</select></div>													
										      							</div>
										      						</div>
										      					</div>
										      				</div>

										      			</div>
										      		</div>
										      		<div class="col-md-6 col-sm-5">
										      			<div class="form-white-block" style="margin-top:20px;">
										      				<div class="row main-heading">
										      					<div class="col-md-12 padding10">
										      						<h5 class="white-block-legend" style="border-bottom: 0"><b>Ad id:</b></h5>
										      					</div>
										      				</div>
										      				<div class="white-block-body">
										      					<p>
										      						<a href="#"><span class="total_campaigns_count"></span> Campaigns </a><br>
										      						<span>Targeting, placement, budget and schedule</span>
										      					</p>
										      					<p>
										      						<a href="#"><span class="total_adsets_count"></span> Ad Sets</a><br>
										      						<span>Images, videos, text and links</span>
										      					</p>
										      				</div>
										      			</div>
										      			<div class="form-white-block">
										      				<div class="row main-heading">
										      					<h5 class="white-block-legend" style="border-bottom: 0">
										      						<i class="fa fa-warning" style="color:red"></i> 
										      						Fix 1 Error in 1 Ad
										      					</h5>
										      				</div>  
										      				<div class="white-block-body">
										      					<p>
										      						Promoted Object Is Missing: Your campaign must include an ad set with a selected object to promote related to your objective (ex: Page, URL, event). Please update your ad set to continue. (#1487930)
										      					</p>
										      				</div>
										      			</div> 

										      			<div class="form-white-block ad-preview">
										      				<div class="row main-heading">
										      					<h5 class="white-block-legend" style="border-bottom: 0">
										      						Ad Preview
										      					</h5>
										      				</div>  
										      				<div class="white-block-body">
										      					<div class="row">
										      						<div class="col-md-6 ads-preview-dropd-down-list">
										      							<a href="#" class="light-grey-btn">Feature Phone <i class="fa fa-caret-down" aria-hidden="true"></i></a>
										      							<ul>
										      								<li><img src="../img/ads-list-icon1.jpg"> Mobile News Feed</li>
										      								<li><img src="../img/ads-list-icon1.jpg"> Feature Phone</li>
										      								<li class="active"><img src="../img/ads-list-icon1.jpg"> Desktop New Feed</li>
										      								<li><img src="../img/ads-list-icon1.jpg"> Mobile News Feed</li>
										      								<li><img src="../img/ads-list-icon1.jpg"> Feature Phone</li>
										      								<li><img src="../img/ads-list-icon1.jpg"> Desktop New Feed</li>
										      							</ul>
										      						</div>
										      						<div class="col-md-6 text-right" style="padding-right: 50px;">5 of 10</div>
										      					</div>
										      					<div class="row">
										      						<div class="col-md-12 text-center">
										      							<div id="ads-preview-crsl" class="carousel slide" data-ride="carousel">	
										      								<div class="carousel-inner">
										      									<div class="item active">
										      										<img src="../img/ads-preview-icon.jpg">
										      										<p>Please select a Facebook Page post to show this type of ad</p>
										      									</div>

										      									<div class="item">
										      										<img src="../img/ads-preview-icon.jpg">
										      										<p>Please select a Facebook Page post to show this type of ad</p>
										      									</div>

										      									<div class="item">
										      										<img src="../img/ads-preview-icon.jpg">
										      										<p>Please select a Facebook Page post to show this type of ad</p>
										      									</div>
										      								</div>

										      								<!-- Left and right controls -->
										      								<a class="left carousel-control" href="#ads-preview-crsl" data-slide="prev">
										      									<span class="glyphicon glyphicon-chevron-left"></span>
										      									<span class="sr-only">Previous</span>
										      								</a>
										      								<a class="right carousel-control" href="#ads-preview-crsl" data-slide="next">
										      									<span class="glyphicon glyphicon-chevron-right"></span>
										      									<span class="sr-only">Next</span>
										      								</a>
										      							</div>
										      						</div>	
										      					</div>
										      				</div>
										      			</div> 

										      		</div>
										      	</div>
										      	</div>
										      <!-- ends of ads -->
										</div> 
										<div class="save-editing-fix-bar">	
												<span>1 item to review</span>     
												<button class="light-grey-btn">Close</button>
												<button class="blue-btn">Review Draft Items</button>
										</div>
								    </div>
								    <div id="history-tab" class="tab-pane fade">
								    	<h1 class="drw-main-heading">Activity History for <span class="dummy_text">Campaign:</span> <span class="camapaign_name">demo</span> <span class="mixed_value" style="display: none;"></h1>	
								     	<div class="righ-drw-first-third-tab-cal">
								    			<button class="light-grey-btn">This month: Sep 1, 2017 - Sep 21, 2017</button>
								    	</div>
								    	<div class="history-table">
								    		<div class="history-filtering">
								    			<div class="custom-autocomplete-select">
	                                        		<select class="selectpicker show-tick" data-live-search="true" data-size="3">
													  <option data-tokens="ketchup mustard">Columns</option>
													  <option data-tokens="mustard">Lorem</option>
													  <option data-tokens="frosting">Dummy text printing</option>
													</select>	
													<select class="selectpicker show-tick" data-live-search="true" data-size="3">
													  <option data-tokens="ketchup mustard">Columns</option>
													  <option data-tokens="mustard">Lorem</option>
													  <option data-tokens="frosting">Dummy text printing</option>
													</select>													
	                                        	</div>
	                                        </div>	
							    			<table class="table table-bordered table-inverse table-striped table-hover">
												  <thead class="thead-default">
												    <tr>													       
												      <th>Activity</th>
												      <th>Activity Details</th>
												      <th>Item Changed</th>
												      <th>Name</th>
												      <th>Date and Time</th>													     
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Ad set targeting updated...</td>
												      <td>&#8377; 800.00 Per day</td>
												      <td class="editable-row">new</td>
												      <td>John Clarke</td>
												      <td>09/15/2017 at 4:29pm</td>													       
												    </tr>
												    <tr>
												      <td>Ad set targeting updated...</td>
												      <td>&#8377; 800.00 Per day</td>
												      <td class="editable-row">new</td>
												      <td>John Clarke</td>
												      <td>09/15/2017 at 4:29pm</td>	
												    </tr>
												    <tr>
												      <td>Ad set targeting updated...</td>
												      <td>&#8377; 800.00 Per day</td>
												      <td class="editable-row">new</td>
												      <td>John Clarke</td>
												      <td>09/15/2017 at 4:29pm</td>	
												    </tr>										
												  </tbody>
											</table>
											<div class="no-more-his-result">
													No more activities to show
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
</div>
<!-- adjust budget popup -->
<div id="adjust_button" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Editing Budget for 1 Ad Set</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<label class="pull-right">For each ad set:</label>
					</div>
					<div class="col-md-4">
						<div class="custom-autocomplete-select">
							<select class="selectpicker show-tick" data-size="5">
								<option data-tokens="ketchup mustard">Increase daily budget by</option>
								<option data-tokens="mustard">Increase daily budget by</option>
								<option data-tokens="frosting">Decrease daily budget by</option>
								<option data-tokens="ketchup mustard">Set daily budget to</option>
							</select>													
						</div>
					</div>
					<div class="col-md-4 inline-text">
						<input type="text" class="form-control custom-input">
						<div class="custom-autocomplete-select">
							<select class="selectpicker show-tick" data-size="5">
								<option data-tokens="ketchup mustard">%</option>
								<option data-tokens="mustard">$</option>
							</select>													
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 10px;">
					<div class="col-md-9 col-md-offset-2 inline-text">
						<input type="checkbox" class="">
						<label>Daily budget cap (optional):</label>
						<input type="text" class="form-control custom-input">
					</div>
				</div>
				
				<div class="row"><div class="col-md-9 col-md-offset-2">Combined total of all budgets:800.00</div></div>

				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<table class="table table-bordered table-striped"> 
							<thead>
								<tr>
									<th>Ad Set</th>
									<th>Old Budget</th>
									<th>New Budget</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Product 1</td>
									<td>800.00</td>
									<td>800.00</td>
								</tr>
								<tr>
									<td><b>1 Ad Sets</b><br><span>increase budget by 0%</span></td>
									<td><b>800.00</b><br><span>Previous Total Budget </span></td>
									<td><b>800.00</b><br><span>New Total Budget </span></td>
								</tr>
							</tbody>						
						</table>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
			</div>
		</div>

	</div>
</div>
<!-- adjust budget popup -->

<!--camp Mixed Value -->
<div id="cam_mixed_value" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>Selected items have mixed statuses</p>
      </div>
      <div class="modal-footer">
      	<div class="col-md-6">
      		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      	</div>
      	<div class="col-md-6">
      		<button type="button" class="btn btn-primary">Pause all</button>
      		<button type="button" class="btn btn-primary">Run all</button>
      	</div>
      </div>
    </div>

  </div>
</div>
<!--camp Mixed Value -->

<div id="add-insta-acct-btn" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Connect an Instagram Account for Advertising</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
					<label><input name="optradio" type="radio">Add an existing account <span>Connect an existing Instagram account to this Page.</span></label> 
				</div>
				<div class="radio">
					<label><input name="optradio" type="radio">Create a new account<span>Create a new Instagram account and connect it to this Page.</span></label> 
				</div>
				<hr class="edit-forms-divider">&nbsp;
				<p>Enter the email address and username you want to use for your new Instagram account. We'll send you an email with instructions on setting your password.</p>
				<form>
					<input type="text" name="" class="form-control" placeholder="Username">
					<input type="text" name="" class="form-control" placeholder="Email">
					<input type="text" name="" class="form-control" placeholder="Re-enter email">
					<input type="text" name="" class="form-control" placeholder="Phone number">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
				<button type="button" class="blue-btn" data-dismiss="modal">Save to Confirm</button>
			</div>
		</div>

	</div>
</div>


<!-- USer Modal -->
<div id="useTemplate" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Create a Fullscreen Experience</h4>
			</div>
			<div class="modal-body">
				<div class="use-temp-let-sec"> 
					fbdfbd
				</div>
				<div class="use-temp-right-sec">
					fdfgdg
				</div>	



			</div>
			<div class="modal-footer">
				<button type="button" class="blue-btn" data-dismiss="modal">Done</button>
			</div>
		</div>

	</div>
</div>
</body>
</html>

<?php else : header('location:index.php'); endif ?>