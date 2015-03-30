<?php
/**
 * <strong>Name :  MainController.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category  tinyfram-skeleton
 * @package
 * @author    pmerino <pablo.perso1995@gmail.com>
 * @copyright 2015
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   GIT: $Id$
 * @link      
 * @since     File available since Release 0.1.0
 */ 
namespace SkeletonApp\Controllers;
use SkeletonApp\Models\Post;
use TinyFram;
/**
 * Class MainController
 *
 * @package SkeletonApp
 * @subpackage MainController
 * @author    pmerino <pablo.perso1995@gmail.com>
 * @copyright  2015 pablo.xyz
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://pablo.xyz
 * @since      Class available since Release 0.1.0
 */
class MainController extends TinyFram\Base\Controller {
    /**
     * Index method
     *
     * @param $matches
     *
     * @throws \Exception
     * @access
     * @return string
     */
    public function index($matches)
    {
        $posts = Post::all();
        return parent::renderTemplate("test", array(
            "posts" => $posts
        ));
    }
}