<?php
include('includes/imp/islogin.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<form action="database.php" method="post">
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Personal Information</h2>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Company Name</span>
    			        <input class="form-control"type="text" name="company_name" id="company_name"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Parent Company:</span>
    			        <input class="form-control" type="text" name="parent_company_name" id="parent_company"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
             <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Display Name:</span>
    			        <input class="form-control" type="text" name="display_name" id="display_name"/>
    		        </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                    <span class="input-group-text">Company Type</span>&nbsp;&nbsp;
        Client&nbsp;<input type="checkbox" name="company_type[]" value="Client" id="Gender"
            style=" position: relative;top: 6px; margin-left: 10px;">&nbsp;&nbsp;
        Vendor&nbsp;<input type="checkbox" name="company_type[]" value="Vendor" id="chkPassport" onclick="ShowHideDiv(this)" class="vendordetails" style=" position: relative;top: 6px;">
    		        </div>
                </div>
	       </div>
		</div>
	</div>
           </div>
       </div>
   
   </div>
</div>
<br><br><hr class="solid"><br>
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Contact & Region</h2>
	<div class="row">
    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Address 1:</span>
    			        <input class="form-control"type="text" name="address_one" id="Address_one"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Address 2:</span>
    			        <input class="form-control" type="text" name="address_two" id="Address_two"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
                    <span class="input-group-text">Address 3:</span>
    			        <input class="form-control" type="text"  name="address_three" id="Address_three"/>
    		        </div>  
                </div>
	       </div>
		</div>
	</div>
<br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group">
    			        <span class="input-group-text">Country:</span>
                        <select name="country" class="countries" id="countryId">
                        <option value="">Select Country</option>
                     </select>
    		        </div> 
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group">
    			        <span for="address" class="input-group-text">Select Country</span>
                        <select  name="state" class="states" id="stateId">
                        <option value="">Select State</option>
                     </select>
    		        </div> 
    		        </div>  
                </div>
	       </div>
		</div>
	</div>
    <br><br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group">
    			        <span class="input-group-text">City:</span>
                        <select name="city" class="cities" id="cityId">
                        <option value="">Select City</option>
                     </select>
    		        </div> 
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group">
                    <span class="input-group-text">Zip:</span>
    			        <input class="form-control" type="text" name="zip" id="Address"/>
    		        </div> 
    		        </div>  
                </div>
                <br><br><br><br>
                <div class="row">
             <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Primary Email ID: </span>
    			        <input class="form-control" type="text" name="email_p" id="email_p"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text"> Secondary Email ID:</span>
    			        <input class="form-control"  type="text" name="email_s" id="email_s"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br><br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
                    <span class="input-group-text">Primary Phone No:</span>
    			        <input class="form-control" type="text" name="phone_p" id="phone_p"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                    <span class="input-group-text">Secondary Phone No:</span>
    			        <input class="form-control"  type="text" name="phone_s" id="phone_s"/>
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
</div>
<br><br><hr class="solid"><br>
<div class="container" id="dvPassport" style="display: none">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Links</h2>
           <br>
	<div class="row">
    <div class="col-sm-12">
             <div class="input-group">
             <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Completion link</span>
                     <textarea class="form-control" name="completion_link" id="completion_link"  placeholder="Link" ></textarea>
    		        </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Disqualify link:</span>
                     <textarea  name="disqualify_link" id="disqualify_link" class="form-control"  placeholder="Link" ></textarea>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
             <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Quotafull link:</span>
                     <textarea  class="form-control" name="quotafull_link" id="quotafull_link" placeholder="Link" ></textarea>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br>
    <hr class="solid"><br>
           </div>
       </div>
   
   </div>
</div>
<input type="submit" value="Submit" name="addcompany" class="submit_btn" style="margin-bottom: 65px; margin-top: 36px;">
</form>

<script src="./js/hide_show_event.js"></script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>