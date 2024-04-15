<?php

namespace App\Services;

use App\Models\Application;
use App\Models\Visit;

class ApplicationService
{
    public function store($request)
    {
        //защита от ботов
        if($request->email==null)
        {
            $data=$request->all();
            $data['date_time']=$data['date'].' '.$data['time'];
            unset($data['_token']);
            unset($data['email']);
            unset($data['date']);
            unset($data['time']);
            Application::create($data);
            return true;
        }
        return false;
    }

    public function approve_application($request,Application $application)
    {
        $data=$request->all();
        $data['date_time']=$data['date'].' '.$data['time'];
        unset($data['_token']);
        unset($data['email']);
        unset($data['date']);
        unset($data['time']);

        $old_visit=Visit::query()->where('application_id','=',$application->id)->first();
        if($old_visit!=null)
            $old_visit->update(['date_time'=>$data['date_time'],'master_id'=>$data['master_id'], 'application_id'=>$application->id]);
        else
            Visit::create(['date_time'=>$data['date_time'],'master_id'=>$data['master_id'], 'application_id'=>$application->id]);

        $application->update(['is_approved'=>true, 'date_time'=>$data['date_time']]);
    }
}
