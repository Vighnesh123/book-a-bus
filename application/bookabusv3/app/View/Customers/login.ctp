<?php

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-md-5 login-group">
                <?php echo $this->Html->image('text-img/user.png', array('alt'=>'Why register')); ?>
                <?php 
                echo $this->Form->create(array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'class' => 'form-control',
                        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                    )
                ));
                
                echo $this->Form->input('email',array(
                        'type'=>'email', 
                        'placeholder'=>'Email Addess',
                        'before'=>'<div class="input-group-md">',
                        'after' =>'</div>'
                ));
                
                echo $this->Form->input('password',array(
                        'type'=>'password', 
                        'placeholder'=>'Password',                      
                        'before'=>'<div class="input-group-md">',
                        'after' =>'</div>'
                ));
                //echo  $this->Form->submit('buttons/login.png', array('id'=>'login_button','alt'=>'login'));
                echo $this->Form->end();
                
                //echo $this->Html->link('Forgot password ?', '/Customers/forgot', array('class'=>'forgot'));
                ?>
                <div class="btn btn-info btn-block">LOGIN</div>
            </div>
            <div class="col-md-1 divider">
                <?php  echo $this->Html->image('bg/divider.png',array('style'=>'padding-left: 50%;')); ?>
            </div>
            <div class="col-md-6 register-group">
                <?php echo $this->Html->image('text-img/register.png', array('alt'=>'Why register')); ?>
                <?php echo $this->Html->image('text-img/reg-perks.png', array('alt'=>'Register perks')); ?>
                <a href='/bookabusv3/register'><?php echo $this->Form->button('REGISTER', array('id'=>'register_button','class'=>'btn btn-info btn-block', 'style'=>'background: none repeat scroll 0% 0% #00a99d;')); ?></a>
            </div>
        </div>
    </div>
</div>