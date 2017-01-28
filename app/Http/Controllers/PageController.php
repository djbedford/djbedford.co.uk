<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;
use Mail;

class PageController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();

        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
        );

        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->from($data['email']);
            $m->to('beds2005@gmail.com');
            $m->subject($data['subject']);
        });

        Session::flash('success', 'Your email was sent!');

        return redirect('/');
    }
}
