

<!-- set up a message popup -->
<div id="set-up-message-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
            <ul class="nav nav-tabs first-level-tabs">
              <li class="active"><a data-toggle="tab" href="#standard">Standard</a></li>
              <li><a data-toggle="tab" href="#json">JSON</a></li>
            </ul>

            <div class="tab-content first-level-tab-content">
              <div id="standard" class="tab-pane fade in active">
                     <div class="standad-left-sec">
                        <div class="common-row">
                            <label>Welcome Message (Recommended)</label><br><span class="heading-sub-span">This is the first message people will see in the Messenger conversation.</span>
                            <textarea placeholder="Welcome people with text about who you are and what you offer." rows="1" class="form-control"></textarea>
                        </div>
                        <div class="common-row second-level-radio-tabs">
                             <label>Main Message</label><br><span class="heading-sub-span">Encourage people to reply by offering more information about the ad they clicked.</span>

                            <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#img-and-text">Image & Text</a></li>
                              <li><a data-toggle="tab" href="#video-and-text">Video & Text</a></li>
                              <li><a data-toggle="tab" href="#text-only">Text Only</a></li>
                            </ul>

                            <div class="tab-content">
                              <div id="img-and-text" class="tab-pane fade in active">
                                        <div class="common-row">
                                            <div class="col-md-8" style="padding-left: 0">
                                                <label>Image</label><br>
                                                <button data-toggle="modal" data-target="#common-select-img-popup" class="light-grey-btn common-select-img-popup">Select Image</button><br>
                                                <span class="heading-sub-span">Recommended image size: 1200 x 628 pixels</span>
                                            </div>
                                            <div class="col-md-4 upload-img-grey-sec">
                                                <a href="#common-select-img-popup" data-toggle="modal"><i class="fa fa-file-image-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="common-row">
                                            <label>Message Title</label><br>
                                            <input type="text" name="" placeholder="Enter a titile for your message" class="form-control">
                                        </div>
                                         <div class="common-row">
                                            <label>Message Subtitle</label><br>
                                            <input type="text" name="" placeholder="Optional: Enter a subtitle to provide more information" class="form-control">
                                        </div>

                                         <div class="common-row">
                                            <label>Customer Actions</label><br>
                                            <span class="heading-sub-span">Select the action you want people to take. Use a button to send people to your site or prompt a bot, or create suggested replies for people to choose from.</span>
                                            <div class="custom-autocomplete-select">                                                             
                                                <select class="selectpicker show-tick" data-size="3">    
                                                     <option data-tokens="ketchup mustard">Buttons</option> 
                                                     <option data-tokens="mustard">Suggested Reply</option>  
                                                </select>                                                   
                                            </div>
                                            <div class="add-multiple-grey-sec">
                                                <div class="common-row" style="margin-top: 0">
                                                    <span class="grey-sec-heading">Button 1</span><a href="#" class="remove-text text-right">Remove</a>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Label</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Enter the text for your button">
                                                    </div>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Action</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="custom-autocomplete-select">     
                                                            <select class="selectpicker show-tick" data-size="3">    
                                                                 <option data-tokens="ketchup mustard">Open a wbesite</option>  
                                                                 <option data-tokens="mustard">Send a postback</option>
                                                            </select>                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Website URL</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Optional: This will be sent back to your webhook">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="common-row">
                                            <a href="#" class="common-add-custom-field-link">+ Add another call to action</a>
                                        </div>
                              </div>
                              <div id="video-and-text" class="tab-pane fade">
                                        <div class="common-row">
                                            <div class="col-md-8 left" style="padding-left: 0">
                                                <label>Video</label><br>
                                                <input type="file" name="" value="Select Video" class="button-type-browse">
                                                <button class="light-grey-btn">Select Video</button>
                                                <span class="heading-sub-span">.MOV or .MP4. At least 720p. 25MB max.</span>
                                            </div>
                                            <div class="col-md-4 upload-img-grey-sec">
                                                <input type="file" class="grey-bg-type-browse">
                                                <a href="#"><i class="fa fa-file-image-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="common-row">
                                            <label>Suggested Replies</label>
                                            <div class="add-multiple-grey-sec">
                                                <div class="common-row" style="margin-top: 0">
                                                    <span class="grey-sec-heading">Suggested Reply #1</span><a href="#" class="remove-text text-right">Remove</a>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Reply Text</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Enter the text for your button">
                                                    </div>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Bot Payload</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Optional: This will be sent back to your webhook">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="common-row">
                                            <a href="#" class="common-add-custom-field-link">+ Add another suggested reply</a>
                                        </div>
                              </div>
                              <div id="text-only" class="tab-pane fade">
                                 <div class="common-row">
                                    <label>Message Text</label><br>
                                    <input type="text" name="" class="form-control">
                                 </div>
                                 <div class="common-row">
                                    <label>Buttons</label>
                                        <div class="add-multiple-grey-sec">                                             
                                                <div class="common-row" style="margin-top: 0">
                                                    <span class="grey-sec-heading">Button 1</span><a href="#" class="remove-text text-right">Remove</a>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Label</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Enter the text for your button">
                                                    </div>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Action</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="custom-autocomplete-select">     
                                                            <select class="selectpicker show-tick" data-size="3">    
                                                                 <option data-tokens="ketchup mustard">Open a wbesite</option>  
                                                                 <option data-tokens="mustard">Send a postback</option>
                                                            </select>                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="common-row">
                                                    <div class="col-md-4 text-right">
                                                        <label>Website URL</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="" class="form-control" placeholder="Optional: This will be sent back to your webhook">
                                                    </div>
                                                </div>
                                            </div>
                                 </div>
                                 <div class="common-row">
                                    <a href="#" class="common-add-custom-field-link">+ Add another call to action</a>
                                </div>
                              </div>
                            </div>
                        </div>

                     </div>
                     <div class="standad-right-sec">
                        <div class="preview-white-area">
                            <h1>Lorem Ipsum Text</h1>
                            <div class="text-and-img-preview">
                                <span><img src="img/ava-icon.png"></span>
                                <div class="right-dynamic-text-img">
                                    <span> </span>
                                    <div style="float: left;width: 100%; position: relative; height: 100px; overflow-y: scroll;"><h1>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</h1></div>
                                    <div style="float: left;width: 100%; position: relative; height:80px; overflow-y: scroll;"><h5>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</h5></div>
                                </div>
                            </div>
                        </div>
                     </div>
              </div>
              <div id="json" class="tab-pane fade">
               json
              </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Done</button>
      </div>
    </div>

  </div>
