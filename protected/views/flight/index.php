<main class="custom_tab">
		<input class="custom_tab" id="tab2" type="radio" name="tabs" checked>
		<label class="custom_tab" for="tab2">Tiket Pesawat</label>

		<section class="custom_tab" id="content2">
			<div class="tab-pane fade active in" id="flights-tab">
                            <?php 

                                $form=$this->beginWidget('CActiveForm', array(
                                    /*'action'=>CHtml::normalizeUrl(array('flight/search')),
                                    'method'=>'GET'*/
                                )); 
                                echo $form->errorSummary($model);
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo $form->labelEx($model,'departure'); ?>
                                            <div class="dropdown">

                                                <?php echo $form->textField($model,'departure',array(
                                                    "id"=>"depart_airport",
                                                    "airportcode"=>"",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara keberangkatan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "ariaaria-expanded"=>"true",
                                                )); ?>

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
                                            <?php echo $form->labelEx($model,'arrival'); ?>
                                            <div class="dropdown">
                                                <!-- <input id="arrival_airport" airportcode="" class="input-text full-width dropdown-toggle" placeholder="city, distirct or specific airpot" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> -->
                                                <?php echo $form->textField($model,'arrival',array(
                                                    "id"=>"arrival_airport",
                                                    "airportcode"=>"",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara tujuan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "ariaaria-expanded"=>"true",
                                                )); ?>
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
                                                <?php echo $form->labelEx($model,'departDate'); ?>
                                                <div class="input-group input-append date">
									                <!-- <input type="text" class="form-control xxx" name="date" /> -->
                                                    <?php echo $form->textField($model,'departDate',array(
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
                                                <?php echo $form->labelEx($model,'adult'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($model, 'adult', [
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($model,'kids'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($model, 'kids', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form->labelEx($model,'infants'); ?>
                                                <div class="selector">
                                                    <?php echo $form->dropDownList($model, 'infants', [
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
                                                <?php echo $form->labelEx($model,'verifyCode'); ?>
                                                <?php $this->widget('CCaptcha'); ?>
                                                <?php echo $form->textField($model,'verifyCode', [
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
 
	</main>

    <!-- script to handle selected airport -->
    <script>
        $(document).ready(function(){
            $(".airport_location").on('click', function(){
                dataFor = $(this).attr('datafor');
                airportCode = $(this).attr('airportcode');
                name = $(this).text().trim();

                $("#"+dataFor).val(name);
                $("#"+dataFor).attr('airportcode', airportCode);
            });
        });
    </script>
    <!-- script to handle selected airport - END -->