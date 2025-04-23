@foreach($personagem as $heroi)
    <h2>Nome do personagem: {{$heroi['nome']}}</h2>
    <h2>Poder: {{$heroi['poder']}}</h2>
@endforeach 
