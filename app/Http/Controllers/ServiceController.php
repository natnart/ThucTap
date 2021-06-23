<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\http\Requests;
use Session;
use Illuminate\support\facades\redirect;
session_start();

class serviceController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
   	
   	public function add_service(){
      $this->AuthLogin();
        $cate_service = DB::table('tbl_category')->orderby('category_id','desc')->get(); 
        

        return view('admin.add_service')->with('cate_service', $cate_service);

    }


public function save_service(Request $Request){
        $this->AuthLogin();
   		$data =  array();
   		$data['service_name']= $Request->service_name;
   		$data['service_price']= $Request->service_price;
   		$data['service_content']= $Request->service_content;
   		
   		$data['service_status']= $Request->service_status;


      		DB::table('tbl_service')->insert($data);
      		Session::put('message','Thêm dịch vụ thành công');
      		return Redirect::to('add-service');
    }
public function all_service (){
        $this->AuthLogin();
        $all_service = DB::table('tbl_service')
        
        ->orderby('tbl_service.service_id','desc')->get();
        $manager_service  = view('admin.all_service')->with('all_service',$all_service);
        return view('admin_layout')->with('admin.all_service', $manager_service);

   
   }

   public function unactive_service($service_id){
         $this->AuthLogin();
        DB::table('tbl_service')->where('service_id',$service_id)->update(['service_status'=>1]);
        Session::put('message','Ẩn thương hiệu');
        return Redirect::to('all-service');

    }

  public function active_service($service_id){
         $this->AuthLogin();
        DB::table('tbl_service')->where('service_id',$service_id)->update(['service_status'=>0]);
        Session::put('message','Hiện thương hiệu');
        return Redirect::to('all-service');
    }

     public function edit_service($service_id){
        $this->AuthLogin();
        $edit_service = DB::table('tbl_service')->where('service_id',$service_id)->get();

        $manager_service  = view('admin.edit_service')->with('edit_service',$edit_service);
        return view('admin_layout')->with('admin.edit_service', $manager_service);
    }

    public function update_service(Request $request,$service_id){
        $this->AuthLogin();
        $data = array();
        $data['service_name'] = $request->service_name;     
        $data['service_content'] = $request->service_content;

        DB::table('tbl_service')->where('service_id',$service_id)->update($data);
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('all-service');
    }
    public function delete_service($service_id){
        $this->AuthLogin();
        DB::table('tbl_service')->where('service_id',$service_id)->delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('all-service');
    }
}