</div>

<!-- product set plus popup -->
<div id="product-set-plus-btn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Product Set - Facebook catalog</h4>
      </div>
      <div class="modal-body">
            <div class="common-row">
                <label style="font-weight: normal;">Create a product set using filters to better control which products appear in your ads.</label>
                <input type="text" name="" class="form-control" placeholder="Name">
            </div>
            <div class="common-row match-all-or-single">
                <label>Match items for </label>
                <div class="custom-autocomplete-select" style="display: inline-block;">
                    <select class="selectpicker show-tick" data-size="3">    
                         <option data-tokens="ketchup mustard">All</option> 
                         <option data-tokens="mustard">At leat one</option>     
                    </select>                                                   
                </div>
                <label>of the following rules:</label>
            </div>

            <div class="common-row all-custom-fields-sec">
                <div class="common-row category-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Category</option>    
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is any of these</option> 
                             <option data-tokens="mustard">is not</option>    
                             <option data-tokens="frosting">contains</option>                                           
                             <option data-tokens="frosting">does not contains</option>  
                             <option data-tokens="frosting">starts with</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter a category">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row product-type-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Product Type</option>    
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is any of these</option> 
                             <option data-tokens="mustard">is not</option>    
                             <option data-tokens="frosting">contains</option>                                           
                             <option data-tokens="frosting">does not contains</option>  
                             <option data-tokens="frosting">starts with</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter a product type">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row brand-type-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Brand</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is any of these</option> 
                             <option data-tokens="mustard">is not</option>    
                             <option data-tokens="frosting">contains</option>                                           
                             <option data-tokens="frosting">does not contains</option>  
                             <option data-tokens="frosting">starts with</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add brand">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row price-type-field">
                    <div class="custom-autocomplete-select">                                                             

                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Price</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is greate than</option>  
                             <option data-tokens="mustard">is less than</option>      
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Amount in HNL">
                    </div>
                     <div class="custom-autocomplete-select currency-type">                                                          
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">AED - UAE Dirham</option>    
                             <option data-tokens="mustard">AED - UAE Dirham</option>      
                        </select>                                                   
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row current-price-type-field">
                    <div class="custom-autocomplete-select">                                                             

                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Current Price</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is greate than</option>  
                             <option data-tokens="mustard">is less than</option>      
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Amount in HNL">
                    </div>
                     <div class="custom-autocomplete-select currency-type">                                                          
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">AED - UAE Dirham</option>    
                             <option data-tokens="mustard">AED - UAE Dirham</option>      
                        </select>                                                   
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row product-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Product</option> 
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is any of these</option> 
                             <option data-tokens="mustard">is not</option>    
                             <option data-tokens="frosting">contains</option>                                           
                             <option data-tokens="frosting">does not contains</option>  
                             <option data-tokens="frosting">starts with</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Search by title, ID, brand">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row retailer-product-id-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Retailer Product Group ID</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is any of these</option> 
                             <option data-tokens="mustard">is not</option>    
                             <option data-tokens="frosting">contains</option>                                           
                             <option data-tokens="frosting">does not contains</option>  
                             <option data-tokens="frosting">starts with</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add retailer product group ID">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row gender-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Gender</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add gender">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row condition-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Condition</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>    
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add condition">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row size-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Size</option>    
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>  
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>   
                             <option data-tokens="ketchup mustard">starts with</option>   
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add size">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row age-group-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Age group</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add age group">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row color-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Color</option>   
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add color">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row material-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Material</option>    
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add material">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row custom-label-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Custom Label 0</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter custom label 0's value">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row custom-label-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Custom Label 1</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter custom label 1's value">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row custom-label-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Custom Label 2</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter custom label 2's value">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row custom-label-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Custom Label 3</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter custom label 3's value">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row custom-label-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Custom Label 4</option>  
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="5">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                             <option data-tokens="ketchup mustard">contains</option>    
                             <option data-tokens="ketchup mustard">does not contains</option>
                             <option data-tokens="ketchup mustard">starts with</option>
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Enter custom label 4's value">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
                <div class="based-on-condition common-row">
                    OR
                </div>
                <div class="common-row availability-field">
                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker" data-size="9">  
                             <option data-tokens="ketchup mustard">Availability</option>    
                             <option data-tokens="mustard">Category</option>      
                             <option data-tokens="frosting">Product Type</option>       
                             <option>Brand</option>
                             <option>Price</option>
                             <option>Current Price</option>
                             <option>Product</option>
                             <option>Retailer Product Gropu ID</option>
                             <option>Gender</option>
                             <option>Condition</option>
                             <option>Size</option>
                             <option>Age Group</option>
                             <option>Color</option>
                             <option>Material</option>
                             <option>Pattern</option>
                             <option>Custom Label 0</option>
                             <option>Custom Label 1</option>
                             <option>Custom Label 2</option>
                             <option>Custom Label 3</option>
                             <option>Custom Label 4</option>
                             <option>Availability</option>
                        </select>                                                   
                    </div>

                    <div class="custom-autocomplete-select">                                                             
                        <select class="selectpicker show-tick" data-size="2">    
                             <option data-tokens="ketchup mustard">is</option>  
                             <option data-tokens="mustard">is not</option>   
                        </select>                                                   
                    </div>
                    <div class="custom-field-input-value">
                        <input type="text" name="" class="form-control" placeholder="Add availability">
                    </div>
                    <a href="#" class="remove-custom-field"><i class="fa fa-trash"></i></a>
                </div>
            </div>

            <div class="common-row add-another-row">

                <label>Add another </label>
               <div class="dropdown" style="display: inline-block;">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Select <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Product Type</a></li>
                        <li><a href="#">Brand</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Current Price</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Retailer Product Gropu ID</a></li>
                        <li><a href="#">Gender</a></li>
                        <li><a href="#">Condition</a></li>
                        <li><a href="#">Size</a></li>
                        <li><a href="#">Age Group</a></li>
                        <li><a href="#">Color</a></li>
                        <li><a href="#">Material</a></li>
                        <li><a href="#">Pattern</a></li>
                        <li><a href="#">Custom Label 0</a></li>
                        <li><a href="#">Custom Label 1</a></li>
                        <li><a href="#">Custom Label 2</a></li>
                        <li><a href="#">Custom Label 3</a></li>
                        <li><a href="#">Custom Label 4</a></li>
                        <li><a href="#">Availability</a></li>
                    </ul>
                </div>
            </div>
            <div class="total-products-carousel">
            
                   <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
              <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
              <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
             <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
              <div class="item" style="width:200px">
                <span class="crsl-img"><img src="../img/safe_image.png"></span>
                <h1>Lorem ipsum text</h1>
                <span>$42.00</span>
            </div>
          </div>
   
          </div>
         
        </div>
      </div>
    </section>

            </div>
        <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Create</button>
      </div>
      </div>
      
    </div>

  </div>
