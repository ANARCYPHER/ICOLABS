@extends('admin.layouts.app')

@section('panel')
    <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"> @lang('Site Title') </label>
                                    <input class="form-control form-control-lg" type="text" name="sitename" value="{{$general->sitename}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold">@lang('Currency')</label>
                                    <input class="form-control form-control-lg" type="text" name="cur_text" value="{{$general->cur_text}}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold">@lang('Currency Symbol') </label>
                                    <input class="form-control form-control-lg" type="text" name="cur_sym" value="{{$general->cur_sym}}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold">@lang('Deposit Commission') </label>
                                    <div class="input-group">
                                        <input class="form-control form-control-lg" type="text" name="depo_com" value="{{getAmount($general->depo_com)}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="form-control-label font-weight-bold"> @lang('Site Base Color')</label>
                                <div class="input-group">
                                <span class="input-group-addon ">
                                    <input type='text' class="form-control form-control-lg colorPicker" value="{{$general->base_color}}"/>
                                </span>
                                    <input type="text" class="form-control form-control-lg colorCode" name="base_color" value="{{ $general->base_color }}"/>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-control-label font-weight-bold"> @lang('Site Secondary Color')</label>
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <input type='text' class="form-control form-control-lg colorPicker" value="{{$general->secondary_color}}"/>
                                </span>
                                    <input type="text" class="form-control form-control-lg colorCode" name="secondary_color" value="{{ $general->secondary_color }}"/>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-control-label font-weight-bold"> @lang('Coin Name')</label>
                                <div class="input-group">
                                    <input type='text' name="coin_name" value="{{ $general->coin_name }}" class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-control-label font-weight-bold"> @lang('Coin Symbol')</label>
                                <div class="input-group">
                                    <input type='text' name="coin_symbol" value="{{ $general->coin_symbol }}" class="form-control form-control-lg" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"> @lang('Email Verification')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="ev" @if($general->ev) checked @endif>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold">@lang('Email Notification')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="en" @if($general->en) checked @endif>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"> @lang('SMS Verification')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="sv" @if($general->sv) checked @endif>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold">@lang('SMS Notification')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="sn" @if($general->sn) checked @endif>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="form-control-label font-weight-bold">@lang('Withdraw Permission')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="withdraw_permission" @if($general->withdraw_permission) checked @endif>
                            </div>

                            <div class="col-lg-6">
                                <label class="form-control-label font-weight-bold">@lang('User Registration')</label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disabled')" name="registration" @if($general->registration) checked @endif>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="">&nbsp;</label>
                                <button type="submit" class="btn btn--primary btn-lg btn-block" style="padding: 11px 16px">@lang('Update')</button>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-lib')
    <script src="{{ asset('assets/admin/js/spectrum.js') }}"></script>
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/spectrum.css') }}">
@endpush


@push('style')
    <style>
        .sp-replacer {
            padding: 0;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 5px 0 0 5px;
            border-right: none;
        }

        .sp-preview {
            width: 100px;
            height: 46px;
            border: 0;
        }

        .sp-preview-inner {
            width: 110px;
        }

        .sp-dd {
            display: none;
        }
    </style>
@endpush

@push('script')
    <script>
        $(function () {
            "use strict";
            $('.colorPicker').spectrum({
                color: $(this).data('color'),
                change: function (color) {
                    $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
                }
            });

            $('.colorCode').on('input', function () {
                var clr = $(this).val();
                $(this).parents('.input-group').find('.colorPicker').spectrum({
                    color: clr,
                });
            });
        });


    </script>
@endpush

