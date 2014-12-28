<div style="margin-top: -50px;">
    <form action="<?php Uri::base(false) ?>search" method="get" id="property-search">
        <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
        <div style="height:5px;"></div>
        <div class="row">
            <div class="col-md-3">
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
            </div>
            <div class="col-md-3">
                <span class="select-box input-right" title="RentBuy">
                    <select name="Type" data-placeholder="Sale Or Rent">
                        <option value="1">Sale</option>
                        <option value="2">Rent</option>
                    </select>
                </span>
                
            </div>
            <div class="col-md-3">

                <span class="select-box input-right" title="RentBuy">
                    <select name="Type" data-placeholder="Looking For">
                        <option value="1">Flats</option>
                        <option value="2">Projects</option>
                        <option value="3">Bunglows</option>
                    </select>
                </span>
            </div>
            <div class="col-md-3">

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
            </div>
            <div class="col-md-6">

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

            </div>
            <div class="col-md-6">
                <div style="height: 20px;"></div>
                <a class="btn light-grey flat btn-block uppercase btn-lg" onclick="document.getElementById('property-search').submit()">
                    <i class="fa fa-search"></i> Find Property
                </a>
            </div>
        </div>
    </form>  
</div>