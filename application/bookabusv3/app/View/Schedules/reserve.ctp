<?php 
?>
<?php echo $this->Html->script(array('reserveSeat'))?>
<script>
disableTakenSeats(<?php echo json_encode($bookedSeats)?>);
calculatePrice(<?php echo h($scheduleInfo['Schedule']['fare'])?>);
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-1 col-md-10 data-group">
                <div class="col-md-3">
                    <label>Destination:</label>
                    <?php echo h($scheduleInfo['Schedule']['destination'])?>
                </div>             
                <div class="col-md-3">
                    <label>Station:</label>
                    <?php echo h($scheduleInfo['Schedule']['station'])?>
                </div>
                <div class="col-md-3">
                    <label>Departure:</label>
                    <?php echo h($scheduleInfo['Schedule']['departure'])?>
                </div>
                <div class="col-md-3">
                    <label>Date:</label>
                    <?php echo h($scheduleInfo['Schedule']['date'])?>
                </div>
                <div class="col-md-3">
                    <label>Fare:</label>
                    <?php echo h($scheduleInfo['Schedule']['fare'])?>
                </div>
                
                <div class="col-md-12">
                    <legend>Layout</legend>
                    <div class="col-md-offset-1 col-md-6">
                        <?php echo $this->Form->create('Booking',array('action'=>'saleSummary')); ?>
                        <table id="buslayout">
                            
                            <tr>
                                <td rowspan="6"><label style="transform: rotate(-90deg);">Bus Front</label></td>
                                <td><label class="seatCheckBox">A</label></td>
                                <td><label class="seatCheckBox">B</label></td>
                                <td><label class="seatCheckBox">C</label></td>
                                <td><label class="seatCheckBox">D</label></td>
                                <td><label class="seatCheckBox">E</label></td>
                                <td><label class="seatCheckBox">F</label></td>
                                <td><label class="seatCheckBox">G</label></td>
                                <td><label class="seatCheckBox">H</label></td>
                                <td><label class="seatCheckBox">I</label></td>
                                <td><label class="seatCheckBox">I</label></td>
                                <td><label class="seatCheckBox">J</label></td>
                                <td rowspan="6"><label style="transform: rotate(-90deg);">Bus Back</label></td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA01', 'id'=>'AA01', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA02', 'id'=>'AA02', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA03', 'id'=>'AA03', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA04', 'id'=>'AA04', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA05', 'id'=>'AA05', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA06', 'id'=>'AA06', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA07', 'id'=>'AA07', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA08', 'id'=>'AA08', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA09', 'id'=>'AA09', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA10', 'id'=>'AA10', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AA11', 'id'=>'AA11', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB01', 'id'=>'AB01', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB02', 'id'=>'AB02', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB03', 'id'=>'AB03', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB04', 'id'=>'AB04', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB05', 'id'=>'AB05', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB06', 'id'=>'AB06', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB07', 'id'=>'AB07', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB08', 'id'=>'AB08', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB09', 'id'=>'AB09', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB10', 'id'=>'AB10', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB11', 'id'=>'AB11', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                            </tr>
                            <tr>
                                <td colspan="10"><center><label class="seatCheckBox"> Center Hall </label></center></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AB12', 'id'=>'AB12', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>

                            </tr>
                            <tr>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC01', 'id'=>'AC01', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC02', 'id'=>'AC02', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC03', 'id'=>'AC03', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC04', 'id'=>'AC04', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC05', 'id'=>'AC05', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC06', 'id'=>'AC06', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC07', 'id'=>'AC07', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC08', 'id'=>'AC08', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC09', 'id'=>'AC09', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC10', 'id'=>'AC10', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td><?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AC11', 'id'=>'AC11', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                            </tr>
                            <tr>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD01', 'id'=>'AD01', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD02', 'id'=>'AD02', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD03', 'id'=>'AD03', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD04', 'id'=>'AD04', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD05', 'id'=>'AD05', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD06', 'id'=>'AD06', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD07', 'id'=>'AD07', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD08', 'id'=>'AD08', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD09', 'id'=>'AD09', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD10', 'id'=>'AD10', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                                <td> <?php echo $this->Form->checkbox('seat_code.', array ('value'=> 'AD11', 'id'=>'AD11', 'class'=>'seatCheckBox','hiddenField' => false)); ?></td>
                            </tr>
                        </table>
                        
                        <?php echo $this->Form->input('seat_bus_id', array('value' =>$scheduleInfo['Schedule']['bus_id'], 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('schedule_id', array('value' =>$scheduleInfo['Schedule']['id'], 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('destination', array('value' =>h($scheduleInfo['Schedule']['destination']), 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('station', array('value' => h($scheduleInfo['Schedule']['station']), 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('departure', array('value' => h($scheduleInfo['Schedule']['departure']), 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('date', array('value' => h($scheduleInfo['Schedule']['date']), 'type'=>'hidden')); ?>
                        <?php echo $this->Form->input('fare', array('value' => h($scheduleInfo['Schedule']['fare']), 'type'=>'hidden')); ?> 
                        <br>
                    </div>    
                    <div class="col-md-4">
                        Total Price : <label id="price"> 0.00 </label>
                        <br>
                        <?php echo $this->Form->Submit('Reserve', array('class'=>'btn btn-info'))?> 
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>