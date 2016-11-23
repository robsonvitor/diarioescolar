<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Diário Escolar Eletrônico</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?php echo base_url('assets/font-awesome-last/css/font-awesome.css'); ?>" rel="stylesheet" />
        <!--<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" />-->
        <!-- MORRIS CHART STYLES-->
        <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css'); ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html">Diário Escolar</a>--> 
                    <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Diário Escolar</a> 
                </div>
            </nav>   
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="<?php echo base_url('assets/img/find_user.png'); ?>" class="user-image img-responsive"/>
                            <p style="color: white">Olá, Maria!</p>
                            <p><a href="#" class="btn btn-small btn-danger">Encerrar sessão</a></p>
                        </li>
                        <li>
                            <a class="active-menu"  href="#"><i class="fa fa-home fa-3x"></i> Página inicial</a>
                        </li>

                        <!-- menu professor
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-3x"></i> Calendário Letivo</a>
                        </li>
                       
                        -->
                        <li>
                            <a href="#"><i class="fa fa-users fa-3x"></i> Turmas</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-database fa-3x"></i> Diários</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-3x"></i> Calendários</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-3x"></i> Pessoas</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-plus fa-3x"></i> Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Pessoas</a>
                                </li>
                                <li>
                                    <a href="#">Setores</a>
                                </li>
                                <li>
                                    <a href="#">Calendários</a>
                                </li>
                                <li>
                                    <a href="#">Turmas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pie-chart fa-3x"></i> Relatórios<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Pessoas</a>
                                </li>
                                <li>
                                    <a href="#">Setores</a>
                                </li>
                                <li>
                                    <a href="#">Frequências</a>
                                </li>
                            </ul>
                        </li>
                        <!--                        
                                                <li>
                                                    <a  href="ui.html"><i class="fa fa- fa-3x"></i> UI Elements</a>
                                                </li>
                                                <li>
                                                    <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                                                </li>
                                                <li  >
                                                    <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Relatórios</a>
                                                </li>	
                                                <li  >
                                                    <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                                                </li>
                                                <li  >
                                                    <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                                                </li>				
                        
                        
                                                <li>
                                                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                                    <ul class="nav nav-second-level">
                                                        <li>
                                                            <a href="#">Second Level Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Second Level Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                                            <ul class="nav nav-third-level">
                                                                <li>
                                                                    <a href="#">Third Level Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Third Level Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Third Level Link</a>
                                                                </li>
                        
                                                            </ul>
                        
                                                        </li>
                                                    </ul>
                                                </li>  
                                                <li  >
                                                    <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                                                </li>	-->
                    </ul>

                </div>

            </nav>  
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php //echo isset($titulo) ? $titulo : "Diário escolar" ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->message->display(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            //As views herdadas de TemplatePadrao, serão incluídas aqui.
                            if (isset($contents) && $contents != "") {
                                echo $contents;
                            }
                            ?>
                        </div>
                    </div>     
                    <!-- /. ROW  -->           
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery.metisMenu.js'); ?>"></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/morris/morris.js'); ?>"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>


    </body>
</html>