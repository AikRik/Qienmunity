<html>
    <body>
        <h1>Nieuwe gebruiker aanmaken</h1><br>

@extends('layouts.app')

@section('content')
        <h1>Nieuw profiel maken</h1><br>
        
        <h2>Maak nieuw profiel aan</h2><!--Formulier om en nieuw profiel aan te kunnen maken-->
        <form action="maakprofiel" action ="post" enctype="multipart/form-data">
            Rol: <select name="werkstatus">
                <option>Trainee</option>
                <option>Admin</option>
                <option>Docent</option>
            </select><br/>
            Naam: <input type ="text" name="naam" placeholder="Naam"><br/>
            E-mailadres: <input type ="text" name="emailadres" placeholder="example@qien.nl"><br/>
            Tijdelijk wachtwoord: <input type ="text" name="tempww" placeholder="Nieuw wachtwoord"><br/>
            <input type="submit" value="Maak nieuw profiel aan >">

        </form>
@endsection