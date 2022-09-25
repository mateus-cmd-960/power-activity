@extends('layouts.main')
@section('title','Criar ')


@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Carrega sua imagem:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do Seu evento">
        </div>
        <div class="form-group">
            <label for="date">Evento:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>

        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>

        <div class="form-group">
            <label for="title">O evento e privado?</label>
            <select class="form-control" name="private" id="private">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>
           
        </div>
        <div class="form-group">
            <label for="title">descricao:</label>
            <textarea name="description" id="description"  class="form-control" > </textarea>

           
        </div>

        <div class="form-group">
            <label for="title">Adicione items de infrastruturas</label>
        </div>
        <div class="form-group">
            <input type="checkbox" name=items[] value="Cadeiras"> Cadeiras
        </div>
        <div class="form-group">
            <input type="checkbox" name=items[] value="Palco"> Palco
        </div>
        <div class="form-group">
            <input type="checkbox" name=items[] value="Cerveja gratis"> Cerveja gratis
        </div>
        <div class="form-group">
            <input type="checkbox" name=items[] value="Open food"> Open food
        </div>
        <div class="form-group">
            <input type="checkbox" name=items[] value="Brindes"> Brindes
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">


    </form>
</div>
@endsection