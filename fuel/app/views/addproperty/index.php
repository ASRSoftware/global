<div class="breadcrumbs">
    <ol class="breadcrumb text-right">
        <li><a href="index-2.html">Home</a></li><li class="active">About Us</li>
    </ol>
</div>
<section>
    <div class="title">
        List Your Property
    </div>
    <div class="caption">
        <h3 class="uppercase">Add Your Property. </h3>
    </div>
    <p>
    <form role="form" action="http://localhost/global/public/addproperty/index/" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="col-md-6">
                <label>Property Name</label>
                <input class="form-control" name="property_name" placeholder="Property Name"> 
            </div>
            <div class="col-lg-3">
                <label>Property Type</label>
                <select class="form-control" name="property_type" placeholder="Property Bed">
                    <option value="Flat">Flat</option>
                    <option value="Project">Project</option>
                    <option value="Bunglow">Bunglow</option>
                </select> 
            </div>
            <div class="col-lg-3">
                <label>Property Mode</label>
                <select class="form-control" name="property_mode" placeholder="Property Bed">
                    <option value="Sale">Sale</option>
                    <option value="Rent">Rent</option>
                </select>                   
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3">
                <label>Property Price</label>
                <input class="form-control" name="property_price" placeholder="Property Price">                     
            </div>
            <div class="col-lg-3">
                <label>Property Area</label>
                <input class="form-control" name="area" placeholder="Property Area">                     
            </div>
            <div class="col-lg-6">
                <label>Property Address</label>
                <textarea class="form-control" name="property_address" placeholder="Property Address"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label>No of Bedroom</label>
                <select class="form-control" name="bedrooms" placeholder="Property Bed">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>                      
            </div>
            <div class="col-lg-3">
                <label>No of Bathroom</label>
                <select class="form-control" name="bathrooms" placeholder="Property Bed">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>                      
            </div>

            <div class="col-lg-6">
                <label>Property Desc</label>
                <textarea class="form-control" name="property_desc" placeholder="Property Desc"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label>Floor No</label>
                <select class="form-control" name="floorno" placeholder="Property Bed">
                    <option>Ground Floor</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>                      
            </div>
            <div class="col-lg-3">
                <label>No of Balconies</label>
                <select class="form-control" name="balconies" placeholder="Property Bed">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>                      
            </div>
            <div class="col-lg-6">
                <label>Landmark</label>
                <textarea class="form-control" name="location" placeholder="Landmark"></textarea>                    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Feature</h1>
            </div>
        </div>
        <div class="row">
            <!-- /.col-lg-12 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Vastu</label>
                    <label class="radio-inline">
                        <input type="radio" name="in_vastu" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="in_vastu" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Inter com</label>
                    <label class="radio-inline">
                        <input type="radio" name="in_intercom" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="in_intercom" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Gym</label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_gym" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_gym" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Security</label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_security" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_security" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Swimming</label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_swimming" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_swimming" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>Lift</label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_lift" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_lift" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>Parking</label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_parking" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_parking" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label><abbr title="Power">PW</abbr>.Backup </label>
                    <label class="radio-inline">
                        <input type="radio" name="ex_powerbackup" id="optionsRadiosInline1" value="Yes" checked="">Yes
                    </label>
                    <label class="radio-inline" style="margin-left: 5px;">
                        <input type="radio" name="ex_powerbackup" id="optionsRadiosInline2" value="No">No
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Distance</h1>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label>Distance from Hospital</label>
                    <input class="form-control" name="hospital_dis" placeholder="Distance from Hospital">  
                </div>
                <div class="col-lg-3">
                    <label>Distance from School</label>
                    <input class="form-control" name="school_dis" placeholder="Distance from School">  
                </div>
                <div class="col-lg-3">
                    <label>Distance from Railway</label>
                    <input class="form-control" name="railway_dis" placeholder="Distance from Railway">  
                </div>
                <div class="col-lg-3">
                    <label>Distance from Airport</label>
                    <input class="form-control" name="airport_dis" placeholder="Distance from Airport">  
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label>Distance from City Center</label>
                    <input class="form-control" name="city_center" placeholder="Distance from City Center">  
                </div>
                <div class="col-lg-3">
                    <label>Distance from Bus</label>
                    <input class="form-control" name="bus_depot" placeholder="Distance from Bus">  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label>Contact Name</label>
                    <input class="form-control" name="contact_name" placeholder="Contact Name">  
                </div>
                <div class="col-lg-3">
                    <label>Contact No</label>
                    <input class="form-control" name="contact_no" placeholder="Contact No">  
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-default">Reset Button</button>

    </form>
    <br /><br />