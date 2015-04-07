<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('bookabus', 'Book-A-Bus');
//$cakeVersion = __d('bookabus', 'CakePHP %s', Configure::version());

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'));
                echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min','styles','jquery-ui','jquery-ui.theme'));
                echo $this->Html->script(array('jquery','bootstrap.min','scripts','jquery-ui'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                echo $this->Js->writeBuffer();
	?>
</head>
<body>
	<div id="master-container">
		<div id="header">
                    <div class="row">
                        <div class="navbar navbar-fixed-top nav-bg">
                            <div class="container">
                                <div class="navbar-brand"><a><?php echo $this->Html->image('navbar/logo.jpg'); ?></a></div>
                                <div class="navbar-header">
                                    <button class='navbar-toggle' data-toggle='collapse' data-target='.navHeaderCollapse'>
                                        <span class="glyphicon glyphicon-list"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navHeaderCollapse">
                                    <ul class='nav navbar-nav navbar-right'>
                                        <li><a href="/bookabusv3/dashboard">DASHBOARD</a></li>
                                        <li><a href="/bookabusv3/browse_cities">BROWSE CITIES</a></li>
                                        <li><a href="/bookabusv3/schedules">SCHEDULES</a></li>
                                        <li><a href="/bookabusv3/contact">ABOUT</a></li>
                                        <li><a href="/bookabusv3/logout">LOGOUT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
		<div id="content">
                        <?php //print_r($logged_in);?>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php /* echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				); */
			?>
			<p>
				<?php // echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
