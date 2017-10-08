<?php
namespace App\Http\Controllers;

use App\Vend;
use Illuminate\Http\Request;

class VendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $vends = Vend::select('id','name','itemID','typus',
                \DB::raw('AVG(price) avgAmount,
                    COUNT(itemID) totalSeller,
                    itemID imgLink'))
                ->groupBy('itemID', 'name')
                ->orderBy('totalSeller','DESC')
                ->paginate(10);

        foreach ($vends as $vend) {
            if ($vend->totalSeller > 0)
                $vend->totalSeller .= ' SELLER';
            if ($vend->typus == 'Card')
                $vend->imgLink = 'card';
            else
                $vend->imgLink = $vend->itemID;
        }

        $itemID = $vends->pluck('itemID');
        $vendors = Vend::select('itemID','shopOwnerID','name','shopName','amount','price','posx','posy','map','timstamp')
                ->whereIN('itemID', $itemID)->get();

        if ($request->ajax()) {
            return view('ajax.content', ['vends' => $vends, 'vendors' => $vendors])->render();  
        }

        return view('index', ['vends' => $vends, 'vendors' => $vendors]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search_string = join('%', explode(" ", $request->q));

        $result = Vend::select('id','name','itemID','typus','custom','slots','card1ID','card2ID','card3ID','card4ID',
                \DB::raw('AVG(price) avgAmount,
                    COUNT(itemID) totalSeller,
                    itemID imgLink'))
                ->groupBy('itemID', 'name')
                ->where('name', 'like', '%'.$search_string.'%')
                ->paginate(10);

        foreach ($result as $vend) {
            if ($vend->totalSeller > 0)
                $vend->totalSeller .= ' SELLER';
            if ($vend->typus == 'Card')
                $vend->imgLink = 'card';
            else
                $vend->imgLink = $vend->itemID;
        }
        
        $itemID = $result->pluck('itemID');
        $vendors = Vend::select('itemID','shopOwnerID','name','shopName','amount','price','posx','posy','map','timstamp','custom','slots','card1ID','card2ID','card3ID','card4ID')
                ->whereIN('itemID', $itemID)
                ->get();

        $result->appends([
            'q' => $request->q,
            'page' => $request->page]
        )->render();

        if ($request->ajax()) {
            return view('ajax.content', ['vends' => $result,
                                        'vendors' => $vendors, 
                                        'search_results' => true]);
        }
        //dd($result);
        return view('index', ['vends' => $result,
                            'vendors' => $vendors,
                            'search_results' => true]);
    }

    public function showVendor(Vend $vend)
    {        
        $vendor = Vend::where('shopOwnerID',$vend->shopOwnerID)->get();

        foreach ($vendor as $vend) {
            if ($vend->typus == 'Card')
                $vend->imgLink = 'card';
            else
                $vend->imgLink = $vend->itemID;
        }

        return view('index', ['vendorProfile' => $vendor,
                            'vendorData' => $vend]);
    }
}