</div>

 <!-- craete camp popup  -->
<div id="create-camp-btn" class="modal fade common-three-tabs-popup" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
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
                                        <select class="selectpicker show-tick" id="choose_campaigns" name="choose_campaigns">
                                            <option  value="new">Create New Campaign</option>
                                            <option  value="existing">Use Existing Campaign</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="new_campaign">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Campaign Name
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" name="campaign_name" placeholder="Enter a campaign name" class="form-control">
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
                                                <select class="selectpicker show-tick" name="buying_type">
                                                    <option data-tokens="ketchup mustard" >Auction</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <input type="hidden" name="objective" id="camp_objective" value="LINK_CLICKS">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Campaign Objective
                                        </label>
                                        <div class="col-md-8">
                                            <button class="light-grey-btn show-camp-obj-btn"><img src="img/brand-awarns-icon.png">Traffic</button>
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

                            <div id="existing_campaign" style="display: none;">
                                <input type="hidden" name="exit_camapaign_id" id="exit_camapaign_id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Use Existing
                                        </label>
                                        <div class="col-md-8 custom-auto-complete using-existing-camp-input">
                                            <input type="text" id="exit_campaign_name" placeholder="choose camapaign" readonly class="form-control">
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
                        <div class="sec1">
                            <div class="row" style="margin-bottom:30px;">
                                <div class="col-md-12">
                                    <div class="custom-autocomplete-select">
                                        <select class="selectpicker show-tick" name="choose_adsets" id="choose_adsets">
                                            <option value="new" >Create New AdSet</option>
                                            <option  value="existing" disabled>Use Existing AdSet</option>
                                            <option value="skip" >Skip AdSet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="new_adsets">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Ad Set Name
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" name="adset_name" placeholder="Enter an ad set name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="exist_adsets" style="display: none;">
                                <input type="hidden" name="exit_adset_id" id="exit_adset_id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4">
                                            Use Existing
                                        </label>
                                        <div class="col-md-8 custom-auto-complete using-existing-camp-input">
                                            <input type="text" id="exit_adset_name" placeholder="choose camapaign" readonly class="form-control">
                                            <i class="fa fa-remove cross-existing-camp-icon"></i>
                                            <div class="custom-auto-complete-data custom-dropdown" style="width: 94%">
                                                <ul>
                                                    <?php foreach ($camapaigns['data'] as $camapaign) 
                                                        foreach($camapaign['adsets']['data'] as $adset) :?>
                                                    <li data-id="<?php echo $adset['id'];?>" data-name="<?php echo $adset['name']; ?>">
                                                        <b><?php echo $adset['name']; ?></b>
                                                        <p><?php echo $adset['id'];?> 
                                                            <i class="fa fa-circle"></i> Campaign: <?php echo $camapaign['name'];?>
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
                        <div class="sec1">
                            <div class="row" style="margin-bottom:30px;">
                                <div class="col-md-12">
                                    <div class="custom-autocomplete-select">
                                        <select class="selectpicker show-tick" name="choose_ads" id="choose_ads">
                                            <option value="new">Create New Ad</option>
                                            <option value="skip">Skip Ad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="ad_input_box">
                                <div class="col-md-12">
                                    <label class="col-md-4">
                                        Ad Name
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="ad_name" placeholder="Enter an ad name" class="form-control">
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
                    <button class="blue-btn" type="submit" name="camp_save_draft">Save to Draft</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- craete camp popup ends  -->
