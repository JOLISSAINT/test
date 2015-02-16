<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller {
/*  En fonction de la langue traduits le texte*/
    function beforeFilter() {
        // Met la langue par défault dans la session
        
        if(!$this->Session->read('User.language')){
            $this->Session->write('User.language',Configure::read('Config.language'));    
        }
        
        /*Test si le paramètre langage et renseigner et existant (défini par l'url) */
        if (isset($this->params['language'])){
            if(in_array($this->params['language'], Configure::read('Config.languages'))){
                $this->Session->write('User.language',$this->params['language']);
            }
        }
        // Défini le language
        Configure::write('Config.language',$this->Session->read('User.language'));    
        $this->params['language']= $this->Session->read('User.language');
    }
}
