<?php
?>
<html>
    <!--
    <a href="login">Login</a>
    <a href="register">Register</a>
    <a href="schedules">Schedules</a> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="col-md-offset-6 col-md-6 destination-group">
                    <?php  echo $this->Html->image('text-img/where.png', array('alt'=>'Where are you going ?', 'style'=>'width:80%;')); ?>
                    <?php echo $this->Form->create('Schedule', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                    ) ));
                    
                    echo $this->Form->input('station',array(
                        'type'=>'text', 
                        'placeholder'=>'I am coming from ...', 
                        'required'=>false,
                        'before'=>'<div class="input-group-lg">',
                        'after' =>'</div>'));
                    
                    echo $this->Form->input('my_date',array(
                        'type'=>'text', 
                        'placeholder'=>'Date', 
                        'required'=>false,
                        'before'=>'<div class="input-group-lg">',
                        'after' =>'</div>'));
                    
                    echo $this->Form->input('destination',array(
                        'before'=>'<div class="input-group input-group-lg">',
                        'placeholder' => 'Village, City or Region',
                        'required' => false,
                        'after' => '<span class="input-group-addon glyphicon glyphicon-map-marker" id="basic-addon1"></span></div>'));
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</html>