<!-- common create slide show popup -->
<div id="common-create-slideshow-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      	<div class="slideshow-left-sec">
	       	<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#slideshow-settings">Settings</a></li>
			  <li><a data-toggle="tab" href="#slideshow-music">Music</a></li>		 
			</ul>

			<div class="tab-content">
			  <div id="slideshow-settings" class="tab-pane fade in active">
			  	<div class="common-row">
			  		<label>ASPECT RATIO</label>
				      <div class="custom-autocomplete-select">
	                        <select class="selectpicker show-tick" data-size="3">
	                            <option data-tokens="ketchup mustard">Columns </option>
	                            <option data-tokens="mustard">Lorem</option>
	                            <option data-tokens="frosting">Dummy</option>
	                        </select>
	                  </div>
                 </div>
                 <div class="common-row">
			  		<label>IMAGE DURATION</label>
				      <div class="custom-autocomplete-select">
	                        <select class="selectpicker show-tick" data-size="3">
	                            <option data-tokens="ketchup mustard">1 second </option>
	                            <option data-tokens="mustard">1 second</option>
	                            <option data-tokens="frosting">1 second</option>
	                        </select>
	                  </div>
                 </div> 
                 <div class="common-row">
			  		<label>TRANSITION</label><br>
			  		<div class="transition">
				       	<div class="thumb f-child">
				     		<span>None</span>	
				     		<input type="radio" class="thumbCheck" name="img-thumb">
				     	</div>
				     	<div class="thumb l-child">
				     		<span>Fade</span>	
				     		<input type="radio" class="thumbCheck" name="img-thumb">
				     	</div>
				    </div> 	
                 </div> 
			  </div>
			  <div id="slideshow-music" class="tab-pane fade">
			  	<div class="common-row">
				   	<div class="selected-audio">
				   		<span><i class="fa fa-play-circle"></i> lorem ipsum</span><a href="#"> <i class="fa fa-remove"></i></a>
				   	</div>
				   	<div class="custom-audio-select">
				   		<input type="file" name="">
				   		<button class="light-grey-btn">Upload</button>
				   	</div>
				</div>   	
			  </div>
			</div>
		</div>	
		<div class="slideshow-right-sec">		
			<div class="common-row">
				<img src="img/img-video-thumb.png">
				<p>Use photos or video stills to create a slideshow</p>
			</div>
			<div class="common-row">
				<button class="add-photos-for-video-btn" data-target="#common-select-img-popup" data-toggle="modal"><i class="fa fa-image"></i> Add Photos</button>
				<button class="add-video-for-video-btn" data-target="#common-select-video-popup" data-toggle="modal"><i class="fa fa-file-video-o"></i> Add Video</button>
			</div>
		</div>
		<div class="slideshow-slides-gallery">
			<ul>
				<li class="with-img-slide">
					<a href="#edit-slide-show-slide" data-toggle="modal"><i class="fa fa-pencil"></i></a>
					<img src="../img/ident-acc-icon.jpg">
					<div class="slide-show-overlay">
						<i class="fa fa-remove"></i>
					</div>
				</li>
				<li class="with-img-slide">
					<a href="#edit-slide-show-slide" data-toggle="modal"><i class="fa fa-pencil"></i></a>
					<img src="../img/ident-acc-icon.jpg">
					<div class="slide-show-overlay">
						<i class="fa fa-remove"></i>
					</div>
				</li>
				<li class="upload-img-slide">
					<i class="fa fa-plus"></i>
					<input type="file" name="">
				</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>
				<li class="with-img-slide">&nbsp;</li>				 
			</ul>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Create Slideshow</button>
      </div>
    </div>

  </div>
