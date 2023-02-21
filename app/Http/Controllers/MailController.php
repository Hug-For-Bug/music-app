use App\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

public function sendWelcomeEmail($userEmail)
{
    $email = new WelcomeEmail();
    Mail::to($userEmail)->send($email);
}
