@extends('layouts.app')

@section('content')
        <h1>Profiel</h1>
        
        <!--Laat hier het profiel zien-->

        <h2>Profiel aanpassen</h2><!--Formulier om het profiel aan te kunnen passen-->
        <form method ="post" action ="">

            Foto: <input method="post" action="" type="file" name="profielfoto"></br>
            Naam: <input type ="text" name="naam" placeholder="Naam"><br/>
            E-mailadres: <input type ="text" name="emailadres" placeholder="example@qien.nl"><br/>
            Geboortedatum: <input type ="date" name="dob"><br/>
            Werkstatus: <select name="werkstatus">
                <option>Trainee bij Qien</option>
                <option>Werkzaam via Qien bij...</option>
                <option>Werkzaam bijten Qien bij...</option>
                <input type="text" name="werkgever" placeholder="Werkgever">
            </select><br/>
            Bio: <input type="text" name="profielfoto" rows="10" cols="50" placeholder="Vertel wat over jezelf..."><br/>
            <input type="submit" value="Wijzigingen doorgeven >">

        </form>

    </body>
</html>
@endsection


