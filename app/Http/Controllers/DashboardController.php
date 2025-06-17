use App\Models\User;
use App\Models\SentEmail;

public function index()
{
return view('dashboard', [
'users' => User::all(),
'emails' => SentEmail::latest()->get()
]);
}