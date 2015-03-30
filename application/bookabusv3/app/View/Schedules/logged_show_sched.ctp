<?php

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-2 col-md-8 data-group">
                <div class="col-md-12 form-inline">
                    <br>
                        <?php echo $this->Form->create(array(
                            'inputDefaults' => array(
                                'div' => 'form-group',
                                'label' => false,
                                'class' => 'form-control',
                                'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                            )
                        )); ?>
                        <fieldset>
                                <legend><?php echo __('Find Schedule ...'); ?></legend>
                        </fieldset>
                    <?php 
                        echo $this->Form->input('station', array(
                                    'type'=>'text', 
                                    'placeholder'=>'Preffered Station',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                        ));
                        echo $this->Form->input('destination', array(
                                    'type'=>'text', 
                                    'placeholder'=>'Destination',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                        ));
                        echo $this->Form->input('date', array(
                                    'id'=>'lss-date',
                                    'type'=>'text', 
                                    'placeholder'=>'Date',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                        ));
                        
                        //echo $this->Form->submit('Search', array ('class'=>'btn btn-info', 'style'=>'margin-bottom:10px', 'div'=> false));
                        
                        echo $this->Js->submit('Search', array(
                            'url' => array(
                                'controller' => 'schedules',
                                'action' => 'ajax_show_sched'
                            ),
                            'update' => '#potato',
                            'class'=>'btn btn-info', 
                            'style'=>'margin-bottom:10px', 
                            'div'=> false
                        ));
                        echo $this->Form->end(); 
                    ?>
                    <br>
                    <legend></legend>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <!-- <th>Bus Liner</th> -->
                            <th>Station</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Date</th>
                            <th>ETA</th>           
                        </tr>
                        </thead>
                    </table>
                    <div id="potato"></div>
                </div>
            </div>
        </div>
    </div>
</div>
