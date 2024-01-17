<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
use App\Models\ourGoal;
use App\models\aboutLitsey;
use App\models\LitseyNew;
use App\models\activeteacher;
use App\Models\director;
use App\Models\plate;
use App\Models\Structure;
use App\Models\Gallery;
use App\Models\category;



class MainController extends Controller
{
    public function index()
    {
        $directors = director::all();
        $aboutlitseys = aboutLitsey::all();
        $ourGoals = ourGoal::all();
        $news = LitseyNew::limit(2)->latest()->get();
        return view('index',compact('ourGoals','aboutlitseys','news','directors'));

    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        $aboutlitseys = aboutLitsey::all();
        $plates = plate::all();
        return view('about',compact('aboutlitseys','plates'));
    }
    public function gallerylitsey()
    {
        $gallerys = Gallery::all();
        $categories = category::all();
        return view('gallerylitsey',compact('gallerys','categories'));
    }
    public function newslitsey()
    {
        $news = LitseyNew::all();
        return view('newslitsey',compact('news') );
    }
    public function pupils()
    {
        $pupils = activeteacher::where('select','O\'quvchi')->get();
        return view('pupils',compact('pupils'));
    }
    public function onlinebook()   
    {
        return view('onlinebook');
    }
    public function management()
    {
        $ourGoals = ourGoal::all();
        $pupils = activeteacher::where('select','O\'qtuvchi')->get();
        return view('management',compact('pupils','ourGoals'));
    }
    public function litseytuzilma()
    {
        $structures = Structure::all();
        return view('litseytuzilma',compact('structures'));
    }
    public function technicalstructure()
    {
        return view('technicalstructure');
    }
    public function batafsil($id)
    {
        $litseyNews = litseyNew::where('id',$id)->get();
        return view('batafsil',compact('litseyNews',));
    }

    public function goal($id)
    {

        $directorBatafsil = director::where('id',$id)->get();
        return view('goal',compact('directorBatafsil'));
    }

    

    public function tgContact()
       {
        $token = "6877367861:AAH8Iva1YXBjyWbFeDFI8v_DQeksUIA0isU";
        $chat_id = "6515397376";
        $text = "Ismi: $_POST[firstname];\n\nFamilyasi: $_POST[lastname];\n\nRaqam: $_POST[phone];\n\nIzohlar: $_POST[textarea];";
        $sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=" . urlencode($text));
        
        return redirect()->back()->with('success', 'your message,here');  
     }
}