</div>

<!-- edit slide show slide text-->
<div id="edit-slide-show-slide" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Photo</h4>
      </div>
      <div class="modal-body">
        <div class="edit-slide-left-sec">
        	<div class="common-row">
        		<textarea class="form-control"></textarea>
        		<span>60</span>
        	</div>
        	<div class="common-row">
        		<label>Font</label>
        		<div class="custom-autocomplete-select">
					<select class="selectpicker show-tick" data-size="5">
						<option data-tokens="ketchup mustard">Helvatica</option>
						<option data-tokens="mustard">Helvatica</option>
						<option data-tokens="frosting">Helvatica</option>
						<option data-tokens="ketchup mustard">Helvatica</option>
					</select>													
				</div>
				<div class="font-style">
			       	<div class="thumb f-child">
			     		<span>Regular</span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb l-child selected-img-thumb">
			     		<span>Bold</span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			    </div>
        	</div>
        	<div class="row common-row">
        		<label class="col-md-6">Colors</label>
        		<div class="col-md-6">Text color</div>
        	</div>
        	<div class="row common-row">
        		<label class="col-md-6">Alognment</label>
        		<div class="col-md-6">Text alignment</div>
        	</div>
        </div>
        <div class="edit-slide-right-sec">
        	<img src="../img/ident-acc-icon.jpg">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Save</button>
      </div>
    </div>

  </div>
