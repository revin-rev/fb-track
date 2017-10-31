<div class="thress-tabs-table-top-filters">
    <div class="left-fil1">
        <div class="btn-and-caret-icon-dropdown">
            <a href="#" class="create-camp-btn create-camp-popup" data-toggle="modal" data-target="#create-camp-btn">+ Create Campaign</a>
           
            <div class="dropdown caret-icon-dropdown-with-btn">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left:0">
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item create-existing-campaign create-adset-popup" href="#" data-toggle="modal" data-target="#create-camp-btn">Create Adset</a>
                    <a class="dropdown-item create-existing-campaign create-ad-popup" href="#" data-toggle="modal" data-target="#create-camp-btn">Create Ad</a>
                </div>
            </div>
        </div>
        <div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
            <a class="create-camp-btn duplicate-campaign" href="#duplicate-campaign" data-toggle="modal"><i class="fa fa-copy"></i> Duplicate</a>
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
            <a href="#" class="create-camp-btn edit-campaigns"><i class="fa fa-pencil"></i> Edit</a>
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
                <!-- <li><i class="fa fa-refresh disable-me"></i></li> -->
                <li data-toggle="modal" data-target="#delete_campaigns_popup" id="delete_camp"><i class="fa fa-trash disable-me" data-toggle="tooltip" title="Delete"></i></li>
                <li class="dropdown export-menu">
                    <i class="fa fa-edit dropdown-toggle" type="button" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu export_campaigns">
                      <li data-toggle="modal" data-target="#loader_div"><a href="#">Export Selected</a></li>
                      <li data-toggle="modal" data-target="#loader_div"><a href="#" >Export Selected as Plain Text</a></li>
                      <li data-toggle="modal" data-target="#loader_div"><a href="#">Export All</a></li>
                  </ul>
                </li>
                <li><i class="fa fa-tag disable-me" data-toggle="tooltip" title="Delete"></i></li>
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
                                                    <input type="text" name=""> -
                                                    <input type="text" name="">
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
                                                <p> <b>Continuously -</b> This rule will run as often as possible (usually every 30 minutes).</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-md-3 label-for-p">
                                                Notification <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </label>
                                            <div class="col-md-9">
                                                <p> <b>	On Facebook -</b> You'll get a notification when conditions for this rule are met.</p>
                                                <p>
                                                    <input type="checkbox"><b>Email -</b>Include results from this rule to an email sent once per day when any of your rules have conditions that are met or new rules are created.</p>
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
                <form class="form-inline" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Duplicate Campaign</h4>
				</div>
				<div class="modal-body">
						<div class="form-group">
							<label for="email">Number of duplicates</label>
							<div class="input-group spinner">
								<input type="hidden" class="form-control" name="duplicate_campaign_id" id="duplicate_campaign_id">
                                <input type="text" class="form-control" value="1" name="duplicate_campaign_count" min="1">
								<div class="input-group-btn-vertical">
									<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
									<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
								</div>
							</div>
						</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
					<button type="submit" class="blue-btn" name="duplicates_campaigns">Save to Draft</button>
				</div>
            </form>
			</div>
		</div>
	</div>
	<table class="table table-bordered table-inverse table-striped table-hover" id="camapaign_table">
	    <thead class="thead-default">
	        <tr>
	        	<th>
	        		<input type="checkbox" name="" class="all_camapaign_checkbox">
	        	</th>
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
	        </tr>
	    </thead>
	    <tbody id="camapaign_listing">
	        <?php if(count($camapaigns['data'])> 0): foreach ($camapaigns['data'] as $camapaign): 
                if(isset($camapaign['insights'])){ $total_amount+= $camapaign['insights']['data'][0]['spend']; }
                if(isset($camapaign['insights'])){ $total_freqency+= $camapaign['insights']['data'][0]['frequency'];}
                if(isset($camapaign['insights'])){ $total_impression+= $camapaign['insights']['data'][0]['impressions'];}
                if(isset($camapaign['insights'])){ $total_unq_click+= $camapaign['insights']['data'][0]['unique_clicks'];}
            ?>
	        <tr class="camp_rows" id="<?php echo $camapaign['id'];?>">
	            <td>
	                <input type="checkbox" name="" class="campaigns_checkbox">
	            </td>
	            <td>
	                <input type="checkbox" <?php if($camapaign['status']=='ACTIVE' ) { echo 'checked'; } ?> class="campaigns_status" data-toggle="toggle" data-size="mini">
	            </td>
	            <td class="editable-row">
	                <a href="#">
                        <div class="show-camp-row">
	                    <?php echo $camapaign['name']; ?> <span class="edit-row-title"><i class="fa fa-pencil edit-camp-btn" aria-hidden="true"></i></span>
                        </div>
                        <div class="hide-camp-row">
                            <input class="form-control editable-input" value="<?php echo $camapaign['name']; ?>">
                        </div>
	                </a>
	                <div class="row-editing-icons">
	                    <a href="#" class="view-charts" data-id="#view-tab"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Chart</a>
	                    <a href="#" class="edit-charts" data-id="#edit-tab"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
	                    <a href="#duplicate-campaign" data-toggle="modal" class="duplicate-campaign"><i class="fa fa-copy" aria-hidden="true"></i> Duplicate</a>
	                </div>
	            </td>
	            <td>
	                <?php echo $camapaign['delivery_info'][ 'status'];?>
	            </td>
	            <td>
	                <?php echo $camapaign['objective_for_results'];?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['insights'])){echo $camapaign['insights']['data'][0]['reach'];}else{ echo '-';}?>
	            </td>
	            <td>
	                <?php echo $camapaign['objective_for_cost'];?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['insights'])){echo '$'.$camapaign['insights']['data'][0]['spend'];}else{ echo '-';}?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['stop_time'])){echo $start_date=date_format(date_create($camapaign['stop_time']), ' j F, Y');}else{ echo 'Ongoing';}?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['insights'])){echo $camapaign['insights']['data'][0]['frequency'];}else{ echo '-';}?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['insights'])){echo $camapaign['insights']['data'][0]['impressions'];}else{ echo '-';}?>
	            </td>
	            <td>
	                <?php if(isset($camapaign['insights'])){echo $camapaign['insights']['data'][0]['unique_clicks'];}else{ echo '-';}?>
	            </td>
	        </tr>
	        <?php endforeach; ?>
	        <tr>
	            <td colspan="2"></td>
	            <td>Result form
	                <?php echo count($camapaigns[ 'data']); ?> campaigns</td>
	            <td></td>
	            <td>—Link Click</td>
	            <td>—People</td>
	            <td>—Per Link Click</td>
	            <td><?php if($total_amount) { echo '$'.$total_amount; } else { echo '—Total'; } ?></td>
	            <td></td>
	            <td><?php if($total_freqency) { echo $total_freqency; } else { echo '—Per Person'; } ?></td>
	            <td><?php if($total_impression) { echo $total_impression; } else { echo '—Total'; } ?></td>
	            <td><?php if($total_unq_click) { echo $total_unq_click; } else { echo '—Total'; } ?></td>

	        </tr>
	        <?php else :?>
	        <tr>
	            <td colspan="12" align="center">No Result Found</td>
	        </tr>
	        <?php endif ?>
	    </tbody>
	</table>
</div>

<!--delete camapigns -->
<div id="delete_campaigns_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Delete Campaign</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="campaign_id" id="delete_camp_id">
                <p>Are you sure you want to delete this campaign? This cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="delete_campaigns">Delete</button>
            </div>
        </form>
    </div>

  </div>
</div>
<!--delete camapigns -->
