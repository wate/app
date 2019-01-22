<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
//use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/ja/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Enable AdminLTE theme
     * @param  \Cake\Event\Event  $event イベント
     * @return void
     */
    public function beforeRender(\Cake\Event\Event $event)
    {
        //$this->viewBuilder()->setTheme('AdminLTE');
        //$this->viewBuilder()->setClassName('AdminLTE.AdminLTE');
    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/ja/controllers/components/security.html
         */
        //$this->loadComponent('Security');

//        $this->loadComponent('Auth', [
//            'authorize'=> 'Controller',
//            'authenticate' => [
//                'Form' => [
//                    'fields' => [
//                        'username' => 'email',
//                        'password' => 'password'
//                    ],
//                ]
//            ],
//            'loginAction' => [
//                'controller' => 'Users',
//                'action' => 'login'
//            ],
//            'logoutAction' => [
//                'controller' => 'Users',
//                'action' => 'logout'
//            ],
//            'unauthorizedRedirect' => $this->referer()
//        ]);
//        $this->Auth->allow(['display', 'view', 'index']);
    }

//    /**
//     * 認可判定
//     * @param \App\Model\Entity\User $user
//     * @return bool
//     */
//    public function isAuthorized(\App\Model\Entity\User $user)
//    {
//        return false;
//    }
}
