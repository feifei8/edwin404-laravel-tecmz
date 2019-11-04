@extends('tecmz::mail.frame')

@section('pageTitle','密码重置提醒')

@section('bodyContent')
    <p>尊敬的 {{$username or '{username}'}} 您好：</p>
    <p>&nbsp;</p>
    <p>您的密码已经被重置为 {{$password or '{password}'}}，请尽快登录{{\Edwin404\Config\Facades\ConfigFacade::get('siteName')}}进行修改。</p>
    <p>&nbsp;</p>
    <p>{{\Edwin404\Config\Facades\ConfigFacade::get('siteName')}}安全团队</p>
@endsection