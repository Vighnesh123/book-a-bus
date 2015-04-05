<?php
//debug($userInfo);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-3 col-md-6 data-group">
                <div class="col-md-offset-1 col-md-10">
                    <br>
                    <?php echo $this->Form->create(array(
                        'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                        )
                    ));?>
                    <fieldset>
                            <legend><?php echo __('Forgot Password'); ?></legend>
                    </fieldset>
                    <label>Please use your registered Email</label>
                    <?php
                        echo $this->Form->input('email', array(
                             'type'=>'email', 
                                    'placeholder'=>'Email',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                        ));
                    ?>
                    <center><?php echo $this->Form->submit('Reset !', array ('class'=>'btn btn-info', 'style'=>'margin-bottom:10px'))?></center>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>