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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
		<?php echo __('Accueil') ?>    
	</title>

    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
    ?>
    
</head>
<body>
	<div id="container">
		<div id="header">
                    <h1><?php echo __('Bienvenue, démonstration multi-langue') ?></h1>	
                                    
                <div class="test-menu">
                    <ul>
                        <li> <?php echo $this->Html->link(__('Français',true),'/'); ?>  </li>
                    </ul>

                    <ul>
                        <li> <?php echo $this->Html->link(__('Italien',true),'/'); ?>  </li>
                    </ul>

                    <ul>
                        <li> <?php echo $this->Html->link(__('Allemand',true),'/'); ?>  </li>
                    </ul>
   
                </div>
                    
		</div>
		<div id="content">
                    <h1><?php echo __('Bonjour,') ?></h1>
                    
                    <h1><?php echo __('Vous êtes actuellement sur le site en version française') ?></h1>
                    
		</div>

	</div>
	

</body>
</html>
