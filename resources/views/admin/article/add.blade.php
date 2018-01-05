@extends('layout.admin')

@section('title', '后台首页')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Form Validations</h3>
                <div class="actions pull-right">
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal form-border" id="form" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Required</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="input1" id="input1" required="" placeholder="Required input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Min Length</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="input2" id="input2" required="" placeholder="Min 5 chars.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Max Length</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="" name="input3" id="input3" placeholder="Max 5 chars.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Range Length</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="" name="input4" id="input4" placeholder="Text between 4 - 8 chars length">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Min Value</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="" name="input5" id="input5" placeholder="Min value is 5">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Range Value</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control " required="" name="input6" id="input6" placeholder="Number between 5 - 50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Equal To</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control " name="input7" id="input7" required="" placeholder="Password">
                        </div>
                        <div class="col-sm-3">
                            <input type="password" class="form-control " required="" name="input8" id="input8" placeholder="Re-Type Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">E-Mail</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control " required="" name="input9" id="input9" placeholder="Enter a valid e-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">URL</label>
                        <div class="col-sm-6">
                            <input type="url" class="form-control " name="input10" id="input10" required="" placeholder="URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Number</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control " name="input11" id="input11" required="" placeholder="Enter only numbers">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="input12" id="input12" required="" placeholder="(XXX) XXXX XXX">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Textarea</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="input13" id="input13" placeholder="Min 5 chars."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-8 col-sm-10">
                            <button type="submit" class="btn btn-primary">Validate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection