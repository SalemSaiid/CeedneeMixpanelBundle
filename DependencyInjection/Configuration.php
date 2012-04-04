<?php

namespace Ceednee\CeedneeMixpanelBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from the app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ceednee_mixpanel');

        $rootNode
            ->children()
                ->booleanNode('enabled')->defaultTrue()->cannotBeEmpty()->end()
                ->arrayNode('parameters')
                    ->children()
                        ->scalarNode('expire')->defaultValue(300)->end()
                        ->scalarNode('api_url')->defaultValue('http://mixpanel.com/api')->cannotBeEmpty()->end()
                        ->scalarNode('api_version')->defaultValue('2.0')->cannotBeEmpty()->end()
                        ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('api_secret')->isRequired()->cannotBeEmpty()->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;


        return $treeBuilder;
    }
}
