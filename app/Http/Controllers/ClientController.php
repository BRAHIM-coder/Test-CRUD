<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function liste_client()
    {
        $clients = Client::all();
        return view('client.liste', compact('clients'));
    }
    public function ajouter_client()
    {
        return view('client.ajouter');
    }
    public function ajouter_client_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',


        ]);
        $client = new Client();
        $client->nom=$request->nom;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->status=$request->status;
        $client->save();
        return redirect('/ajouter')->with('status','Le client a bien été ajouter avec succés.' );
    }
    public function update_client($nom)
    {  
        
       $clients = Client::find($nom);
        return view('client.update', compact('clients'));
        //return view('client.update', ['clients' => $clients]);
    }
    public function update_client_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
   ]);
   $client = Client::find($request->nom);
   if ($client) {
        $client->nom=$request->nom;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->status=$request->status;
        $client->update();
        return redirect('/client')->with('status','Le client a bien été modifier avec succés.' );
   }else {
    // Handle the case when client is not found
    // Redirect or show an error message
}

    }
    public function delete_client($nom){

        $client=Client::find($nom);
        if ($client) {
        $client->delete();
        return redirect('/client')->with('status','Le client a bien été supprimer avec succés.' );
      }
    }
    
}
