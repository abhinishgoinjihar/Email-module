namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentEmail extends Model
{
protected $fillable = ['user_id', 'email', 'subject', 'content'];
}