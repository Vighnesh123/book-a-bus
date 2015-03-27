<?php 
print_r($scheduleInfo);
print_r($bookedSeats);
?>
<?php echo $this->Html->script(array('reserveSeat'))?>
<script>
disableTakenSeats(<?php echo json_encode($bookedSeats)?>);
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-1 col-md-10 data-group">
                <div class="col-md-3">
                    <label>Destination:</label>
                    <?php echo h($scheduleInfo[0]['Schedule']['destination'])?>
                </div>             
                <div class="col-md-3">
                    <label>Station:</label>
                    <?php echo h($scheduleInfo[0]['Schedule']['station'])?>
                </div>
                <div class="col-md-3">
                    <label>Departure:</label>
                    <?php echo h($scheduleInfo[0]['Schedule']['departure'])?>
                </div>
                <div class="col-md-3">
                    <label>Date:</label>
                    <?php echo h($scheduleInfo[0]['Schedule']['date'])?>
                </div>
                <div class="col-md-3">
                    <label>Fare:</label>
                    <?php echo h($scheduleInfo[0]['Schedule']['fare'])?>
                </div>
                
                <div class="col-md-12">
                    <legend>Layout</legend>
                    <table id="buslayout">
                        <tr>
                            <td><?php echo $this->Form->checkbox('AA01', array ('value'=> 'AA01', 'id'=>'AA01', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA02', array ('value'=> 'AA02', 'id'=>'AA02', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA03', array ('value'=> 'AA03', 'id'=>'AA03', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA04', array ('value'=> 'AA04', 'id'=>'AA04', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA05', array ('value'=> 'AA05', 'id'=>'AA05', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA06', array ('value'=> 'AA06', 'id'=>'AA06', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA07', array ('value'=> 'AA07', 'id'=>'AA07', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA08', array ('value'=> 'AA08', 'id'=>'AA08', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA09', array ('value'=> 'AA09', 'id'=>'AA09', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA10', array ('value'=> 'AA10', 'id'=>'AA10', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AA11', array ('value'=> 'AA11', 'id'=>'AA11', 'class'=>'seatCheckBox')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $this->Form->checkbox('AB01', array ('value'=> 'AB01', 'id'=>'AB01', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB02', array ('value'=> 'AB02', 'id'=>'AB02', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB03', array ('value'=> 'AB03', 'id'=>'AB03', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB04', array ('value'=> 'AB04', 'id'=>'AB04', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB05', array ('value'=> 'AB05', 'id'=>'AB05', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB06', array ('value'=> 'AB06', 'id'=>'AB06', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB07', array ('value'=> 'AB07', 'id'=>'AB07', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB08', array ('value'=> 'AB08', 'id'=>'AB08', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB09', array ('value'=> 'AB09', 'id'=>'AB09', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB10', array ('value'=> 'AB10', 'id'=>'AB10', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AB11', array ('value'=> 'AB11', 'id'=>'AB11', 'class'=>'seatCheckBox')); ?></td>
                        </tr>
                        <tr>
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
                        </tr>
                        <tr>
                            <td><?php echo $this->Form->checkbox('AC01', array ('value'=> 'AC01', 'id'=>'AC01', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC02', array ('value'=> 'AC02', 'id'=>'AC02', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC03', array ('value'=> 'AC03', 'id'=>'AC03', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC04', array ('value'=> 'AC04', 'id'=>'AC04', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC05', array ('value'=> 'AC05', 'id'=>'AC05', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC06', array ('value'=> 'AC06', 'id'=>'AC06', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC07', array ('value'=> 'AC07', 'id'=>'AC07', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC08', array ('value'=> 'AC08', 'id'=>'AC08', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC09', array ('value'=> 'AC09', 'id'=>'AC09', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC10', array ('value'=> 'AC10', 'id'=>'AC10', 'class'=>'seatCheckBox')); ?></td>
                            <td><?php echo $this->Form->checkbox('AC11', array ('value'=> 'AC11', 'id'=>'AC11', 'class'=>'seatCheckBox')); ?></td>
                        </tr>
                        <tr>
                            <td> <?php echo $this->Form->checkbox('AD01', array ('value'=> 'AD01', 'id'=>'AD01', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD02', array ('value'=> 'AD02', 'id'=>'AD02', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD03', array ('value'=> 'AD03', 'id'=>'AD03', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD04', array ('value'=> 'AD04', 'id'=>'AD04', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD05', array ('value'=> 'AD05', 'id'=>'AD05', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD06', array ('value'=> 'AD06', 'id'=>'AD06', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD07', array ('value'=> 'AD07', 'id'=>'AD07', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD08', array ('value'=> 'AD08', 'id'=>'AD08', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD09', array ('value'=> 'AD09', 'id'=>'AD09', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD10', array ('value'=> 'AD10', 'id'=>'AD10', 'class'=>'seatCheckBox')); ?></td>
                            <td> <?php echo $this->Form->checkbox('AD11', array ('value'=> 'AD11', 'id'=>'AD11', 'class'=>'seatCheckBox')); ?></td>
                        </tr>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</div>