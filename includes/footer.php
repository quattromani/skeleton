        </div>
    </div>
    <!-- ./End Content Wrapper -->

    <!-- Footer Component -->
    <footer class="container" role="contentinfo">

      <span class="small-body-text">Some sweet footer text - Copyright &copy; <span id="year">year</span></span>

    </footer>
    <!-- ./Footer Component -->

	<!-- scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <script src="/js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/js/global_init.js"></script>
     <!--[if lt IE 10]>
        <script src="/js/vendor/jquery.columnizer.js"></script>
    <![endif]-->
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>
    <? if (file_exists('includes/functions.js')) { echo '<script src="includes/functions.js"></script>'; } ?>
    <script src="/js/vendor/respond.min.js"></script>
    <script src="/js/build/production.min.js"></script>
    <? include('includes/scripts.php'); ?>
<? if ($googleAnalytics) { include('includes/googleAnalytics.php'); } ?>

</body>
</html>