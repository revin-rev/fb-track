<?php 
include 'header.php';
if(isset($_SESSION['user'])) :

	/*create campaigns and adsets and ads*/
	if(isset($_REQUEST['camp_save_draft'])) {
		/*create a campaigns*/
		if($_REQUEST['choose_campaigns'] == 'new') {
			$ch = curl_init();
			$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns";
			$fields = array(
				'name' => $_REQUEST['campaign_name'],
				'objective' =>  'LINK_CLICKS',
				'access_token' => $_REQUEST['code']
			);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			$result = curl_exec($ch);
			curl_close($ch);
			$camp = json_decode($result, true);
			?>
			<script type="text/javascript">
				jQuery(document).ready(function(){
					setTimeout(function() {
						var camp_id = '<?php echo $camp['id']?>';
						jQuery("#camapaign_table tr#"+camp_id+' .campaigns_checkbox').prop('checked',true);
						jQuery("#camapaign_table tr#"+camp_id+' .edit-charts').click();
					},500);
				});
			</script>
			<?php 
		}

		if($_REQUEST['choose_campaigns'] == 'existing') {
			$camp['id'] = $_REQUEST['exit_camapaign_id'];
		}
		/*create a campaigns*/
		/*create a adset inside created campaign*/
		if($camp) {
			if($_REQUEST['adset_name'] != '') { 
				$adset_name = $_REQUEST['adset_name'];
			} else {
				$adset_name = 'Untitled AdSet';
			}
			$ch = curl_init();
			$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/adsets";
			$fields = array(
				'name' 				=> 	$adset_name,
				'billing_event' 	=>  'IMPRESSIONS',
				'access_token' 		=> 	$_REQUEST['code'],
				'campaign_id'  		=> 	$camp['id'],
				'targeting'    		=> 	'{"geo_locations":{"countries":["US"]}}',
				'bid_amount'		=> 	2,
				'daily_budget'		=> 	1000
			);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			$result = curl_exec($ch);
			curl_close($ch);
			$adsets = json_decode($result, true);
			if($_REQUEST['choose_campaigns'] == 'existing') : ?>
			<script type="text/javascript">
				jQuery(document).ready(function(){
					setTimeout(function() {
						jQuery('a[href="#ad-sets"]').click();
						var adset_id = '<?php echo $adsets['id']?>';
						jQuery("#adset_table tr#"+adset_id+' .adsets_checkbox').prop('checked',true);
						jQuery("#adset_table tr#"+adset_id+' .edit-charts').click();
					},500);
				});
			</script>
			<?php endif;
			/*create a adset inside created campaign*/
		}
	}
	/*create campaigns and adsets and ads*/

	/*delete campaigns*/
	if(isset($_REQUEST['delete_campaigns'])) {
		$campaigns_ids = json_decode($_REQUEST['campaign_id'], true);
		foreach ($campaigns_ids as $val ) {
			$url = 'https://graph.facebook.com/v2.10/'.$val.'/?access_token='.$_REQUEST['code'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			//$data = json_decode($result, true);
		}
	}
	/*delete campaigns*/

	/*delete adsets*/
	if(isset($_REQUEST['delete_adsets'])) {
		$adsets_id = json_decode($_REQUEST['delete_adset_id'], true);
		foreach ($adsets_id as $val ) {
			$url = 'https://graph.facebook.com/v2.10/'.$val.'/?access_token='.$_REQUEST['code'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			//$data = json_decode($result, true);
		}
	}

	/*delete adsets*/

	/*get all accounts of selected user*/
	$cSession = curl_init(); 
	curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/me/adaccounts?fields=account_status,name,account_id,business&access_token=".$_REQUEST['code']);
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	$result=curl_exec($cSession);
	curl_close($cSession);
	$accounts = json_decode($result, true);
	
	/*get all accounts of selected user*/
	/*get camapagins, adsets and ads*/
	$cSession = curl_init(); 
	curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns?access_token=".$_REQUEST['code']."&fields=name,buying_type,objective,id,objective_for_results,objective_for_cost,status,delivery_info,start_time,stop_time,insights{reach,impressions,frequency,unique_clicks,spend},adsets{id,name,status,delivery_info,lifetime_budget,daily_budget,start_time,end_time,objective_for_results,objective_for_cost,targeting_age_min,targeting_age_max,targeting_genders,targeting_countries,activities{actor_name,event_time,application_name,translated_event_type,extra_data},insights{reach,frequency,impressions,unique_clicks,spend}},account_id,ads{name,id,delivery_info,objective_for_results,objective_for_cost,status,insights{frequency,impressions,spend,unique_clicks,total_unique_actions,relevance_score,reach}}");
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	$result=curl_exec($cSession);
	curl_close($cSession);
	$camapaigns = json_decode($result, true);
	/*get camapagins, adsets and ads*/
?>
<script type="text/javascript">
	var _camapaigns = <?php echo json_encode($camapaigns['data']); ?>;
</script>
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
 <!-- add image and video in popup radio option script -->
 <script type="text/javascript">
 $(document).ready(function() {
	 $('.thumbCheck').click(function () {
        if ($('input:not(:checked)')) {
            $('div').removeClass('selected-img-thumb');
        }
        if ($('input').is(':checked')) {
            $(this).parent().addClass('selected-img-thumb');           
        }
    });
});
 </script>

 <!-- video poups list and grid view script -->
 <script type="text/javascript">
 $(document).ready(function() {
	 $('.video-list-view-link').click(function () {
         $('.video-list-video').show();
         $('.video-grid-view').hide();
    });
	 $('.video-grid-view-link').click(function () {
         $('.video-list-video').hide();
         $('.video-grid-view').show();
    });
});
 </script>

 <!-- auto complete search script -->
 <script type="text/javascript">
 $(document).ready(function() {
	 $('.custom-auto-complete').click(function () {
         $('.custom-auto-complete-data').toggle();
         
    });
});
 </script>

<div class="web-outr">
	<!--header-part-->
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
							<li>
								<h5><i class="fa fa-star" aria-hidden="true"></i> Frequently Used</h5>
							</li>
							<li><a href="ads-manager.html">Ads Manager</a>
							</li>
							<li><a href="index.html" class="active">Power Editor</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="header-right-ec pull-right">
					<div class="header-search">
						<div class="input-group stylish-input-group">
							<input type="text" class="form-control" placeholder="Search">
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
									<img src="img/ava-icon.png">
									<?php echo $_SESSION[ 'user'][ 'email']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<span class="top-arrow"></span>
									<ul>
										<li>
											<a class="dropdown-item" href="#">Go to Personal News Feed</a><a class="dropdown-item pull-right" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
										</li>
										<li>
											<div class="different-acc">
												<img src="img/acc-img.png">
												<p><b>Lorem ipsum dummy text</b>
													<?php echo $_SESSION[ 'user'][ 'email']; ?>
												</p>
											</div>
										</li>
										<li>
											<div class="different-acc active">
												<img src="img/acc-img.png">
												<p><b>Lorem ipsum dummy text</b>
													<?php echo $_SESSION[ 'user'][ 'email']; ?>
												</p>
											</div>
										</li>
										<li>
											<div class="different-acc">
												<img src="img/acc-img.png">
												<p><b>Lorem ipsum dummy text</b>
													<?php echo $_SESSION[ 'user'][ 'email']; ?>
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
					<ul class="header-right-icons">
						<li><a href="#" class="notification"><i class="fa fa-globe" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" class="header-pages"><i class="fa fa-flag" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--end header-part-->
	<div class="body-overlay"></div>
	<!-- main section -->
	<div class="working-area-outr">
		<!-- user accounts -->
		<div class="sub-header-outr">
			<div class="sub-header-inr">
				<div class="container-fluid">
					<div class="sub-header-left-acnt-sec">
						<a href="#"><span class="current_account"><?php echo $accounts['data'][0]['name']." (".str_replace('act_', '', $_REQUEST['act']).")";?></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
						<div class="personal-acc-by-id-outr">
							<div class="personal-acc-by-id">
								<span class="top-arrow"></span>
								<ul>
									<li style="padding: 15px;">
										<input type="text" name="" class="form-control" placeholder="Search">
									</li>
								</ul>
								<ul class="listing" style="<?php if(count($accounts['data']) > 5) : echo 'height: 500px;'; endif; ?>">
									<li>
										<h5><img src="img/prsnl-acnt-icon.png"> your personal accounts</h5>
										<?php foreach ($accounts['data'] as $key => $account): ?>
											<?php if($account['id'] == $_REQUEST['act']): $acc_class='active' ; else : $acc_class=''; endif; ?>
											<div class="account-category <?php echo $acc_class;?>">
												<img src="img/acnt-by-id-icon.png">
												<p>
													<span class="account_name"><b><?php echo $account['name'];?></b></span> Account #: <span class="account_id"><?php echo $account['account_id'];?></span>
												</p>
											</div>
										<?php endforeach; ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="sub-header-right-btns-sec">
						<ul>
							<li>
								<button class="light-grey-btn">Discard Changes</button>
							</li>
							<li>
								<button class="blue-btn"><i class="fa fa-arrow-up" aria-hidden="true"></i> Review Draft Items (3)</button>
							</li>
							<li>
								<button class="light-grey-btn"><i class="fa fa-gear" aria-hidden="true"></i>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--end user accounts -->
		<!-- filters, search and date -->
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
								<li><a href="#">Action</a>
								</li>
								<li><a href="#">Another action</a>
								</li>
								<li><a href="#">Something else here</a>
								</li>
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
								<li><a href="#">Action</a>
								</li>
								<li><a href="#">Another action</a>
								</li>
								<li><a href="#">Something else here</a>
								</li>
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
		<!-- end filters, search and date -->
		<!-- main working area -->
		<div class="working-area">
			<!--section content -->
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
		                 	<!-- Account Overview -->
		                 	<div role="tabpanel" class="tab-pane acc-data-tabs" id="acc-rev">
								<?php include 'AccountOverview.php';?>
		                 	</div>
		                 	<!-- end Account Overview -->
		                 	<!-- Campaigns Content -->
		                 	<div role="tabpanel" class="tab-pane active" id="camp">
		                 		<?php include 'CampaignsContent.php';?>
		                 	</div>
		                 	<!-- end Campaigns Content -->
		                 	<!-- Adsets Content -->
		                 	<div role="tabpanel" class="tab-pane" id="ad-sets">
		                 		<?php include 'AdsetsContent.php';?>
		                 	</div>
		                 	<!--end Adsets Content -->
		                 	<!-- Ads Content -->
		                 	<div role="tabpanel" class="tab-pane" id="ads">
		                 		<?php include 'AdsContent.php';?>
		                 	</div>
		                 	<!--end Ads Content -->
		                </div>
		                 <!-- Tab panes content goes here-->
						<!-- end Nav tabs -->
						<!-- sidepanel secton -->
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
											<!-- view tab -->
											<div id="view-tab" class="tab-pane fade in active">
												<?php include 'ViewTab.php';?>
											</div>
											<!-- end view tab -->
											<!-- edit tab -->
											<div id="edit-tab" class="tab-pane fade">
												<?php include 'EditTab.php';?>
											</div>
											<!-- end edit tab -->
											<!-- history tab -->
											<div id="history-tab" class="tab-pane fade">
												<?php include 'HistoryTab.php';?>
											</div>
											<!-- history tab -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end sidepanel secton -->
					</div>
				</div>
			</div>
			<!--section content -->
		</div>
		<!-- end main working area -->
	</div>
	<!--end main section -->
	<!-- all pop ups -->
	<?php include 'AllPops.php';?>
	<!-- all pop ups -->
</div>
<?php else : header('location:index.php'); endif ?>