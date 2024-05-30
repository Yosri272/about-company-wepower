namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio-details', compact('portfolio'));
    }
}
