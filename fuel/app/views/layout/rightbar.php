<div class="sidebar">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="search for property">
        <span class="input-group-btn">
            <button class="btn btn-brick" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div>
    <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
    <br>
    <form action="<?php Uri::base(false) ?>search" method="get" id="property-search">
        <span class="select-box input-right" title="Location">
            <select name="Location" data-placeholder="Location">
                <option value="" selected="">Location</option>
                <option value="1">Airoli</option>
                <option value="2">Rabale</option>
                <option value="22">Mansarovar</option>
                <option value="23">Taloja</option>
                <option value="24">Roadpali</option>
                <option value="25">Mahape</option>
                <option value="26">Karanjade</option>
                <option value="27">Navade</option>
                <option value="28">Dombivali</option>
                <option value="29">Shilphata</option>
                <option value="30">Khopta</option>
            </select>
        </span>
        <span class="select-box input-right" title="RentBuy">
            <select name="Type" data-placeholder="Sale Or Rent">
                <option value="1">Sale</option>
                <option value="2">Rent</option>
            </select>
        </span>
        <span class="select-box input-right" title="RentBuy">
            <select name="Type" data-placeholder="Looking For">
                <option value="1">Flats</option>
                <option value="2">Projects</option>
                <option value="3">Bunglows</option>
            </select>
        </span>
        <span class="select-box input-right" title="RentBuy">
            <select name="Bedrooms" data-placeholder="Bedrooms">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </span>
        </span>
        <div class="slider-range-container">
            <div class="row">
                <div class="header">
                    <div class="col-xs-6">
                        <input type="text" id="amount-min">
                    </div>
                    <div class="col-xs-6">
                        <input type="text" id="amount-max">
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="slider-range"></div>
                </div>
                <div class="col-xs-6">
                    <label for="amount-min" class="uppercase">Price Min.</label>
                </div>
                <div class="col-xs-6">
                    <label for="amount-max" class="uppercase pull-right">Price Max.</label>
                </div>
            </div>
        </div>

        <a class="btn light-grey flat btn-block uppercase" onclick="document.getElementById('property-search').submit()">
            Find Property
        </a>

    </form>
    <hr class="sidebar-separator">
    <div id="featured" class="flexslider title-slider" data-animation="fade" data-loop="true">
        <div class="title clear-title">
            Featured Properties
        </div>
        <ul class="slides">
            <li>
                <div class="thumbnail clean">
                    <div class="listing-image">
                        <span class="listing-tag important">Reduced</span>
                        <img src="<?php echo Uri::base(false); ?>assets/img/demo-content/listing1.jpg" alt="Listing">
                        <div class="image-links">
                            <div class="left">
                                <a class="inner" href="<?php echo Uri::base(false); ?>assets/img/demo-content/listing2.jpg" data-lightbox="related-10">
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
                                <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="caption">
                        <h4>Villa Överby<br>
                            <small>Sweden, Stockholm</small></h4>

                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
                    <ul class="property-tags">
                        <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                        <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                        <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>