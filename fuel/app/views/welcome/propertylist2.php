<section>
    <div class="flexslider title-slider" data-animation="fade" data-loop="true">
        <div class="title">
            Recent Listings 
        </div>
        <ul class="slides">
            <li>
                <div class="row">
                    <?php foreach($listdata as $key=>$value){ 
                     $i = 1; ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail clean">
                            <div class="listing-image">
                                <span class="listing-tag important"><?php echo  idconvert::get_property_mode($value['property_mode']); ?></span>
                                <img src="<?php echo Uri::base(false); ?>assets/img/demo-content/listing1.jpg" alt="Listing">
                                <div class="image-links">
                                    <div class="left">
                                        <a class="inner" href="<?php echo Uri::base(false); ?>assets/img/demo-content/listing1.jpg" data-lightbox="related-1">
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
                            <div class="caption">
                                <h4><?php echo $value['property_name'];?><br>
                                    <small><?php echo $value['property_address'];?></small></h4>

                                <p><?php echo $value['property_desc'];?></p>
                            </div>
                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong><?php echo $value['property_price'];?> Rs</strong></span>
                            <ul class="property-tags">
                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> <?php echo $value['area'];?> sqm</span></li>
                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php if($i == 2){
                     echo ' <div class="clearfix"></div>';
                     $i = 1;
                    }
                    $i++; ?>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </div>
</section>