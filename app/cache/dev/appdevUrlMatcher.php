<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

            // admin_ens_jobeet_category_list
            if ($pathinfo === '/admin/ens/jobeet/category/list') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_list',  '_route' => 'admin_ens_jobeet_category_list',);
            }

            // admin_ens_jobeet_category_create
            if ($pathinfo === '/admin/ens/jobeet/category/create') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_create',  '_route' => 'admin_ens_jobeet_category_create',);
            }

            // admin_ens_jobeet_category_batch
            if ($pathinfo === '/admin/ens/jobeet/category/batch') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_batch',  '_route' => 'admin_ens_jobeet_category_batch',);
            }

            // admin_ens_jobeet_category_edit
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/category') && preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_edit',)), array('_route' => 'admin_ens_jobeet_category_edit'));
            }

            // admin_ens_jobeet_category_delete
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/category') && preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_delete',)), array('_route' => 'admin_ens_jobeet_category_delete'));
            }

            // admin_ens_jobeet_category_show
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/category') && preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_show',)), array('_route' => 'admin_ens_jobeet_category_show'));
            }

            // admin_ens_jobeet_category_export
            if ($pathinfo === '/admin/ens/jobeet/category/export') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_export',  '_route' => 'admin_ens_jobeet_category_export',);
            }

            // admin_ens_jobeet_job_list
            if ($pathinfo === '/admin/ens/jobeet/job/list') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_list',  '_route' => 'admin_ens_jobeet_job_list',);
            }

            // admin_ens_jobeet_job_create
            if ($pathinfo === '/admin/ens/jobeet/job/create') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_create',  '_route' => 'admin_ens_jobeet_job_create',);
            }

            // admin_ens_jobeet_job_batch
            if ($pathinfo === '/admin/ens/jobeet/job/batch') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_batch',  '_route' => 'admin_ens_jobeet_job_batch',);
            }

            // admin_ens_jobeet_job_edit
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/job') && preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_edit',)), array('_route' => 'admin_ens_jobeet_job_edit'));
            }

            // admin_ens_jobeet_job_delete
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/job') && preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_delete',)), array('_route' => 'admin_ens_jobeet_job_delete'));
            }

            // admin_ens_jobeet_job_show
            if (0 === strpos($pathinfo, '/admin/ens/jobeet/job') && preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_show',)), array('_route' => 'admin_ens_jobeet_job_show'));
            }

            // admin_ens_jobeet_job_export
            if ($pathinfo === '/admin/ens/jobeet/job/export') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_export',  '_route' => 'admin_ens_jobeet_job_export',);
            }

        }

        // EnsJobeetBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]+?)(?:/(?P<page>[^/]+?))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,)), array('_route' => 'EnsJobeetBundle_category'));
        }

        if (0 === strpos($pathinfo, '/job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }

            // ens_job_show
            if (preg_match('#^/job/(?P<company>[^/]+?)/(?P<location>[^/]+?)/(?P<id>\\d+)/(?P<position>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',)), array('_route' => 'ens_job_show'));
            }

            // ens_job_preview
            if (preg_match('#^/job/(?P<company>[^/]+?)/(?P<location>[^/]+?)/(?P<token>\\w+)/(?P<position>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::previewAction',)), array('_route' => 'ens_job_preview'));
            }

            // ens_job_publish
            if (preg_match('#^/job/(?P<token>[^/]+?)/publish$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_publish;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::publishAction',)), array('_route' => 'ens_job_publish'));
            }
            not_ens_job_publish:

            // ens_job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ens_job_new',);
            }

            // ens_job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_create;
                }
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'ens_job_create',);
            }
            not_ens_job_create:

            // ens_job_edit
            if (preg_match('#^/job/(?P<token>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',)), array('_route' => 'ens_job_edit'));
            }

            // ens_job_update
            if (preg_match('#^/job/(?P<token>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',)), array('_route' => 'ens_job_update'));
            }
            not_ens_job_update:

            // ens_job_delete
            if (preg_match('#^/job/(?P<token>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',)), array('_route' => 'ens_job_delete'));
            }
            not_ens_job_delete:

            // ens_job_extend
            if (preg_match('#^/job/(?P<token>[^/]+?)/extend$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_extend;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::extendAction',)), array('_route' => 'ens_job_extend'));
            }
            not_ens_job_extend:

        }

        // EnsJobeetBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'EnsJobeetBundle_homepage');
            }
            return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'EnsJobeetBundle_homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
