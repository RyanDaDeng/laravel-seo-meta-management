<?php

namespace App\Modules\Setting\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Modules\Setting\Facades\SettingService;
use App\Modules\Setting\Requests\Api\V1\SettingGetPushSettingsRequest;
use App\Modules\Setting\Requests\Api\V1\SettingGetPullSettingsRequest;
use App\Modules\Setting\Requests\Api\V1\SettingUpdatePullSettingsRequest;
use App\Modules\Setting\Requests\Api\V1\SettingUpdatePushSettingsRequest;
use Illuminate\Http\Request;


class SettingApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/setting/v1/all-settings",
     *     tags={"Setting"},
     *     summary="Get resource",
     *     description="Get resource",
     *     deprecated=false,
     *     @OA\Response(
     *         response=200,
     *         description="get a resource"
     *     )
     * )
     */
    public function getAllSettings()
    {
        return SettingService::getAllSettings();
    }


    /**
     * @OA\Get(
     *     path="/setting/v1/push-settings",
     *     tags={"Setting"},
     *     summary="Get resource",
     *     description="Get resource",
     *     deprecated=false,
     *     @OA\Response(
     *         response=200,
     *         description="get a resource"
     *     )
     * )
     */
    public function getPushSettings(SettingGetPushSettingsRequest $request)
    {
        $request->validated();
        return SettingService::getPushSettings();
    }

    /**
     * @OA\Put(
     *     path="/setting/v1/push-settings",
     *     tags={"Setting"},
     *     summary="update resource",
     *     description="update resource",
     *     deprecated=false,
     *     @OA\RequestBody(
     *          description="Data required to create it",
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(type="object",
     *                 @OA\Property(
     *                     property="last_updated",
     *                     description="last updated",
     *                     type="string",
     *                 )
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="update a resource"
     *     )
     * )
     */
    public function updatePushSettings(SettingUpdatePushSettingsRequest $request)
    {
        $request->validated();
        return SettingService::updatePushSettings($request->only('last_updated'));
    }

    /**
     * @OA\Get(
     *     path="/setting/v1/pull-settings",
     *     tags={"Setting"},
     *     summary="Get only pull data",
     *     description="Get only pull data",
     *     deprecated=false,
     *     @OA\Response(
     *         response=200,
     *         description="get a resource"
     *     )
     * )
     */
    public function getPullSettings(SettingGetPullSettingsRequest $request)
    {
        $request->validated();
        return SettingService::getPullSettings();
    }



    /**
     * @OA\Put(
     *     path="/setting/v1/pull-settings",
     *     tags={"Setting"},
     *     summary="update resource",
     *     description="update resource",
     *     deprecated=false,
     *     @OA\RequestBody(
     *          description="Data required to create it",
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(type="object",
     *                 @OA\Property(
     *                     property="last_updated",
     *                     description="last updated",
     *                     type="string",
     *                 )
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="update a resource"
     *     )
     * )
     */
    public function updatePullSettings(SettingUpdatePullSettingsRequest $request)
    {
        $request->validated();
        return SettingService::updatePullSettings($request->only('last_updated'));
    }
}

