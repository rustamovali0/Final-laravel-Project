<?php
namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('Panel.pages.setting.index', compact('settings'));
    }

    public function create()
    {
        return view('Panel.pages.setting.edit');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'data' => 'required|string',
        ]);

        $setting = new Setting();
        $setting->name = $request->input('name');
        $setting->data = $request->input('data');
        $setting->save();

        return redirect()->route('setting.index')->with('success', 'Ayar başarıyla eklendi');
    }

    public function edit($id)
{
    $setting = Setting::find($id);
    if (!$setting) {
        return redirect()->route('setting.index')->with('error', 'Ayar bulunamadı');
    }
    return view('Panel.pages.setting.edit', compact('setting'));
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'data' => 'required|string',
        ]);

        $setting = Setting::find($id);

        if (!$setting) {
            return redirect()->route('setting.index')->with('error', 'Ayar bulunamadı');
        }

        $setting->update([
            'name' => $request->input('name'),
            'data' => $request->input('data'),
        ]);

        return redirect()->route('setting.index')->with('success', 'Ayar başarıyla güncellendi');
    }

public function destroy($id)
{
    $setting = Setting::find($id);

    if (!$setting) {
        return redirect()->route('setting.index')->with('error', 'Tapılmadı');
    }

    $setting->delete();

    return redirect()->route('setting.index')->with('success', 'Uğurla silindi');
}

}
