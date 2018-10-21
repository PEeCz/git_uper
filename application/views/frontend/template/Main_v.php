<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="app">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?=$title; ?></title>
    <meta content="<?=base_url(); ?>" name="baseUrl">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="<?=$keyword; ?>" name="keywords" />
	<meta content="<?=$description; ?>" name="description" />
	<meta content="<?=$author; ?>" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('assets/plugins/bootstrap3/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/font-awesome/5.0/css/fontawesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/5.0/css/fa-brands.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/5.0/css/fa-regular.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/5.0/css/fa-solid.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/animate/animate.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/e-commerce/style.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/e-commerce/style-responsive.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/e-commerce/theme/default.css'); ?>" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/pace/pace.min.js'); ?>"></script>
	<!-- ================== END BASE JS ================== -->
    <script type="text/javascript">
        function add_chatinline(){
            var hccid=74423242;var nt=document.createElement("script");
            nt.async=true;
            nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;
            var ct=document.getElementsByTagName("script")[0];
            ct.parentNode.insertBefore(nt,ct);
        }
        add_chatinline(); 
</script>
</head>
<body>
    <?php //echo generate_date_today("d M y H:i",strtotime($golfcourtRowsBox1['blog_golfcourt_create_date']),"en",true); ?>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">

        <!-- BEGIN #header -->
        <?php $this->view($header); ?>
        <!-- END #header -->
    
        <!-- BEGIN #navbar -->
        <?php $this->view($navbar); ?>
        <!-- END #navbar -->
    
        <!-- Main #Content -->
        <?php $this->view($content); ?>
        <!-- End #Content -->
    
        <!-- BEGIN #footer -->
        <?php $this->view($footer); ?>
        <!-- END #footer -->

    
        
    </div>
    <!-- END #page-container -->
    
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="<?php echo base_url('assets/css/e-commerce/theme/purple.css'); ?>" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="<?php echo base_url('assets/css/e-commerce/theme/blue.css'); ?>" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="<?php echo base_url('assets/css/e-commerce/theme/default.css'); ?>" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="<?php echo base_url('assets/css/e-commerce/theme/orange.css'); ?>" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="<?php echo base_url('assets/css/e-commerce/theme/red.css'); ?>" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
	
	<!-- BEGIN #JavaScript File -->
    <?php $this->view('frontend/srcup/Jscript_v'); ?>
    <!-- End #JavaScript File -->

</body>
</html>
