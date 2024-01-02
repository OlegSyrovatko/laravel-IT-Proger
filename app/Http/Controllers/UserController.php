<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Contact;

class UserController extends Controller
{
    public function check(UserRequest $request)
    // public function check(Request $request)

    {
        $contact = new Contact();
        $contact->username = $request->input('username');
        $contact->email = $request->input('eml');
        $contact->pwd = $request->input('pwd');
        $contact->ta = $request->input('ta');
        $contact->save();
        return redirect('/')->with('success', 'Повідомлення було додано');
        /*
        $validation = $request->validate([
            'username' => 'required|min:2|max:50',
            'email' => 'email|required|min:2|max:50'
        ]);
        */

        /*
        $username = trim($request->input('username'));
        $eml = trim($request->input('eml'));
        $ta = trim($request->input('ta'));
        $request->session()->put('username', $username);
        $request->session()->put('eml', $eml);
        $request->session()->put('ta', $ta);

        if (strlen($username) < 1) {
            return redirect('/')->with('err_username', 'Enter username');
        }
        else if(!$eml){
            return redirect('/')->with('err_eml', 'Enter eml');
        }
        else if(!$ta){
            return redirect('/')->with('err_ta', 'Enter ta');
        }
        else{
            return redirect('/')
                ->with('success', 'success')
                ->with('username', '')
                ->with('eml', '')
                ->with('ta', '');
        }
        */

    }

    public function allData(){
        $contact = new Contact;
        // dd($contact -> All());

        // dd(Contact::all());
        return view('messages', ['data' => Contact::all()]);
        // return view('messages', ['data' => [$contact->inRandomOrder()->first()]]);
        // return view('messages', ['data' => $contact->inRandomOrder()->get()]);
        // return view('messages', ['data' => $contact->orderBy('id', 'desc')->skip(1)->take(2)->get()]);
        // return view('messages', ['data' => $contact->where('username', '<>', 'sirov')->get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }
    public function updateMessageSubmit($id, UserRequest $request){

        $contact = Contact::find($id);
        $contact->username = $request->input('username');
        $contact->email = $request->input('eml');
        $contact->pwd = $request->input('pwd');
        $contact->ta = $request->input('ta');
        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Повідомлення було оновлено');
    }
    public function deleteMessage($id){
        $contact = Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Повідомлення було видалено');
    }

}
