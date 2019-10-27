@extends('layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="mx-auto p-4 col-md-6">
                    <h2 class="mb-4">I feel that I never was</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot. <br> <br>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <p class="mb-0 lead"> <a href="#">info@hello.com</a> </p>
                </div>
                
                <div class="mx-auto p-4 col-md-6">
                    <form method="POST" action="{{ route('announcements.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group"> 
                            <label for="">Título</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="form1" placeholder="text" required value="{{ $announcement->title }}">

                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório e deve conter entre 3 e 100 caracteres.
                                </div>
                            @endif
                        </div>

                        <div class="form-group"> 
                            <label for="">Comentários</label>
                            <textarea class="form-control @error('comments') is-invalid @enderror" id="form2" rows="3" placeholder="Your comments" required>{{ $announcement->comments }}</textarea> 
                            
                            @if ($errors->has('comments'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório e deve conter no mínimo 2 caracteres.
                                </div>
                            @endif
                        </div>

                        <div class="form-group"> 
                            <label for="">Data inicial</label>
                            <input type="text" class="form-control @error('start_date') is-invalid @enderror" id="form3" placeholder="dd/mm/yyyy" required value="{{ $announcement->start_date }}">
                            
                            @if ($errors->has('start_date'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório.
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group"> 
                            <label for="">Data final</label>
                            <input type="text" class="form-control @error('expiration_date') is-invalid @enderror" id="form4" placeholder="dd/mm/yyyy" required value="{{ $announcement->expiration_date }}">

                            @if ($errors->has('expiration_date'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório.
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
