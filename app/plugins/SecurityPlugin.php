<?php
declare(strict_types=1);

/**
 * This file is part of the Invo.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Plugins;

use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Component;
use Phalcon\Acl\Role;
use Phalcon\Acl\Enum;
use Phalcon\Di\Injectable;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;

class SecurityPlugin extends Injectable
{
    /**
     * This action is executed before execute any action in the application
     *
     * @param Event $event
     * @param Dispatcher $dispatcher
     * @return bool
     */
    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        $auth = $this->session->get('auth')['tipe'];
        if ($auth == 'master') {
            $role = 'master';
        } else {
            $role = 'admin';
        }

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        $acl = $this->getAcl();

        if (!$acl->isComponent($controller)) {
            $dispatcher->forward([
                'controller' => 'error',
                'action'     => 'notFound',
            ]);

            return false;
        }

        $allowed = $acl->isAllowed($role, $controller, $action);
        if (!$allowed) {
            $dispatcher->forward([
                'controller' => 'error',
                'action'     => 'unauthorized',
            ]);
            

            $this->session->destroy();

            return false;
        }

        return true;
    }

    /**
     * Returns an existing or new access control list
     *
     * @returns AclList
     */
    protected function getAcl(): AclList
    {
        if (isset($this->persistent->acl)) {
            return $this->persistent->acl;
        }

        $acl = new AclList();
        $acl->setDefaultAction(Enum::DENY);

        // Register roles
        $roles = [
            'master'  => new Role(
                'master',
                'Dapat mengakses seluruh sistem'
            ),
            'admin' => new Role(
                'admin',
                'Dapat mengakses Pemakaian Alat Berat'
            )
        ];

        foreach ($roles as $role) {
            $acl->addRole($role);
        }

        //Yang gak boleh diakses admin
        $privateResources = [
            'alatberat'    => ['index', 'tambah', 'proses', 'edit', 'update', 'hapus'],
            'cucian'     => ['index', 'tambah', 'proses', 'edit', 'update', 'hapus'],
            'user' => ['index', 'tambah', 'proses', 'hapus'],
        ];
        foreach ($privateResources as $resource => $actions) {
            $acl->addComponent(new Component($resource), $actions);
        }

        //Public area resources
        $publicResources = [
            'index'                 => ['index'],
            'error'                 => ['notFound', 'serverError', 'unauthorized'],
            'session'               => ['index', 'login', 'logout'],
            'pemakaianalatberat'    => ['index', 'tambah', 'proses', 'edit', 'update', 'hapus'],
        ];
        foreach ($publicResources as $resource => $actions) {
            $acl->addComponent(new Component($resource), $actions);
        }

        //Grant access to public areas to both master and admins
        foreach ($roles as $role) {
            foreach ($publicResources as $resource => $actions) {
                foreach ($actions as $action) {
                    $acl->allow($role->getName(), $resource, $action);
                }
            }
        }

        //Grant access to private area to role master
        foreach ($privateResources as $resource => $actions) {
            foreach ($actions as $action) {
                $acl->allow('master', $resource, $action);
            }
        }

        //The acl is stored in session, APC would be useful here too
        $this->persistent->acl = $acl;

        return $acl;
    }
}
