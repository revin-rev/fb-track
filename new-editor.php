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
				'name' 			=> 	$_REQUEST['campaign_name'],
				'objective' 	=>  $_REQUEST['objective'],
				'access_token' 	=> 	$_REQUEST['code']
			);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			$result = curl_exec($ch);
			curl_close($ch);
			$camp = json_decode($result, true);
			echo "<pre>";
			print_r($camp);
			echo "</pre>";
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

			if($_REQUEST['choose_adsets'] == 'new') {

				$ch = curl_init();
				$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/adsets";
				$fields = array(
					'name' 				=> 	$adset_name,
					'billing_event' 	=>  'IMPRESSIONS',
					'access_token' 		=> 	$_REQUEST['code'],
					'campaign_id'  		=> 	$camp['id'],
					'targeting'    		=> 	'{"geo_locations":{"countries":["US"]}}',
					'bid_amount'		=> 	2,
					'daily_budget'		=> 	1000,
					'optimization_goal' => 	'IMPRESSIONS'
				);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
				$result = curl_exec($ch);
				curl_close($ch);
				$adsets = json_decode($result, true);
				echo "<pre>";
				print_r($adsets);
				echo "</pre>";
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
				<?php 
				endif;
			}
			if($_REQUEST['choose_adsets'] == 'existing') {
				$cSession = curl_init(); 
				curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$_REQUEST['exit_adset_id']."/?access_token=".$_REQUEST['code']."&fields=id,name,campaign_id,status,delivery_info,billing_event,targeting,bid_amount,optimization_goal,lifetime_budget,daily_budget,start_time,end_time,objective_for_results,objective_for_cost,targeting_age_min,targeting_age_max,targeting_genders,targeting_countries,activities{actor_name,event_time,application_name,translated_event_type,extra_data},insights{reach,frequency,impressions,unique_clicks,spend}");
				curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
				curl_setopt($cSession,CURLOPT_HEADER, false); 
				$result=curl_exec($cSession);
				curl_close($cSession);
				$adsets_data = json_decode($result, true);
				if($adsets_data['optimization_goal'] == '') {
					$optimization_goal = 'NONE';
				} else {
					$optimization_goal = $adsets_data['optimization_goal'];
				}
				$ch = curl_init();
				$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/adsets";
				$fields = array(
					'access_token' 				=> 	$_REQUEST['code'],
					'campaign_id'  				=> 	$camp['id'],
					'name' 						=> 	$adsets_data['name'],
					'billing_event' 			=>  $adsets_data['billing_event'],
					'targeting'    				=> 	json_encode($adsets_data['targeting']),
					'bid_amount'				=> 	$adsets_data['bid_amount'],
					'daily_budget'				=> 	$adsets_data['daily_budget'],
					'status'					=>  $adsets_data['status'],
					'delivery_info'				=>  json_encode($adsets_datas['delivery_info']),
					'lifetime_budget'			=>  $adsets_data['lifetime_budget'],
					'start_time'				=>  $adsets_data['start_time'],
					'objective_for_results'		=>  $adsets_data['objective_for_results'],
					'objective_for_cost'		=>  $adsets_data['objective_for_cost'],
					'activities'				=>  json_encode($adsets_data['activities']),
					'optimization_goal'			=>  $optimization_goal
				);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
				$result = curl_exec($ch);
				curl_close($ch);
				$new_adsets = json_decode($result, true);
			}
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


	/*duplicates_campaigns*/
	if(isset($_REQUEST['duplicates_campaigns'])) {
		$camps_id = json_decode($_REQUEST['duplicate_campaign_id'], true);
		$total_copies = $_REQUEST['duplicate_campaign_count'];
		foreach($camps_id as $id) {
			$cSession = curl_init(); 
			curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$id."/?access_token=".$_REQUEST['code']."&fields=name,buying_type,objective,id,objective_for_results,objective_for_cost,status,delivery_info,start_time,stop_time,insights{reach,impressions,frequency,unique_clicks,spend},adsets{id,name,status,delivery_info,billing_event,targeting,bid_amount,lifetime_budget,daily_budget,start_time,end_time,objective_for_results,objective_for_cost,targeting_age_min,targeting_age_max,targeting_genders,targeting_countries,activities{actor_name,event_time,application_name,translated_event_type,extra_data},insights{reach,frequency,impressions,unique_clicks,spend}},account_id,ads{name,id,delivery_info,objective_for_results,objective_for_cost,status,insights{frequency,impressions,spend,unique_clicks,total_unique_actions,relevance_score,reach}}");
			curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($cSession,CURLOPT_HEADER, false); 
			$result=curl_exec($cSession);
			curl_close($cSession);
			$camapaigns = json_decode($result, true);

			/*make copy of existing campaings */
			for($i=0; $i<$total_copies; $i++) {
				$ch = curl_init();
				$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns";
				$fields = array(
					'access_token' 				=> 	$_REQUEST['code'],
					'name' 						=>	$camapaigns['name'].' - Copy',
					'objective' 				=>  $camapaigns['objective'],
					'buying_type' 				=> 	$camapaigns['buying_type'],
					'objective_for_results'		=> 	$camapaigns['objective_for_results'],
					'objective_for_cost'		=> 	$camapaigns['objective_for_cost'],
					'status'					=>  $camapaigns['status'],
					'start_time'				=>  $camapaigns['start_time'],
					'account_id'				=>  $camapaigns['account_id'],
					'delivery_info'				=>  json_encode($camapaigns['delivery_info'])
				);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
				$result = curl_exec($ch);
				curl_close($ch);
				$newCamp = json_decode($result, true); ?>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						setTimeout(function() {
							var camp_id = '<?php echo $newCamp['id']?>';
							jQuery("#camapaign_table tr#"+camp_id+' .campaigns_checkbox').prop('checked',true);
							jQuery("#camapaign_table tr#"+camp_id+' .edit-charts').click();
						},500);
					});
				</script>
				<?php 

				/*make copy of adset inside campaigns*/
				if($newCamp) {
					foreach ($camapaigns['adsets']['data'] as $adset) :
					$ch = curl_init();
					$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/adsets";
					$fields = array(
						'access_token' 				=> 	$_REQUEST['code'],
						'campaign_id'  				=> 	$newCamp['id'],
						'name' 						=> 	$adset['name'],
						'billing_event' 			=>  $adset['billing_event'],
						'targeting'    				=> 	json_encode($adset['targeting']),
						'bid_amount'				=> 	$adset['bid_amount'],
						'daily_budget'				=> 	$adset['daily_budget'],
						'status'					=>  $adset['status'],
						'delivery_info'				=>  json_encode($adsets['delivery_info']),
						'lifetime_budget'			=>  $adset['lifetime_budget'],
						'start_time'				=>  $adset['start_time'],
						'objective_for_results'		=>  $adset['objective_for_results'],
						'objective_for_cost'		=>  $adset['objective_for_cost'],
						'activities'				=>  json_encode($adset['activities'])
					);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
					$result = curl_exec($ch);
					curl_close($ch);
					$adsets = json_decode($result, true);
					endforeach;
				}
				/*make copy of adset inside campaigns*/
			}
			/*make copy of existing campaings */
		}		
	}
	/*duplicates_campaigns*/

	/* duplicates adsets*/
	if(isset($_REQUEST['duplicates_adsets_saved'])) {
		
		$adsets_id = json_decode($_REQUEST['duplicate_adsets_id'], true);
		foreach ($adsets_id as $adset) {
			$camp_style = $_REQUEST['campaign_for_adset'];
			/*create new campaing first if New campaign set*/
			if($camp_style == 'New campaign') {
				$ch = curl_init();
				$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns";
				$fields = array(
					'name' 			=> 	$_REQUEST['campaign_name'],
					'objective' 	=>  $_REQUEST['objective'],
					'access_token' 	=> 	$_REQUEST['code']
				);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
				$result = curl_exec($ch);
				curl_close($ch);
				$newCampData = json_decode($result, true);
				$new_camp_id = $newCampData['id'];
				
			}
			/*create new campaing first*/

			/*get seleceted adsets data*/
			$cSession = curl_init(); 
			curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$adset."/?access_token=".$_REQUEST['code']."&fields=id,name,campaign_id,status,delivery_info,billing_event,targeting,bid_amount,optimization_goal,lifetime_budget,daily_budget,start_time,end_time,objective_for_results,objective_for_cost,targeting_age_min,targeting_age_max,targeting_genders,targeting_countries,activities{actor_name,event_time,application_name,translated_event_type,extra_data},insights{reach,frequency,impressions,unique_clicks,spend}");
			curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($cSession,CURLOPT_HEADER, false); 
			$result=curl_exec($cSession);
			curl_close($cSession);
			$adsets_data = json_decode($result, true);
			if($adsets_data['optimization_goal'] == '') {
				$optimization_goal = 'NONE';
			} else {
				$optimization_goal = $adsets_data['optimization_goal'];
			}
			/*get seleceted adsets data*/

			if($camp_style == 'Original campaign') {
				$new_camp_id = $adsets_data['campaign_id'];
			} 
			if($camp_style == 'Existing campaign') {
				$new_camp_id = $_REQUEST['already_campaign_id'];	
			}
			/*made duplicatte copy of adsets in camapaigns*/
			$total_copies = $_REQUEST['duplicate_adsets_count'];
			for ($i=0; $i<$total_copies; $i++) {
				$ch = curl_init();
				$url = "https://graph.facebook.com/v2.10/".$_REQUEST['act']."/adsets";
				$fields = array(
					'access_token' 				=> 	$_REQUEST['code'],
					'campaign_id'  				=> 	$new_camp_id,
					'name' 						=> 	$adsets_data['name'],
					'billing_event' 			=>  $adsets_data['billing_event'],
					'targeting'    				=> 	json_encode($adsets_data['targeting']),
					'bid_amount'				=> 	$adsets_data['bid_amount'],
					'daily_budget'				=> 	$adsets_data['daily_budget'],
					'status'					=>  $adsets_data['status'],
					'delivery_info'				=>  json_encode($adsets_datas['delivery_info']),
					'lifetime_budget'			=>  $adsets_data['lifetime_budget'],
					'start_time'				=>  $adsets_data['start_time'],
					'objective_for_results'		=>  $adsets_data['objective_for_results'],
					'objective_for_cost'		=>  $adsets_data['objective_for_cost'],
					'activities'				=>  json_encode($adsets_data['activities']),
					'optimization_goal'			=>  $optimization_goal
				);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
				$result = curl_exec($ch);
				curl_close($ch);
				$new_adsets = json_decode($result, true);
			}
			/*made duplicatte copy of adsets in camapaigns*/

		}
	}
	/* duplicates adsets*/

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
	curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/v2.10/".$_REQUEST['act']."/campaigns?access_token=".$_REQUEST['code']."&fields=name,account_id,buying_type,objective,id,objective_for_results,objective_for_cost,status,delivery_info,start_time,stop_time,insights{reach,impressions,frequency,unique_clicks,spend},adsets{id,name,status,delivery_info,billing_event,attribution_spec,targeting,bid_amount,lifetime_budget,daily_budget,start_time,end_time,objective_for_results,objective_for_cost,targeting_age_min,targeting_age_max,optimization_goal,targeting_genders,lifetime_imps,targeting_countries,activities{actor_name,event_time,application_name,translated_event_type,extra_data},insights{reach,frequency,impressions,unique_clicks,spend}},ads{name,id,delivery_info,preview_link,creative_title,creative_body,creative_link_url,objective_for_results,objective_for_cost,status,insights{frequency,impressions,spend,unique_clicks,total_unique_actions,relevance_score,reach}}");
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	$result=curl_exec($cSession);
	curl_close($cSession);
	$camapaigns = json_decode($result, true);
	/*echo "<pre>";
	print_r($camapaigns);
	echo "</pre>";*/
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
         $(this).find('.custom-auto-complete-data').toggle();
         
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
	<!-- loader popup-->
	<div id="loader_div" class="modal fade loaderPopup" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-body">
					<p>Please Wait</p>
					<img src="img/Rolling.gif">
				</div>
			</div>

		</div>
	</div>
	<!-- loader popup-->
	
	<!--end main section -->
	<!-- all pop ups -->
	<?php include 'AllPops.php';?>

	<!-- all pop ups -->
</div>
<?php else : header('location:index.php'); endif ?>