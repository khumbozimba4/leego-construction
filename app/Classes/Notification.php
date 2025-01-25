<?php

namespace App\Classes;

use App\Models\Equipment;
use App\Models\Message;
use App\Models\Project;
use App\Models\Quotation;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Notification
{
    protected static function getCurrentMonth()
    {
        return Carbon::now()->month;
    }

    protected static function getCurrentYear()
    {
        return Carbon::now()->year;
    }
    public  static function PrepareDashboard()
    {
        Log::info("tester");
        $data = [];
        $data['messageCount'] = Message::count();
        $data['completedProjects'] = Project::where("status", "completed")->count();
        $data['totalProjects'] = Project::count();
        $data['totalQuotation'] = Quotation::count();
        $data['totalTeams'] = Team::count();
        $data['totalUser'] = User::count();
        $data['totalEquipments'] = Equipment::count();
        return $data;
    }

    public static function composeEmail($name, $email, $password)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);

        try {

            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'mail.mra.mw';
            $mail->SMTPAuth = false;
            $mail->Username = 'mra-eservices@mra.mw';
            $mail->Password = 'NewPassword123';
            $mail->SMTPSecure = null;
            $mail->Port = 25;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->setFrom('noreply@mra.mw', 'norepy@mra.mw');
            $mail->addAddress($email);
            $mail->isHTML(false);
            $mail->Subject = "MRA website authentication credentials";
            $mail->Body   = "Hello " . $name . ", Your email is: " . $email . " and your passowrd is: " . $password . " Use these credentials to log into your account.";
            if (!$mail->send()) {
                return "Email not sent." . $mail->ErrorInfo;
            } else {
                return "Email has been sent.";
            }
        } catch (\Exception $e) {
            return 'Message could not be sent.' . $e->getMessage();
        }
    }
}
