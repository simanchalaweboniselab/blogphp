<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php //echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('cake.generic', 'style.css'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div class="page-out">
    <div class="page-in">
        <div class="page">
            <div class="main">
                <div class="header">
                    <div class="header-top">
                        <h1>My <span>Blogs</span></h1>
                    </div>
                    <div class="header-bottom">
                        <div class="quotation">
                        <h3>My blogs As You Are  came about because we both have a strong interest in some of the most important issues that people face today.</br>
                            </h3>
                        </div>
                    </div>
                    <div class="topmenu">
                        <ul>
                            <li
                                style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a
                                href="/"><span>Home</span></a></li>
                            <li><a href="#"><span>About&nbsp;us</span></a></li>
                            <li><a href="#"><span>What's&nbsp;new</span></a></li>
                            <li><a href="#"><span>Services</span></a></li>
                            <li><a href="#"><span>Contact</span></a></li>
                            <li><a href="#"><span>Resources</span></a></li>
                            <li><a href="#"><span>Links</span></a></li>
                        </ul>
                    </div>
                </div>
                <!--                <div id="container">-->

                <div class="content">
                    <div class="content-left">
                        <div class="row1">
                            <?php echo $this->Session->flash(); ?>

                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="mainmenu">
                            <h2 class="sidebar1">Contact on Social Network</h2>
                            <ul>
                                <li><a href="http://in.linkedin.com/pub/simanchala-pradhan/48/764/a1b" target="_blank">LinkedIn</a></li>
                                <li><a href="https://twitter.com/mcasimanchala"target="_blank">Twitter</a></li>
                                <li><a href="https://www.facebook.com/simanchalakumar"target="_blank">Facebook</a></li>
                                <li><a href="https://plus.google.com/104781986266535853154/"target="_blank">Google Plus</a></li>
                                <li><a href="http://pinterest.com/simanchalakumar/"target="_blank">Pintrest</a></li>
                                <li><a href="http://simanchalak.wordpress.com/"target="_blank">Wordpress</a></li>
                                <li><a href="https://github.com/simanchalaweboniselab/"target="_blank">Github</a></li>
                                <li><a href="http://www.slideshare.net/simanchalakumar" target="_blank">Slideshare</a></li>
                            </ul>
                        </div>
                        <div class="contact">
                            <h2 class="sidebar2">Contact</h2>
                            <div class="contact-detail">
                                <p class="green name"><strong>Simanchala Kumar Pradhan</strong></p>
                                <p><strong>Adress :</strong> Bavdhan, Pune<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maharastra, India</p>
                                <p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;simanchala@weboniselab.com</p>
                                <p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp;+91-8956631961<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91-7843095624</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <!--DO NOT Remove The Footer Links-->
                    <p>&copy; Copyright 2013.<br>
                    </p>
                    <ul>
                        <li style="border-left: medium none;"><a href="/"><span>Home</span></a></li>
                        <li><a href="#"><span>About&nbsp;us</span></a></li>
                        <li><a href="#"><span>What's&nbsp;new</span></a></li>
                        <li><a href="#"><span>Services</span></a></li>
                        <li><a href="#"><span>Contact</span></a></li>
                        <li><a href="#"><span>Resources</span></a></li>
                        <li style="padding-right: 0px;"><a href="#"><span>Links</span></a></li>
                    </ul>
                </div>
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
