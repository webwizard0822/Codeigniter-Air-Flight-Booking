<?php echo $header;?>
<?php echo $top_menu;?>
<section class="inward_menu_bottom">
    <div class="container">
        <form class="inward_menu_bottom_block" method="post" name="outbound_step1_form" id="outbound_step1_form"
            method="post" action="<?php echo base_url();?>outbound" autocomplete="off">
            <div class="inward_main_block_holder">
                <div class="outward_main_block_holder_one">
                    <div class="blue_header_form justify-content-center d-flex align-items-center">
                        <h5 class="font-weight-bold mb-0">OUTBOUND BOOKING DETAILS</h5>
                    </div>
                    <div class="inward_menu_bottom_inner">
                        <div class="inward_one_block">
                            <h4>Flight Number</h4>
                            <div class="flight_number">
                                <div class="flight_number_tel">
                                    <input type="text" name="flight_number" placeholder="Enter Flight Number"
                                        id="flight_number" class="autocomplete px_both"
                                        value="<?php echo $this->session->userdata('flight_number');?>"
                                        onkeyup="this.value = this.value.toUpperCase();">
                                    <label id="flight_number-error" class="error" for="flight_number"></label>
                                    <input type="hidden" name="airline_name" id="airline_name_input"
                                        value="<?php echo $this->session->userdata('airline_name');?>">
                                    <input type="hidden" name="originName" id="originName_input"
                                        value="<?php echo $this->session->userdata('originName');?>">
                                    <input type="hidden" name="destinationName" id="destinationName_input"
                                        value="<?php echo $this->session->userdata('destinationName');?>">
                                    <input type="hidden" name="airport_select" id="airport_select_input"
                                        value="<?php echo $this->session->userdata('airport_select');?>">
                                    <input type="hidden" name="terminal_orig" id="terminal_orig_input"
                                        value="<?php echo $this->session->userdata('terminal_orig');?>">
                                    <input type="hidden" name="terminal_dest" id="terminal_dest_input"
                                        value="<?php echo $this->session->userdata('terminal_dest');?>">
                                    <!-- <div class="flight_number_go">
                                        <a href="javascript:void(0);" id="go_btn">Go</a>
                                    </div> -->

                                    <span id="flight_error"
                                        style="color: #ff0000;font-size:13px;margin-left: 18px;"></span>
                                    <div class="status-ajax"></div>
                                </div>
                                <div class="flight_number_images">
                                    <img src="<?php echo $base_url;?>assets/frontend/images/airplane-flight.png">
                                </div>
                            </div>
                        </div>
                        <div class="inward_one_block">
                            <h4>Promo Code</h4>
                            <div class="promo_code">
                                <div class="promo_code_tel">
                                    <input type="text" name="promo_code" placeholder="Enter Promo Code"
                                        id="promo_code" class="autocomplete px_both"
                                        value="<?php echo $this->session->userdata('promo_code_str');?>"
                                        onkeyup="this.value = this.value.toUpperCase();">
                                    <label id="promo_code-error" class="" for="promo_code"></label>
                                    <span id="promo_code_error"
                                        style="color: #ff0000;font-size:13px;margin-left: 18px;"></span>
                                </div>
                                <div class="promo_code_images">
                                    <img src="<?php echo $base_url;?>assets/frontend/images/promo_code_watermark.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inward_two_block inward_two_block_outward1" id="flight_info_block"
                        <?php if($this->session->userdata('airline_name')==''){?>style="display: none;"<?php } ?>>
                        <div class="british_airways">
                            <?php if($this->session->userdata('airline_name')==''){?>
                            <h6 id="airline_name">British Airways - FR1908</h6>
                            <!-- <h4>Early</h4> -->
                            </h6>
                            <?php } else {?>
                            <h6 id="airline_name"><?php echo $this->session->userdata('airline_name');?></h6>
                            <!-- <h4>Early</h4> -->
                            <?php } ?>
                            </h6>
                        </div>
                        <div class="british_airways_one">
                            <!-- <img src="<?php echo $base_url;?>assets/frontend/images/airplane-flight.png"> -->
                            <img src="<?php echo $base_url;?>assets/frontend/images/flight.png">
                            <img src="<?php echo $base_url;?>assets/frontend/images/ellipse-5.png">
                        </div>
                        <div class="dublin_main_block_holder_holder">
                            <div class="dublin_main_block_ninety">
                                <?php if($this->session->userdata('originName')==''){?>
                                <h6 id="originName">Dublin</h6>
                                <?php } else { ?>
                                <h6 id="originName"><?php echo $this->session->userdata('originName');?></h6>
                                <?php } ?>
                                <?php if($this->session->userdata('terminal_orig')!=''){?>
                                <h4 id="terminal_orig"><?php echo $this->session->userdata('terminal_orig');?></h4>
                                <?php } else {?>
                                    <h4 id="terminal_orig"></h4>
                                <?php } ?>
                            </div>
                            <div class="dublin_main_block_ninety">
                                <?php if($this->session->userdata('destinationName')==''){?>
                                <h6 class="dublin_main_block_right" id="destinationName">GDANSK</h6>
                                <?php } else { ?>
                                <h6 class="dublin_main_block_right" id="destinationName">
                                    <?php echo $this->session->userdata('destinationName');?></h6>
                                <?php } ?>
                                <?php if($this->session->userdata('terminal_dest')!=''){?>
                                <h4><?php echo $this->session->userdata('terminal_dest');?></h4>
                                <?php } else {?>
                                    <h4 id="terminal_dest"></h4>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="outward_pickup_date_time">
                        <div class="dublin_main_block_two_holder1">
                            <h4>Pickup Date</h4>
                            <div class="airport_name">

                                <div class="airport_name_holder datepicker_airport_name_holder">
                                    <!-- <input type="text" name="airport" placeholder="Enter Airport"> -->
                                    <input type="text" id="datePicker" name="pickup_date"
                                        placeholder="Enter Pickup Date" readonly="readonly"
                                        value="<?php echo $this->session->userdata('pickup_date');?>" />

                                </div>
                                <div class="airport_name_images">
                                    <img src="<?php echo $base_url;?>assets/frontend/images/calendar.png">
                                </div>
								<label class="error-custom" id="error_pickup_date" style="display:none;">Please select another pickup
                                        date no pickup time available for this selected date</label>
                            </div>
                        </div>
                        <div class="dublin_main_block_two_holder1">
                            <h4>Pickup Time</h4>
                            <div class="airport_name">
                                <div class="airport_name_holder">
                                    <div class="time-picker">
                                        <div class="hour">
                                            <select aria-label="hour" role="listbox" name="pickup_hour" id="pickup_hour"
                                                class="_1rqd9z8NaN">
                                                <option value="">Select</option>
                                                <option value="00"
                                                    <?php if($this->session->userdata('pickup_hour')=="00"){echo "selected";}?>>
                                                    00</option>
                                                <option value="01"
                                                    <?php if($this->session->userdata('pickup_hour')=="01"){echo "selected";}?>>
                                                    01</option>
                                                <option value="02"
                                                    <?php if($this->session->userdata('pickup_hour')=="02"){echo "selected";}?>>
                                                    02</option>
                                                <option value="03"
                                                    <?php if($this->session->userdata('pickup_hour')=="03"){echo "selected";}?>>
                                                    03</option>
                                                <option value="04"
                                                    <?php if($this->session->userdata('pickup_hour')=="04"){echo "selected";}?>>
                                                    04</option>
                                                <option value="05"
                                                    <?php if($this->session->userdata('pickup_hour')=="05"){echo "selected";}?>>
                                                    05</option>
                                                <option value="06"
                                                    <?php if($this->session->userdata('pickup_hour')=="06"){echo "selected";}?>>
                                                    06</option>
                                                <option value="07"
                                                    <?php if($this->session->userdata('pickup_hour')=="07"){echo "selected";}?>>
                                                    07</option>
                                                <option value="08"
                                                    <?php if($this->session->userdata('pickup_hour')=="08"){echo "selected";}?>>
                                                    08</option>
                                                <option value="09"
                                                    <?php if($this->session->userdata('pickup_hour')=="09"){echo "selected";}?>>
                                                    09</option>
                                                <option value="10"
                                                    <?php if($this->session->userdata('pickup_hour')=="10"){echo "selected";}?>>
                                                    10</option>
                                                <option value="11"
                                                    <?php if($this->session->userdata('pickup_hour')=="11"){echo "selected";}?>>
                                                    11</option>
                                                <option value="12"
                                                    <?php if($this->session->userdata('pickup_hour')=="12"){echo "selected";}?>>
                                                    12</option>
                                                <option value="13"
                                                    <?php if($this->session->userdata('pickup_hour')=="13"){echo "selected";}?>>
                                                    13</option>
                                                <option value="14"
                                                    <?php if($this->session->userdata('pickup_hour')=="14"){echo "selected";}?>>
                                                    14</option>
                                                <option value="15"
                                                    <?php if($this->session->userdata('pickup_hour')=="15"){echo "selected";}?>>
                                                    15</option>
                                                <option value="16"
                                                    <?php if($this->session->userdata('pickup_hour')=="16"){echo "selected";}?>>
                                                    16</option>
                                                <option value="17"
                                                    <?php if($this->session->userdata('pickup_hour')=="17"){echo "selected";}?>>
                                                    17</option>
                                                <option value="18"
                                                    <?php if($this->session->userdata('pickup_hour')=="18"){echo "selected";}?>>
                                                    18</option>
                                                <option value="19"
                                                    <?php if($this->session->userdata('pickup_hour')=="19"){echo "selected";}?>>
                                                    19</option>
                                                <option value="20"
                                                    <?php if($this->session->userdata('pickup_hour')=="20"){echo "selected";}?>>
                                                    20</option>
                                                <option value="21"
                                                    <?php if($this->session->userdata('pickup_hour')=="21"){echo "selected";}?>>
                                                    21</option>
                                                <option value="22"
                                                    <?php if($this->session->userdata('pickup_hour')=="22"){echo "selected";}?>>
                                                    22</option>
                                                <option value="23"
                                                    <?php if($this->session->userdata('pickup_hour')=="23"){echo "selected";}?>>
                                                    23</option>
                                            </select>
                                            <svg class="arrow-svg" viewBox="0 0 8 5" width="16px" height="10px"
                                                stroke="currentColor" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="1 1 3.77984472 4 6.53846154 1"></polyline>
                                            </svg>
                                        </div>
                                        <div class="minutes">
                                            <select aria-label="minutes" role="listbox" name="pickup_minute"
                                                id="pickup_minute" class="_1rqd9z8NaN">
                                                <option value="">Select</option>
                                                <option value="00"
                                                    <?php if($this->session->userdata('pickup_minute')=="00"){echo "selected";}?>>
                                                    00</option>
                                                <option value="05"
                                                    <?php if($this->session->userdata('pickup_minute')=="05"){echo "selected";}?>>
                                                    05</option>
                                                <option value="10"
                                                    <?php if($this->session->userdata('pickup_minute')=="10"){echo "selected";}?>>
                                                    10</option>
                                                <option value="15"
                                                    <?php if($this->session->userdata('pickup_minute')=="15"){echo "selected";}?>>
                                                    15</option>
                                                <option value="20"
                                                    <?php if($this->session->userdata('pickup_minute')=="20"){echo "selected";}?>>
                                                    20</option>
                                                <option value="25"
                                                    <?php if($this->session->userdata('pickup_minute')=="25"){echo "selected";}?>>
                                                    25</option>
                                                <option value="30"
                                                    <?php if($this->session->userdata('pickup_minute')=="30"){echo "selected";}?>>
                                                    30</option>
                                                <option value="35"
                                                    <?php if($this->session->userdata('pickup_minute')=="35"){echo "selected";}?>>
                                                    35</option>
                                                <option value="40"
                                                    <?php if($this->session->userdata('pickup_minute')=="40"){echo "selected";}?>>
                                                    40</option>
                                                <option value="45"
                                                    <?php if($this->session->userdata('pickup_minute')=="45"){echo "selected";}?>>
                                                    45</option>
                                                <option value="50"
                                                    <?php if($this->session->userdata('pickup_minute')=="50"){echo "selected";}?>>
                                                    50</option>
                                                <option value="55"
                                                    <?php if($this->session->userdata('pickup_minute')=="55"){echo "selected";}?>>
                                                    55</option>

                                            </select>
                                            <svg class="arrow-svg" viewBox="0 0 8 5" width="16px" height="10px"
                                                stroke="currentColor" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="1 1 3.77984472 4 6.53846154 1"></polyline>
                                            </svg>
                                        </div>

                                        <label class="error-custom" id="error_pickup">Please select pickup time</label>

                                    </div>
                                </div>
                                <div class="airport_name_images">
                                    <img
                                        src="<?php echo $base_url;?>assets/frontend/images/clock-circular-outline-1.png">
                                </div>
                            </div>

                            <div class="time_picker_container_overlay" id="time_picker1">
                                <span class="overlay_timepicker" id="overlay_timepicker1" sec_id="1"></span>
                                <div class="time_picker_holder position-relative">
                                    <div class="Time  time_picker">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-column">
                                                <i class="fas fa-caret-up upHr" id="upHr1" sec_id="1"></i>
                                                <input type="text " class="mx-2 text-center" style="width:50px;"
                                                    value="01" id="valueHr1" readonly>
                                                <i class="fas fa-caret-down downHr" id="upHr1" sec_id="1"></i>
                                            </div>

                                            <div class="d-flex align-items-center flex-column mx-2">
                                                <i class="fas fa-caret-up upMin" id="upMin1" sec_id="1"></i>
                                                <input type="text " class="mx-2 text-center" style="width:50px;"
                                                    value="00" id="valueMin1" readonly>
                                                <i class="fas fa-caret-down downMin" id="DownMin1" sec_id="1"></i>
                                            </div>

                                            <div class="am_pm_holder">
                                                <button class="btn btn-primary btn-sm am_pm" id="am_pm1"
                                                    sec_id="1">AM</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dublin_main_block_two_holder1">
                            <h4>Arrival Time</h4>
                            <div class="airport_name">
                                <div class="airport_name_holder">
                                    <div class="time-picker">
                                        <div class="hour">
                                            <select aria-label="hour" role="listbox" name="arrival_hour"
                                                id="arrival_hour" class="_1rqd9z8NaN">
                                                <option value="">Select</option>
                                                <option value="00"
                                                    <?php if($this->session->userdata('arrival_hour')=="00"){echo "selected";}?>>
                                                    00</option>
                                                <option value="01"
                                                    <?php if($this->session->userdata('arrival_hour')=="01"){echo "selected";}?>>
                                                    01</option>
                                                <option value="02"
                                                    <?php if($this->session->userdata('arrival_hour')=="02"){echo "selected";}?>>
                                                    02</option>
                                                <option value="03"
                                                    <?php if($this->session->userdata('arrival_hour')=="03"){echo "selected";}?>>
                                                    03</option>
                                                <option value="04"
                                                    <?php if($this->session->userdata('arrival_hour')=="04"){echo "selected";}?>>
                                                    04</option>
                                                <option value="05"
                                                    <?php if($this->session->userdata('arrival_hour')=="05"){echo "selected";}?>>
                                                    05</option>
                                                <option value="06"
                                                    <?php if($this->session->userdata('arrival_hour')=="06"){echo "selected";}?>>
                                                    06</option>
                                                <option value="07"
                                                    <?php if($this->session->userdata('arrival_hour')=="07"){echo "selected";}?>>
                                                    07</option>
                                                <option value="08"
                                                    <?php if($this->session->userdata('arrival_hour')=="08"){echo "selected";}?>>
                                                    08</option>
                                                <option value="09"
                                                    <?php if($this->session->userdata('arrival_hour')=="09"){echo "selected";}?>>
                                                    09</option>
                                                <option value="10"
                                                    <?php if($this->session->userdata('arrival_hour')=="10"){echo "selected";}?>>
                                                    10</option>
                                                <option value="11"
                                                    <?php if($this->session->userdata('arrival_hour')=="11"){echo "selected";}?>>
                                                    11</option>
                                                <option value="12"
                                                    <?php if($this->session->userdata('arrival_hour')=="12"){echo "selected";}?>>
                                                    12</option>
                                                <option value="13"
                                                    <?php if($this->session->userdata('arrival_hour')=="13"){echo "selected";}?>>
                                                    13</option>
                                                <option value="14"
                                                    <?php if($this->session->userdata('arrival_hour')=="14"){echo "selected";}?>>
                                                    14</option>
                                                <option value="15"
                                                    <?php if($this->session->userdata('arrival_hour')=="15"){echo "selected";}?>>
                                                    15</option>
                                                <option value="16"
                                                    <?php if($this->session->userdata('arrival_hour')=="16"){echo "selected";}?>>
                                                    16</option>
                                                <option value="17"
                                                    <?php if($this->session->userdata('arrival_hour')=="17"){echo "selected";}?>>
                                                    17</option>
                                                <option value="18"
                                                    <?php if($this->session->userdata('arrival_hour')=="18"){echo "selected";}?>>
                                                    18</option>
                                                <option value="19"
                                                    <?php if($this->session->userdata('arrival_hour')=="19"){echo "selected";}?>>
                                                    19</option>
                                                <option value="20"
                                                    <?php if($this->session->userdata('arrival_hour')=="20"){echo "selected";}?>>
                                                    20</option>
                                                <option value="21"
                                                    <?php if($this->session->userdata('arrival_hour')=="21"){echo "selected";}?>>
                                                    21</option>
                                                <option value="22"
                                                    <?php if($this->session->userdata('arrival_hour')=="22"){echo "selected";}?>>
                                                    22</option>
                                                <option value="23"
                                                    <?php if($this->session->userdata('arrival_hour')=="23"){echo "selected";}?>>
                                                    23</option>
                                            </select>
                                            <svg class="arrow-svg" viewBox="0 0 8 5" width="16px" height="10px"
                                                stroke="currentColor" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="1 1 3.77984472 4 6.53846154 1"></polyline>
                                            </svg>
                                        </div>
                                        <div class="minutes">
                                            <select aria-label="minutes" role="listbox" name="arrival_minute"
                                                id="arrival_minute" class="_1rqd9z8NaN">
                                                <option value="">Select</option>
                                                <option value="00"
                                                    <?php if($this->session->userdata('arrival_minute')=="00"){echo "selected";}?>>
                                                    00</option>
                                                <option value="05"
                                                    <?php if($this->session->userdata('arrival_minute')=="05"){echo "selected";}?>>
                                                    05</option>
                                                <option value="10"
                                                    <?php if($this->session->userdata('arrival_minute')=="10"){echo "selected";}?>>
                                                    10</option>
                                                <option value="15"
                                                    <?php if($this->session->userdata('arrival_minute')=="15"){echo "selected";}?>>
                                                    15</option>
                                                <option value="20"
                                                    <?php if($this->session->userdata('arrival_minute')=="20"){echo "selected";}?>>
                                                    20</option>
                                                <option value="25"
                                                    <?php if($this->session->userdata('arrival_minute')=="25"){echo "selected";}?>>
                                                    25</option>
                                                <option value="30"
                                                    <?php if($this->session->userdata('arrival_minute')=="30"){echo "selected";}?>>
                                                    30</option>
                                                <option value="35"
                                                    <?php if($this->session->userdata('arrival_minute')=="35"){echo "selected";}?>>
                                                    35</option>
                                                <option value="40"
                                                    <?php if($this->session->userdata('arrival_minute')=="40"){echo "selected";}?>>
                                                    40</option>
                                                <option value="45"
                                                    <?php if($this->session->userdata('arrival_minute')=="45"){echo "selected";}?>>
                                                    45</option>
                                                <option value="50"
                                                    <?php if($this->session->userdata('arrival_minute')=="50"){echo "selected";}?>>
                                                    50</option>
                                                <option value="55"
                                                    <?php if($this->session->userdata('arrival_minute')=="55"){echo "selected";}?>>
                                                    55</option>

                                            </select>
                                            <svg class="arrow-svg" viewBox="0 0 8 5" width="16px" height="10px"
                                                stroke="currentColor" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="1 1 3.77984472 4 6.53846154 1"></polyline>
                                            </svg>
                                        </div>
                                        <label class="error-custom" id="error_arrival">Please select arrival
                                            time</label>
                                    </div>
                                </div>
                                <div class="airport_name_images">
                                    <img
                                        src="<?php echo $base_url;?>assets/frontend/images/clock-circular-outline-1.png">
                                </div>
                            </div>

                            <div class="time_picker_container_overlay" id="time_picker2">
                                <span class="overlay_timepicker" id="overlay_timepicker2" sec_id="2"></span>
                                <div class="time_picker_holder position-relative">
                                    <div class="Time  time_picker">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-column">
                                                <i class="fas fa-caret-up upHr" id="upHr2" sec_id="2"></i>
                                                <input type="text " class="mx-2 text-center" style="width:50px;"
                                                    value="01" id="valueHr2" readonly>
                                                <i class="fas fa-caret-down downHr" id="upHr2" sec_id="2"></i>
                                            </div>

                                            <div class="d-flex align-items-center flex-column mx-2">
                                                <i class="fas fa-caret-up upMin" id="upMin2" sec_id="2"></i>
                                                <input type="text " class="mx-2 text-center" style="width:50px;"
                                                    value="00" id="valueMin2" readonly>
                                                <i class="fas fa-caret-down downMin" id="DownMin2" sec_id="2"></i>
                                            </div>

                                            <div class="am_pm_holder">
                                                <button class="btn btn-primary btn-sm am_pm" id="am_pm2"
                                                    sec_id="2">AM</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inward_main_block_holder_one">
                    <div class="inward_third_block">
                        <input type="submit" class="inward_custom_button inward_custom_button_two" name="submit"
                            value="CONTINUE">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php echo $footer;?>
<script type="text/javascript">

</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>
<script type="text/javascript">
var validator;

$("#flight_number").on('blur', function(e) {

    var flight_number = $('#flight_number').val();
    // alert(flight_number);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>outbound/fetch_flight", //this  should be replace by your server side method
        data: {
            flight_number: flight_number
        },
        dataType: 'json',
        success: function(data) {
            common_success(data, flight_number);
        }
    });
    //$(this).next('#datepicker').focus();
    event.preventDefault();
    return false;

});

