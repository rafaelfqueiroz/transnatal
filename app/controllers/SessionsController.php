<?php

class SessionsController extends BaseController {

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('pages.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        $attempt = Auth::attempt([
            'email'     => $input['email'],
            'password'  => $input['password']
        ]);

        if ($attempt)
        {
            return Redirect::to('/index')->with('flash_message', 'Você efetuou login com sucesso!');  
        }
        else
        {
            return Redirect::back()->with('flash_error', 'Dados de login inválidos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/login');
    }

}