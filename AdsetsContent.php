<div class="thress-tabs-table-top-filters">
    <div class="left-fil1">
        <div class="btn-and-caret-icon-dropdown">
            <a href="#" class="create-camp-btn create-adset-popup" data-toggle="modal" data-target="#create-camp-btn">+ Create Ad Set</a>

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
                                                <button class="light-grey-btn show-camp-obj-btn"><img src="img/brand-awarns-icon.png">Traffic</button>
                                                <div class="objective">
                                                    <div class="objective-cat">
                                                        <h5>Awareness</h5>
                                                        <ul>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                        </ul>
                                                    </div>
                                                    <div class="objective-cat">
                                                        <h5>Awareness</h5>
                                                        <ul>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
                                                        </ul>
                                                    </div>
                                                    <div class="objective-cat">
                                                        <h5>Awareness</h5>
                                                        <ul>
                                                            <li><img src="img/brand-awarns-icon.png"> Brand</li>
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
                   <a class="dropdown-item create-existing-campaign create-camp-popup" href="#" data-toggle="modal" data-target="#create-camp-btn">Create Campaign</a>
                     <a class="dropdown-item create-existing-campaign create-ad-popup" href="#" data-toggle="modal" data-target="#create-camp-btn">Create Ad</a>
                </div>
            </div>
        </div>
        <div class="btn-and-caret-icon-dropdown disable-me" style="margin-left:10px">
            <a class="create-camp-btn duplicate-adset-click" href="#duplicate-adsets" data-toggle="modal"><i class="fa fa-copy"></i> Duplicate</a>
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
        <div class="simple-default-icons-group" style="margin-left:10px">
            <ul>
                <li data-toggle="modal" data-target="#delete_adsets_popup" id="delete_adsets"><i class="fa fa-trash disable-me"></i></li>
                <li class="dropdown export-menu">
                    <i class="fa fa-edit dropdown-toggle" type="button" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu export_campaigns">
                      <li data-toggle="modal" data-target="#loader_div"><a href="#">Export Selected</a></li>
                      <li data-toggle="modal" data-target="#loader_div"><a href="#" >Export Selected as Plain Text</a></li>
                      <li data-toggle="modal" data-target="#loader_div"><a href="#">Export All</a></li>
                  </ul>
                </li>
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
                <th>
                    <input type="checkbox" class="all_adsets_checkbox">
                </th>
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
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($camapaigns[ 'data'] as $campaign) : 
                $total_adset+= count($campaign['adsets']['data']); 
                if($campaign['adsets']['data']) :
                foreach ($campaign['adsets']['data'] as $adsets) : 
                    if(isset($adsets['insights'])){ $total_amount+= $adsets['insights']['data'][0]['spend']; }
                    if(isset($adsets['insights'])){ $total_freqency+= $adsets['insights']['data'][0]['frequency'];}
                    if(isset($adsets['insights'])){ $total_impression+= $adsets['insights']['data'][0]['impressions'];}
                    if(isset($adsets['insights'])){ $total_unq_click+= $adsets['insights']['data'][0]['unique_clicks'];} ?>
            <tr id="<?php echo $adsets['id'];?>" class="adset_rows camp_<?php echo $campaign['id'];?>">
                <td>
                    <input type="checkbox" name="" class="adsets_checkbox">
                </td>
                <td>
                    <input type="checkbox" <?php if($adsets['status']=='ACTIVE' ) { echo "checked"; }?> class="adsets_status" data-toggle="toggle" data-size="mini"></td>
                <td>
                    <a href="#">
                        <?php echo $adsets[ 'name']; ?> <span class="edit-row-title"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    </a>
                    <div class="row-editing-icons">
                        <a href="#" class="view-charts" data-id="#view-tab"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Chart</a>
                        <a href="#" class="edit-charts" data-id="#edit-tab"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                        <a href="#duplicate-adSet" data-toggle="modal"><i class="fa fa-copy" aria-hidden="true"></i> Duplicate</a>
                    </div>
                </td>
                <td>
                    <?php echo $adsets['delivery_info']['status'];?>
                </td>
                <td>
                    <?php echo $adsets['objective_for_results'];?>
                </td>
                <td>
                    <?php echo $adsets['insights']['data'][0]['reach']; ?> 
                </td>
                <td>
                    <?php echo $adsets['objective_for_cost'];?>
                </td>
                <td>
                    <?php echo $adsets['daily_budget'];?><span>Daily</span>
                </td>
                <td>
                    <?php if($adsets['insights']['data'][0]['spend']){ echo '$'.$adsets['insights']['data'][0]['spend']; } else { echo '$0'; } ?>
                </td>
                <td>
                    <?php if(isset($adsets['end_time'])){echo $start_date=date_format(date_create($adsets['end_time']), ' j F, Y');}else{ echo 'Ongoing';}?>
                </td>
                <td>
                    <?php echo $start_date=date_format(date_create($adsets['start_time']), ' j F, Y');?>-
                    <?php if(isset($adsets['end_time'])){echo $start_date=date_format(date_create($adsets['end_time']), ' j F, Y');}else{ echo 'Ongoing';}?>
                </td>
                <td>
                    <?php if(isset($adsets['insights'])){echo $adsets['insights']['data'][0]['frequency']; }else echo '-';?>
                </td>
                <td>
                    <?php if(isset($adsets['insights'])){echo $adsets['insights']['data'][0]['impressions']; }else echo '-'; ?> </td>
                <td>
                    <?php if(isset($adsets['insights'])){ echo $adsets['insights']['data'][0]['unique_clicks']; }else echo '-';?> </td>
            </tr>
            <?php endforeach; endif; endforeach;  ?>
            <?php if($total_adset> 0 ) : ?>
            <tr>
                <td colspan="2"></td>
                <td>Results from
                    <?php echo $total_adset; ?> ad set</td>
                <td></td>
                <td>-<span>Link Click</span>
                </td>
                <td>-<span>People</span>
                </td>
                <td>-<span>Per Link Click</span>
                </td>
                <td></td>
                <td><?php if($total_amount) { echo '$'.$total_amount; } else { echo '—Total'; } ?></td>
                <td></td>
                <td></td>
                <td><?php if($total_freqency) { echo $total_freqency; } else { echo '—Per Person'; } ?></td>
                <td><?php if($total_impression) { echo $total_impression; } else { echo '—Total'; } ?></td>
                <td><?php if($total_unq_click) { echo $total_unq_click; } else { echo '—Total'; } ?></td>
            </tr>
            <?php else : ?>
            <tr>
                <td colspan="14" align="center"><b>No Result Found</b>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>    
    </table>
