<?php namespace BB\Repo;

use BB\Entities\Device;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeviceRepository extends DBRepository {

    /**
     * @var Device
     */
    protected $model;

    function __construct(Device $model)
    {
        $this->model = $model;
    }

    /**
     * Fetch a record by name
     *
     * @param $device
     * @return mixed
     */
    public function getByName($device)
    {
        $record = $this->model->where('device_id', $device)->first();
        if (!$record) {
            throw new ModelNotFoundException();
        }
        return $record;
    }

    /**
     * @param $device string
     */
    public function logBoot($device)
    {
        $record = $this->model->where('device_id', $device)->first();
        if (!$record) {
            $record = $this->createRecord($device);
        }
        $record->last_boot = Carbon::now();
        $record->save();
    }

    /**
     * @param $device string
     */
    public function logHeartbeat($device)
    {
        $record = $this->model->where('device_id', $device)->first();
        if (!$record) {
            $record = $this->createRecord($device);
        }
        $record->last_heartbeat = Carbon::now();
        $record->save();
    }

    /**
     * @param $device string
     * @return mixed
     */
    private function createRecord($device)
    {
        $record = new $this->model();
        $record->device_id = $device;
        $record->save();
        return $record;
    }
} 