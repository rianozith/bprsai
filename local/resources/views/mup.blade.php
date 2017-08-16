@extends('layouts.home_master')
@section('content')

<div class="row-fluid">
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Memorandum Usulan Pembayaran (MUP)</div>
                                </div>

                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Input MUP</legend>
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="control-group">
                                                            <label class="control-label">Di usulkan oleh A/O : </label>
                                                            <div class="controls">
                                                                <span class="input-medium uneditable-input">Nama A/O</span>
                                                            </div>
                                                        </div>

                                                        <div class="control-group">
                                                            <label class="control-label" for="typeahead">Text input </label>
                                                            <div class="controls">
                                                                <input type="text" class="span6" id="typeahead" >
                                                                <p class="help-block">Start typing to activate auto complete!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6">
                                                        
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            

                       

                        </div>


@stop