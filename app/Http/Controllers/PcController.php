<?php

namespace App\Http\Controllers;

use App\Http\Requests\PcRequest;
use App\Models\ModelProcessor;
use App\Models\ModelMB;
use App\Models\ModelPc;

class PcController extends Controller
{
    private $objMB;
    private $objPc;
    private $objProcessor;

    public function __construct()
    {
        $this->objMB = new ModelMB();
        $this->objPc = new ModelPc();
        $this->objProcessor = new ModelProcessor();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pc=$this->objPc->all();
        return view('index',compact('pc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mbs=$this->objMB->all();
        $processors=$this->objProcessor->all();
        return view('create',compact('mbs','processors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PcRequest $request)
    {
        $cad=$this->objPc->create([
            'name'=>$request->name,
            'id_processor'=>$request->id_processor,
            'id_mb'=>$request->id_mb,
            'video'=>$request->video,
            'power_supply'=>$request->power_supply
        ]);
        if($cad){
            return redirect('pc');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pc=$this->objPc->find($id);
        return view('show',compact('pc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pc=$this->objPc->find($id);
        $mbs=$this->objMB->all();
        $processors=$this->objProcessor->all();
        return view('create',compact('pc','mbs','processors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PcRequest $request, $id)
    {
        $this->objPc->where(['id'=>$id])->update([
            'name'=>$request->name,
            'id_processor'=>$request->id_processor,
            'id_mb'=>$request->id_mb,
            'video'=>$request->video,
            'power_supply'=>$request->power_supply
        ]);
        return redirect('pc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objPc->destroy($id);
        return($del)?"sim":"não";
    }
}
