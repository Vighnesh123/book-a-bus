<?php ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-3 col-md-6 data-group">
                <div class="col-md-offset-1 col-md-10">
                    <fieldset>
                            <legend><?php echo __('Reset Password'); ?></legend>
                    </fieldset>
                    <?php echo $this->Form->create(array(
                        'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                        )
                    ));?>
                    <?php
                        echo $this->Form->input('password',array("type"=>"password",'before'=>'<div class="input-group-md">','after' =>'</div>', 'placeholder' => 'Password'));
                        echo $this->Form->input('password_confirmation',array("type"=>"password",'before'=>'<div class="input-group-md">','after' =>'</div>','placeholder' => 'Retype Password'));
                    ?>
                    

                    <?php echo $this->Form->end('Save'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
