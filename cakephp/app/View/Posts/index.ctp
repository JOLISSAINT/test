<!--Contenu de la vu post avec traduction -->



               <div class="test-menu">
                    <ul>
                        <li> <?php echo $this->Html->link(__('Français',true),array('language'=>'fre')+$this->params['pass']); ?>  </li>
                    </ul>

                    <ul>
                        <li> <?php echo $this->Html->link(__('Allemand',true),array('language'=>'deu')+$this->params['pass']); ?>  </li>
                    </ul>

                    <ul>
                        <li> <?php echo $this->Html->link(__('Italien',true),array('language'=>'ita')+$this->params['pass']); ?>  </li>
                    </ul>
   
                </div>
                    
		</div>
		<div id="content">
                    <h1><?php echo __('Bonjour,') ?></h1>
                    
                    <h1><?php echo __('Vous êtes actuellement sur le site en version française') ?></h1>
                    
		</div></table>