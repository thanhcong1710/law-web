<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\UtilityServiceProvider as u;
use Illuminate\Http\Request;
use BigBlueButton\BigBlueButton;
use BigBlueButton\Parameters\CreateMeetingParameters;
use BigBlueButton\Parameters\JoinMeetingParameters;
use BigBlueButton\Parameters\GetMeetingInfoParameters;
use BigBlueButton\Parameters\GetRecordingsParameters;
use BigBlueButton\Parameters\DeleteRecordingsParameters;
use BigBlueButton\Parameters\EndMeetingParameters;
use Illuminate\Support\Facades\Auth;

class VideoCallController extends Controller
{
    public function create(Request $request)
    {
        $schedule_info = u::first("SELECT * FROM law_schedules WHERE id = $request->law_schedule_id");
        $bbb = new BigBlueButton();
        $meetingID = uniqid('LAW_'.$schedule_info->id.'_');
        $meetingName = 'LAW TECH';
        $attendee_password = 'attendee_'.uniqid();
        $moderator_password = 'moderator_'.uniqid();
        $duration = 3600;
        $urlLogout = 'https://law.dapanh.com/';
        $isRecordingTrue = true;

        $createMeetingParams = new CreateMeetingParameters($meetingID, $meetingName);
        $createMeetingParams->setAttendeePassword($attendee_password);
        $createMeetingParams->setModeratorPassword($moderator_password);
        $createMeetingParams->setDuration($duration);
        $createMeetingParams->setLogoutUrl($urlLogout);
        if ($isRecordingTrue) {
            $createMeetingParams->setRecord(true);
            $createMeetingParams->setAllowStartStopRecording(true);
            $createMeetingParams->setAutoStartRecording(true);
        }
        u::updateSimpleRow(array(
            'meeting_id' => $meetingID,
            'attendee_password' => $attendee_password,
            'moderator_password' => $moderator_password,
        ), array('id'=>$schedule_info->id), 'law_schedules');

        $response = $bbb->createMeeting($createMeetingParams);
        if ($response->getReturnCode() == 'FAILED') {
            $result = array(
                'status' => 0,
                'message' => 'Can\'t create room! please contact our administrator.'
            );
        } else {
            $joinMeetingParams = new JoinMeetingParameters($meetingID, Auth::user()->name, $attendee_password);
            $joinMeetingParams->setRedirect(true);
            $url = $bbb->getJoinMeetingURL($joinMeetingParams);
            $result = array(
                'status' => 1,
                'message' => 'ok',
                'redirect_url' => $url
            );
        }
        return response()->json($result);
    }

    public function joinRoom(Request $request)
    {
        $bbb = new BigBlueButton();
        $meetingID = 'demo4';
        $name = 'conglt';
        $password = '123456';

        $joinMeetingParams = new JoinMeetingParameters($meetingID, $name, $password);
        $joinMeetingParams->setRedirect(true);
        $url = $bbb->getJoinMeetingURL($joinMeetingParams);
        var_dump($url);
        die();
        return response()->json("ok");
    }

    public function endRoom(Request $request)
    {
        $bbb = new BigBlueButton();
        $meetingID = 'demo4';
        $moderator_password = 'acbd1234';

        $endMeetingParams = new EndMeetingParameters($meetingID, $moderator_password);
        $response = $bbb->endMeeting($endMeetingParams);
        var_dump($response);die();
        return response()->json("ok");
    }

    public function getRoomInfo()
    {
        $bbb = new BigBlueButton();
        $meetingID = 'demo4';
        $moderator_password = 'acbd1234';

        $getMeetingInfoParams = new GetMeetingInfoParameters($meetingID, $moderator_password);
        $response = $bbb->getMeetingInfo($getMeetingInfoParams);
        var_dump($response);
        die();
        if ($response->getReturnCode() == 'FAILED') {
            // meeting not found or already closed
        } else {
            var_dump($response);
            die();
        }
        return response()->json("ok");
    }

    public function getListRoom()
    {
        $bbb = new BigBlueButton();
        $response = $bbb->getMeetings();
        if ($response->getReturnCode() == 'SUCCESS') {
            foreach ($response->getRawXml()->meetings->meeting as $meeting) {
                // process all meeting
                var_dump($meeting);die();
            }
        }
        return response()->json("ok");
    }

    public function getRecords()
    {
        $recordingParams = new GetRecordingsParameters();
        $bbb = new BigBlueButton();
        $response = $bbb->getRecordings($recordingParams);

        if ($response->getReturnCode() == 'SUCCESS') {
            foreach ($response->getRawXml()->recordings->recording as $recording) {
                $recording = (object)$this->xml2array($recording);
                // process all recording
                var_dump($recording->meetingID);die();
            }
        }
        return response()->json("ok");
    }

    public function deleteRecord()
    {
        $recordingID = 'demo4';
        $bbb = new BigBlueButton();
        $deleteRecordingsParams= new DeleteRecordingsParameters($recordingID); // get from "Get Recordings"
        $response = $bbb->deleteRecordings($deleteRecordingsParams);

        if ($response->getReturnCode() == 'SUCCESS') {
            // recording deleted
        } else {
            // something wrong
        }
    }
    
    private function xml2array ( $xmlObject, $out = array () )
    {
        foreach ( (array) $xmlObject as $index => $node )
            $out[$index] = ( is_object ( $node ) ) ? $this->xml2array ( $node ) : $node;
    
        return $out;
    }
}