$("#promo_code").on('blur', function(e) {

    var promo_code = $('#promo_code').val();
    // alert(promo_code);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>outbound/validate_promo_code", //this  should be replace by your server side method
        data: {
            promo_code: promo_code
        },
        dataType: 'json',
        success: function(data) {
            if (data['status'] == 'success') {
                $('#promo_code-error').html('Applied successfully');
                $('#promo_code-error').css("color", "green");
            }else {
                $('#promo_code-error').html('Invalid Promo Code');
                $('#promo_code-error').css("color", "red");
            }
        }
    });
    event.preventDefault();
    return false;

    });


$("#flight_number").on('keypress', function(e) {
    if (e.which == 13) {
        var flight_number = $('#flight_number').val();
        // alert(flight_number);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>outbound/fetch_flight", //this  should be replace by your server side method
            data: {
                flight_number: flight_number
            },
            dataType: 'json',
            success: function(data) {
                common_success(data, flight_number);
            }
        });
        //$(this).next('#datepicker').focus();
        event.preventDefault();
        return false;
    }
});
$("#flight_number").on('keydown', function(e) {
    if (e.which == 9) {
        var flight_number = $('#flight_number').val();
        // alert(flight_number);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>outbound/fetch_flight", //this  should be replace by your server side method
            data: {
                flight_number: flight_number
            },
            dataType: 'json',
            success: function(data) {
                common_success(data, flight_number);
            }
        });
        $(this).next('#datepicker').focus();
        $("#datepicker").focus();
        event.preventDefault();
        return false;
    }
});

