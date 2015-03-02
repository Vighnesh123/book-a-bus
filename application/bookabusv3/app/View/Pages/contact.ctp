<?php
?>
<html>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='col-md-5 contact_group'>
                    <?php echo $this->Html->image('text-img/contact.png', array('alt'=>'Contact Us')); ?>
                    <div class='row'>
                        <div class='col-md-6'>
                            <?php 
                            echo $this->Form->create('Customer', array(
                                'inputDefaults' => array(
                                    'div' => 'form-group',
                                    'label' => false,
                                    'class' => 'form-control',
                                    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                )
                            ));
                            echo "<br>";
                            echo $this->Form->input('username',array(
                                'type'=>'text', 
                                'placeholder'=>'Name',
                                'required'=>'required',
                                'before'=>'<div class="input-group-md">',
                                'after' =>'</div>'
                            )); 
                            ?>
                        </div>
                        <div class='col-md-6'>
                        <br>
                        <?php 
                            echo $this->Form->input('username',array(
                                'type'=>'text', 
                                'placeholder'=>'Email',
                                'required'=>'required',
                                'before'=>'<div class="input-group-md">',
                                'after' =>'</div>'
                            )); 
                        ?>
                        </div>
                       
                    </div>
                    <?php 
                        echo $this->Form->input('username',array(
                            'type'=>'textarea', 
                            'placeholder'=>'Message',
                            'required'=>'required',
                            'before'=>'<div class="input-group-md">',
                            'after' =>'</div>'
                        )); 
                        
                        echo $this->Form->submit("buttons/contact-send.png",array('id'=>'contact_button', 'alt'=>'Send Message'));
                        echo $this->Form->end();
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</html>
