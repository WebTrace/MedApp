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
        <script src="<?Php echo base_url()?>assets/admin/js/data.js"></script>
        
        <!--Tshego's library references-->
        <script src='<?php echo base_url();?>assets/admin/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker.min.js'></script>
        <script src='<?php echo base_url();?>assets/admin/js/main.js'></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrapValidator.min.js"></script>
        <!--<script src='<?php echo base_url();?>assets/js/main.js'></script>-->

        <!--Ace script reference-->
        <script src='<?php echo base_url();?>assets/wizard.min.js'></script>
        <script src='<?php echo base_url();?>assets/ace-elements.min.js'></script>
        <script src='<?php echo base_url();?>assets/ace.min.js'></script>
        
        <script>
            var $validation = false;
            $('#fuelux-wizard-container')
            .ace_wizard({
                //step: 2 //optional argument. wizard will jump to step "2" at first
                //buttons: '.wizard-actions:eq(0)'
            })
            .on('actionclicked.fu.wizard' , function(e, info){
                if(info.step == 1 && $validation) {
                    if(!$('#validation-form').valid()) e.preventDefault();
                }
            })
            //.on('changed.fu.wizard', function() {
            //})
            .on('finished.fu.wizard', function(e) {
                bootbox.dialog({
                    message: "Thank you! Your information was successfully saved!", 
                    buttons: {
                        "success" : {
                            "label" : "OK",
                            "className" : "btn-sm btn-primary"
                        }
                    }
                });
            }).on('stepclick.fu.wizard', function(e){
                //e.preventDefault();//this will prevent clicking and selecting steps
            });
        </script>
        <!--<script type="text/javascript">
            $(function () {
                $('#datetimepicker11').datetimepicker({
                    daysOfWeekDisabled: [0, 6]
                });
            });
        </script>-->
    </body>
</html>
