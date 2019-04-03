<?php

namespace App\Http\Services\Organizers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\Organizer\Organizer;

class OrganizerService
{
    const SUCCESS_MESSAGE = 'success';
    const SUCCESS_STATUS = 200;

    const FAILED_MESSAGE = 'failed';
    const FAILED_STATUS = 400;

    function __construct()
    {
        $this->response = [
            'status' => self::FAILED_STATUS,
            'message' => self::FAILED_MESSAGE,
            'result' => [],
        ];
    }

    public function getData()
    {
        try {
            $selectData = ['organizers.*', 'users.email as email', 'users.status as status'];

            $data = DB::table('organizers')
                ->join('users', 'users.userable_id', '=', 'organizers.id')
                ->where('users.userable_type', 'organizer')
                ->whereNull('organizers.deleted_at');

            if ($data) {
                $data = $data->get($selectData);

                $this->response['status'] = self::SUCCESS_STATUS;
                $this->response['message'] = self::SUCCESS_MESSAGE;
                $this->response['result'] = $data;
            }
        } catch (\Exception $e) {
            $log = ['Service' => 'OrganizerService', 'function' => 'getDataOrganizer'];
            return array([$e,$log]);
        }
        return $this->response;
    }

    public function countData(){
        try {
            $data = DB::table('organizers')
                ->join('users', 'users.userable_id', '=', 'organizers.id')
                ->where('users.userable_type', 'organizer')
                ->whereNull('organizers.deleted_at');

            if ($data) {
                $data = $data->count();

                $this->response['status'] = self::SUCCESS_STATUS;
                $this->response['message'] = self::SUCCESS_MESSAGE;
                $this->response['result'] = $data;
            }
        } catch (\Exception $e) {
            $log = ['Service' => 'OrganizerService', 'function' => 'getDataOrganizer'];
            return array([$e,$log]);
        }
        return $this->response['result'];
    }

    public function putData($params, $id)
    {
        try {
            if (isset($params['photo']) && $params['photo'] != '') {
                $photoName = 'organizers_' . $params['identity_id'] . '_' . date('YmdHis') . '.png';
                $photoPath = Organizer::PhotoDir;
            }

            $result = DB::table('organizers')
                ->join('users', 'organizers.id', '=', 'users.userable_id')
                ->where('organizers.id', $id)
                ->where('userable_type', 'organizer');

            if ($result) {
                $result->update([
                    'identity_id' => $params['identity_id'],
                    'full_name' => $params['full_name'],
                    'address' => $params['address'],
                    'photo' => $photoName,
                    'home_phone' => $params['home_phone'],
                    'mobile_phone' => $params['mobile_phone'],
                    'line_id' => $params['line_id'],
                    'instagram_id' => $params['instagram_id'],
                    'facebook_id' => $params['facebook_id'],
                    'website_link' => $params['website_link'],
                    'password' => Hash::make($params['password']),
                    'userable_id' => $id,
                    'userable_type' => 'organizer',
                    'status' => $params['status'],
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

                $this->response['status'] = self::SUCCESS_STATUS;
                $this->response['message'] = self::SUCCESS_MESSAGE;
                $this->response['result'] = $params;
            }
        } catch (\Exception $e) {
            unset($params['photo']);
            $log = ['Service' => 'OrganizerService', 'function' => 'putDataOrganizer', 'params' => $params];
            logError($e, $log);
        }
        return $this->response;
    }
}
