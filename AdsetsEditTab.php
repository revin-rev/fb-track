<div class="edit-camp-form" style="display: none;" id="adsets-full-details">
	<div class="adsets-details-list" id="" >
		<div class="col-md-7 col-ms-8">
			<div class="edit-camp-left-blocks">
				<div class="form-white-block" style="padding: 15px;">
					<label>Ad Set Name</label>
					<input type="text" name="" class="form-control" id="adset_name">
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
									<input type="text" name="" value="<?php echo $adset['daily_budget']; ?>" style=" margin-right: 10px;width:100px;" id="addsets_daily_bugdet">
									<button class="light-grey-btn" data-toggle="modal" data-target="#adjust_button">Adjust Budget</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5"><label>Schedule Start</label></div>
								<div class="col-md-6">
									<p class="addsets_start_time"><?php echo date_format(date_create($adset['start_time']), 'l, F d, Y h:i a');?></p>
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
										<textarea class="form-control" id="addsets_location"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5"><label>Age <i class="fa fa-info-circle" aria-hidden="true"></i></label></div>
									<div class="col-md-6">
										<div class="custom-autocomplete-select">
											<select class="selectpicker show-tick " data-size="3" id="addsets_min_age" name="addsets_min_age">
												<?php for($j=13;$j<=65;$j++):?>
													<option  value="<?php echo $j; ?>" class="addsets_min_age"><?php echo $j;?></option>
												<?php endfor;?>
												
											</select>	
											<select class="selectpicker show-tick" data-size="3" name="addsets_max_age">
												<?php for($j=13;$j<=65;$j++):?>
													<option data-tokens="ketchup mustard" value="<?php echo $j;?>"><?php echo $j;?></option>
												<?php endfor;?>
												
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
							<div class="col-md-9 padding10"><h5 class="white-block-legend"><b>Ad Set id:<span id="adset_id"></span></b></h5><input type="checkbox" id="adset_status" value="<?php echo $adset['id'];?>" data-toggle="toggle" data-size="mini"> </div>
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
								<a href="#"><span class="camp_total_camps">1</span> Campaigns</a><br>
								<span>Targeting, placement, budget and schedule</span>
							</p>
							<p>
								<a href="#"><span class="camp_total_ads">1</span> Ad</a><br>
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
								<img src="img/audience.jpg"> <p>Your audience selection is fairly broad</p> 

							</div>
						</div>
						<div class="form-white-block">
							<h5 class="white-block-legend">Estimated Daily Results</h5>
							<div class="white-block-body">
								<div class="col-md-12" style="padding-left: 0"><b>Reach</b> 33,000 - 210,000 (of 110,000,000)<br>
									<img src="img/reach-img.jpg">
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