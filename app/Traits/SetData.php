<?php

namespace App\Traits;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait SetData {
    public array $languages = ['az', 'en', 'ru'];

    public function setTranslated($model, string $field): void {
        foreach($this->languages as $language) {
            $model->setTranslation($field, $language, Request::input($field . '_' . $language));
        }
    }

    public function singleImg($request, string $field, ?string $path = null, $model): void {
        if($request->file($field)) {
            if($model->{$field} && Storage::exists('public/' . $model->{$field})) {
                Storage::delete('public/' . $model->{$field});
            }
            $name = explode('.', $request->{$field}->getClientOriginalName());
            $date = date('Y_m_d_H_i_s');
            $img = Str::slug($name[0]) . '_' . $date . '.' . $request->{$field}->extension();
            if($path) {
                $request->{$field}->move('storage/' . $path . '/', $img);
            } else {
                $request->{$field}->move('storage/', $img);
            }
            $model->{$field} = $img;
        }
    }
}
