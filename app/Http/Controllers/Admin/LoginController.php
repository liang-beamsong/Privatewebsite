<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Hash;
use Crypt;
use Session;
use Cookie;
class LoginController extends Controller
{
    public function index()
    {
    	if(session('uid')){
    		return redirect('admin');
    	}else{
    		return view('admin.login');
    	}
    }

    public function login(Request $Request)
    {
    	$data=$Request->only(['username','password']);
    	$info=DB::table('cp_user')->where('username',$data['username'])->first();
    	if(empty($info)){
    		exit(json_encode(['status'=>404,'info'=>'管理员不存在请重新输入!']));
    	}
    	// $re=Hash::make($data['password']);
    	// echo $re;
    	if(Hash::check(base64_decode($data['password']), $info->password)){
    		if($info->status == '2'){
    			exit(json_encode(['status'=>500,'info'=>'账号已被冻结!']));
    		}else if($info->class == '3'){
    			exit(json_encode(['status'=>500,'info'=>'您没有权限登录后台系统!']));
    		}
    		session(['uid'=>$info->id,'username'=>$info->username]);
    		$cookies=Crypt::encrypt(implode(',',$data));
    		setcookie('userinfo',$cookies,time()+3600,'/');
    		exit(json_encode(['status'=>200,'info'=>'成功']));
    	}else{
    		exit(json_encode(['status'=>400,'info'=>'密码错误请重新输入!']));
    	}
    }
}