function fetch_time(date,current_time,minute){
        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var current_date = (month < 10 ? '0' : '') + month + '/' +
        (day < 10 ? '0' : '') + day + '/' + d.getFullYear();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>outbound/fetch_hour_minute", //this  should be replace by your server side method
            data: {
                selected_date: date,
                current_date:current_date,
                current_hour: current_time,
                current_minute:minute,
            },
            dataType: 'json',
            success: function(data) {
                $('#pickup_hour').html(data.hours);
                $('#pickup_minute').html(data.minute);

                var time1 ='<?php echo $this->session->userdata('pickup_hour')?>';
                var minute1 ='<?php echo $this->session->userdata('pickup_minute')?>';

                if(time1!=''){
                    $('#pickup_hour option[value='+time1+']').prop('selected',true);
                }
                if(minute1!=''){
                    $('#pickup_minute option[value='+minute1+']').prop('selected',true);
                }
                
                
                // console.log(data.hours);
            }
        });
}

function fetch_minute(date,hour,current_time,minute){
        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var current_date = (month < 10 ? '0' : '') + month + '/' +
        (day < 10 ? '0' : '') + day + '/' + d.getFullYear();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>outbound/fetch_minute", //this  should be replace by your server side method
            data: {
                selected_date: date,
                selected_hour:hour,
                current_date:current_date,
                current_hour: current_time,
                current_minute:minute,
            },
            dataType: 'json',
            success: function(data) {
                
                $('#pickup_minute').html(data.minute);
                // console.log(data.hours);
            }
        });
}
function common_success(data, flight_number) {
    console.log(data);
    
    if (data === 0) {
        $('#flight_number-error').show();
        if (flight_number !== '') {
            $('#flight_number-error').html('Incorrect flight number');
        } else {
            $('#flight_number-error').html('Please enter flight number');
        }
        $('#flight_number').val('');
        $('#flight_info_block').hide();
        $('#airline_name_input').val('');
        $('#terminal_orig_input').val('');
        $('#terminal_dest_input').val('');
        $('#originName_input').val('');
        $('#destinationName_input').val('');
        $('#airport_select_input').val('');

    }else if (data === 2) {
            $('#flight_number-error').show();
           
            $('#flight_number-error').html('Sorry, service for this airport is not available');
            
            $('#flight_number').val('');
            $('#flight_info_block').hide();
            $('#airline_name_input').val('');
            $('#terminal_orig_input').val('');
            $('#terminal_dest_input').val('');
            $('#originName_input').val('');
            $('#destinationName_input').val('');
            $('#airport_select_input').val('');
    // }else if (data === 10) {
    //         $('#flight_number-error').show();
           
    //         $('#flight_number-error').html('Sorry, service for this location is not available');
            
    //         $('#flight_number').val('');
    //         $('#flight_info_block').hide();
    //         $('#airline_name_input').val('');
    //         $('#terminal_orig_input').val('');
    //         $('#terminal_dest_input').val('');
    //         $('#originName_input').val('');
    //         $('#destinationName_input').val('');
    //         $('#airport_select_input').val('');

        } else {
        if (data != 1) {
            $('#flight_number-error').hide();
            $('#flight_error').html('');
            $('#flight_info_block').show();
            $("#airline_name_input-error").html('');
            $('#airline_name').html(data.airline_name);
            $('#originName').html(data.originName);
            $('#destinationName').html(data.destinationName);
            $('#terminal_orig').html(data.terminal_orig);
                $('#terminal_dest').html(data.terminal_dest);
            $('#airline_name_input').val(data.airline_name);
            $('#terminal_orig_input').val(data.terminal_orig);
            $('#terminal_dest_input').val(data.terminal_dest);
            $('#originName_input').val(data.originName);
            $('#destinationName_input').val(data.destinationName);
            $('#airport_select_input').val(data.airport_select);
            // validateForm();
        } else {
            $('#flight_number-error').show();
            $('#flight_number-error').html('This is not an Outbound flight number');
            $('#flight_number').val('');
            $('#flight_info_block').hide();
            $('#airline_name_input').val('');
            $('#terminal_orig_input').val('');
            $('#terminal_dest_input').val('');
            $('#originName_input').val('');
            $('#destinationName_input').val('');
            $('#airport_select_input').val('');

        }

    }
}


