<div class="edit-camp-form" style="display: none;" id="ads-full-details">
    <div class="ads-details-list">
        <div class="col-md-6 col-sm-8">
            <div class="edit-camp-left-blocks">
                <div class="form-white-block" style="padding: 15px;">
                    <label>Ad Set Name</label>
                    <input type="text" name="" class="form-control" id="ad_name">
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

                            <label class="light-grey-label">Instagram Account <i class="fa fa-info-circle" aria-hidden="true"></i></label>
                            <p>The selected Page has no Instagram account connected. Your ad will use the Page name and profile picture.</p>
                            <div class="identity-instagram">
                                <button class="light-grey-btn"><img src="img/ident-acc-icon.jpg">Revinfotech (Page) <i class="fa fa-check" aria-hidden="true"></i></button>
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
                                <li class="img-vid-li">
                                    <input type="radio" id="img-vid" name="crt">
                                    <img src="img/single-img-icon.jpg">
                                    <label for="img-vid">Ad with an image or video</label>
                                </li>

                                <li class="mul-img-li">
                                    <div class="crt-ad-radio-and-img">
                                        <input type="radio" id="mul-img" name="crt">
                                        <img src="img/single-img-icon.jpg">
                                    </div>
                                    <div class="crt-ad-label-and-p">
                                        <label for="mul-img">
                                            <b>Ad with multiple images or videos in a carousel</b> Show multiple images or videos for the same price.<a href="#">Learn more.</a>
                                        </label>
                                    </div>
                                </li>

                                <li class="mul-img-li">
                                    <div class="crt-ad-radio-and-img">
                                        <input type="radio" id="img-coll" name="crt">
                                        <img src="img/single-img-icon.jpg">
                                    </div>
                                    <div class="crt-ad-label-and-p">
                                        <label for="img-coll">
                                            <b>Collection</b>Feature a collection of items that open into a fullscreen mobile experience.<a href="#">Learn more.</a>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <div class="two-tabs-first-radio">
                                <div class="crt-ad-radio-desc">
                                    <b>Fullscreen Experience</b>
                                    <p>Add a fullscreen Canvas, a mobile experience that opens instantly from your ad. Start with a template or create a custom layout with photos, videos and links to get people to engage with your business and encourage them to take action.</p>
                                </div>
                                <div class="full-scrn-canvs-opt">
                                    <input type="checkbox" name="">
                                    <label>Add a fullscreen Canvas</label>
                                    <ul>
                                        <li>
                                            <div class="r">
                                                <input type="radio" name="full-scrn-options">
                                            </div>
                                            <div class="des">
                                                Quick creation from a template
                                                <div class="new-cst-and-use-temp-row">
                                                    <button class="light-grey-btn get-new-customer">Get new customer <i class="fa fa-caret-down"></i></button>
                                                    <div class="three-new-customers-list">
                                                        <div class="s-r">
                                                            <div class="s-r-left">
                                                                <img src="img/new-cus-img.png">
                                                            </div>
                                                            <div class="s-r-right">
                                                                <b>Get New Customers</b>
                                                                <p>Drive conversions with a mobile landing page that encourages action.</p>
                                                            </div>
                                                        </div>
                                                        <div class="s-r">
                                                            <div class="s-r-left">
                                                                <img src="img/new-cus-img.png">
                                                            </div>
                                                            <div class="s-r-right">
                                                                <b>Get New Customers</b>
                                                                <p>Drive conversions with a mobile landing page that encourages action.</p>
                                                            </div>
                                                        </div>
                                                        <div class="s-r">
                                                            <div class="s-r-left">
                                                                <img src="img/new-cus-img.png">
                                                            </div>
                                                            <div class="s-r-right">
                                                                <b>Get New Customers</b>
                                                                <p>Drive conversions with a mobile landing page that encourages action.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="blue-btn" data-toggle="modal" data-target="#useTemplate">Use Template</button>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="r">
                                                <input type="radio" name="full-scrn-options">
                                            </div>
                                            <div class="des">
                                                Create a Canvas using advanced creation
                                                <div class="create-canv">
                                                    <button class="blue-btn" data-toggle="modal" data-target="#create-canv-popup">Create</button>
                                                    <div id="create-canv-popup" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Canvas Builder</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="canvs-popup-header-optns">
                                                                        <a href="#add-cnvs-component-popup" class="round-cmpnt-btn" data-toggle="modal"><i class="fa fa-plus-circle"></i>Component</a>
                                                                        <ul>
                                                                            <li><i class="fa fa-mobile"></i>
                                                                                <br/>Preview</li>
                                                                            <li><i class="fa fa-mobile"></i>
                                                                                <br/>Share</li>
                                                                            <li><i class="fa fa-save"></i>
                                                                                <br/>Save</li>
                                                                            <li><i class="fa fa-check-square"></i>
                                                                                <br/>Finish</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="canvs-components">
                                                                        <div class="canvs-components-left-sec">
                                                                            <div class="canvs-row">
                                                                                <input type="text" name="" placeholder="Give our canvas a name ..." class="canvs-title-field">
                                                                            </div>
                                                                            <div class="canvs-row he-cnvs-row se-cnvs-row">
                                                                                <div class="panel-group" id="accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#cnvs-settings">
                                                                                        			Settings
                                                                                        		</a>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="cnvs-settings" class="panel-collapse collapse">
                                                                                            <div class="panel-body">
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Theme</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 theme-optn">
                                                                                                        <div class="tra-bg">
                                                                                                            <input type="radio" name="theme-optn"><a href="#">T</a></div>
                                                                                                        <div class="grey-bg">
                                                                                                            <input type="radio" name="theme-optn"><a href="#">T</a></div>
                                                                                                        <div class="cust-bg">
                                                                                                            <input type="radio" name="theme-optn">
                                                                                                            <button class="jscolor" style="width:50px; height:20px;"></button>Custom</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Swipe to open final link <i class="fa fa-info-circle"></i></label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 theme-optn">
                                                                                                        <input type="checkbox" class="ad_status" data-toggle="toggle" data-size="mini">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Support Instagram <i class="fa fa-info-circle"></i></label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 theme-optn">
                                                                                                        <input type="checkbox" class="ad_status" data-toggle="toggle" data-size="mini">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="canvs-row he-cnvs-row">
                                                                                <div class="panel-group" id="header-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Header <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#header-accordion" href="#cnvs-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show Advanced Settings</a></li>
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="cnvs-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <img src="img/dummy-img-thumbnail.jpg">
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        Upload a logo for your Canvas. For best results, images should be 882 x 66 pixels
                                                                                                        <br/>
                                                                                                        <button class="light-grey-btn">Upload Photo</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Background Color</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        abc
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Background Opacity</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <option>
                                                                                                            <select>Select</select>
                                                                                                        </option>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="canvs-row cr-cnvs-row">
                                                                                <div class="panel-group" id="carousel-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Carousel <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#carousel-accordion" href="#carousel-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show Advanced Settings</a></li>
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="carousel-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">

                                                                                                <div class="common-row">
                                                                                                    <p>Upload 2-10 images to show them in a carousel format. If images are not the same size, they will be cropped to match your first image.</p>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Layout</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div>
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i>Fit to Width (Linkable)
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i>FFit to Height (Tilt to Pan)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <ul class="crsl-slide">
                                                                                                        <li><a href="#">1</a></li>
                                                                                                        <li><a href="#" class="active">2</a></li>
                                                                                                        <li><a href="#">+</a></li>
                                                                                                    </ul>
                                                                                                    <div class="edit-selected-slide">
                                                                                                        <div class="common-row">
                                                                                                            <div class="left-img">
                                                                                                                <img src="img/use-temp-img-thumb.jpg">
                                                                                                            </div>
                                                                                                            <div class="right-detail">
                                                                                                                <button class="light-grey-btn">Upload Photo</button>
                                                                                                                <button class="light-grey-btn pull-right"><i class="fa fa-trash"></i></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="common-row">
                                                                                                            <label>Destination</label>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-3">
                                                                                                                    <div class="custom-autocomplete-select cnvs-destination-dropdown">
                                                                                                                        <select class="selectpicker show-tick" data-size="3">
                                                                                                                            <option data-tokens="ketchup mustard">Website</option>
                                                                                                                            <option data-tokens="mustard">App Store</option>
                                                                                                                            <option data-tokens="frosting">Canvas</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <input type="text" name="" class="form-control">
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
                                                                            <div class="canvs-row btn-cnvs-row">
                                                                                <div class="panel-group" id="button-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Button <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#button-accordion" href="#button-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show Advanced Settings</a></li> 
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="button-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">
                                                                                                <div class="common-row">
                                                                                                    <form>
                                                                                                        <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Destination (required)</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div class="col-md-4">
                                                                                                            <div class="custom-autocomplete-select cnvs-destination-dropdown">
                                                                                                                <select class="selectpicker show-tick" data-size="3">
                                                                                                                    <option data-tokens="ketchup mustard">Website</option>
                                                                                                                    <option data-tokens="mustard">App Store</option>
                                                                                                                    <option data-tokens="frosting">Canvas</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <input type="text" placeholder="http://" class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Button color</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        d
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Background color</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        d
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Button style</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="btn-style">Border (default)
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="btn-style">Fill
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Button position</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="btn-pos">In line (default)
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="btn-pos">Fixed to Bottom
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="canvs-row photo-cnvs-row">
                                                                                <div class="panel-group" id="photo-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Photo <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#photo-accordion" href="#photo-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show Advanced Settings</a></li>       
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="photo-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">

                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Layout</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div class="col-md-4">
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i> Fit to Width (Linkable)
                                                                                                        </div>
                                                                                                        <div class="col-md-4">
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i> Fit to Width (Tap to Expand)
                                                                                                        </div>
                                                                                                        <div class="col-md-4">
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i> Fit to Height (Tilt to Pan)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="edit-selected-slide">
                                                                                                        <div class="common-row">
                                                                                                            <div class="left-img">
                                                                                                                <img src="img/use-temp-img-thumb.jpg">
                                                                                                            </div>
                                                                                                            <div class="right-detail">
                                                                                                                <p>Recommended: Image height of 1920 pixels</p>
                                                                                                                <button class="light-grey-btn">Upload Photo</button>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="common-row">
                                                                                                            <label>Destination</label>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-3">
                                                                                                                    <div class="custom-autocomplete-select cnvs-destination-dropdown">
                                                                                                                        <select class="selectpicker show-tick" data-size="3">
                                                                                                                            <option data-tokens="ketchup mustard">Website</option>
                                                                                                                            <option data-tokens="mustard">App Store</option>
                                                                                                                            <option data-tokens="frosting">Canvas</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <input type="text" name="" class="form-control">
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
                                                                            <div class="canvs-row text-cnvs-row">
                                                                                <div class="panel-group" id="text-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Text <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#text-accordion" href="#text-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show Advanced Settings</a></li>
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="text-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">
                                                                                                <div class="common-row">
                                                                                                    <p>Add context to your ad. Tell people more about your product or brand.</p>
                                                                                                    <form>
                                                                                                        <textarea name="editor2" id="editor2" rows="10" cols="80"></textarea>
                                                                                                    </form>
                                                                                                </div>

                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Background color</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        d
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="canvs-row video-cnvs-row">
                                                                                <div class="panel-group" id="video-accordion">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                        	<h4 class="panel-title">
                                                                                        		<span>Video <i class="fa fa-pencil" class="edit-cnvs-title"></i></span>
                                                                                        		<a class="accordion-toggle" data-toggle="collapse" data-parent="#video-accordion" href="#video-header">
                                                                                        			&nbsp;
                                                                                        		</a>
                                                                                        		<div class="dropdown comp-option-drp">
                                                                                        			<button id="comp-option" type="button" data-toggle="dropdown"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                                                                                        			<ul class="dropdown-menu" role="menu" aria-labelledby="comp-option">
                                                                                        				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                                                        			</ul>
                                                                                        		</div>
                                                                                        	</h4>
                                                                                        </div>
                                                                                        <div id="video-header" class="panel-collapse collapse">
                                                                                            <div class="panel-body header-component">

                                                                                                <div class="common-row">
                                                                                                    <div class="col-md-3 left">
                                                                                                        <label>Layout</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-9 right">
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i> Fit to Width
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <input type="radio" name="layout-opt"><i class="fa fa-mobile"></i> Fit to Height (Tilt to Pan)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="common-row">
                                                                                                    <div class="edit-selected-slide">
                                                                                                        <div class="common-row">
                                                                                                            <div class="left-img">
                                                                                                                <img src="img/use-temp-img-thumb.jpg">
                                                                                                            </div>
                                                                                                            <div class="right-detail">
                                                                                                                <p>Upload a video file (.mp4 or .mov). Recommended: keep your videos under 2 minutes and use captions so that people can still engage without audio.</p>
                                                                                                                <button class="light-grey-btn">Upload Video</button>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="canvs-row add-more text-center">
                                                                                <a href="#add-cnvs-component-popup" class="plus-add-more-c" data-toggle="modal">+ Add more component</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="canvs-components-right-sec">
                                                                            <div style="margin-top: 0" class="common-row">
                                                                                <div class="img-or-video-prev">
                                                                                    <img src="img/use-temp-img-prev.jpg">
                                                                                </div>
                                                                                <h1>Add Context</h1>
                                                                                <p>Change the text and use this space to tell people about your product, brand, or service. </p>
                                                                                <button class="big-black-bordered-btn">Write something ...</button>
                                                                            </div>
                                                                            <div class="common-row">
                                                                                <div class="img-or-video-prev">
                                                                                    <img src="img/use-temp-img-prev.jpg">
                                                                                </div>
                                                                                <h1>Add Context</h1>
                                                                                <p>Change the text and use this space to tell people about your product, brand, or service. </p>
                                                                                <button class="big-black-bordered-btn">Write something ...</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="r">
                                                <input type="radio" name="full-scrn-options">
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
                                                    <button class="light-grey-btn common-select-img-popup" data-target="#common-select-img-popup" data-toggle="modal">Select Image</button>
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
                                                            <b>Website URL</b> <i class="fa fa-info-circle"></i>
                                                            <br>
                                                            <input type="text" name="" class="form-control">
                                                        </div>
                                                        <div class="common-row">
                                                            <input type="radio" name="">
                                                            <div class="col-md-11" style="padding-left: 0">
                                                                <b>Messenger Setup</b> <i class="fa fa-info-circle"></i>
                                                                <br>
                                                                <p>Create the first few messages people see in Messenger after they click on your ad.</p>
                                                                <button class="light-grey-btn set-up-message-popup" data-target="#set-up-message-popup" data-toggle="modal">Set up message</button>
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
                                                    <label>Call To Action <i class="fa fa-info-circle"></i></label>
                                                    <br>
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
                                                    <button class="light-grey-btn common-select-video-popup" data-target="#common-select-video-popup" data-toggle="modal">Select Video</button>
                                                    <button class="crt-slideshow-btn light-grey-btn common-create-slideshow-popup" data-target="#common-create-slideshow-popup" data-toggle="modal">
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
                                                            <b>Website URL</b> <i class="fa fa-info-circle"></i>
                                                            <br>
                                                            <input type="text" name="" class="form-control">
                                                        </div>
                                                        <div class="common-row">
                                                            <input type="radio" name="">
                                                            <div class="col-md-11" style="padding-left: 0">
                                                                <b>Messenger Setup</b> <i class="fa fa-info-circle"></i>
                                                                <br>
                                                                <p>Create the first few messages people see in Messenger after they click on your ad.</p>
                                                              <button class="light-grey-btn set-up-message-popup" data-target="#set-up-message-popup" data-toggle="modal">Set up message</button>
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
                                                    <label>Call To Action <i class="fa fa-info-circle"></i></label>
                                                    <br>
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
                            <!-- two tabs first radio button content -->

                            <div class="two-tabs-second-radio">
                                <div class="manual-and-dynamic-cont">
                                    <h5>Images/Videos and Links </h5>
                                    <ul class="manual-and-dynamic-first-ul">
                                        <li>
                                            <input type="radio" name="img-vid-links" id="select-manual">
                                            <label for="select-manual">Manually choose images, videos and links</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="img-vid-links" id="dynamic-temp">
                                            <label for="dynamic-temp">Fill template dynamically from a product set</label>
                                        </li>
                                    </ul>
                                    <div class="manual-imgs-radio-opt">
                                        <div class="common-row">
                                            <label>Text</label>
                                            <textarea class="form-control" placeholder="Enter text that clearly tells people about what you're promoting" style="font-size:12px"></textarea>
                                        </div>
                                        <div class="common-row">
                                            <h5>Destination </h5>
                                            <div class="common-row">
                                                <input type="radio" name="web-url" id="web-url">
                                                <label for="web-url">Website URL</label>
                                            </div>
                                            <div class="common-row">
                                                <input type="radio" name="web-url" id="mess-setup">
                                                <label for="mess-setup">Messenger Setup </label>
                                                <p>Create the first few messages people see in Messenger after they click on your ad</p>
                                                <button class="light-grey-btn set-up-message-popup" data-target="#set-up-message-popup" data-toggle="modal">Set up message</button>
                                            </div>
                                            <div class="common-row">
                                                <input type="checkbox" name="">
                                                <label>Add a card at end with your Page profile picture</label>
                                            </div>
                                            <div class="common-row cards-imgs">
                                                <a href="#" class="select-card-link">Select card from previous ads</a>
                                                <ul class="crsl-slide">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a class="active" href="#">6</a></li>
                                                    <li><a href="#">+</a></li>
                                                </ul>
                                                <div class="img-and-video-radio-opt-for-cards">
                                                    <div class="img-video-radio-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#radio-tab3" aria-expanded="true">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="selector" id="f-option">
                                                                        <label for="f-option">Image</label>
                                                                        <div class="check"></div>
                                                                    </label>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a data-toggle="tab" href="#radio-tab4" aria-expanded="false">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="selector" id="f-option">
                                                                        <label for="f-option">Video / Slideshow</label>
                                                                        <div class="check"></div>
                                                                    </label>
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div id="radio-tab3" class="img-radio-tab-cont tab-pane active">
                                                                <div class="select-img-row">
                                                                    <button class="light-grey-btn common-select-img-popup" data-target="#common-select-img-popup" data-toggle="modal">Select Image</button>
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
                                                                    <div class="common-row">
                                                                        <h5>Destination URL  <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                                <div class="destination-row">
                                                                    <div class="common-row">
                                                                        <h5>Headline <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                                <div class="destination-row">
                                                                    <div class="common-row">
                                                                        <h5>Description  <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="radio-tab4" class="video-slideshow-radio-tab-cont tab-pane">

                                                                <div class="common-row">
                                                                    <!-- <button class="light-grey-btn select-video-btn">Select Video</button> -->
                                                                    <button class="light-grey-btn common-select-video-popup" data-target="#common-select-video-popup" data-toggle="modal">Select Video</button>
                                                                     <button class="crt-slideshow-btn light-grey-btn common-create-slideshow-popup" data-target="#common-create-slideshow-popup" data-toggle="modal">
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
                                                                    <div class="common-row">
                                                                        <h5>Destination URL  <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                                <div class="destination-row">
                                                                    <div class="common-row">
                                                                        <h5>Display Link  <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>

                                                                <div class="destination-row">
                                                                    <div class="common-row">
                                                                        <h5>Headline <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                                <div class="destination-row">
                                                                    <div class="common-row">
                                                                        <h5>Description  <i class="fa fa-info-circle"></i></h5>
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="dynamic-template-radio-opt">
                                        <div class="common-row">
                                             <input type="checkbox" name="" id="fixed-img-begining" class="col-md-1"><label for="fixed-img-begining" class="col-md-10" style="padding: 0; margin: 0">Add a card with a fixed image, video or slideshow at the beginning</label>
                                        </div>
                                         <div class="common-row">    
                                            <input type="checkbox" name="" id="fixed-img-end" class="col-md-1"><label for="fixed-img-end" class="col-md-10" style="padding: 0">Add a card at the end with your Page profile picture</label>
                                        </div>
                                        <div class="fixed-img-begining">
                                            <div class="common-row">
                                                <label>Product Catalog </label>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick" data-live-search="true" data-size="3">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Product Set </label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick" data-live-search="true" data-size="3">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                                <button class="light-grey-btn product-set-plus-btn" data-target="#product-set-plus-btn" data-toggle="modal">+</button>
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Text</label>
                                                <div class="holder">
                                                    <textarea class="form-control"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                    <div class="selected-tags">
                                                        <span>Name <a href="#"><i class="fa fa-remove"></i></a></span> <span>Brand <a href="#"><i class="fa fa-remove"></i></a></span> <span>Description <a href="#"><i class="fa fa-remove"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Headline</label>
                                                <div class="holder">
                                                    <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>    
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>News Feed Link Description</label>
                                                <div class="holder">
                                                    <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>    
                                            </div>
                                            <div class="common-row">
                                                <label>See More URL</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="common-row">
                                                <label>See More Display Link (optional)</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Call To Action</label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Deep link to website </label>
                                                <div class="holder">
                                                   <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Mobile app</label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                               
                                            </div>
                                        </div>
                                         <div class="fixed-img-end">
                                            <ul class="nav nav-tabs no-of-prd-catalogs">
                                                <li class="active"><a data-toggle="tab" href="#existing-prd-catalog1">1</a></li>
                                                <li><a data-toggle="tab" href="#addNew-prd-catalog"><i class="fa fa-ellipsis-h"></i></a></li>
                                            </ul>
                                            <div class="tab-content first-level-tab-content">
                                              <div id="existing-prd-catalog1" class="tab-pane fade in active">
                                                <div class="img-video-radio-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#radio-tab5" aria-expanded="true">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="selector" id="f-option">
                                                                    <label for="f-option">Image</label>
                                                                    <div class="check"></div>
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a data-toggle="tab" href="#radio-tab6" aria-expanded="false">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="selector" id="f-option">
                                                                    <label for="f-option">Video / Slideshow</label>
                                                                    <div class="check"></div>
                                                                </label>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="radio-tab5" class="img-radio-tab-cont tab-pane active">
                                                            <div class="select-img-row">
                                                                <button class="light-grey-btn common-select-img-popup" data-target="#common-select-img-popup" data-toggle="modal">Select Image</button>
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
                                                                <div class="common-row">
                                                                    <h5>Destination URL  <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                            <div class="destination-row">
                                                                <div class="common-row">
                                                                    <h5>Headline <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                            <div class="destination-row">
                                                                <div class="common-row">
                                                                    <h5>Description  <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="radio-tab6" class="video-slideshow-radio-tab-cont tab-pane">

                                                            <div class="common-row">
                                                                <!-- <button class="light-grey-btn select-video-btn">Select Video</button> -->
                                                                <button class="light-grey-btn common-select-video-popup" data-target="#common-select-video-popup" data-toggle="modal">Select Video</button>
                                                                 <button class="crt-slideshow-btn light-grey-btn common-create-slideshow-popup" data-target="#common-create-slideshow-popup" data-toggle="modal">
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
                                                                <div class="common-row">
                                                                    <h5>Destination URL  <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                            <div class="destination-row">
                                                                <div class="common-row">
                                                                    <h5>Display Link  <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>

                                                            <div class="destination-row">
                                                                <div class="common-row">
                                                                    <h5>Headline <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                            <div class="destination-row">
                                                                <div class="common-row">
                                                                    <h5>Description  <i class="fa fa-info-circle"></i></h5>
                                                                    <input type="text" class="form-control" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div id="addNew-prd-catalog" class="tab-pane fade">
                                                <div class="common-row">
                                                <label>Product Catalog </label>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick" data-live-search="true" data-size="3">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Product Set </label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick" data-live-search="true" data-size="3">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                                 <button class="light-grey-btn product-set-plus-btn" data-target="#product-set-plus-btn" data-toggle="modal">+</button>
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Text</label>
                                                <div class="holder">
                                                    <textarea class="form-control"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                    <div class="selected-tags">
                                                        <span>Name <a href="#"><i class="fa fa-remove"></i></a></span> <span>Brand <a href="#"><i class="fa fa-remove"></i></a></span> <span>Description <a href="#"><i class="fa fa-remove"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Headline</label>
                                                <div class="holder">
                                                    <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>    
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>News Feed Link Description</label>
                                                <div class="holder">
                                                    <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>    
                                            </div>
                                            <div class="common-row">
                                                <label>See More URL</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="common-row">
                                                <label>See More Display Link (optional)</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Call To Action</label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="common-row common-input-with-plus-inside">
                                                <label>Deep link to website </label>
                                                <div class="holder">
                                                   <textarea class="form-control" row="1"></textarea>
                                                    <button class="light-grey-btn input-field-common-plus">+</button>
                                                    <ul class="input-field-common-plus-ul">
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                        <li>Name</li>
                                                        <li>Brand</li>
                                                        <li>Description</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="common-row product-set">
                                                <label>Mobile app</label><br>
                                                <div class="custom-autocomplete-select">    
                                                    <select class="selectpicker show-tick">   
                                                        <option data-tokens="ketchup mustard">Columns</option> 
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="mustard">Lorem</option>     
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                        <option data-tokens="frosting">Dummy text printing</option>
                                                    </select>                                                   
                                                </div>
                                               
                                            </div>
                                              </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- two tabs second radio button content -->

                            <div class="two-tabs-third-radio">
                                3
                            </div>
                            <!-- two tabs third radio button content -->

                        </div>
                        <div id="ext-post" class="tab-pane fade">
                            <label>Page Post</label>
                            <br>
                            <p class="no-post-exist"><i class="fa fa-info-circle" aria-hidden="true"></i> No eligible posts exist.</p>
                            <button class="light-grey-btn plus-popup" data-target="#create-new-post-popup" data-toggle="modal">+</button>
                            <br>
                            <div style="float: left; width: 100%; text-align: left;"><a href="#">Enter Post ID</a></div>
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
                                <label>
                                    <input name="optradio" type="radio">Track all conversions from my Facebook pixel</label>
                                <div class="pixel-tracking-ids">
                                    <ul>
                                        <li><b>John Pixel</b>
                                            <br>Pixel ID: 143012979405875</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="optradio" type="radio">Do not track conversions</label>
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
                    <div class="col-md-9 padding10">
                        <h5><b>Ad id<span id="ad_id"></span></b></h5>
                        <input type="checkbox" checked id="ad_status" value="" data-toggle="toggle" data-size="mini"> </div>
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
                        <a href="#"><span class="camp_total_camps">1</span> Campaigns</a>
                        <br>
                        <span>Targeting, placement, budget and schedule</span>
                    </p>
                    <p>
                        <a href="#"><span class="camp_total_adsets"></span> Ad Set</a>
                        <br>
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
                                <li><img src="img/ads-list-icon1.jpg"> Mobile News Feed</li>
                                <li><img src="img/ads-list-icon1.jpg"> Feature Phone</li>
                                <li class="active"><img src="img/ads-list-icon1.jpg"> Desktop New Feed</li>
                                <li><img src="img/ads-list-icon1.jpg"> Mobile News Feed</li>
                                <li><img src="img/ads-list-icon1.jpg"> Feature Phone</li>
                                <li><img src="img/ads-list-icon1.jpg"> Desktop New Feed</li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right" style="padding-right: 50px;">5 of 10</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="ads-preview-crsl" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/ads-preview-icon.jpg">
                                        <p>Please select a Facebook Page post to show this type of ad</p>
                                    </div>

                                    <div class="item">
                                        <img src="img/ads-preview-icon.jpg">
                                        <p>Please select a Facebook Page post to show this type of ad</p>
                                    </div>

                                    <div class="item">
                                        <img src="img/ads-preview-icon.jpg">
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


