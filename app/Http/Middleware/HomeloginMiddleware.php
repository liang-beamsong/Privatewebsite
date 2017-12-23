<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Crypt;
class HomeloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * 判断是否存在session  刘闯 11-18
         */
        if(session('uid')){
            return $next($request);
        }else if(isset($_COOKIE['usercookie'])){ // 此处检测第二次登录时有没有cookie
            //获取已经写入的cookie
            $secret = $_COOKIE['usercookie'];
            // dd($secret);
            //解密cookie
            $decrypt = Crypt::decrypt($secret);
            // dd($decrypt);
            $res  =explode('@@',$decrypt);
            //准备数据 写入session
            $username = $res['0'];
            $password = $res['1'];
            //读取当前登录用户的信息
            $info = DB::table('user')->where('username',$username)->first();

            //写入session
            session(['username'=>$username]);
            session(['password'=>$password]);

            //写入session的id
            session(['uid'=>$info->id]);

            return $next($request);
        }else{
            //此处为第一次登录没有session和cookie的跳转
            return redirect('/home/login');
        }
    }
}
