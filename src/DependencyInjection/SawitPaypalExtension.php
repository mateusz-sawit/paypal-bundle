<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 10:06
 */

namespace Sawit\PaypalBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class SawitPaypalExtension extends Extension
{

  /**
   * Loads a specific configuration.
   *
   * @param array $configs
   * @param ContainerBuilder $container
   * @throws \Exception
   */
  public function load(array $configs, ContainerBuilder $container)
  {
    $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
    $loader->load('services.xml');

    $configuration = new Configuration();
    $config = $this->processConfiguration($configuration, $configs);
    $definition = $container->getDefinition('sawit.paypal.paypal_client');
    $definition->replaceArgument(0, $config['client_id']);
    $definition->replaceArgument(1, $config['secret']);
    $definition->replaceArgument(2, $config['test_mode']);
  }
}