</div>

<!-- use existing poup-->
<div id="create-new-post-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Page Post</h4>
      </div>
      <div class="modal-body">
        	<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#status"><i class="fa fa-pencil"></i> Staus</a></li>
			  <li><a data-toggle="tab" href="#photo"><i class="fa fa-camera"></i> Photo</a></li>
			</ul>
			<div class="tab-content">
			  <div id="status" class="tab-pane fade in active">
			   <textarea class="form-control" placeholder="Write something ..."></textarea>
			  </div>
			  <div id="photo" class="tab-pane fade">
			   	<ul>
			   		<li class="add-photo-to-status">
			   			<div class="left">
			   				<img src="../img/upload-img-to-status.png">
			   			</div>
			   			<div class="right">
			   				<b>Upload Photo/Video</b>
			   				<p>Add photo or video to your staus.</p>
			   			</div>
			   			<input type="file" name="">
			   		</li>
			   	</ul>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Save</button>
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
					<div class="use-temp-pop-row">
						<h5>Cover Image or Video</h5>
						<p>Use an eye-catching image or video as a visual way to introduce your product, service or brand.</p>
						<div class="use-temp-radio-tabs">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#temp-radio-tab1" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Image</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
								<li>
									<a href="#temp-radio-tab2" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Video</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
							</ul>
								
							<div class="tab-content">
						    	<div class="img-radio-tab-cont tab-pane active" id="temp-radio-tab1">
						    		<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Replace Photo</button>
						    			</div>
						    		</div>	
						    		<div class="common-row">
						    			<label>Destination URL (optional)</label>
						    			<input type="text" name="" class="form-control">
						    		</div>
						    	</div>
								<div class="video-slideshow-radio-tab-cont tab-pane" id="temp-radio-tab2">
					    			<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Upload Video</button>
						    			</div>
						    		</div>							    		 
								</div>
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Button</h5>
						<p>Give people an action to take.</p>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Carousel</h5>
						<p>Upload 2-10 images to show them in a carousel format. If images are not the same size, they will be cropped to match your first image.</p>
						<ul class="crsl-slide">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="active">6</a></li>
							<li><a href="#">+</a></li>
						</ul>
						<div class="edit-selected-slide">
							<div class="common-row">	
				    			<div class="left-img">
				    				<img src="img/use-temp-img-thumb.jpg">
				    			</div>
				    			<div class="right-detail">
				    				 <button class="light-grey-btn">Replace Photo</button>
				    				 <button class="light-grey-btn pull-right"><i class="fa fa-trash"></i></button>
				    			</div>
				    		</div>
				    		<div class="common-row">
								<label>Destination URL</label>
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<div class="common-row">
							<h5>Text</h5>
							<textarea class="form-control" placeholder="Add descriptive content for people to read while they swipe through your carousel images."></textarea>
						</div>	
						<div class="common-row">
							<h5>Button</h5>
							<p>Give people an action to take.</p>
						</div>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					 
				</div>
				<div class="use-temp-right-sec">
					<div class="common-row" style="margin-top: 0">
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
			<div class="modal-footer">
				<button class="light-grey-btn"><i class="fa fa-mobile"></i> Preview on Mobile</button>
				<button type="button" class="blue-btn" data-dismiss="modal">Done</button>
			</div>
		</div>

	</div>
</div>


<div id="add-cnvs-component-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select components to add</h4>
      </div>
      <div class="modal-body">
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/button_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Button</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="padding-top: 33px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/carousel_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Carousel</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/photo_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Photo</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/text_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Text Block</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/video_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Video</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>

