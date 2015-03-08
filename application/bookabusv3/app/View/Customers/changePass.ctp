<?php
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-3 col-md-6 data-group">
                <div class="col-md-offset-1 col-md-10">
                    <?php echo $this->Form->create('Customer', array(
                        'inputDefaults' => array(
                        'action' => 'changePass',
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                        )
                    ));
                    ?>
                    <fieldset>
                        <legend><?php echo __('Change Password'); ?></legend>
                    </fieldset>
                    <?php 
                    echo 
                    $this->Form->input('id',array(
                                    'type'=>'hidden', 
                                    'value'=>$logged_in['id'],
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                                ));
                    
                    echo $this->Form->input('current_password',array(
                                    'type'=>'password', 
                                    'placeholder'=>'Current Password',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                                ));
                    
                    echo $this->Form->input('newpassword1',array(
                                    'type'=>'password', 
                                    'placeholder'=>'New Password',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                                ));
                    
                    echo $this->Form->input('newpassword2',array(
                                    'type'=>'password', 
                                    'placeholder'=>'Re-type New Password',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                                ));
                    ?>
                    <center><?php echo $this->Form->submit('Register !', array ('class'=>'btn btn-info', 'style'=>'margin-bottom:10px')); ?></center>
                    <?php echo $this->Form->end(); ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
