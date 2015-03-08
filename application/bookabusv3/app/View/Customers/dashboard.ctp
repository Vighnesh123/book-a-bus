<?php

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="info-container">
                <div class="info-header">
                    <h1>Hi, <?php echo $logged_in['fname']?></h1>
                </div>
                <div class="col-md-12 info-body">
                    <div class="col-md-6 body-col-1">
                        <table>
                            <tr>
                                <td style="width: 50%;">Full Name : </td>
                                <td style="width: 50%;"> <?php echo $logged_in['fname']." ".$logged_in['lname']?> </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">Email : </td>
                                <td style="width: 50%;"> <?php echo $logged_in['email']?> </td>
                            </tr>
                        </table>
                        <?php 
                            echo $this->Html->link('Change Password', 'changepass');
                        ?>
                    </div>
                    <div class="col-md-6">
                        placeholder
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>