<!-- common select image popup -->
<div id="common-select-img-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#upload-img-tab"><i class="fa fa-upload"></i> Upload Image</a></li>
		  <li><a data-toggle="tab" href="#img-library"><i class="fa fa-file-image-o"></i> Image Library</a></li>
		  <li><a data-toggle="tab" href="#stock-imgs"><i class="fa fa-file-image-o"></i> Stock Images</a></li>
		</ul>
      </div>
      <div class="modal-body">																											       
			<div class="tab-content">
			  <div id="upload-img-tab" class="tab-pane fade in active" style="text-align:center;">
			   <div class="upload-btn-wrapper">
				  <button class="btn"><i class="fa fa-upload"></i> Drag and drop an image or click to upload</button>
				  <input type="file" name="myfile" />
				</div>
			  </div>
			  <div id="img-library" class="tab-pane fade">
			     <div class="img-filtering-tags">
			     		<a href="#">All 23</a> <a href="#" class="active">Add Images 23</a> <a href="#">Instagram Images</a>
			     </div>
			     <div class="img-gallery-thumb">
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">																														     	
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     </div>
			  </div>
			  <div id="stock-imgs" class="tab-pane fade">
			    <div class="common-row img-search-field">
			    	<input type="text" name="" class="form-control" placeholder="Search Free Stock Images">
			    </div>
			    <div class="stock-imgs-gallery-thumb">
			    	<div class="no-stock-search">
			    		<img src="img/no-stock-dummy-img.png">
			    		<p>Search for professional images to use in your ads.<br>Any images you select will be saved in your image library.</p>
			    	</div>
			    </div>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Confirm</button>
      </div>
    </div>

  </div>
</div>

