<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Traits\SetData;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller {
    use SetData;

    public function index(): View {
        return view('admin.settings', [
            'languages' => $this->languages
        ]);
    }

    public function update(Request $request): RedirectResponse {
        $settings = Setting::firstOrFail();
        try {
            $this->setTranslated($settings, 'title');
            $this->setTranslated($settings, 'description');
            $this->setTranslated($settings, 'keywords');
            $this->setTranslated($settings, 'author');
            $this->singleImg($request, 'logo', null, $settings);
            $this->singleImg($request, 'favicon', null, $settings);
            $settings->save();
            return redirect()->back()->withSuccess('Parametrlər saxlanıldı.');
        } catch(Exception) {
            return redirect()->back()->withError('Parametrlər dəyişdirilərkən xəta baş verdi.');
        }
    }
}
