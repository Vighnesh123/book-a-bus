<div class="customers form">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 data-group">
            <?php echo $this->Form->create('Customer', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                    )
                )); ?>
                    <fieldset>
                            <legend><?php echo __('Add Customer'); ?></legend>
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
                            echo $this->Form->input('valid', array(
                                'type'=>'hidden',
                                'value'=>'passanger'
                            ));
                            echo $this->Form->input('register_date', array(
                                'type'=>'hidden',
                                'placeholder'=>'Register_date',
                                'value'=> date('Y-m-d H:m:s',time())
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
            <center><?php echo $this->Form->submit('Register !', array ('class'=>'btn btn-info')); ?></center>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
