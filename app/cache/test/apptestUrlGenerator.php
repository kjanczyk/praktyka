<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * apptestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'EnsJobeetBundle_category' => true,
       'ens_job' => true,
       'ens_job_show' => true,
       'ens_job_preview' => true,
       'ens_job_publish' => true,
       'ens_job_new' => true,
       'ens_job_create' => true,
       'ens_job_edit' => true,
       'ens_job_update' => true,
       'ens_job_delete' => true,
       'ens_job_extend' => true,
       'EnsJobeetBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getEnsJobeetBundle_categoryRouteInfo()
    {
        return array(array (  0 => 'slug',  1 => 'page',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  2 =>   array (    0 => 'text',    1 => '/category',  ),));
    }

    private function getens_jobRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/job/',  ),));
    }

    private function getens_job_showRouteInfo()
    {
        return array(array (  0 => 'company',  1 => 'location',  2 => 'id',  3 => 'position',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'position',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'location',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'company',  ),  4 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_previewRouteInfo()
    {
        return array(array (  0 => 'company',  1 => 'location',  2 => 'token',  3 => 'position',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::previewAction',), array (  'token' => '\\w+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'position',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\w+',    3 => 'token',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'location',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'company',  ),  4 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_publishRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::publishAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/publish',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/job/new',  ),));
    }

    private function getens_job_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/job/create',  ),));
    }

    private function getens_job_editRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_updateRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_deleteRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_extendRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::extendAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/extend',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getEnsJobeetBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }
}
