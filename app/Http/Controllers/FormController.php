<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use GuzzleHttp\Client;
//Repositories
use App\Repositories\UserRepository;
use App\Repositories\ProductRepository;
//Mail
// use App\Mail\Contact;
use App\Mail\Subscribe;
use App\Mail\ProductSheet;
use App\Mail\RequestInfo;
use App\Mail\BuyNow;
use App\Mail\Appointment;
use App\Mail\Tradeshow;
use App\Mail\Contact;
use App\Mail\DownloadCatalogue;
use App\Mail\Ebooks;
use App\Mail\Requestreadytoship;
use App\Mail\CampaingRTS;
use App\Mail\Tickets;

class FormController extends Controller
{

    public function subscribe (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);


            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Newsletter');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */


        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('name'),
            'form'            => 'Subscriber',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'cta'             => 'subscribe now',
            'cta_color'       => 'grey',
            'page'            => 'Homepage',
            'page_position'   => 'Footer',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Subscribe($request));
        // Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
        //     $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

        //     $m->to($request->get('email'))->subject('Thank You For Subscribing!');
        // });

        Mail::send('automatic-response.newsletter.index',
            ['name' => $request->get('name')], function($message) use($request)
           {
               $message->from('info@luxxuhome.net');
               $message->to($request->get('email'))->subject('Thank You For Subscribe Us');
       });

        // return redirect()->back()
        // ->with('message', 'Thank You For Subscribing!');
        $name = $request->get('name');
        $topic = 'Newsletter';
        return redirect()->back()
        ->with(['message' => 'Thank You For Subscribe Our Newsletter!','name' => $name, 'topic' => $topic]);


    }

    public function subscribePopup (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Newsletter');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */


        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('name'),
            'form'            => 'Subscriber',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'cta'             => 'subscribe',
            'moreinfo' => 'popup',
            'cta_color'       => 'grey',
            'page'            => 'Homepage',
            'page_position'   => 'Footer',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Subscribe($request));
        // Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
        //     $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

        //     $m->to($request->get('email'))->subject('Thank You For Subscribing!');
        // });

        Mail::send('automatic-response.newsletter.index',
                ['name' => $request->get('name')], function($message) use($request)
               {
                   $message->from('info@luxxuhome.net');
                   $message->to($request->get('email'))->subject('Thank You For Subscribe Us');
           });

        return redirect()->back()
        ->with('message', 'Thank You For Subscribing!');

        $name = $request->get('name');
        $topic = 'Newsletter';

        // return redirect()->back()
        // ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!','name' => $name, 'topic' => $topic, 'data01' => true]);

        // $name = $request->get('name');
        // $topic = 'newsletter';
        // return view('thank-you-pages.thank-you')->with(compact('name','topic'));

    }


    public function productsheet (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state',
            'phone',
            'job' => 'required',
            'company',
            'productname',
            'productslug',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Product Sheet');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'form'            => 'Product Sheet',
            'lead_type'       => 'Lead Commercial',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'product_name'    => $request->get("product_name"),
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Product',
            'page_position'   => 'Center',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Product sheet', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new ProductSheet($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Download!');
        });
        $download= $request->get('productslug');
        //$pathToFile= storage_path('docs/product-sheet/'.$download.'.pdf');
        // return response()->download($pathToFile);
        // return redirect()->back()
        // ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!', 'data' => $download]);
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = $request->get('productname');

        return redirect()->back()
        ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!','name' => $name, 'topic' => $topic, 'data' => $download]);

    }


    public function buynow (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state',
            'phone',
            'job' => 'required',
            'company',
            'productname',
            'product_name',
            'product_category',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead BuyNow');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country'      => $request->get('country'),
            'state'      => $request->get('state'),
            'phone'      => $request->get('phone'),
            'company'      => $request->get('company'),
            'form'            => 'Buy Now',
            'lead_type'       => 'Lead Commercial',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'product_type'       => $request->get("product_category"),
            'product_name'       => $request->get("product_name"),
            'cta'             => 'Buy Now',
            'cta_color'       => 'grey',
            'page'            => 'Product',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Buy Now', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new BuyNow($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });
        // return redirect()->back()
        // ->with('message', 'Thank You For Contact Us!');
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = $request->get('productname');

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }


    public function requestinfo (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'salutation',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state',
            'phone',
            'job' => 'required',
            'company',
            'moreinfo' => 'required',
            'productname',
            'product_name',
            'product_category',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Get Info');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country'      => $request->get('country'),
            'state'      => $request->get('state'),
            'phone'      => $request->get('phone'),
            'company'      => $request->get('company'),
            'form'            => 'Product info',
            'lead_type'       => 'Lead Commercial',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'product_type'       => $request->get("product_category"),
            'product_name'       => $request->get("product_name"),
            'more_info'       => $request->get("moreinfo"),
            'cta'             => 'Get Info',
            'cta_color'       => 'grey',
            'page'            => 'Product',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', '', '');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new RequestInfo($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });
        // return redirect()->back()
        // ->with('message', 'Thank You For Contact Us!');
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = $request->get('productname');

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }


    public function campaingRTS (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'salutation',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state',
            'phone',
            'job' => 'required',
            'company',
            'moreinfo',
            'productname',
            'product_name',
        ]);

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country'      => $request->get('country'),
            'state'      => $request->get('state'),
            'phone'      => $request->get('phone'),
            'company'      => $request->get('company'),
            'form'            => 'Buy Now',
            'lead_type'       => 'Lead Commercial',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'product_type'       => $request->get("product_category"),
            'product_name'    => $request->get("product_name"),
            'more_info'       => 'Campaign RTS',
            'cta'             => 'Buy Now',
            'cta_color'       => 'grey',
            'page'            => 'Product',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/

        salesForce($request, 'Lead', 'Website', 'Forms', 'Buy Now', '', $request->get("product_name"));


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new CampaingRTS($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });
        // return redirect()->back()
        // ->with('message', 'Thank You For Contact Us!');
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = $request->get('product_name');

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }


    public function appointment (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'job' => 'required',
            'phone' => 'required|numeric',
            'moreinfo' => 'required',
            'eventsname',
        ]);


            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Book Appointment');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('name'),
            'country'      => $request->get('country'),
            'company'      => $request->get('job'),
            'phone'      => $request->get('phone'),
            'form'            => 'Book a Meeting',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'more_info'       => $request->get("moreinfo"),
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Landing Pages',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Book a Meeting', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Appointment($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });


        // return redirect()->back()->with('message', 'Thank You For Contact Us!');
        $name = $request->get('name');
        $topic = 'Apointment';

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }

    public function tradeshow (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'job' => 'required',
            'phone' => 'required|numeric',
            'moreinfo' => 'required',
            'eventsname',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Tradeshow');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('name'),
            'country'      => $request->get('country'),
            'company'      => $request->get('job'),
            'phone'      => $request->get('phone'),
            'form'            => 'Tradeshow Price List',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'more_info'       => $request->get("moreinfo"),
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Landing Pages',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Tradeshow Price List', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Appointment($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });


        // return redirect()->back()->with('message', 'Thank You For Contact Us!');
        $name = $request->get('name');
        $topic = 'Tradeshow';

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }



    public function tickets (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'job' => 'required',
            'eventsname',
        ]);

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('first-name'),
            'country'      => $request->get('country'),
            'company'      => $request->get('job'),
            'phone'      => $request->get('phone'),
            'form'            => 'Book a Meeting',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'more_info'       => $request->get("moreinfo"),
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Landing Pages',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Book a Meeting', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Tickets($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });


        // return redirect()->back()->with('message', 'Thank You For Contact Us!');
        $name = $request->get('first-name').' '.$request->get('last-name');
        $topic = 'Book a Meeting';

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }


    public function contact (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'contactby',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state',
            'phone',
            'company',
            'moreinfo',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Contact');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */


        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country'      => $request->get('country'),
            'state'      => $request->get('state'),
            'phone'      => $request->get('phone'),
            'company'      => $request->get('company'),
            // 'product_name'      => $request->get('product_name'),
            // 'product_category'      => $request->get('product_category'),
            'form'            => 'Contact',
            'lead_type'       => 'Lead',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'more_info'       => $request->get("moreinfo"),
            'cta'             => 'Submit',
            'cta_color'       => 'grey',
            'page'            => 'Contact',
            'page_position'   => 'Top',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Contact', '', '');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Contact($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });
        // return redirect()->back()
        // ->with('message', 'Thank You For Contact Us!');
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = 'Contact';

        return redirect()->back()
        ->with(['message' => 'Thank You!','name' => $name, 'topic' => $topic]);

    }

    public function downloadcatalogue (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city',
            'company',
            'phone',
            'job' => 'required',
            // 'howdid' => 'required',
            // 'productname',
            // 'productslug',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Catalogue');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'      => $request->get('lastname'),
            'country'         => $request->get('country'),
            'city'         => $request->get('city'),
            'phone'      => $request->get('phone'),
            'company'      => $request->get('company'),
            'industry'      => $request->get('job'),
            'form'            => 'Catalogue',
            'lead_type'       => 'Lead',
            'interested_name'       => 'Brand Catalogue',
            'url_origin'      => $request->get('origin'),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'          => $request->get('referrer'),
            'lead_path'       => $request->get('lead_path'),
            'heard_about'       => $request->get('howdid'), // para forms que exista o campo
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Catalogue',
            'page_position'   => 'Center',
        ];
        $impact->send($jsonContent);
        // $var = $impact->send($jsonContent);
        // echo $var;
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Catalogue', ' ', ' ', ' ', ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new DownloadCatalogue($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Download!');
        });
        //$pathToFile= storage_path('docs/product-sheet/'.$download.'.pdf');
        // return response()->download($pathToFile);
        $name = $request->get('firstname').' '.$request->get('lastname');

        return redirect()->back()
        ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!','name' => $name, 'topic' =>'Catalogue', 'data01' => true]);

    }


    public function ebooks (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone',
            'state',
            'job' => 'required',
            'company',
            'productname',
            'productslug',
        ]);

        // $client = new Client;

        // $response = $client->post('https://webuzz.com.pt/subscribers_get/post_infos.php', [
        //     'verify' => false,
        //     'form_params' =>[
        //         'firstname' => $request->get('firstname'),
        //         'lastname' => $request->get('lastname'),
        //         'country' => $request->get('country'),
        //         'email' => $request->get('email'),
        //         'marca' => strtoupper(str_replace('.', ' ', env('BRAND_NAME'))),
        //         'tipo'=> 'Ebook',
        //         'interested_name' => $request->get('productname'),
        //         'tipo_request' => 'Lead',
        //         'origin' => $request->get('origin'),
        //         'url' => $request->get('referrer'),
        //         // 'peca' => $request->get('productslug'),
        //         // 'collection' => $request->get('productslug'),
        //         // 'collection' => $product->sub_category->name,
        //         'token_webuzz' => 'KhWj50ymwETzq5lK6I9ZbTEWv9r5TdSR'
        //     ]
        // ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Ebook');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'           => $request->get('email'),
            'first_name'      => $request->get('firstname'),
            'last_name'       => $request->get('lastname'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'form'            => 'Ebook',
            'lead_type'       => 'Lead',
            'interested_name' => $request->get('productname'),
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            // 'product_name'    => $request->get("product_name"),
            'cta'             => 'Free Download',
            'cta_color'       => 'black',
            'page'            => 'Ebook',
            'page_position'   => 'Center',
        ];
        $impact->send($jsonContent);
        // $var = $impact->send($jsonContent);
        // dd($var);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Ebooks', $request->get('productname'), ' ');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new Ebooks($request));
        // Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
        //     $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

        //     $m->to($request->get('email'))->subject('Thank You For Download!');
        // });
        $download= $request->get('productslug');

        Mail::send('automatic-response.ebook.index',
                ['name' => $request->get('firstname').' '.$request->get('lastname')], function($message) use($request)
               {
                   $message->from('info@luxxuhome.net');
                   $message->to($request->get('email'))->subject('Thank You For Download Our Ebook');
                   // $message->attach('docs/ebooks/'.$request->get('productslug').'.pdf');
           });




        //$pathToFile= storage_path('docs/product-sheet/'.$download.'.pdf');
        // return response()->download($pathToFile);
        // return redirect()->back()
        // ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!', 'data' => $download]);
        $name = $request->get('firstname').' '.$request->get('lastname');
        $topic = $request->get('productname');

        return redirect()->back()
        ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!','name' => $name, 'topic' => $topic, 'data' => $download,'teste_ebook' => '']);

    }

   public function requestNowstock (Request $request)

    {
        $spam = spamCheck($request->get('inputInterested'));

        if(!(isset($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))):
          $spam=true;
        endif;

        $spamwords = "/(levitra|viagra|tramadol|lunesta|cialis)/i";
        if (preg_match($spamwords, implode($_POST))):
          $spam=true;
        endif;

        if($spam):
          header("Location: https://www.google.pt");
          die();
        endif;

        $this->validate($request, [
            'firstname' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'productname',
            'url',
        ]);

            /* Facebook Pixel Code */
                echo "<script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', '2492387554123518');
                  fbq('track', 'PageView');
                  fbq('track', 'Lead LXH');
                  fbq('track', 'Lead Stock List');
                </script>
                <noscript><img height='1' width='1' style='display:none'
                  src='https://www.facebook.com/tr?id=2492387554123518&ev=PageView&noscript=1'
                /></noscript>";
            /* End Facebook Pixel Code */

        /********/
        /*   TRIAL
        /*********/
        $impact = new \ImpactData();
        $jsonContent = [
            'email'         => $request->get('email'),
            'first_name'      => $request->get('name'),
            'country'      => $request->get('country'),
            'form'            => 'StockList',
            'lead_type'       => 'Lead Commercial',
            'url_origin'      => $request->get("origin"),
            'url_converted'   => $_SERVER['HTTP_REFERER'],
            'referrer'        => $request->get("referrer"),
            'lead_path'       => $request->get("lead_path"),
            'product_name'       => $request->get("productname"),
            'cta'             => 'Send Request',
            'cta_color'       => 'grey',
            'page'            => 'Stock',
            'page_position'   => 'Bottom',
        ];
        $impact->send($jsonContent);
        /*********/
        /*   TRIAL END
        /*********/


        salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', '', '');


        Mail::to(env('BRAND_EMAIL_GERAL'))->send(new RequestInfo($request));
        Mail::send('automatic-response.contact', ['request' => $request], function ($m) use ($request) {
            $m->from(env('BRAND_EMAIL_GERAL'), 'LUXXU HOME');

            $m->to($request->get('email'))->subject('Thank You For Contact Us!');
        });
        // return redirect()->back()
        // ->with('message', 'Thank You For Contact Us!');
        $name = $request->get('name');
        $topic = 'Stock List';

        return redirect()->back()
        ->with(['message' => 'Thank You! Your Download Will Start in a Few Seconds!','name' => $name, 'topic' => $topic, 'data01' => true]);

    }


     // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
