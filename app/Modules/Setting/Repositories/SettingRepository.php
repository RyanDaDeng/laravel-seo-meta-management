<?php

namespace App\Modules\Setting\Repositories;

use App\Modules\Setting\Models\AllSetting;
use App\Modules\Setting\Models\PullSetting;
use App\Modules\Setting\Models\PushSetting;


class SettingRepository
{

    public function getPullSetting()
    {
        return PullSetting::query()->where('id', PullSetting::ID)->first();
    }

    public function updatePullSettings($data)
    {
        $obj = PullSetting::query()->where('id', PullSetting::ID)->first();
        $obj->last_updated = $data['last_updated'];
        $obj->save();
        return $obj;
    }

    public function getPushSetting()
    {
        return PushSetting::query()->where('id', PushSetting::ID)->first();
    }


    public function updatePushSetting($data = [])
    {
        $obj = PushSetting::query()->where('id', PushSetting::ID)->first();
        $obj->last_updated = $data['last_updated'];
        $obj->save();
        return $obj;
    }

    public function getAllSettings()
    {
        $data = AllSetting::query()->get();
        return $data;
    }

}

