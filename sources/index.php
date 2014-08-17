<?php

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <link href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/all.css' rel='stylesheet' type='text/css'>
    <!--[if lte IE 9]><link href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie9.css' rel='stylesheet' type='text/css'><![endif]-->
	<jdoc:include type="head" />
	<!--[if lt IE 9]><script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script><![endif]-->
</head>
	<body class="site">

    <jdoc:include type="modules" name="position-10" style="none" />

    <header class="header" role="banner">
        <div class="header-search pull-right">
            <jdoc:include type="modules" name="position-0" style="none" />
        </div>
    </header>

    <jdoc:include type="modules" name="position-9" style="none" />
    <jdoc:include type="message" />

	<div class="body">
		<div class="container clearfix">

            <div class="base-content">
                <?php if ($this->countModules('position-1')) : ?>
                <nav class="navigation" role="navigation">
                    <jdoc:include type="modules" name="position-1" style="none" />
                </nav>
                <?php endif; ?>
                <div class="row-fluid wrapper clearfix">
                    <?php if ($this->countModules('position-8')) : ?>
                    <div id="sidebar" class="span3">
                        <div class="sidebar-nav">
                            <jdoc:include type="modules" name="position-8" style="xhtml" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <jdoc:include type="modules" name="banner" style="xhtml" />
                    <main id="content" class="<?php if ($this->countModules('position-7')) {echo 'with-aside';} ?>" role="main">
                        <jdoc:include type="modules" name="position-3" style="xhtml" />
                        <jdoc:include type="component" />
                        <jdoc:include type="modules" name="position-2" style="none" />
                    </main>
                    <?php if ($this->countModules('position-7')) : ?>
                    <div id="aside" class="span3">
                        <jdoc:include type="modules" name="position-7" style="well" />
                    </div>
                    <?php endif; ?>
                </div>

                <jdoc:include type="modules" name="position-5" style="none" />

                <footer class="footer" role="contentinfo">
                    <div class="footer-inner">
                        <jdoc:include type="modules" name="position-4" style="none" />

                        <div class="container clearfix">
                            <jdoc:include type="modules" name="footer" style="none" />
                            <p class="copyright"><?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></p>
                        </div>
                    </div>
                </footer>
            </div>
		</div>
	</div>


	<jdoc:include type="modules" name="debug" style="none" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'XXX']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
</body>
</html>
