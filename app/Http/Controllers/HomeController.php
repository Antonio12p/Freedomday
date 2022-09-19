<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Logbook;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $log=new Logbook();
        $log->activity_done($description = 'Accedió a la página principal', $table_id = 0, $menu_id = 5, $user_id = Auth::id(), $kind_acction = 1);
        //Logbook::activity_done($description = 'Accedió a la página principal', $table_id = 0, $menu_id = 5, $user_id = Auth::id(), $kind_acction = 1);
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function home()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
    public function school_secretary()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
    public function about_us()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
    public function school_services()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
    public function school_galery()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
    public function school_institution()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('home_page.index')->with($variables);
    }
}
