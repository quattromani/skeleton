
        </div>
    </div>
    <!-- End Content Wrapper -->

    <div class="loadtime">loadtime</div>
<!-- <div class="pv" id="toggleMedia">print view</div> -->
    <div class="viewport">viewport</div>

    <!-- Footer Component -->
    <footer class="container" role="contentinfo">

      <span class="small-body-text">Copyright &copy; <?php echo date("Y"); ?></span>

    </footer>
    <!-- ./Footer Component -->

	<!-- scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<? print $project_root; ?>js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <script src="<? print $project_root; ?>js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<? print $project_root; ?>js/global_init.js"></script>
     <!--[if lt IE 10]>
        <script src="<? print $project_root; ?>js/vendor/jquery.columnizer.js"></script>
    <![endif]-->
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>
    <? if (file_exists('includes/functions.js')) { echo '<script src="includes/functions.js"></script>'; } ?>
    <script src="<? print $project_root; ?>js/vendor/respond.min.js"></script>
    <script src="<? print $project_root; ?>js/build/production.min.js"></script>
    <?
	// Load Footer
	include('includes/scripts.php');
    ?>

</body>
</html>