$("#datepicker").keydown(myfunction); // use keydown
function myfunction(e) {
    if (e.keyCode === 13 || e.keyCode == 9) {
        e.stopPropagation();
        e.preventDefault();

        return false;
    }
}

$(document).ready(function() {
    $("#flight_number").on("keyup", function() {
        $("#airline_name_input-error").hide();
        $("#flight_number-error").hide();
    });
    ch = true;
    var d = new Date();
    var month = d.getMonth() + 1;
    var day = d.getDate();

    var output = (month < 10 ? '0' : '') + month + '/' +
        (day < 10 ? '0' : '') + day + '/' + d.getFullYear();

    var output1 = $.datepicker.formatDate( "dd M yy (D)", new Date());
    var output2 = $.datepicker.formatDate('mm/dd/yy', new Date());

    //var dateObject = $("#datePicker").datepicker('getDate');
    var date = '<?php echo $this->session->userdata('pickup_date1')?>';
    var dt = new Date($.now());
    var time = dt.getHours();
    var minute = dt.getMinutes();
    var time1 ='<?php echo $this->session->userdata('pickup_hour')?>';
    var minute1 ='<?php echo $this->session->userdata('pickup_minute')?>';

    fetch_time(date,time,minute);

    if(time1!=''){
        $('#pickup_hour option[value='+time1+']').prop('selected',true);
    }
    if(minute1!=''){
        $('#pickup_minute option[value='+minute1+']').prop('selected',true);
    }
    $("#datePicker").on("change", function() {
        var dateObject = $("#datePicker").datepicker('getDate');
        var date = $.datepicker.formatDate('mm/dd/yy', dateObject);
        var dt = new Date($.now());
        var time = dt.getHours();
        var minute = dt.getMinutes();
         // time=23;
         // minute=15;
        var pickup_hour = '<?php $this->session->userdata('pickup_hour')?>';
        // alert(date);
        // alert($.datepicker.formatDate('mm/dd/yy', dateToday));
        fetch_time(date,time,minute);

    });
    $('#pickup_hour').on('change', function() {
        var dateObject1 = $("#datePicker").datepicker('getDate');
        var date1 = $.datepicker.formatDate('mm/dd/yy', dateObject1);
        var dt1 = new Date($.now());
        var time1 = dt.getHours() + 4;
        var current_time=dt.getHours();
        var minute = dt.getMinutes();
        // alert(date1);
        var pickup_hour = $("#pickup_hour option:selected").val();
        console.log(output);
        console.log(date1);


        fetch_minute(date1,pickup_hour,current_time,minute);
    });
    $('#pickup_hour11').change(function() {
        var pickup_hour = $('#pickup_hour').val();
        if (pickup_hour == "00") {
            $('#arrival_hour option[value="00"]').detach();
        } else if (pickup_hour == "01") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
        } else if (pickup_hour == "02") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
        } else if (pickup_hour == "03") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
        } else if (pickup_hour == "04") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
        } else if (pickup_hour == "05") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
        } else if (pickup_hour == "06") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
        } else if (pickup_hour == "07") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
        } else if (pickup_hour == "08") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
        } else if (pickup_hour == "09") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
        } else if (pickup_hour == "10") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
        } else if (pickup_hour == "11") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
        } else if (pickup_hour == "12") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
        } else if (pickup_hour == "13") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
        } else if (pickup_hour == "14") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
        } else if (pickup_hour == "15") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
        } else if (pickup_hour == "16") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
        } else if (pickup_hour == "17") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
        } else if (pickup_hour == "18") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
        } else if (pickup_hour == "19") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
            $('#arrival_hour option[value="19"]').detach();
        } else if (pickup_hour == "20") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
            $('#arrival_hour option[value="19"]').detach();
            $('#arrival_hour option[value="20"]').detach();
        } else if (pickup_hour == "21") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
            $('#arrival_hour option[value="19"]').detach();
            $('#arrival_hour option[value="20"]').detach();
            $('#arrival_hour option[value="21"]').detach();
        } else if (pickup_hour == "22") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
            $('#arrival_hour option[value="19"]').detach();
            $('#arrival_hour option[value="20"]').detach();
            $('#arrival_hour option[value="21"]').detach();
            $('#arrival_hour option[value="22"]').detach();
        } else if (pickup_hour == "23") {
            $('#arrival_hour option[value="00"]').detach();
            $('#arrival_hour option[value="01"]').detach();
            $('#arrival_hour option[value="02"]').detach();
            $('#arrival_hour option[value="03"]').detach();
            $('#arrival_hour option[value="04"]').detach();
            $('#arrival_hour option[value="05"]').detach();
            $('#arrival_hour option[value="06"]').detach();
            $('#arrival_hour option[value="07"]').detach();
            $('#arrival_hour option[value="08"]').detach();
            $('#arrival_hour option[value="09"]').detach();
            $('#arrival_hour option[value="11"]').detach();
            $('#arrival_hour option[value="12"]').detach();
            $('#arrival_hour option[value="13"]').detach();
            $('#arrival_hour option[value="10"]').detach();
            $('#arrival_hour option[value="14"]').detach();
            $('#arrival_hour option[value="15"]').detach();
            $('#arrival_hour option[value="16"]').detach();
            $('#arrival_hour option[value="17"]').detach();
            $('#arrival_hour option[value="18"]').detach();
            $('#arrival_hour option[value="19"]').detach();
            $('#arrival_hour option[value="20"]').detach();
            $('#arrival_hour option[value="21"]').detach();
            $('#arrival_hour option[value="22"]').detach();
            $('#arrival_hour option[value="23"]').detach();
        }

    });

    $('.inward_custom_button').on('click', function() {
        $('#flight_error').html('');
    })

    $("#datePicker").on("change", function() {
        $("#datePicker-error").css({
            'display': 'none'
        });
    });
    <?php if($this->session->userdata('flight_number')!=''){ ?>
    // $('#flight_info_block').show();
    $('#go_btn').trigger('click');
    <?php } ?>
    <?php if($this->session->userdata('airline_name')!=''){ ?>
    $('#flight_info_block').show();
    <?php } ?>
    setTimeout(function() {
        $('#flight_number').focus();
        console.log('Focus');
    }, 1000);

    validator = $("#outbound_step1_form").validate({
        focusInvalid: false,
        ignore: [],
        rules: {
            flight_number: {
                required: true,
            },
            pickup_date: {
                required: true,
            },
            pickup_hour: {
                required: true,
            },
            pickup_minute: {
                required: true,
            },
            arrival_hour: {
                required: true,
            },
            arrival_minute: {
                required: true,
            },
            airline_name: {
                required: true,
            }
        },
        messages: {
            flight_number: {
                required: "Please enter flight number"
            },
            pickup_date: {
                required: "Please select pickup date"
            },
            airline_name: {
                required: "Please enter valid flight number"
            }
            // pickup_hour: {
            //     required: "Please select pickup time"
            // },
            // pickup_minute: {
            //     required: "Please select pickup minute"
            // },
            // arrival_hour: {
            //     required: "Please select arrival time"
            // },
            // arrival_minute: {
            //     required: "Please select arrival minute"
            // }
        },
        // submitHandler: function(form) {
        //     form.submit();
        // }
    })

    let first_time_pickup = true;
    let first_time_arrival = true;

    $('#pickup_hour').on('change', function() {
        pickup_hour_validation();
    })

    $('#pickup_minute').on('change', function() {
        pickup_hour_validation();
    })
    $('#arrival_hour').on('change', function() {
        arrival_hour_validation();
    })
    $('#arrival_minute').on('change', function() {
        arrival_hour_validation();
    })

    $('#outbound_step1_form').submit(function() {
        first_time_pickup = false;
        first_time_arrival = false;
        pickup_hour_validation();
        arrival_hour_validation();
    })


    function pickup_hour_validation() {
        if ($('#pickup_hour').val() === '' || $('#pickup_minute').val() === '') {
            if (!first_time_pickup){
                $('#error_pickup').show();
            } 
        } else {
            first_time_pickup = false;
            $('#error_pickup').hide();

        }
    }

    function arrival_hour_validation() {
        if ($('#arrival_hour').val() === '' || $('#arrival_minute').val() === '') {
            if (!first_time_arrival){
                $('#error_arrival').show();
            } 
        } else {
            first_time_arrival = false;
            $('#error_arrival').hide();
        }
    }
	function pickup_date_validation() {
        console.log(first_time_pickup);
        if ($('#pickup_hour').val() === '' || $('#pickup_minute').val() === '') {
            //if (!first_time_pickup) {
            $('#error_pickup_date').add();
            $('#error_pickup_date').show();
            //}
        } else {
            //first_time_pickup = false;
            $('#error_pickup_date').hide();
        }
    }

});
</script>