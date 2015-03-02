<?php

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-md-5 login-group">
                <?php echo $this->Html->image('text-img/user.png', array('alt'=>'Why register')); ?>
                <?php 
                echo $this->Form->create('Customer', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                    )
                ));
                
                echo $this->Form->input('username',array(
                        'type'=>'email', 
                        'placeholder'=>'Email Addess',
                        'required'=>'required',
                        'before'=>'<div class="input-group-md">',
                        'after' =>'</div>'
                ));
                
                echo $this->Form->input('password',array(
                        'type'=>'password', 
                        'placeholder'=>'Password',
                        'before'=>'<div class="input-group-md">',
                        'after' =>'</div>'
                ));
                
                echo $this->Form->submit('buttons/login.png', array('id'=>'login_button','alt'=>'login'));
                echo $this->Form->end();
                ?>
                
            </div>
            <div class="col-md-1 divider">
                <?php  echo $this->Html->image('bg/divider.png',array('style'=>'padding-left: 50%;')); ?>
            </div>
            <div class="col-md-6 register-group">
                <?php
               
                echo $this->Html->image('text-img/register.png', array('alt'=>'Why register'));
                echo $this->Html->image('text-img/reg-perks.png', array('alt'=>'Register perks'));
                echo $this->Html->image('buttons/reg.png', array('id'=>'register_button','alt'=>'Register !'));
                ?>
            </div>
        </div>
    </div>
</div>