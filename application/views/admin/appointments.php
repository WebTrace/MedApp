<div class="row">
    <div class="col-lg-12">
        <!-- Notification -->
        <div class="alert"></div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="error"></div>
                <form class="form-horizontal" id="crud-form">
                <input type="hidden" id="start">
                <input type="hidden" id="end">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient First Name(s)</label>
                        <div class="col-md-6">
                            <input id="title" name="title" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient Last Name</label>
                        <div class="col-md-6">
                            <input id="lastName" name="lastName" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient ID No</label>
                        <div class="col-md-6">
                            <input id="idNumber" name="idNumber" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient Address</label>
                        <div class="col-md-6">
                            <input id="address" name="address" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Venue</label>
                        <div class="col-md-6">
                            <input id="venue" name="venue" type="text" class="form-control input-md" />
                        </div>
                    </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Time</label>
                        <div class="col-md-6">
                            <input id="time" name="time" type="text" class="form-control input-md" />
                        </div>
                    </div>                            
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="color">Color</label>
                        <div class="col-md-6">
                            <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                            <span class="help-block">Click to pick a color</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>