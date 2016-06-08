	<main class="custom_tab">
		    
		<input class="custom_tab" id="tab2" type="radio" name="tabs" checked>
		<label class="custom_tab" for="tab2">Tiket Pesawat</label>
        
		<section class="custom_tab" id="content2">
            <div class="tab-pane fade active in" id="flights-tab">
                            <?php 

                                $form=$this->beginWidget('CActiveForm', array(
                                    'action'=>CHtml::normalizeUrl(array('home/searchFlight')),
                                    /*'method'=>'GET'*/
                                )); 
                                echo $form->errorSummary($model);
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo $form->labelEx($model,'departure'); ?>
                                            <div class="dropdown">
                                                <input id="depart_airport" type="text" class="input-text full-width dropdown-toggle" placeholder="Bandara keberangkatan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name = "s_d" value="<?=$search_data['s_d']?>">
                                                <?php 
                                                /*echo $form->textField($model,null,array(
                                                    "id"=>"depart_airport",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara keberangkatan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "aria-expanded"=>"true"
                                                ));*/

                                                echo $form->hiddenField($model, 'departure', array(
                                                    "id"=>"depart_airport_code",
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
                                            <?php echo $form->labelEx($model,'arrival'); ?>
                                            <div class="dropdown">
                                                <input id="arrival_airport" class="input-text full-width dropdown-toggle" placeholder="Bandara tujuan" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name = "s_a" value="<?=$search_data['s_a']?>">
                                                <?php 
                                                /*echo $form->textField($model,'',array(
                                                    "id"=>"arrival_airport",
                                                    "class"=>"input-text full-width dropdown-toggle",
                                                    "placeholder"=>"Bandara tujuan",
                                                    "data-toggle"=>"dropdown",
                                                    "aria-haspopup"=>"true",
                                                    "aria-expanded"=>"true"
                                                ));*/ 

                                                echo $form->hiddenField($model, 'arrival', array(
                                                    "id"=>"arrival_airport_code",
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
                                                <?php echo $form->labelEx($model,'departDate'); ?>
                                                <div class="input-group input-append date">
                                                    <!-- <input type="text" class="form-control xxx" name="date" /> -->
                                                    <?php
                                                        echo $form->textField($model,'departDate',array(
                                                            "class"=>"form-control xxx",
                                                        )); 
                                                    ?>
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

    <div class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <b>Dari <?=$search_data['s_d']?> ke <?=$search_data['s_a']?></b><br>
                    <b><?=$model->adult?> Dewasa, <?=$model->kids?> Anak-anak, <?=$model->infants?> Bayi</b><br>
                    <b>Berangkat pada <?=$model->departDate?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table border="0" cellpadding="5" cellspacing="5">
                        <tbody>
                            <tr>
                                <td>Minimum Harga :</td>
                                <td><input class = "form-control" id="min_harga" name="min_harga" type="text"></td>
                            </tr>
                            <tr>
                                <td>Maximum harga:</td>
                                <td><input class = "form-control" id="max_harga" name="max_harga" type="text"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <div class="col-xs-12">
                        <label>Waktu Keberangkatan : </label>
                    </div>
                    <div class="col-xs-12">
                        <label id="time_from" data="0" >00:00</label> - <label data="24" id="time_to">24:00</label>
                    </div>
                    <div class="col-xs-12">
                        <input type="range"  id="range_waktu_berangkat" value="0" min="0" max="24" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="display">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Maskapai Penerbangan</th>
                            <th>Nomor<br>Pesawat</th>
                            <th>Pergi</th>
                            <th>Tiba</th>
                            <th>Transit Perjalanan</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Mata Uang</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Maskapai</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Transit</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>

                        <tbody>
                            <?php
                                if($flight != null) :
                                    if(isset($flight->departures)){
                                        for($i = 0; $i < count($flight->departures->result); $i++){
                                            $tmp = $flight->departures->result[$i];
                            ?>

                            <tr>
                                <th>
                                    <img src = "<?=$tmp->image?>">
                                </th>
                                <th>
                                    <?=$tmp->airlines_name?>
                                </th>
                                <th>
                                    <?=$tmp->flight_number?>
                                </th>
                                <th>
                                    <?=$tmp->simple_departure_time?>
                                </th>
                                <th>
                                    <?=$tmp->simple_arrival_time?>
                                </th>
                                <th>
                                    <?=$tmp->stop?>
                                </th>
                                <th>
                                    <?php
                                        if($tmp->has_food != 0){
                                            echo "-dapat makan";
                                        }else{
                                            echo "-";
                                        }
                                    ?>
                                </th>
                                <th>
                                    <?php
                                        if(isset($tmp->markup_price)){
                                            echo $tmp->markup_price;
                                        }else{
                                            echo 0;
                                        }
                                        
                                    ?>
                                </th>
                                <th>
                                    <?=$flight->diagnostic->currency?>
                                </th>
                                <th>
                                    Beli
                                </th>
                            </tr>

                            <?php
                                    }
                                }
                            ?>
                            <?php
                                endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- script to handle selected airport -->
    <script>
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#min_harga').val(), 10 );
                var max = parseInt( $('#max_harga').val(), 10 );
                var age = parseFloat( data[7] ) || 0; // use data for the age column
                var min_time = parseInt( $('#time_from').attr('data'), 10 );
                var max_time = parseInt( $('#time_to').attr('data'), 10 );
                var time_depart = parseInt( data[3].split(":")[0] ) || 0;
                

                if ( 
                    (( isNaN( min ) && isNaN( max ) ) || ( isNaN( min ) && age <= max ) || ( min <= age   && isNaN( max ) ) || ( min <= age   && age <= max )) &&
                    ( min_time <= time_depart && time_depart <= max_time)
                ){
                    console.log(time_depart);
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function(){
            var table = $("#example").DataTable({
                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            console.log(column["0"]["0"]);
                            if(column["0"]["0"] == "5" || column["0"]["0"] == "1"){
                                var select = $('<select class = "form-control"><option value="">Semua</option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                 
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );

                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                } );     
                            }
                            
                        });
                    }
            });

            $('#min_harga, #max_harga').keyup( function() {
                table.draw();
            } );

            $('#range_waktu_berangkat').on('change', function(){
                var value = $(this).val();
                $('#time_from').text(value+':00');
                $('#time_from').attr('data', value);
                table.draw();
            });

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