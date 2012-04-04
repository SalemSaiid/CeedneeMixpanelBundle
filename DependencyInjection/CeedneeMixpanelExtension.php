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
        if (isset($config['enabled']) && $config['enabled']) {
            $loader->load('services.xml');
        }

        if (! isset($config['parameters']['api_key'])) {
            throw new \InvalidArgumentException('The "api_key" option must be set');
        }
        $container->setParameter('ceednee.mixpanel.api_key', $config['parameters']['api_key']);

        if (! isset($config['parameters']['api_secret'])) {
            throw new \InvalidArgumentException('The "api_secret" option must be set');
        }
        $container->setParameter('ceednee.mixpanel.api_secret', $config['parameters']['api_secret']);

        if (! isset($config['parameters']['api_version'])) {
            throw new \InvalidArgumentException('The "api_version" option must be set');
        }
        $container->setParameter('ceednee.mixpanel.api_version', $config['parameters']['api_version']);

        if (isset($config['parameters']['expire']) && !empty($config['parameters']['expire'])) {
            $container->setParameter('ceednee.mixpanel.expire', $config['parameters']['expire']);
        }

        if (isset($config['parameters']['api_url']) && ! empty($config['parameters']['api_url'])) {
            $container->setParameter('ceednee.mixpanel.api_url', $config['parameters']['api_url']);
        }
    }
}
