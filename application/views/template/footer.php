   </div> <!-- container -->
                </div> <!-- content -->
                <footer class="footer text-right">
                    Powered by <a href="http://fvrtravelonline.com" target="_blank">FVR Travel and Tours Agency</a>.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->      
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>     
        <script src="<?php echo base_url('assets/plugins/carousel/skdslider.min.js'); ?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('#demo1').skdslider({
                  slideSelector: '.slide',
                  delay:5000,
                  animationSpeed:2000,
                  showNextPrev:true,
                  showPlayButton:false,
                  autoSlide:true,
                  animationType:'fading'
                });
            });
        </script>
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-knob/excanvas.js'); ?>"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.js'); ?>"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url('assets/plugins/morris/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/raphael/raphael-min.js'); ?>"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url('assets/pages/jquery.dashboard.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js'); ?>"></script>
    </body>
</html>