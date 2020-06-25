<?php

namespace Container76d1Jkb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZW8iaiDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zW8iaiD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zW8iaiD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProductCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProductCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ApiController::index' => ['privates', '.service_locator.JnHMbEU', 'get_ServiceLocator_JnHMbEUService', true],
            'App\\Controller\\CartController::AddSale' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\CartController::delete' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\CartController::show' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.Rc9uH46', 'get_ServiceLocator_Rc9uH46Service', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.Rc9uH46', 'get_ServiceLocator_Rc9uH46Service', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.JnHMbEU', 'get_ServiceLocator_JnHMbEUService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProductCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProductCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ApiController:index' => ['privates', '.service_locator.JnHMbEU', 'get_ServiceLocator_JnHMbEUService', true],
            'App\\Controller\\CartController:AddSale' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\CartController:delete' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\CartController:show' => ['privates', '.service_locator.aI7umW_', 'get_ServiceLocator_AI7umWService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.Rc9uH46', 'get_ServiceLocator_Rc9uH46Service', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.Rc9uH46', 'get_ServiceLocator_Rc9uH46Service', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.JnHMbEU', 'get_ServiceLocator_JnHMbEUService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.xtAXsmj', 'get_ServiceLocator_XtAXsmjService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController::index' => '?',
            'App\\Controller\\Admin\\ProductCrudController::new' => '?',
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => '?',
            'App\\Controller\\ApiController::index' => '?',
            'App\\Controller\\CartController::AddSale' => '?',
            'App\\Controller\\CartController::delete' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController:index' => '?',
            'App\\Controller\\Admin\\ProductCrudController:new' => '?',
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => '?',
            'App\\Controller\\ApiController:index' => '?',
            'App\\Controller\\CartController:AddSale' => '?',
            'App\\Controller\\CartController:delete' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartController:show' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
