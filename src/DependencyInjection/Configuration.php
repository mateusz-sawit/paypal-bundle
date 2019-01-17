<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 09:20
 */

namespace Sawit\PaypalBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

  /**
   * Generates the configuration tree builder.
   *
   * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
   */
  public function getConfigTreeBuilder()
  {
    $treeBuilder = new TreeBuilder('sawit_paypal');
    if(method_exists($treeBuilder, 'getRootNode')) {
      $rootNode = $treeBuilder->getRootNode();
    }
    else {
      $rootNode = $treeBuilder->root('sawit_paypal');
    }

    $rootNode
      ->children()
        ->scalarNode('client_id')
          ->isRequired()
          ->cannotBeEmpty()
        ->end()
        ->scalarNode('secret')
          ->isRequired()
          ->cannotBeEmpty()
        ->end()
        ->booleanNode('test_mode')
          ->defaultValue(false)
        ->end()
      ->end()
    ;

    return $treeBuilder;
  }
}
