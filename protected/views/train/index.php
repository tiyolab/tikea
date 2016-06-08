<main class="custom_tab">
		<input class="custom_tab" id="tab3" type="radio" name="tabs" checked>
		<label class="custom_tab" for="tab3">Tiket Kereta Api</label>

		<section class="custom_tab" id="content3">
            <div class="tab-pane fade active in" id="trains-tab">
                            <?php 

                                $form_train=$this->beginWidget('CActiveForm', array(
                                    // 'action'=>CHtml::normalizeUrl(array('home/searchTrain')),
                                    /*'method'=>'GET'*/
                                )); 
                                echo $form_train->errorSummary($model);
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo $form_train->labelEx($model,'departure'); ?>
                                            <div class="dropdown">

                                                <?php echo $form_train->textField($model,'departure',array(
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
                                            <?php echo $form_train->labelEx($model,'arrival'); ?>
                                            <div class="dropdown">
                                                <!-- <input id="arrival_airport" airportcode="" class="input-text full-width dropdown-toggle" placeholder="city, distirct or specific airpot" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> -->
                                                <?php echo $form_train->textField($model,'arrival',array(
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
                                                <?php echo $form_train->labelEx($model,'departDate'); ?>
                                                <div class="input-group input-append date">
                                                    <!-- <input type="text" class="form-control xxx" name="date" /> -->
                                                    <?php echo $form_train->textField($model,'departDate',array(
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
                                                <?php echo $form_train->labelEx($model,'adult'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($model, 'adult', [
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($model,'kids'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($model, 'kids', [
                                                        0 => "0",
                                                        1 => "1",
                                                        2 => "2",
                                                        3 => "3",
                                                        4 => "4",
                                                    ], ["class"=>"full-width form-control"]); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($model,'infants'); ?>
                                                <div class="selector">
                                                    <?php echo $form_train->dropDownList($model, 'infants', [
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
                                                <?php echo $form_train->labelEx($model,'class'); ?>
                                                <?php
                                                    echo $form_train->radioButtonList($model, 'class', $train_class, array());
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <?php if(CCaptcha::checkRequirements()): ?>
                                            <div class="col-xs-12">
                                                <?php echo $form_train->labelEx($model,'verifyCode'); ?>
                                                <?php $this->widget('CCaptcha'); ?>
                                                <?php echo $form_train->textField($model,'verifyCode', [
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