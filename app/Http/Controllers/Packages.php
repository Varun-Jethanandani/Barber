<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Package;
use App\PackageService;
use DB;
class Packages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::all();

        return view('packages.add-package')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'package_name'=>'required',
            'price'=>'required',
            // 'service[]'=>'required'
        ]);

        $package = new Package;
        $package->package_name = $request->input('package_name');
        $package->package_price = $request->input('price');
        $package->save();

        $package=DB::table('packages')->orderBy('package_id', 'DESC')->first();    
        $services =  $request->input('service');
        // $data = array();
        if(is_array($services) || is_object($services)){
            foreach($services as $service){
                // array_push($data,array('package_id'=>$package->package_id , 'service_id'=>$service));
                // DB::table('package_services')->insertGetId(['package_id'=>$package->package_id , 'service_id'=>$service]);     
                $package_service = new PackageService;
                $package_service->package_id = $package->package_id;
                $package_service->service_id = $service;
                $package_service->save();
            }
            
        }
        // var_dump($data);
        // $data = json_encode($data);
        // DB::table('package_services')->insertGetId($data);
        return redirect('/dashboard');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
