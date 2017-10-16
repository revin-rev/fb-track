<div id="camapaign-full-details" style="display: block;">
	<div class="camapaign-details-list" id="">
		<div class="col-md-7 col-sm-8">
			<div class="form-white-block" style="padding: 15px; margin-top: 20px;">
				<div class="row">
					<div class="col-sm-4"><label for="email" class="pull-right">Campaign Name:</label></div>
					<div class="col-sm-8 padding0">
						<input type="email" class="form-control" id="camp_name" value="">
						<a href="#">Rename usign available fields</a>
					</div>
				</div>
			</div>
			<div class="form-white-block">
				<h5 class="white-block-legend">Campaign Details</h5>
				<div class="white-block-body">
					<div class="col-sm-12">
						<div class="col-sm-6"><label class="pull-right">Objective</label></div>
						<div class="col-sm-6 padding0" id="camp_objective"><?php echo $camapaign['objective'];?></div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6"><label class="pull-right">Buying Type</label></div>
						<div class="col-sm-6 padding0" id="camp_buyingtype"><?php echo $camapaign['buying_type'];?></div>
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
					<div class="col-md-9 padding10"><h5><b>Campaign id:<span id="camp_id"></span> </b></h5><input type="checkbox" id="camp_status" value="<?php echo $camapaign['id'];?>" data-toggle="toggle" data-size="mini"> </div>
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
						<a href="#"><span class="camp_total_adsets"></span> Ad Set</a><br>
						<span>Targeting, placement, budget and schedule</span>
					</p>
					<p>
						<a href="#"><span class="camp_total_ads"></span> Ad</a><br>
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