</div>

<!--delete camapigns -->
<div id="delete_adsets_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Delete Adset</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="delete_adset_id" id="delete_adset_id">
                <p>Are you sure you want to delete this adset?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="delete_adsets">Delete</button>
            </div>
        </form>
    </div>

  </div>
</div>
<!--delete camapigns -->
<!-- duplicate adsets -->
<div id="duplicate-adsets" class="modal fade duplicate-row-popup" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Duplicate Ad Set Into:</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div id="original_camapaigns" class="marginAll">
                            <input type="radio" name="campaign_for_adset" checked value="Original campaign"> Original campaign
                        </div>
                        <div id="already_all_camapaigns" class="marginAll">
                            <input type="radio" name="campaign_for_adset" value="Existing campaign"> Existing campaign
                            <div id="already_campaign" style="display: none; margin-top: 5px;">
                                <input type="hidden" name="already_campaign_id" id="already_campaign_id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 custom-auto-complete using-existing-camp-input">
                                            <input type="text" id="already_campaign_name" placeholder="select a camapaign" readonly class="form-control">
                                            <i class="fa fa-remove cross-existing-camp-icon"></i>
                                            <div class="custom-auto-complete-data custom-dropdown" style="width: 94%">
                                                <ul>
                                                    <?php foreach ($camapaigns['data'] as $camapaign) :?>
                                                        <li data-id="<?php echo $camapaign['id'];?>" data-name="<?php echo $camapaign['name']; ?>">
                                                            <b><?php echo $camapaign['name']; ?></b>
                                                            <p><?php echo $camapaign['id'];?> 
                                                                <?php if($camapaign['objective']) { ?><i class="fa fa-circle"></i> <?php echo $camapaign['objective']; } ?> 
                                                                <?php if($camapaign['buying_type']) { ?><i class="fa fa-circle"></i> <?php echo $camapaign['buying_type']; } ?>
                                                            </p>
                                                        </li>
                                                    <?php endforeach;?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="new_camapaigns" class="marginAll">
                            <input type="radio" name="campaign_for_adset" value="New campaign"> New campaign
                            <div id="new_camp" style="display: none; margin-top: 5px;"> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="text" name="campaign_name" placeholder="Enter a campaign name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Buying Type
                                        </label>
                                        <div class="col-md-8">
                                            <div class="custom-autocomplete-select">
                                                <select class="selectpicker show-tick" name="buying_type">
                                                    <option data-tokens="ketchup mustard">Auction</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px;">
                                    <input type="hidden" id="camp_objective" name="objective" value="LINK_CLICKS">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Campaign Objective
                                        </label>
                                        <div class="col-md-8">
                                            <button class="light-grey-btn show-camp-obj-btn camp_obj_name"><img src="img/brand-awarns-icon.png">Traffic</button>
                                            <div class="objective camp_objective">
                                                <div class="objective-cat">
                                                    <h5>Awareness</h5>
                                                    <ul>
                                                        <li data-value="BRAND_AWARENESS"><img src="img/brand-awarns-icon.png"> Brand awareness</li>
                                                        <li data-value="REACH"><img src="img/brand-awarns-icon.png"> Reach</li>
                                                    </ul>
                                                </div>
                                                <div class="objective-cat">
                                                    <h5>Consideration</h5>
                                                    <ul>
                                                        <li data-value="LINK_CLICKS"><img src="img/brand-awarns-icon.png"> Traffic</li>
                                                        <li data-value="APP_INSTALLS"><img src="img/brand-awarns-icon.png"> App installs</li>
                                                        <li data-value="VIDEO_VIEWS"><img src="img/brand-awarns-icon.png"> Video views</li>
                                                        <li data-value="LEAD_GENERATION"><img src="img/brand-awarns-icon.png"> Lead generation</li>
                                                        <li data-value="POST_ENGAGEMENT"><img src="img/brand-awarns-icon.png"> Post enagagement</li>
                                                        <li data-value="PAGE_LIKES"><img src="img/brand-awarns-icon.png"> Page likes</li>
                                                        <li data-value="EVENT_RESPONSES"><img src="img/brand-awarns-icon.png"> Event responses</li>
                                                        <li data-value="LINK_CLICKS"><img src="img/brand-awarns-icon.png"> Messages</li>
                                                    </ul>
                                                </div>
                                                <div class="objective-cat">
                                                    <h5>Conversion</h5>
                                                    <ul>
                                                        <li data-value="CONVERSIONS"><img src="img/brand-awarns-icon.png"> Conversions</li>
                                                        <li data-value="PRODUCT_CATALOG_SALES"><img src="img/brand-awarns-icon.png"> Product catalog sales</li>
                                                        <li data-value="LINK_CLICKS"><img src="img/brand-awarns-icon.png"> Store visits</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="email" class="custom-label">Number of copies of each ad set </label>
                        <div class="input-group spinner">
                            <input type="hidden" class="form-control" name="duplicate_adsets_id" id="duplicate_adsets_id">
                            <input type="text" class="form-control" value="1" name="duplicate_adsets_count" min="1">
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="blue-btn" name="duplicates_adsets_saved">Save to Draft</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- duplicate adsets -->