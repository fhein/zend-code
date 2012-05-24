<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Code_Generator
 * @subpackage PHP
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Zend\Code\Generator;

/**
 * @category   Zend
 * @package    Zend_Code_Generator
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class BodyGenerator extends AbstractGenerator
{

    /**
     * @var string
     */
    protected $content = null;

    /**
     * setContent()
     *
     * @param string $content
     * @return BodyGenerator
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * getContent()
     *
     * @return string
     */
    public function getContent()
    {
        return (string)$this->content;
    }

    /**
     * generate()
     *
     * @return string
     */
    public function generate()
    {
        return $this->getContent();
    }
}
