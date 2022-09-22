<?php

namespace App\Http\Controllers\ConfigAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Repositories\Contracts\PermissionRepositoryInterface;
use Validator;

class RoleController extends Controller
{

    private $route = 'roles';
    private $paginate = 7;
    private $search = ['name','description'];
    private $model;
    private $modelPermission;

    public function __construct(RoleRepositoryInterface $model, PermissionRepositoryInterface $modelPermission)
    {
        $this->model = $model;
        $this->modelPermission = $modelPermission;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $columnList = ['id'=>'#','name'=>trans('system.name'),'description'=>trans('system.description')];
        $page = trans('system.role_list');

        $search = "";
        if(isset($request->search)){
          $search = $request->search;
          $list = $this->model->findWhereLike($this->search,$search,'id','DESC');
        }else{
          $list = $this->model->paginate($this->paginate,'id','DESC');
        }

        $routeName = $this->route;

        $breadcrumb = [
            (Object)['url'=>route('home'), 'title'=>trans('system.home')],
            (Object)['url'=>'', 'title'=>trans('system.list', ['page'=>$page])],
        ];

        return view('admin.'.$routeName.'.index',compact('list','search','page','routeName','columnList', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = trans('system.role_list');
        $page_create = trans('system.role');

        $routeName = $this->route;

        $permissions = $this->modelPermission->all('name', 'ASC');

        $breadcrumb = [
            (Object)['url'=>route('home'), 'title'=>trans('system.home')],
            (Object)['url'=>route($routeName.".index"), 'title'=>trans('system.list', ['page'=>$page])],
            (Object)['url'=>'', 'title'=>trans('system.create_crud',['page'=>$page_create])],
        ];

        return view('admin.'.$routeName.'.create',compact('page', 'page_create', 'routeName', 'breadcrumb', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:355',
        ])->validate();

        if ($this->model->create($data)) {
            session()->flash('msg', trans('system.record_added_successusfully'));
            session()->flash('status', 'success'); // success error notification
            return redirect()->back();
        } else {
            session()->flash('msg', trans('system.error_adding_registry'));
            session()->flash('status', 'error'); // success error notification
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $routeName = $this->route;
        $register = $this->model->find($id);
        if($register){
            $page = trans('system.role_list');
            $page2 = trans('system.role');

            $breadcrumb = [
                (object)['url'=>route('home'),'title'=>trans('system.home')],
                (object)['url'=>route($routeName.".index"),'title'=>trans('system.list',['page'=>$page])],
                (object)['url'=>'','title'=>trans('system.show_crud',['page'=>$page2])],
            ];
            $delete = false;
            if($request->delete ?? false){
                session()->flash('msg', trans('system.delete_this_record'));
                session()->flash('status', 'notification'); // success error notification
                $delete = true;
            }

            return view('admin.'.$routeName.'.show',compact('register','page','page2','routeName','breadcrumb','delete'));
        }

        return redirect()->route($routeName.'.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routeName = $this->route;
        $register = $this->model->find($id);
        if ($register) {

            $page = trans('system.role_list');
            $page2 = trans('system.role');
            $permissions = $this->modelPermission->all('name', 'ASC');


            $breadcrumb = [
                (Object)['url'=>route('home'), 'title'=>trans('system.home')],
                (Object)['url'=>route($routeName.".index"), 'title'=>trans('system.list', ['page'=>$page])],
                (Object)['url'=>'', 'title'=>trans('system.edit_crud',['page'=>$page2])],
            ];

            return view('admin.'.$routeName.'.edit',compact('register', 'page', 'page2', 'routeName', 'breadcrumb', 'permissions'));

        }

        return redirect()->route($routeName.'.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:355',
        ])->validate();

        if ($this->model->update($data, $id)) {
            session()->flash('msg', trans('system.successfully_edited_record'));
            session()->flash('status', 'success');
            return redirect()->back();
        } else {
            session()->flash('msg', trans('system.error_editing_record'));
            session()->flash('status', 'error');
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if ($this->model->delete($id)) {
            session()->flash('msg', trans('system.registration_deleted_successfully'));
            session()->flash('status', 'success'); // success error notification
        } else {
            session()->flash('msg', trans('system.error_deleting_record'));
            session()->flash('status', 'error'); // success error notification
        }

        $routeName = $this->route;
        return redirect()->route($routeName.'.index');
    }
}
