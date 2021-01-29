<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Model\Logo;
use App\Models\Model\Slider;
use App\Models\Model\Contact;
use App\Models\Model\Mission;
use App\Models\Model\Vission;
use App\Models\Model\NewsEvent;
use App\Models\Model\Service;
use App\Models\Model\About;
use App\Models\Model\Communicate;
use Mail;

class FrontenController extends Controller
{
   public function index(){
   	$data['logo'] = Logo::first(); 
   	$data['sliders'] = Slider::all();
   	$data['contact'] = Contact::first();
   	$data['mission'] = Mission::first();
   	$data['vission'] = Vission::first(); 
   	$data['news_events'] = NewsEvent::orderBy('id','desc')->get(); 
      $data['services'] = Service::all();
   return view('forntend.layouts.home',$data);
   }
   public function aboutUs(){
       $data['logo'] = Logo::first();
       $data['contact'] = Contact::first(); 
       $data['about'] = About::first();
   	return view('forntend.single_pages.about-us',$data);
   }
   public function contactUs(){
         $data['logo'] = Logo::first();
         $data['contact'] = Contact::first(); 
   	return view('forntend.single_pages.contact-us',$data);
   }
    public function newsDetails($id){
        $data['logo'] = Logo::first(); 
        $data['news'] = NewsEvent::find($id);
        $data['contact'] = Contact::first();
      return view('forntend.single_pages.news-event-details',$data);
   }
   public function mission(){
       $data['logo'] = Logo::first();
       $data['contact'] = Contact::first(); 
      $data['mission'] = Mission::first();
      return view('forntend.single_pages.mission',$data);
  }
  public function vision(){
       $data['logo'] = Logo::first();
       $data['contact'] = Contact::first(); 
       $data['vission'] = Vission::first(); 
      return view('forntend.single_pages.vision',$data);
  }
  public function newsEvents(){
       $data['logo'] = Logo::first();
       $data['contact'] = Contact::first();  
       $data['news_events'] = NewsEvent::orderBy('id','desc')->get();
      return view('forntend.single_pages.news-events',$data);
  }
  public function store(Request $request){
   // dd($request->all());
    $contact = new Communicate();
    $contact->name      = $request->name;
    $contact->email     = $request->email;
    $contact->mobile_no = $request->mobile_no;
    $contact->address   = $request->address;
    $contact->msg       = $request->msg;
    $contact->save();

    $data = array(
      'name'      => $request->name,
      'email'     => $request->email,
      'mobile_no' => $request->mobile_no,
      'address'   => $request->address,
      'msg'       => $request->msg
       );
     Mail::send('forntend.emails.contact',$data, function($message) use($data){
          $message->from('tarikulmd519@gmail.com','popularsoft Bd');
          $message->to($data['email']);
          $message->subject('Thanks for contact us');
     });
    return redirect()->back()->with('success','Your massage sent successfully');
  }
}