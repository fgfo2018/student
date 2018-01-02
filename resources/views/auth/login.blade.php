@extends('layouts.app')

@section('content')
    <div class="py-4 fon text-center">
        <h1>
            <img src="image/logo1.gif" class="logo" alt="logo" />
            <div class="d-block d-lg-inline">

            </div>
            <strong>
                慈濟科技大學
                <div class="d-block d-lg-inline">

                </div>
                學生資訊系統
            </strong>
        </h1>
    </div>

    <div class="container text-center pt-2 pb-5">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}  
            <div class="stu ">
                <strong>
                    <span>請使用本校Email及密碼進行登入</span>
                </strong>
            </div>
            <div class="stu ">
                <span>Login With Your Student ID
                    <div class="d-block d-lg-inline"></div> And Password
                </span>
            </div>
            <hr width="70%">
            <div class="py-3  log">
                <span><strong>Email:</strong></span>
                <input name="email" type="text" autocomplete="off" placeholder="email">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif


            <div class="py-3  log">
                <span><strong>密碼:</strong></span>
                <input name="password" type="password" autocomplete="off" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="my-3">
                <input class="login_btn1" type="submit" value="登入">
                <input class="login_btn2" type="submit" value="清除" onclick="javascrtip:form.reset();">
            </div>
            <div class="he">
                <a href="#" class="btn-tools">[助理人員登入]</a>
            </div>
            <div class="eng pt-3">
                切換語言-<a href="#" class="btn-tools">English</a>
            </div>
            <div class=" pt-3" id="showbox"></div>
            <div class="d3 py-1" align="center">
                <span>每日凌晨 03:00 ～ 04:00 系統資料庫維護<div class="d-block d-lg-inline"></div>，本學生資訊系統暫停使用！</span>
            </div>
            <div class="d1 pb-4" align="center">
                <span>有問題請聯絡</span><a href="#"><span>電算中心</span></a>
                <span>分機:2583</span>

            </div>






@endsection
