<?php

namespace Ceednee\CeedneeMixpanelBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages the bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class CeedneeMixpanelExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        if (! isset($config['api_key'])) {
            throw new \InvalidArgumentException('The "api_key" option must be set');
        }
        $container->setParameter('ceednee.mixpanel.api_key', $config['api_key']);

        if (! isset($config['api_secret'])) {
            throw new \InvalidArgumentException('The "api_secret" option must be set');
        }
        $container->setParameter('ceednee.mixpanel.api_secret', $config['api_secret']);

        if (! empty($config['expire'])) {
            $container->setParameter('ceednee.mixpanel.expire', $config['expire']);
        }

        if (! empty($config['api_url'])) {
            $container->setParameter('ceednee.mixpanel.api_url', $config['api_url']);
        }
    }
}
