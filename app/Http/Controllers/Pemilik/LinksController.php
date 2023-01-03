<?php
namespace App\Http\Controllers\Pemilik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Products;
use App\Models\NewsLetter;
class LinksController extends Controller
{

    public function index()
    {
        return view('dashboards.pemilik.index');
    }
    public function products()
    {
        $Products=Products::where('status','!=','2')->paginate(5);
        return view('dashboards.pemilik.Products.index')->with('Products', $Products);
    }

    public function showorders()
    {

        return view('dashboards.pemilik.orders');
    }
    public function     showTransactions()
    {
        return view('dashboards.pemilik.Transactions');
    }
}
