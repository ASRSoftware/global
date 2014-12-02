<div class="breadcrumbs">
    <ol class="breadcrumb text-right">
        <li><a href="index-2.html">Home</a></li><li class="active">Portfolio 3 Columns</li>
    </ol>
</div>
<section>
    <div class="title">
        Properties portfolio - 3 columns
    </div>
    <h3 class="uppercase">Do you need some inspiration?</h3>
    <p>
        Ultricies eget, <span class="motive">tempor sit amet</span>, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorpera.
    </p>
    <div class="row">
        <div class="col-md-6">
            <div class="property-filters">
                <ul class="filter-list">
                    <li class="active">
                        <a href="#">All</a>
                    </li>
                    <li>
                        <a href="#">Sale</a>
                    </li>
                    <li>
                        <a href="#">Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="property-filters">
                <div class="row">
                    <div class="col-xs-9">
                        <span class="select-box input-right pull-left" title="Type">
                            <select name="Type" data-placeholder="Select Property Type">
                                <option>Type</option>
                                <option value="1">Residence</option>
                                <option value="2">Villa</option>
                                <option value="3">Family</option>
                                <option value="4">Single</option>
                            </select>
                        </span>
                    </div>
                    <div class="col-xs-3">
                        <button class="btn-filter pull-right">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <?php
        foreach ($datalist as $key => $value) {
            $i = 1;
            ?>
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail boxed">
                    <div class="listing-image">
                        <span class="listing-tag important"><?php echo  idconvert::get_property_mode($value['property_mode']); ?></span>
                        <img src="<?php echo Uri::base(false); ?>assets/img/demo-content/listing8.jpg" alt="Listing">
                        <div class="image-links">
                            <div class="left">
                                <a class="inner" href="<?php echo Uri::base(false); ?>assets/img/demo-content/listing8.jpg" data-lightbox="related-3">
                                    <i class="fa fa-camera"></i>
                                </a>
                            </div>
                            <div class="right">
                                <a class="inner" href="03-portfolio-detail.html">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="image-tags">
                            <ul class="property-tags">
                                <li><span><i class="icon-bed"></i> <?php echo $value['bedrooms'];?><br><span class="small">Bedrooms</span></span></li>
                                <li><span><i class="icon-shower"></i> <?php echo $value['bathrooms'];?><br><span class="small">Bathrooms</span></span></li>
                                <li><span><i class="icon-garage"></i> <?php echo $value['floorno'];?><br><span class="small">Floor No</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <h4><?php echo $value['property_name'];?><br>
                            <small><?php echo $value['property_address'];?></small></h4>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong>Type:</strong>
                            </div>
                            <div class="col-xs-6">
                                <?php echo  idconvert::get_property_type($value['property_type']); ?>
                            </div>
                            <div class="col-xs-6">
                                <strong>Size:</strong>
                            </div>
                            <div class="col-xs-6">
                                <?php echo $value['area'];?> Sq
                            </div>
                            <div class="col-xs-6">
                                <strong>Rooms:</strong>
                            </div>
                            <div class="col-xs-6">
                                <?php echo $value['bedrooms'];?> Bed, <?php echo $value['bathrooms'];?> Bath
                            </div>
                        </div>
                        <hr>
                        <span class="price-tag">
                            <?php echo $value['property_price'];?> Rs
                        </span>
                        <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                    </div>
                </div>
            </div>
            <?php
            if ($i == 2) {
                echo ' <div class="clearfix"></div>';
                $i = 1;
            }
            $i++;
        }
        ?>
        <hr>
        <ul class="pagination pull-right">
            <li><a href="#">Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
</section>