                </div>
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?Php echo base_url()?>assets/admin/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?Php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/morris.min.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/raphael.min.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/bootstrap-progressbar.min.js"></script>
        <!--<script src="<?Php echo base_url()?>assets/admin/js/modal.js"></script>-->
        <script src="<?Php echo base_url()?>assets/js/bootstrap-notify.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/claima/functions.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/claima/handler.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/claima/data.js"></script>
        <script src="<?Php echo base_url()?>assets/admin/js/claima/design.js"></script>
        
        <!--Tshego's library references-->
        <script src='<?php echo base_url();?>assets/admin/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker.min.js'></script>
        <script src='<?php echo base_url();?>assets/admin/js/main.js'></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrapValidator.min.js"></script>
        <!--<script src='<?php echo base_url();?>assets/js/main.js'></script>-->
        <!--<script type="text/javascript">
            $(function () {
                $('#datetimepicker11').datetimepicker({
                    daysOfWeekDisabled: [0, 6]
                });
            });
        </script>-->
        <script>
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('active_tab', $(e.target).attr('href'));
            });

            var active_tab = localStorage.getItem('active_tab');

            console.log(active_tab);

            if (active_tab) {
                $('.fi-tabs a[href="' + active_tab + '"]').tab('show');
            }
        </script>
    </body>
</html>
