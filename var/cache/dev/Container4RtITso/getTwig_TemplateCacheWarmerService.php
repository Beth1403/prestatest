<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'twig' => ['services', 'twig', 'getTwigService', false],
], [
    'twig' => 'Twig\\Environment',
]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'), [(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views/Admin/Product') => 'Product', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm') => 'Twig', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views/Admin/Common') => 'Common', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters') => 'AdvancedParameters', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters') => 'ShopParameters', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../modules') => 'Modules', (\dirname(__DIR__, 4).'/mails/themes') => 'MailThemes', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/../src/PrestaShopBundle/Resources/views') => 'PrestaShopCore', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Twig/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Twig/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
