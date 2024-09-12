<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('Panel.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Panel.pages.slider.edit');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $fayladi = null;
        if($request->hasFile('image')){
            $sekil = $request->file('image');
            $fayladi = time()."-".Str::slug($request->name).'.'.$sekil->getClientOriginalExtension();
            $sekil->move(public_path('AdminPanel/img/slider'), $fayladi);

        }
        Slider::create([
            'name'=>$request->name,
            'link'=>$request->link,
            'content'=>$request->content,
            'status'=>$request->status,
            'image'=>$fayladi,
        ]);
        return back()->withSuccess('Ugurla yaradildi!');


    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider=Slider::where('id',$id)->first();
        return view('Panel.pages.slider.edit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

          if($request->hasFile('image')){
            $sekil = $request->file('image');
            $fayladi = time()."-".Str::slug($request->name).'.'.$sekil->getClientOriginalExtension();
            $sekil->move(public_path('AdminPanel/img/slider'), $fayladi);

        }
        Slider::where('id',$id)->update([
            'name'=>$request->name,
            'link'=>$request->link,
            'content'=>$request->content,
            'status'=>$request->status,
            'image'=>$fayladi,
        ]);
        return back()->withSuccess('Ugurla yenilendi!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider=Slider::where('id',$id)->firstOrFail();
        if(file_exists($slider->image)){
            if(!empty($slider->image)){
            unlink($slider->image);
        }
        }

        $slider->delete();
        return back()->withSuccess('Ugurla silindi!');
    }
}
