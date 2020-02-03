<?php
declare(strict_types=1);
/**
 * This file is a part of __Vendor__\__Package__
 *
 * @author __name__
 */
use Doctrine\Common\Annotations\AnnotationRegistry;
$loader = include dirname(__DIR__).'/vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
