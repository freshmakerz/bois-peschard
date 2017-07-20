<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cache;
use Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingSummary;

use Prismic\Api;
use Prismic\Predicates;
use SoapBox\Formatter\Formatter;
use App\Booking;
use App\Message;

class PageController extends Controller
{
    /**
     * Construct
     */
    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'), env('PRISMIC_TOKEN'));
    }
    
    /**
     * Show home
     */
    public function showHome()
    {
        $testimonials = [];
        $events = $this->api->query(
            Predicates::at('document.type', 'evenements'),
            [ 'orderings' => '[my.evenements.date]' ]
        )->getResults();
        return view('templates.home', compact('testimonials', 'events'));
    }
    
    /**
     * Gites index
     */
    public function gitesIndex()
    {
        $gites = $this->api->query(
            Predicates::at('document.type', 'gites'),
            [ 'lang' => app()->getLocale() ]
        )->getResults();
        return view('templates.gites-index', compact('gites'));
    }
    
    /**
     * Gite show
     */
    public function gitesShow($slug) {
        $gite = $this->api->getByUID('gites', $slug);
        return view('templates.gite-show', compact('gite'));
    }
    
    /**
     * Region show
     */
    public function regionShow()
    {
        $region = $this->api->query(
            Predicates::at('document.type', 'region'),
            [ 'lang' => app()->getLocale() ]
        )->getResults()[0];
        return view('templates.region', compact('region'));    
    }
    
    /**
     * Loisirs show
     */
    public function loisirsShow()
    {
        $loisirs = $this->api->query(
            Predicates::at('document.type', 'loisirs'),
            [ 'lang' => app()->getLocale() ]
        )->getResults()[0];
        return view('templates.loisirs', compact('loisirs'));    
    }
    
    /**
     * Tarifs show
     */
    public function tarifsShow()
    {
        $tarifs = $this->api->query(
            Predicates::at('document.type', 'tarifs'),
            [ 'lang' => app()->getLocale() ]
        )->getResults()[0];
        $gites = $this->api->query(
            Predicates::at('document.type', 'gites'),
            [ 'lang' => app()->getLocale() ]
        )->getResults();
        return view('templates.tarifs', compact('tarifs', 'gites'));
    }
    
    /**
     * Reservation show
     */
    public function reservationShow(Request $request)
    {
        $gites = $this->api->query(
            Predicates::at('document.type', 'gites'),
            [ 'lang' => app()->getLocale() ]
        )->getResults();
        $countries = Cache::remember('countries', 2440, function () {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://restcountries.eu/rest/v2/all",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ));
            $results = curl_exec($curl);
            curl_close($curl);
            return json_decode($results);
        });
        $selected_gite = $request->has('gite') ? $request->gite : 1;
        return view('templates.reservation', compact('gites', 'countries', 'selected_gite'));
    }
    
    public function reservationDo(Request $request)
    {
        $this->validate($request, [
            'arrival_date' => 'required',
            'departure_date' => 'required',
            'adults' => 'required|min:1',
            'last_name' => 'required|alpha_dash',
            'first_name' => 'required|alpha_dash',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $book = Booking::create($request->except(['nights']));
        Mail::to($request->email)->send(new BookingConfirmation());
        Mail::to('contact@gites-boispeschard.com')->send(new BookingSummary($book));
        return back()->with('reservation_success', true);
    }
    
    public function contactShow()
    {
        return view('templates.contact');
    }
    
    public function eventsShow()
    {
        $events = $this->getEvent();
        return view('templates.events', compact('events'));
    }
    
    public function contactDo(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $message = Message::create($request->all());
        return back()->with('message_success', true);
    }
    
    public function livreOrShow()
    {
        $gites = $this->api->query(
            Predicates::at('document.type', 'gites'),
            [ 'lang' => app()->getLocale() ]
        )->getResults();
        return view('templates.livre-or', compact('gites'));
    }
    
}
