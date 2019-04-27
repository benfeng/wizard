@extends('layouts.user')

@section('title', __('common.user_info'))
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ wzRoute('user:home') }}">@lang('common.home')</a></li>
        <li class="breadcrumb-item">个人中心</li>
        <li class="breadcrumb-item active">用户信息</li>
    </ol>
@endsection
@section('user-content')
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal" method="post" action="{{ wzRoute('user:basic:handle') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="editor-email" class="bmd-label-floating">@lang('common.email')</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" id="editor-email"
                           name="email" readonly>
                </div>
                <div class="form-group">
                    <label for="editor-username" class="bmd-label-floating">@lang('common.username')</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="editor-username"
                           name="username" {{ ldap_enabled() ? 'readonly' : '' }}>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success btn-raised" {{ ldap_enabled() ? 'disabled' : '' }}>@lang('common.btn_save')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
