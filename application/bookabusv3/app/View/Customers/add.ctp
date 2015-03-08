<div class="customers form">

</div>

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
                )); ?>
                    <fieldset>
                            <legend><?php echo __('Register'); ?></legend>
                    <?php
                            echo $this->Form->input('fname', array(
                                    'type'=>'text', 
                                    'placeholder'=>'First Name',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                            ));
                            echo $this->Form->input('lname',array(
                                    'type'=>'text', 
                                    'placeholder'=>'Last Name',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                            ));
                            echo $this->Form->input('MI', array(
                                    'type'=>'text', 
                                    'placeholder'=>'M.I.',
                                    'required'=>false,
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                            ));
                            echo $this->Form->input('email', array(
                                    'type'=>'email', 
                                    'placeholder'=>'Email Address',
                                    'required'=>'required',
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                            ));
                            echo $this->Form->input('phone', array(
                                    'type'=>'text', 
                                    'placeholder'=>'Phone Number',
                                    'required'=>false,
                                    'before'=>'<div class="input-group-md">',
                                    'after' =>'</div>'
                            ));
                            echo $this->Form->input('birthday', array(
                                'type'=> 'text',
                                'id'=>'birthday-picker',
                                'placeholder' => 'Birthday'
                            ));
                            echo $this->Form->input('password', array(
                                'placeholder' => 'password'
                            ));
                            echo $this->Form->input('password_confirmation', array(
                                'type'=>'password',
                                'placeholder'=>'Re type password'
                            ));
                    ?>
                    </fieldset>
                    <center><?php echo $this->Form->submit('Register !', array ('class'=>'btn btn-info', 'style'=>'margin-bottom:10px')); ?></center>
                    <?php echo $this->Form->end(); ?>
            </div>
            </div>  
        </div>
    </div>
</div>