<div id="common-select-video-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#browse-lib"><i class="fa fa-file-video-o"></i> Browse Library</a></li>
		  <li><a data-toggle="tab" href="#paste-link"><i class="fa fa-link"></i> Paste a Link</a></li>
		  <li><a data-toggle="tab" href="#upload-video"><i class="fa fa-upload"></i> Upload Videos</a></li>
		</ul>
      </div>
      <div class="modal-body">																											       
			<div class="tab-content">
			  <div id="browse-lib" class="tab-pane fade in active">
				    <div class="filtering-and-grid-view-optns">
				    	<a href="#" class="video-list-view-link"><i aria-hidden="true" class="fa fa-th-list"></i></a>
				    	<a href="#" class="video-grid-view-link"><i aria-hidden="true" class="fa fa-th-large"></i></a>
				    </div>
				    <div class="video-views-outr">
				    	<div class="simple-custom-upload-btn">
					    	<button class="light-grey-btn"><i class="fa fa-upload"></i> Upload</button>
					    	<input type="file" name="">
					    </div>	
				    	<div class="video-list-video">
								<table  class="table table-bordered table-inverse table-striped table-hover">
	                      		<thead class="thead-default">
	                      			<tr>
	                      				<th></th>																												                      				 
	                      				<th>Video Name</th>
	                      				<th>Duration</th>
	                      				<th>Last Used</th>
	                      				<th>Resolution</th>
	                      			</tr>
	                      		</thead>
	                      		<tbody>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      		</tbody>
	                      	</table>
				    	</div>
				    	<div class="video-grid-view">
				    		<div class="common-row">
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-add">
				    						<input type="file" name="">
				    						<div class="upload-video-and-plus">
					    						<i class="fa fa-plus"></i>
					    						<p>Upload Video</p>
				    						</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">				    				
				    				<div class="single-video-thumb-view thumb">
				    						<span><img src="img/a.jpg"></span>
				    						<input type="radio" name="img-thumb" class="thumbCheck">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>				    						 
				    						<div class="single-video-thumb-overlay">&nbsp;</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view thumb">
				    						<span><img src="img/a.jpg"></span>
				    						<input type="radio" name="" class="thumbCheck">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>
				    						<div class="single-video-thumb-overlay">&nbsp;</div>
				    				</div>
				    			</div>
				    		</div>
				    		<div class="common-row">
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view thumb">
				    						<span><img src="img/a.jpg"></span>
				    						<input type="radio" name="" class="thumbCheck">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>				    						
				    						<div class="single-video-thumb-overlay">&nbsp;</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">				    				
				    				<div class="single-video-thumb-view thumb">
				    						<span><img src="img/a.jpg"></span>
				    						<input type="radio" name="img-thumb" class="thumbCheck">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>				    						 
				    						<div class="single-video-thumb-overlay">&nbsp;</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view thumb">
				    						<span><img src="img/a.jpg"></span>
				    						<input type="radio" name="" class="thumbCheck">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>
				    						<div class="single-video-thumb-overlay">&nbsp;</div>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
			  </div>
			  <div id="paste-link" class="tab-pane fade">
			    <div class="paste-link-left">
			    	<div class="common-row upload-inst">
			    		<img src="img/paste-link-dummy-img.png"> <span>Quickly upload a video by pasting the link of a hosted video file.</span>
			    	</div>
			    	<div class="common-row">
			    		<div class="col-md-3 text-right"><label>Video URL</label></div>
			    		<div class="col-md-8"><input type="text" name="" class="form-control"></div>
			    	</div>
			    	<div class="common-row">
			    		<div class="col-md-3 text-right"><label>Title</label></div>
			    		<div class="col-md-8"><input type="text" name="" class="form-control"></div>
			    	</div>
			    </div>
			    <div class="paste-link-right">
			    	<b>Paste a Direct Download Link to Your Video</b>
			    	<p>Your video file must be directly downloadable from the link. We currently don't support shareable links or links that need to be authenticated.</p>
			    	<p>If you are having trouble uploading, make sure you are pasting a direct download link from wherever it is hosted. You can test if it is downloadable by pasting the link in your browser. If supported, the video file will automatically download.</p>
			    </div>
			  </div>
			  <div id="upload-video" class="tab-pane fade">
			     	<div class="upload-btn-wrapper">
					  <button class="btn"><i class="fa fa-upload"></i> Drag and drop a video or click to upload</button>
					  <input type="file" name="myfile" />
					</div>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Confirm</button>
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
					<div class="use-temp-pop-row">
						<h5>Cover Image or Video</h5>
						<p>Use an eye-catching image or video as a visual way to introduce your product, service or brand.</p>
						<div class="use-temp-radio-tabs">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#temp-radio-tab1" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Image</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
								<li>
									<a href="#temp-radio-tab2" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Video</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
							</ul>
								
							<div class="tab-content">
						    	<div class="img-radio-tab-cont tab-pane active" id="temp-radio-tab1">
						    		<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Replace Photo</button>
						    			</div>
						    		</div>	
						    		<div class="common-row">
						    			<label>Destination URL (optional)</label>
						    			<input type="text" name="" class="form-control">
						    		</div>
						    	</div>
								<div class="video-slideshow-radio-tab-cont tab-pane" id="temp-radio-tab2">
					    			<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Upload Video</button>
						    			</div>
						    		</div>							    		 
								</div>
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Button</h5>
						<p>Give people an action to take.</p>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Carousel</h5>
						<p>Upload 2-10 images to show them in a carousel format. If images are not the same size, they will be cropped to match your first image.</p>
						<ul class="crsl-slide">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="active">6</a></li>
							<li><a href="#">+</a></li>
						</ul>
						<div class="edit-selected-slide">
							<div class="common-row">	
				    			<div class="left-img">
				    				<img src="img/use-temp-img-thumb.jpg">
				    			</div>
				    			<div class="right-detail">
				    				 <button class="light-grey-btn">Replace Photo</button>
				    				 <button class="light-grey-btn pull-right"><i class="fa fa-trash"></i></button>
				    			</div>
				    		</div>
				    		<div class="common-row">
								<label>Destination URL</label>
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<div class="common-row">
							<h5>Text</h5>
							<textarea class="form-control" placeholder="Add descriptive content for people to read while they swipe through your carousel images."></textarea>
						</div>	
						<div class="common-row">
							<h5>Button</h5>
							<p>Give people an action to take.</p>
						</div>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					 
				</div>
				<div class="use-temp-right-sec">
					<div class="common-row" style="margin-top: 0">
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
			<div class="modal-footer">
				<button class="light-grey-btn"><i class="fa fa-mobile"></i> Preview on Mobile</button>
				<button type="button" class="blue-btn" data-dismiss="modal">Done</button>
			</div>
		</div>

	</div>
</div>


<div id="add-cnvs-component-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select components to add</h4>
      </div>
      <div class="modal-body">
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/button_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Button</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="padding-top: 33px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/carousel_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Carousel</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/photo_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Photo</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/text_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Text Block</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/video_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Video</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>


<div id="common-select-img-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select components to add</h4>
      </div>
      <div class="modal-body">
       hmhmgm
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>


