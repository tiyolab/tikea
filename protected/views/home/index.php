<!--Responsive slider - START -->
	<div class="responsive-slider-parallax" data-spy="responsive-slider" data-parallax="true" data-parallax-direction="1">
	  <div class="slides-container" data-group="slides">
	    <ul>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Responsive slider</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">With one to one swipe movement!</div>
	              </div>
	              <div class="caption img-html5" data-animate="slideAppearLeftToRight" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/html5.png">
	              </div>
	              <div class="caption img-css3" data-animate="slideAppearLeftToRight">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/css3.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Twitter Boostrap</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">Compatible!</div>
	              </div>
	              <div class="caption img-bootstrap" data-animate="slideAppearDownToUp" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/bootstrap.png">
	              </div>
	              <div class="caption img-twitter" data-animate="slideAppearUpToDown">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/twitter.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Custom animations</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">For any caption you use!</div>
	              </div>
	              <div class="caption img-jquery" data-animate="slideAppearDownToUp" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/jquery.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <a class="slider-control left" href="#" data-jump="prev">Prev</a>
	  <a class="slider-control right" href="#" data-jump="next">Next</a>
	  <div class="pages">
	    <a class="page" href="#" data-jump-to="1">1</a>
	    <a class="page" href="#" data-jump-to="2">2</a>
	    <a class="page" href="#" data-jump-to="3">3</a>
	  </div>
	</div>
    <!-- Responsive slider - END -->
	<main class="custom_tab">
		<input class="custom_tab" id="tab1" type="radio" name="tabs" <?php echo ($active_tab == 0) ? "checked" : ""; ?> >
		<label class="custom_tab" for="tab1">Hotel</label>
		    
		<input class="custom_tab" id="tab2" type="radio" name="tabs" <?php echo ($active_tab == 1) ? "checked" : ""; ?>>
		<label class="custom_tab" for="tab2">Tiket Pesawat</label>
		    
		<input class="custom_tab" id="tab3" type="radio" name="tabs" <?php echo ($active_tab == 2) ? "checked" : ""; ?>>
		<label class="custom_tab" for="tab3">Tiket Kereta Api</label>
		    
		<input class="custom_tab" id="tab4" type="radio" name="tabs" <?php echo ($active_tab == 3) ? "checked" : ""; ?>>
		<label class="custom_tab" for="tab4">Tiket</label>
		    
		<section class="custom_tab" id="content1">
			<div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>

                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>

                                                <div class="input-group input-append date">
									                <input type="text" class="form-control xxx" name="date" />
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>

                                            </div>
                                            <div class="col-xs-4">
                                                <label>Count Night</label>
                                                <div class="selector">
                                                    <select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Who</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                  	<select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button style="animation-duration: 1s; visibility: visible;" type="submit" class="full-width icon-check animated bounce" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
		</section>

		<section class="custom_tab" id="content2">
			<div class="tab-pane fade active in" id="flights-tab">
                            <?php 

                                $form=$this->beginWidget('CActiveForm', array(
                                    'action'=>CHtml::normalizeUrl(array('home/searchFlight')),
                                    /*'method'=>'GET'*/
                                )); 
                                echo $form->errorSummary($flightModel);
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo $form->labelEx($flightModel,'departure'); ?>
                                            <div class="dropdown">
                                                <input name = "s_d" id="depart_airport" type="text" class="input-text full-width dropdown-toggle" placeholder="Bandara keberangkatan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <?php 
                                                /*echo $form->textField($flightModel,null,array(
                                                    "id"=>"depart_airport",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara keberangkatan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "aria-expanded"=>"true"
                                                ));*/

                                                echo $form->hiddenField($flightModel, 'departure', array(
                                                    "id"=>"depart_airport_code"
                                                ));
                                                ?>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height:400px;overflow:auto">
                                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                    <div class="un_used">
                                                                        <div class="un_used">
                                                    <?php
                                                        if($airport != null){
                                                            $tmp_country_id = "";
                                                            for($i = 0; $i < count($airport); $i++){
                                                                if($airport[$i]->country_id != $tmp_country_id){
                                                                    $tmp_country_id = $airport[$i]->country_id;
                                                                    ?>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading" role="tab" id="heading_<?=$i?>">
                                                                              <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$i?>" aria-expanded="false" aria-controls="collapse_<?=$i?>">
                                                                                  <?=$airport[$i]->country_name?>
                                                                                </a>
                                                                              </h4>
                                                                            </div>
                                                                            <div id="collapse_<?=$i?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_<?=$i?>">
                                                                                <ul>
                                                                    <?php
                                                                }
                                                                ?>
                                                                    <li>
                                                                        <a class = "airport_location" datafor="depart_airport" airportcode="<?=$airport[$i]->airport_code?>">
                                                                            <?=$airport[$i]->location_name?> (<?=$airport[$i]->airport_code?>), <?=$airport[$i]->airport_name?>
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label>Going To</label> -->
                                            <?php echo $form->labelEx($flightModel,'arrival'); ?>
                                            <div class="dropdown">
                                                <input name = "s_a" id="arrival_airport" class="input-text full-width dropdown-toggle" placeholder="Bandara tujuan" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <?php 
                                                /*echo $form->textField($flightModel,'',array(
                                                    "id"=>"arrival_airport",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara tujuan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "aria-expanded"=>"true"
                                                ));*/ 

                                                echo $form->hiddenField($flightModel, 'arrival', array(
                                                    "id"=>"arrival_airport_code"
                                                ));
                                                ?>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height:400px;overflow:auto">
                                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                    <div class="un_used">
                                                                        <div class="un_used">
                                                    <?php
                                                        if($airport != null){
                                                            $tmp_country_id = "";
                                                            for($i = 0; $i < count($airport); $i++){
                                                                if($airport[$i]->country_id != $tmp_country_id){
                                                                    $tmp_country_id = $airport[$i]->country_id;
                                                                    ?>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading" role="tab" id="heading_<?=$i?>">
                                                                              <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$i?>" aria-expanded="false" aria-controls="collapse_<?=$i?>">
                                                                                  <?=$airport[$i]->country_name?>
                                                                                </a>
                                                                              </h4>
                                                                            </div>
                                                                            <div id="collapse_<?=$i?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_<?=$i?>">
                                                                                <!-- content -->
                                                                                <ul>
                                                                            
                                                                    <?php
                                                                }
                                                                ?>
                                                                    <li>
                                                                        <a class = "airport_location" datafor="arrival_airport" airportcode="<?=$airport[$i]->airport_code?>">
                                                                            <?=$airport[$i]->location_name?> (<?=$airport[$i]->airport_code?>), <?=$airport[$i]->airport_name?>
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <!-- <label>Departing On</label> -->
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($flightModel,'departDate'); ?>
                                                <div class="input-group input-append date">
									                <!-- <input type="text" class="form-control xxx" name="date" /> -->
                                                    <?php echo $form->textField($flightModel,'departDate',array(
                                                        "class"=>"form-control xxx"
                                                    )); ?>
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($flightModel,'adult'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($flightModel, 'adult', [
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($flightModel,'kids'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($flightModel, 'kids', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($flightModel,'infants'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($flightModel, 'infants', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <?php if(CCaptcha::checkRequirements()): ?>
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($flightModel,'verifyCode'); ?>
                                                <?php $this->widget('CCaptcha'); ?>
                                                <?php echo $form->textField($flightModel,'verifyCode', [
                                                    "class"=>"input-text full-width",
                                                    "placeholder"=>"Kode verifikasi",
                                                ]); ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-12 pull-right">
                                                <button class="full-width icon-check">CARI SEKARANG</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </form> -->
                            <?php $this->endWidget(); ?>
                        </div>
		</section>   

		<section class="custom_tab" id="content3">
            <div class="tab-pane fade active in" id="trains-tab">
                            <?php 

                                $form_train=$this->beginWidget('CActiveForm', array(
                                    'action'=>CHtml::normalizeUrl(array('home/searchTrain')),
                                    /*'method'=>'GET'*/
                                )); 
                                echo $form_train->errorSummary($trainModel);
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo $form_train->labelEx($trainModel,'departure'); ?>
                                            <div class="dropdown">

                                                <?php echo $form_train->textField($trainModel,'departure',array(
                                                    "id"=>"depart_train",
                                                    "train_station_code"=>"",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Stasiun keberangkatan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "ariaaria-expanded"=>"true",
                                                )); ?>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height:400px;overflow:auto">
                                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                    <div class="un_used">
                                                                        <div class="un_used">
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label>Going To</label> -->
                                            <?php echo $form_train->labelEx($trainModel,'arrival'); ?>
                                            <div class="dropdown">
                                                <!-- <input id="arrival_airport" airportcode="" class="input-text full-width dropdown-toggle" placeholder="city, distirct or specific airpot" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> -->
                                                <?php echo $form_train->textField($trainModel,'arrival',array(
                                                    "id"=>"arrival_train",
                                                    "train_station_code"=>"",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Stasiun tujuan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "ariaaria-expanded"=>"true",
                                                )); ?>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height:400px;overflow:auto">
                                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                    <div class="un_used">
                                                                        <div class="un_used">        
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'departDate'); ?>
                                                <div class="input-group input-append date">
                                                    <!-- <input type="text" class="form-control xxx" name="date" /> -->
                                                    <?php echo $form_train->textField($trainModel,'departDate',array(
                                                        "class"=>"form-control xxx"
                                                    )); ?>
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'adult'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($trainModel, 'adult', [
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'kids'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($trainModel, 'kids', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'infants'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($trainModel, 'infants', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'class'); ?>
                                                <?php
                                                    echo $form_train->radioButtonList($trainModel, 'class', $train_class, array());
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <?php if(CCaptcha::checkRequirements()): ?>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($trainModel,'verifyCode'); ?>
                                                <?php $this->widget('CCaptcha'); ?>
                                                <?php echo $form_train->textField($trainModel,'verifyCode', [
                                                    "class"=>"input-text full-width",
                                                    "placeholder"=>"Kode verifikasi",
                                                ]); ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-12 pull-right">
                                                <button class="full-width icon-check">CARI SEKARANG</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </form> -->
                            <?php $this->endWidget(); ?>
                        </div>
		</section>    

		<section class="custom_tab" id="content4">
		</section>  
	</main>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Goa Popular Hotels</a>
								<li class="dropdown active">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Goa</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Bangalore Popular Hotels</a>
								<li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a4.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangalore</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>							
							<li class="button"><a href="#">Bangkok Popular Hotels</a>
								 <li class="dropdown">
									<a href="products">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangkok</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$240</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Malaysia Popular Hotels</a>
								 <li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Malaysia</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$320</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Why Choose Us</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>09</h5>
									<span>Million</span>
								</div>
								<div class="choose-right">
									<a href="products.html">Aliquam faucibus vehicula vulputate</a>
									<p>Maecenas euismod tortor a tristique convallis diam eros aliquam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									<a href="products.html">Sed tincidunt consectetur augue</a>
									<p>Nulla bibendum libero in nunc eleifend tincidunt. Aliquam quis molestie lectus</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
									<a href="products.html">Nullam et arcu interdum, accumsan justo</a>
									<p>Maecenas dapibus eu purus vel imperdiet. Maecenas cursus, arcu sed tempus </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.html">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a2.jpg" alt="" />
							<div class="destinations-grid-info tours">
								<h5>Book your next Malaysia holiday!</h5>
								<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
								<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Destinations</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t1.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t2.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t3.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t4.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
						<a href="products.html">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt="" />
							<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Latest News</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="single.html">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
									<div class="date-text">
										<a href="single.html">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div>
									<div class="date-text">
										<a href="single.html">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div>
									<div class="date-text">
										<a href="single.html">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div>
									<div class="date-text">
										<a href="single.html">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div>
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- /date -->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /banner-bottom - END -->

	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a4.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- /slider -->
		</div>
		<!-- /container -->
	</div>
	<!-- popular-grids - END -->

    <!-- script to handle selected airport -->
    <script>
        $(document).ready(function(){
            $(".airport_location").on('click', function(){
                dataFor = $(this).attr('datafor');
                airportCode = $(this).attr('airportcode');
                name = $(this).text().trim();

                $("#"+dataFor).val(name);
                $("#"+dataFor+"_code").val(airportCode);
            });
        });
    </script>
    <!-- script to handle selected airport - END -->